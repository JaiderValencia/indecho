<?php

namespace App\Http\Controllers;

use App\Http\Utils\FilesUtils;
use App\Models\Document;
use App\Models\Document_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class documentController extends Controller
{
    public function getByTitle(Request $req)
    {
        $title = $req->query('title');

        try {
            $document = Document::with('category')->where('title', $title)->first();
            return response($document);
        } catch (\Throwable $th) {
            return response('algo pasó')->setStatusCode(500);
        }
    }

    public function getById(string $id)
    {
        try {
            $document = Document::with('category')->where('id', $id)->first();
            return response($document);
        } catch (\Throwable $th) {
            return response('algo pasó')->setStatusCode(500);
        }
    }

    public function createDocument(Request $req)
    {
        $errorMessages = [
            'title.required' => 'Debes de poner el título para el archivo',
            'title.unique' => 'Ya existe un archivo con ese título',
            'document_category_id.required' => 'Debes de ponerle una categoría al documento',
            'document_category_id.exists' => 'La categoría seleccionada no existe',
            'document.required' => 'Debes de subir un archivo',
            'document.file' => 'Debe ser un archivo valido',
            'document.mimes' => 'El archivo debe ser un PDF'
        ];

        $rules = [
            'title' => 'required|unique:documents',
            'document_category_id' => 'required|exists:document_categories,id',
            'document' => 'required|file|mimes:pdf'
        ];

        $validator = Validator::make(
            $req->all(),
            $rules,
            $errorMessages
        );

        if ($validator->fails()) {
            //devolver vista con los errores o simplemente dejarlo como API
            $response = [
                'meta' => [
                    'statusCode' => 422,
                    'message' => 'Hay errores en el formulario'
                ],
                'errors' => $validator->errors()
            ];

            return response()->json($response, 422);
        }

        try {
            $category = Document_category::where('id', $req->document_category_id)->first();
            $path = 'documents/' . str_replace(' ', '_', $category->name);

            $fileSaved = FilesUtils::saveFile($path, $req->file('document'));

            Document::create([
                'title' => $req->title,
                'document_category_id' => $req->document_category_id,
                'path' => $fileSaved
            ]);

            return response($fileSaved)->setStatusCode(200);
        } catch (\Throwable $th) {
            return response($th)->setStatusCode(500);
        }
    }

    public function deleteDocument(string $id)
    {
        try {
            $documentPath = Document::where('id', $id)->first('path')->path;

            FilesUtils::deleteFile($documentPath);

            Document::where('id', '=', $id)->delete();

            return response('eliminado');
        } catch (\Throwable $th) {
            return response('algo pasó')->setStatusCode(500);
        }
    }

    public function updateFile(Request $req, string $id)
    {
        $errorMessages = [
            'document.filled' => 'Debes de subir un archivo',
            'document.file' => 'Debe ser un archivo valido',
            'document.mimes' => 'El archivo debe ser un PDF',
            'title.required' => 'Debes de poner el título para el archivo',
            'title.unique' => 'Ya existe un archivo con ese título',
            'document_category_id.required' => 'Debes de ponerle una categoría al documento',
            'document_category_id.exists' => 'La categoría seleccionada no existe',
        ];

        $rules = [
            'document' => 'filled|file|mimes:pdf',
            'title' => [
                'required',
                Rule::unique('documents', 'title')->ignore($id)
            ],
            'document_category_id' => 'required|exists:document_categories,id',
        ];

        $validator = Validator::make(
            $req->all(),
            $rules,
            $errorMessages
        );

        if ($validator->fails()) {
            //devolver vista con los errores o simplemente dejarlo como API
            $response = [
                'meta' => [
                    'statusCode' => 422,
                    'message' => 'Hay errores en el formulario'
                ],
                'errors' => $validator->errors()
            ];

            return response()->json($response, 422);
        }

        try {
            $attributes = [
                'title' => $req->title,
                'document_category_id' => $req->document_category_id
            ];

            if ($req->file('document')) {
                $documentPath = Document::where('id', $id)->first('path')->path;

                FilesUtils::deleteFile($documentPath);

                $category = Document_category::where('id', $req->document_category_id)->first();
                $documentPath = 'documents/' . str_replace(' ', '_', $category->name);

                $fileSaved = FilesUtils::saveFile($documentPath, $req->file('document'));

                $attributes['path'] = $fileSaved;
            }


            Document::where('id', $id)->update($attributes);

            return response('cambiado');
        } catch (\Throwable $th) {
            return response('aglo pasó')->setStatusCode(500);
        }
    }
}

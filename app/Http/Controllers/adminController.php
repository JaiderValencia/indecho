<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Document_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;
use Storage;

class adminController extends Controller
{
    //    
    public function uploadFile(Request $req)
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
            $name = Uuid::uuid4() . '.' . explode('/', $req->file('document')->getMimeType())[1];

            $fileSaved = $req->file('document');

            $fileSaved = 'storage/' . (Storage::disk('public')->putFileAs($path, $req->file('document'), $name));

            Document::create([
                'title' => $req->title,
                'document_category_id' => $req->document_category_id,
                'path' => $fileSaved
            ]);

            return response($fileSaved)->setStatusCode(200);
        } catch (\Throwable $th) {
            return response('algo pasó')->setStatusCode(500);
        }
    }

    public function deleteFile(Request $req, string $id)
    {
        try {
            $documentPath = Document::where('id', $id)->first('path')->path;

            $documentPath = str_replace('storage/', '', $documentPath);

            if (Storage::disk('public')->exists($documentPath)) Storage::disk('public')->delete($documentPath);
            
            Document::where('id', '=', $id)->delete();

            return response('eliminado');
        } catch (\Throwable $th) {
            return response('algo pasó')->setStatusCode(500);
        }
    }
}

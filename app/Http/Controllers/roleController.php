<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class roleController extends Controller
{
    public function getAll(Request $req)
    {
        $limit = $req->query('limit') ?? 10;
        $page = $req->query('page') ?? 1;
        $offset = $limit * ($page - 1);

        try {
            $totalInDB = Role::count();
            $limitPage = ceil($totalInDB / $limit);

            $roles = Role::all()->take($limit)->skip($offset);

            $next = ($page >= 1 && $roles->count() == $limit && $page < $limitPage) ? route('roles.getAll') . "?page=" . ($page + 1) . "&limit=$limit" : null;
            $prev = ($page > 1) ? route('roles.getAll') . "?page=" . ($page - 1) . "&limit=$limit" : null;


            return response()->json([
                $next,
                $prev,
                $totalInDB,
                $page,
                $limit,
                "data" => $roles
            ]);
        } catch (\Throwable $th) {
            return response('algo pasó')->setStatusCode(500);
        }
    }

    public function getByField(string $data)
    {
        try {
            $roles = Role::where('Role_nombre', 'like', "%$data$");

            if (!$roles->count()) {
                return response('No se encontró')->setStatusCode(404);
            }

            return response($roles);
        } catch (\Throwable $th) {
            return response('algo pasó')->setStatusCode(500);
        }
    }

    public function getById(string $id)
    {
        $role = Role::with('role')->where('id', $id)->first();

        if (!$role) {
            return response('no se encontró')->setStatusCode(404);
        }

        return response($role);
    }

    public function create(Request $req)
    {
        $errorMessages = [
            'nombre.required' => 'Debes poner el nombre del role',
            'nombre.unique' => 'Ya existe un role con ese nombre',
            'nombre.max' => 'Debes poner un máximo de 20 caracteres'
        ];

        $rules = [
            'nombre' => 'required|unique:roles,id|max:20'
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
            Role::create([
                'Role_nombre' => $req->nombre
            ]);

            return response('creado');
        } catch (\Throwable $th) {
            return response('algo pasó')->setStatusCode(500);
        }
    }

    public function update(Request $req, string $id)
    {
        $errorMessages = [
            'nombre.required' => 'Debes poner el nombre del role',
            'nombre.unique' => 'Ya existe un role con ese nombre',
            'nombre.max' => 'Debes poner un máximo de 20 caracteres'
        ];

        $rules = [
            'nombre' => [
                'required|max:20',
                Rule::unique('roles', 'Role_nombre')->ignore($id)
            ]
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
            Role::where('id', $id)->update([
                'Role_nombre' => $req->nombre
            ]);

            return response('cambiado');
        } catch (\Throwable $th) {
            return response('algo pasó')->setStatusCode(500);
        }
    }

    public function delete(string $id)
    {
        try {
            Role::where('id', $id)->delete();

            return response('eliminado');
        } catch (\Throwable $th) {
            return response('algo pasó')->setStatusCode(500);
        }
    }
}

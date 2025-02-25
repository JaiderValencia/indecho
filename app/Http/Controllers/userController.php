<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Validation\Rule;

class userController extends Controller
{
    public function getAll(Request $req)
    {
        try {
            $limit = $req->query('limit') ?? 10;
            $page = $req->query('page') ?? 1;
            $offset = $limit * ($page - 1);

            $totalInDB = User::count();
            $limitPage = ceil($totalInDB / $limit);

            $users = User::all()->take($limit)->skip($offset);

            $next = ($page >= 1 && $users->count() == $limit && $page < $limitPage) ? route('users.getAll') . "?page=" . ($page + 1) . "&limit=$limit" : null;
            $prev = ($page > 1) ? route('users.getAll') . "?page=" . ($page - 1) . "&limit=$limit" : null;


            return response()->json([
                'next' => $next,
                'prev' => $prev,
                'total' => $totalInDB,
                'page' => $page,
                'limit' => $limit,
                'data' => $users
            ]);
        } catch (\Throwable $th) {
            return response('algo pasó')->setStatusCode(500);
        }
    }

    public function gethByField(string $data)
    {
        try {
            $users = User::where('Usu_NombreUsuario', 'like', "%$data$")
                ->orWhere('Usu_Usuario', 'like', "$data$");

            if (!$users->count()) {
                return response('No se encontró')->setStatusCode(404);
            }

            return response($users);
        } catch (\Throwable $th) {
            return response('algo pasó')->setStatusCode(500);
        }
    }

    public function getById(string $id)
    {
        try {
            $user = User::with('role')->where('id', $id)->first();

            if (!$user) {
                return response('no se encontró')->setStatusCode(404);
            }

            return response($user);
        } catch (\Throwable $th) {
            return response('algo pasó')->setStatusCode(500);
        }
    }

    public function register(Request $req)
    {
        $errorMessages = [
            'nombreUsuario.required' => 'El nombre completo es requerido',
            'nombreUsuario.min' => 'El nombre completo debe ser más largo',
            'nombreUsuario.max' => 'El nombre completo no debe superar 50 letras',
            'nombreUsuario.unique' => 'Ya existe alguien con ese nombre completo',
            'usuario.unique' => 'Ya eiste alguien con ese usuario',
            'usuario.required' => 'El usuario es requerido',
            'usuario.min' => 'Debe de poner un usuario más largo',
            'usuario.max' => 'El usuario no debe superar 50 letras',
            'password.required' => 'La contraseña es requerida',
            'password.min' => 'Debe de poner una contraseña de mínimo 8 caracteres',
            'role_id.required' => 'Debes de poner el role',
            'role_id.exists' => 'Debes de poner un role existente',
            'role_id.numeric' => 'Debes de poner una opción válida'
        ];

        $rules = [
            'nombreUsuario' => 'required|min:4|max:50|unique:users,Usu_NombreUsuario',
            'usuario' => 'required||min:4|max:50|unique:users,Usu_Usuario',
            'password' => 'required|min:8',
            'role_id' => 'required|numeric|exists:roles,id'
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
            User::create([
                'Usu_NombreUsuario' => $req->nombreUsuario,
                'Usu_Usuario' => $req->usuario,
                'Usu_Password' => Hash::make($req->password, [
                    'rounds' => 10
                ]),
                'role_id' => $req->role_id
            ]);

            return response('creado');
        } catch (\Throwable $th) {
            return response('algo pasó')->setStatusCode(500);
        }
    }

    public function delete(string $id)
    {
        try {
            User::where('id', $id)->delete();
        } catch (\Throwable $th) {
            return response('algo pasó')->setStatusCode(500);
        }
    }

    public function update(Request $req, string $id)
    {
        $errorMessages = [
            'nombreUsuario.required' => 'El nombre completo es requerido',
            'nombreUsuario.min' => 'El nombre completo debe ser más largo',
            'nombreUsuario.max' => 'El nombre completo no debe superar 50 letras',
            'nombreUsuario.unique' => 'Ya existe alguien con ese nombre completo',
            'usuario.unique' => 'Ya eiste alguien con ese usuario',
            'usuario.required' => 'El usuario es requerido',
            'usuario.min' => 'Debe de poner un usuario más largo',
            'usuario.max' => 'El usuario no debe superar 50 letras',
            'password.filled' => 'La contraseña es requerida',
            'password.min' => 'Debe de poner una contraseña de mínimo 8 caracteres',
            'role_id.required' => 'Debes de poner el role',
            'role_id.exists' => 'Debes de poner un role existente',
            'role_id.numeric' => 'Debes de poner una opción válida'
        ];

        $rules = [
            'nombreUsuario' => [
                'required|min:4|max:50',
                Rule::unique('users', 'Usu_NombreUsuario')->ignore($id)
            ],
            'usuario' => 'required||min:4|max:50|unique:users,Usu_Usuario',
            'password' => 'filled|min:8',
            'role_id' => 'required|numeric|exists:roles,id'
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
                'Usu_NombreUsuario' => $req->nombreUsuario,
                'Usu_Usuario' => $req->usuario,
                'role_id' => $req->role_id
            ];

            if ($req->password) {
                $attributes['password'] = Hash::make($req->password, [
                    'rounds' => 10
                ]);
            }

            User::where('id', $id)
                ->update(
                    $attributes
                );

            return response('cambiado');
        } catch (\Throwable $th) {
            return response('algo pasó')->setStatusCode(500);
        }
    }
}

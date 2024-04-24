<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create($validatedData);

        return $user;
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'Utilizador não encontrado'], 404);
        }

        $validatedData = $request->validate([
            'name' => 'string',
            'email' => 'email|unique:users,email,' . $id,
            'password' => 'string|min:6',
        ]);

        $user->update($validatedData);

        return $user;
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'Utilizador não encontrado'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'Utilizador excluído com sucesso']);
    }
}

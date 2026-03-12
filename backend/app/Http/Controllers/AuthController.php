<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validáció
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:users,name',
            'password' => 'required|min:1',
        ]);
        if ($validator->fails()) {
            return response()->json(
                $validator->errors(),
                422
            );
        }
        $validated = $validator->validated();

        // új User eltárolása
        $user = User::create([
            'name' => $validated['name'],
            'password' => Hash::make($validated['password']),
        ]);

        // API token létrehozása (regisztráció után rögtön belépünk)
        $token = $user->createToken('api-token')->plainTextToken;

        // válasz küldése
        return response()->json([
            'message' => 'Sikeres regisztráció',
            'user' => $user,
            'token' => $token
        ], 201);
    }



    public function login(Request $request)
    {
        // Validáció
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(
                $validator->errors(),
                422
            );
        }
        $validated = $validator->validated();

        // hitelesítés
        if (!Auth::attempt(['name' => $validated['name'], 'password' => $validated['password']])) {
            return response()->json([
                'message' => 'Hibás felhasználónév vagy jelszó'
            ], 401);
        }

        $user = Auth::user();

        // API token létrehozása
        // létrejön egy API token és eltárolódik a personal_access_tokens táblában
        $token = $user->createToken('api-token')->plainTextToken;

        // válasz küldése
        return response()->json([
            'message' => 'Sikeres login',
            'user' => $user,
            'token' => $token,
        ], 200);
    }



    public function me(Request $request)
    {
        $user = $request->user(); // a middleware már ellenőrizte a tokent
        if (!$user) {
            return response()->json([
                'message' => 'Nem található felhasználó ehhez a tokenhez'
            ], 404);
        }

        return response()->json([
            'user' => $user,
        ]);
    }



    public function logout(Request $request)
    {
        $user = $request->user();
        // ha nincs ilyen user
        if (!$user) {
            return response()->json([
                'message' => 'Nem található felhasználó ehhez a tokenhez'
            ], 404);
        }

        // a user-hez tartozó token törlése
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Sikeres kijelentkezés',
            'user' => $user,
        ]);
    }
}

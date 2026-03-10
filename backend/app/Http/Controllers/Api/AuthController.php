<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate(['name' => 'required|string|max:255', 'password' => 'required|min:2']);

        $user = User::create(['name' => $validated['name'], 'password' => Hash::make($validated['password']),]);

        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json(['user' => $user, 'token' => $token], 201);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required',
        ]);

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Hibás adatok'], 401);
        }

        $user = Auth::user();

        // ha HasApiTokens van a User modellen:
        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token,
        ], 200);
    }

    public function logout(Request $request)
    {
        // az aktuális token törlése (ha tokennel jön)
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Sikeres kijelentkezés']);
    }
}

<?php

namespace App\Http\Controllers\Api; // Pastikan namespace-nya ada folder Api

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Mengambil data profil untuk Flutter
     */
    public function index()
    {
        $user = Auth::user();
        
        return response()->json([
            'success' => true,
            'data' => $user
        ], 200);
    }

    /**
     * Fungsi update data profil khusus API
     */
    public function update(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'telepon' => ['nullable', 'string', 'max:20'],
        ]);

        $user->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Profil berhasil diperbarui',
            'data' => $user
        ], 200);
    }
}
<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserRepository
{
    // Method to find a user by email
    public function findByEmail($email)
    {
        return User::where('email', $email)->first();
    }

    // Login logic inside repository
    public function login($email, $password)
    {
        $user = $this->findByEmail($email);

        if (!$user || !Hash::check($password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $user->createToken('auth-token')->plainTextToken;
    }
}

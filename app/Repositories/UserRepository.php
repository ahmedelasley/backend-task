<?php
namespace App\Repositories;

use App\Models\User;


class UserRepository
{
    public function createUserFirstType(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'bio' => $data['bio'],
        ]);
    }

    public function createUserSecondType(array $data, $certificationFile)
    {
        $file_path = $certificationFile->store('certifications', 'public');

        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'bio' => $data['bio'],
            'certification_title' => $data['certification_title'],
            'certification_file' => $file_path,
        ]);
    }

    public function createUserThirdType(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'bio' => $data['bio'],
            'map_location' => $data['map_location'],
            'date_of_birth' => $data['date_of_birth'],
        ]);
    }
}

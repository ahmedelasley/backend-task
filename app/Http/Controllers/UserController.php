<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function createUserFirstType(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'bio' => 'required|string|max:255',
        ]);

        $user = $this->userRepository->createUserFirstType($data);

        return response()->json(['user' => $user], 201);
    }

    public function createUserSecondType(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'bio' => 'required|string|max:255',
            'certification_title' => 'required|string|max:255',
            'certification_file' => 'required|file|mimes:jpeg,png,pdf|max:2048',
        ]);

        $certificationFile = $request->file('certification_file');

        $user = $this->userRepository->createUserSecondType($data, $certificationFile);

        return response()->json(['user' => $user], 201);
    }
    
    public function createUserThirdType(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'bio' => 'required|string|max:255',
            'map_location' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
        ]);
    
        $user = $this->userRepository->createUserThirdType($data);
    
        return response()->json(['user' => $user], 201);
    }


}

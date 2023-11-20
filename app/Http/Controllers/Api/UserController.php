<?php

namespace App\Http\Controllers\Api;


use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController
{
    /**
     * Return list of all Users
     * @return JsonResponse
     */
    public function index() : JsonResponse{
        $user = User::all();
        return response()->json($user);
    }

    /**
     * Return user information with userId
     * @param User $user
     * @return JsonResponse
     */
    public function show(User $user) : JsonResponse
    {
        return response()->json($user);
    }

    //Function pour insérer en bdd
    public function store(){
        $user = User::with("role")->get()->pluck("email","role.name");
        return response()->json($user);
    }

    //Function pour mettre a jour en bdd
    public function update(){
        $user = User::with("role")->get()->pluck("email","role.name");
        return response()->json($user);
    }

    //Function pour supprimer en bdd
    public function delete(){
        $user = User::with("role")->get()->pluck("email","role.name");
        return response()->json($user);
    }
}
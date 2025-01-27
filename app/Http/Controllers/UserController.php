<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user= User::find(4);
        // return $user->roles;


        $users= User::get();
        foreach($users as $user){
            echo $user->name . "<br>";
            echo $user->email . "<br>";

            foreach($user->roles as $role){
                // echo $role->role_name . "<br>";
                echo $role->role_name . "/";
            }

            echo "<hr>";
        }



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // singel
        // $user = User::find(2);
        // $user->roles()->attach(1);

        // multiple
        // $user = User::find(3);
        // $roles =[1,3];
        // $user->roles()->attach($roles);

        // delete or detach
        // $user = User::find(3);
        // $user->roles()->detach(3);

        // if want to delete all id like 3,or 4 then not pass detach function
        // $user = User::find(1);
        // $user->roles()->detach();

        // sync for edit update delete
        // $user = User::find(1);
        // $roles =[1,3];
        // $user->roles()->sync($roles);

        // sync for delete
        // only rolu 3 stay other deleted 
        $user = User::find(1);
        $roles =[3];
        $user->roles()->sync($roles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function index() {}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function create()
    {
        return view('admin/users.create');
    }

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
    public function store(Request $request)
    {
        $users = new Users;
        $name = explode(" ", request('full_name'));
        $users->first_name = $name[0];
        $users->last_name = $name[1];
        $users->username = request('username');
        $users->password = sha1(request('password'));
        $users->gender = request('gender');

        if ($users->save()) {
            redirect('/');
        }
    }

/**
 * Display the specified resource.
 *
 * @param  \App\Users  $users
 * @return \Illuminate\Http\Response
 */
    public function show(Users $users)
    {
//
    }

/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\Users  $users
 * @return \Illuminate\Http\Response
 */
    public function edit(Users $users)
    {
//
    }

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Users  $users
 * @return \Illuminate\Http\Response
 */
    public function update(Request $request, Users $users)
    {
//
    }

/**
 * Remove the specified resource from storage.
 *
 * @param  \App\Users  $users
 * @return \Illuminate\Http\Response
 */
    public function destroy(Users $users)
    {
//
    }
}

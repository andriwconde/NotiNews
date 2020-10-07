<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */

    //  validator 
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'avatar' => ['nullable'],
        ]);
    }
    public function update(Request $request, $id)
    {
        // dd($request);
        $user = User::findOrFail($id);
        if($request['avatar']){
        $user->update([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'name' => $request['name'],
            'email' => $request['email'],
            'avatar' => $request['avatar']->store('public/uploads')
            ]);
        } else{
                    $user->update([
                        'first_name' => $request['first_name'],
                        'last_name' => $request['last_name'],
                        'name' => $request['name'],
                        'email' => $request['email']
                    ]);
            }

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}

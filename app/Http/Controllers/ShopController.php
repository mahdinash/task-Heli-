<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }

    public function index()
    {
        $shops = Shop::all();
        return view('shop.index',compact('shops'));
    }

    
    public function create()
    {
        return view('shop.create');
    }

    public function store(Request $request)
    {
        //validate request
        $data = $request->validate([
            'first_name'  =>'required|string',
            'last_name'   =>'required|string',
            'task'        =>'required|string',
            'status'      =>'required|string',
            'username'    =>'required|unique:users,name',
            'email'       =>'required|email|unique:users,email',
        ]);
        //create user in db
        $randomPass = rand(1000,9999);
        $user = User::create([
            'name'  => $request->username,
            'email' => $request->email,
            'role'  => 'shop',
            'email_verified_at' =>now(),
            'password' => bcrypt($randomPass),
        ]);

        //create shop in db
        Shop::create([
            'user_id'    => $user->id,
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'task'       => $request->task,
            'status'     => $request->status,
        ]);

        //redirect
        return redirect()->route('shop.index')->withMessage('successfully');
    }

    public function show(Shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shop $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shop $shop)
    {
        //
    }
}

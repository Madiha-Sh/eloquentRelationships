<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use App\User;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return 'Hi this is me';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = User::findorFail(2);
        $address = new Address(['name' => 'Area no. 4 XYZ road' ]);
        $user->address()->save($address);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $add = User::find($id)->address;
        echo $add->name;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // // 1st method - naive solution
        // $user = User::whereId($id)->first();
        // $user->address->name = 'newwwww address';
        // return $user->address->save();

        // // 2nd method - more practical solution
        $address = Address::where('user_id', $id)->first();
        $address->name = 'street 202 address';
        return $address->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // // 
        // $address = Address::whereUserId($id)->first();
        // return $address->delete();

        // // OR
        $user = User::findOrFail($id);
        $user->address->delete();
        return "done";
    }
}

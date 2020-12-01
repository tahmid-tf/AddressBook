<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Exception;

class Address extends Controller
{
    public function index(){
        $addresses = \auth()->user()->address;

        return view('user',compact('addresses'));
    }

    public function store(){

        $inputs = request()->all();

        if (request('image')){
            $inputs['image'] = request('image')->store('images');
        }

        auth()->user()->address()->create($inputs);
        return redirect()->route('user');
    }

    public function edit(\App\Models\Address $address){

        if (\auth()->user()->id == $address->user_id) {
            return view('update', compact('address'));
        }

    }

    public function update(\App\Models\Address $id){
        $inputs['name'] = \request('name');
        $inputs['address'] = \request('address');
        $inputs['email'] = \request('email');
        $inputs['number'] = \request('number');
        $inputs['number'] = \request('number');
        $inputs['gender'] = \request('gender');
        $inputs['blood'] = \request('blood');

        if (request('image')){
            $inputs['image'] = request('image')->store('images');
        }

        $id->update($inputs);
        return redirect()->route('user');

    }

    public function destroy($id){
        $address = \App\Models\Address::find($id);
        $address->delete();
        return redirect()->route('user');
    }

    public function logout(){
        \auth()->logout();
        return redirect()->to('/');
    }

}

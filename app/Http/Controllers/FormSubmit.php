<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class FormSubmit extends Controller
{
    function index()
    {
        return view('form');
    }
    
    function formComponent()
    {
        return view('formComponent');
    }

    function formInput()
    {
        return view('forminput');
    }

    function formusingcomponent()
    {
        return view('formusingcomponent');
    }

    function registration()
    {
        return view('registration');
    }

    function registration_submit(Request $request)
    {
        $request ->validate(
            [
                'name' => 'required',
                'email' => 'required | email',
                'password' => 'required',
                'date_of_birth' => 'required',
                'address' => 'required',
                'gender' => 'required',
                'number' => 'required',
                'country' => 'required',
                'state' => 'required',
                'city' => 'required',
            ]
        );
        $customer               = new Customer();
        $customer->name         = $request['name'];
        $customer->email        = $request['email'];
        $customer->password     = $request['password'];
        $customer->dob          = $request['date_of_birth'];
        $customer->address      = $request['address'];
        $customer->gender       = $request['gender'];
        $customer->country      = $request['country'];
        $customer->state        = $request['state'];
        $customer->city         = $request['city'];
        $customer->created_at   = date('Y-m-d H:i:s');
        $customer->status       = 1;
        $customer->is_deleted   = 0;
        $customer->save();
        return redirect('/registration-view');

    }

    function registration_view()
    {
        $data = Customer::all();
        $data = compact('data');
        return view('registration-view')->with($data);
    }

    function edit_user($id)
    {
        $data = Customer::find($id);
        
    }

    function delete_user($id)
    {
        $data = Customer::find($id);
        if($data != '')
        {
            $data->delete();
        }
        return redirect()->back();
    }

    function submit(Request $request)
    {
        $request ->validate(
            [
                'name' => 'required',
                'email' => 'required | email',
                'password' => 'required'
            ]
        );
        echo "<pre>";print_r($request->all());
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User_info;

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
        $url = url('/registration');
        $title = "Registration Form";
        $data = compact('url','title');
        return view('registration')->with($data);
    }

    function add_user()
    {
        return view('add-new');
    }

    function user_submit(Request $request)
    {
        $customer               = new User_info();
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
        return redirect('/add-user');
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

    function registration_view(Request $request)
    {
        $search = $request['search'] ?? '';
        if($search != '')
        {
            $data = Customer::where('name','LIKE',"%$search%")->orwhere('email','LIKE',"%$search%")->get();
        }
        else
        {
            // $data = Customer::paginate(15);
            $data = Customer::all();
        }
        $data = compact('data','search'); 
        return view('registration-view')->with($data);
    }

    function edit_user($id)
    {
        $data = Customer::find($id);
        // echo "<pre>";print_r($data);die;
        if(is_null($data))
        {
            return redirect('registration_view');
        }
        else
        {
            $url = url('/registration_update').'/'.$id;
            $title = "Update Info";
            $data = compact('data','url','title');
            return view('registration')->with($data);
        }
    }

    function registration_update($id,Request $request)
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
        $customer               = Customer::find($id);
        // echo "<pre>";print_r($customer->toArray());die;
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

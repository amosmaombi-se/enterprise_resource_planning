<?php

namespace App\Http\Controllers\HumanResource;
use App\Http\Controllers\Controller;
use \App\Models\User;
use Illuminate\Support\Str;
use DB;
use Auth;


class HumanResourceController extends Controller
{

    public function index()
    { 
        $this->data['users']  = User::where(['status'=>1])->latest()->get();
        return view('humanResource.employees.index',$this->data);
    }


    public function create()
    {
        return view('humanResource.employees.add');
    }

    public function store()
    {
        $data = request()->validate([
            'first_name' => 'required|string',
            'middle_name' => 'string',
            'last_name' => 'required|string',
            'email' =>  'required|email|string|unique:users,email',
            'phone' =>  'required|string|unique:users,phone',
			//'role_id' => 'required|integer|exists:roles,id',
			'address' => 'required|string',
			'join_date' => 'required|date',
			'date_of_birth' => 'required|date',
			'gender' => 'required',
			'bank_name' => 'required',
			'bank_account_number' => 'required',
			'nin' => 'required|string',
        ]);

        $input = $data;
        $input['uuid'] = Str::uuid()->toString(); 
        $input['status'] = 1; 
        $input['role_id'] = 2; 
        $input['phone'] = str_replace("+", '',$this->validate_phone($data['phone'])[1]); 
        $input['username'] = str_replace(" ", '', request("phone")); 
        $input['password'] = bcrypt(trim(request("email"))); 
        $input['created_by'] = 1; 
        User::create($input);
        return redirect('employees')->with('success', 'User created successfully');
    }


    public function show($uuid)
    {
        $this->data['user'] =  User::where('uuid',$uuid)->first();
        return view('humanResource.employees.show',$this->data);
    }

    public function edit($uuid)
    {
        $this->data['user'] =  User::where('uuid',$uuid)->first();
        return view('humanResource.employees.edit',$this->data);
    }


    public function deleteUser($uuid)
    {
        $user =  User::where('uuid',$uuid)->first();
        $user->update(['status'=>0]);
        return redirect('employees')->with('success', 'User deleted successfully');
    }

    public function updateUser()
    {  
        $data = request()->validate([
            'first_name' => 'required|string',
            'middle_name' => 'string',
            'last_name' => 'required|string',
            'email' =>  'required|email|string',
            'phone' =>  'required|string',
			'address' => 'required|string',
			'join_date' => 'required|date',
			'date_of_birth' => 'required|date',
			'gender' => 'required',
			'bank_name' => 'required',
			'bank_account_number' => 'required',
			'nin' => 'required|string',
        ]);
        $uuid = request('uuid');
        $user = User::where('uuid',$uuid)->first();
        $user->update($data);
        return redirect('employees')->with('success', 'User updated successfully');
    }


    public function uploadUsersFile()
    {
        dd(request()->all());
    }
}

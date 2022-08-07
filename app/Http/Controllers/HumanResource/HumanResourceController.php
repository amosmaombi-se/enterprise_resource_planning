<?php

namespace App\Http\Controllers\HumanResource;
use App\Http\Controllers\Controller;
use \App\Models\User; 
use \App\Models\Leave; 
use \App\Models\HumanResource\Holidays;
use Illuminate\Support\Str;
use DB;
use Auth;


class HumanResourceController extends Controller
{

    public function __construct() {
      //  $this->middleware('auth');
    }

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
			'salary' => 'required|string',
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
        $input['salary'] = $this->remove_comma($data['salary']);
        $input['phone'] = str_replace("+", '',$this->validate_phone($data['phone'])[1]); 
        $input['username'] = str_replace(" ", '', request("phone")); 
        $input['password'] = bcrypt(trim(request("email"))); 
        $input['created_by'] = 1; 

        $check_user = User::where('phone',request('phone'))->orWhere('username',$data['username'])->first();
        if($check_user){
          return redirect()->back()->with('error', 'User arleady exists');
        }

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
        $data['salary'] = $this->remove_comma($data['salary']);
        $user = User::where('uuid',$uuid)->first();
        $user->update($data);
        return redirect('employees')->with('success', 'User updated successfully');
    }


    public function uploadUsersFile()
    {
        dd(request()->all());
    }



    public function leave()
    {
        $this->data['leaves'] =  Leave::latest()->get();
        return view('humanResource.leave.index',$this->data);  
    }

    public function createLeave()
    {
        dd(request()->all());
        $data = request()->validate([
			'user_id' => 'required|integer|exists:users,id',
            'start_date' => 'string|date',
            'end_date' => 'required|date|after:start_date',
            'reason_id' =>  'required|integer',
            'description' =>  'required|string',
        ]);
        
        $input = $data;
        $input['uuid'] = Str::uuid()->toString(); 
        $input['created_by'] = Auth::id();
        $check_leave = Leave::where('user_id',$data['user_id'])->where('start_date','>=',date('Y-m-d', strtotime($data['start_date'])))
        ->where('end_date','>=',date('Y-m-d', strtotime($data['end_date'])))->first();
        if($check_leave){
          return redirect()->back()->with('error', 'User has leave at this period');
        }
        Leave::create($input);
        return redirect('leaves')->with('success', 'Leave created successfully');
    }


    public function editLeave($uuid)
    {
        $this->data['leave'] = Leave::where('uuid',$uuid)->first();
        return view('humanResource.employees.edit_leave',$this->data);
    }
  

    public function updateLeave()
    {
        $data = request()->validate([
			'user_id' => 'required|integer',
            'start_date' => 'string|date',
            'end_date' => 'required|date|after:start_date',
            'reason_id' =>  'required|integer',
            'description' =>  'required|string',
        ]);

        $uuid = request('uuid');
        $leave = Leave::where('uuid',$uuid)->first();
        $leave->update($data);
        return redirect('leaves')->with('success', 'Leave updated successfully');
    }

    public function deleteLeave($uuid)
    {
        $leave =  Leave::where('uuid',$uuid)->first();
        if($leave){
            $leave->delete();
            return redirect('leaves')->with('success', 'Leave deleted successfully');
        }
    }


    public function holidays()
    {
        $this->data['holidays'] = Holidays::latest()->get();
        return view('humanResource.holidays.index',$this->data);  
    }


}

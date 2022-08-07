<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Setting\LeaveSetting; 
use Illuminate\Support\Str;



class SettingController extends Controller
{
    
    public function index()
    {
        return view('settings.general.index');
    }


    public function employeeLeave()
    {
        $data['leave_types']  = LeaveSetting::latest()->get();
        return view('settings.leave.index',$data);
    }

    public function createEmployeeLeave()
    {
        $data = request()->validate([
			'leaveName' => 'required|string',
        ]);

        $input['uuid'] = Str::uuid()->toString(); 
        $input['period'] = request('period');
        $input['name'] = $data['leaveName'];
        LeaveSetting::create($input);
        return redirect()->back()->with('success','Leave type created successfully!');
    }

    public function editEmployeeLeave($uuid)
    {
        $data = request()->validate([
			'leaveName' => 'required|string',
        ]);

        $leave_settings = LeaveSetting::where('uuid',$uuid)->first();
        if($leave_settings){
            $input['uuid'] = Str::uuid()->toString(); 
            $input['period'] = request('period');
            $input['name'] = $data['leaveName'];
            $leave_settings->update($input);
            return redirect()->back()->with('success','Leave type updated successfully!');
        } else {
            return redirect()->back()->with('error','Leave type dont exists!');
        }
    }
}

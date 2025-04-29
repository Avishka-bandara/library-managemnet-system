<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index(){
        return view('member.index');    
    }


    public function addNewMember(){
        return view('member.add-new-member');    
    }

    public function addNewMemberSave(Request $request){

        $member = Member::where('nic', $request->input('nic'))->first();
        if ($member) {
            return redirect()->back()->withInput()->withErrors(['nic' => 'NIC already exists.']);
        }

        Member::create([
            'member_name'=> $request->input('name'),
            'nic' => $request->input('nic'),
            'address'=> $request->input('address'),
            'contact_number'=> $request->input('contact_number'),
            'email'=> $request->input('email'),
            'dob'=> $request->input('dob'),
        ]);

        return redirect()->back()->with('success','Member Added Successfully!');
        
    }


    public function viewMembers(){
        $members = Member::all();
        
        return response()->json($members);
    }
}


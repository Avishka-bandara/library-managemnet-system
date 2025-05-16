<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\BookRelease;
use App\Models\Book;

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
            'is_active' => 1,
        ]);

        return redirect()->back()->with('success','Member Added Successfully!');
        
    }
    public function getMember(Request $request){
        $name = $request->input('name');
        $nic = $request->input('nic');

        $members = Member::where('member_name', $name)
                 ->where('nic', $nic)
                 ->get();
        
        // $members = $members->map(function ($data){
        //     return[
        //         'name' => $data->member_name,
        //         'nic' => $data->nic,
        //         'address' => $data->address,
        //         'contact' => $data->contact_number,
        //         'email' => $data->email,
        //         'dob' => $data->dob
        //     ];
        // });

        return response()->json(['data'=> $members->values()]);
        
    }


    public function editMember($id){
        
        $member = Member::findOrFail($id);

      
        return view ('member.edit-member', ['member' =>$member]);
    }


    public function updateMember(Request $request , $id){

        // dd($id);
        $member = Member::findorFail($id);

        // log.info($request);
        $member->update([
            'member_name' => $request->input('name'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'contact_number' => $request->input('contact_number'),
            'dob' => $request->input('dob'),
            'is_active' => $request->input('is_active')
        ]);
        
        return response()->json(['message' => 'Member updated successfully'], 200);
    }


    public function deleteMember($id){

        $member = Member::findorFail($id);
        $member->delete();
 
        return response()->json(['message' => 'Member deleted successfully'], 200);

    }

    public function getMemberNic($id){

        $member = Member::findOrFail($id);
        if(!$member){
            return response()->json(['message' => 'Member not found'], 404);
        };
        return response()->json(['data' => $member->nic]);
    }


    public function releaseNewBook(request $request){
        // dd($request->all());

    $validated = $request->validate([
            'book_id' => 'required',
            'member_id' => 'required',
            'release_date' => 'required|date',
            'nic' => 'required',
            // 'return_date' => 'required|date|after:release_date',
        ]);
        $release = BookRelease::create([
            'book_id' => $request->input('book_id'),
            'member_id' => $request->input('member_id'),
            'released_date' => $request->input('release_date'),
        ]);
        
        return response()->json(['message' => 'Book released successfully'], 200);
    }

}


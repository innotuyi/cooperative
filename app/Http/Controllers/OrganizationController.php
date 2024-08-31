<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Guardian;
use App\Models\Member;
use App\Models\Share;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrganizationController extends Controller
{
    public function department()
    {
        $guardians = Guardian::all();
        return view('admin.pages.Organization.Department.guardian', compact('guardians'));
    }


    public function member()
    {
        $members = Member::select(
            'members.*',                // Select all columns from the 'members' table
            'guardians.id as guardian_id',    // Select and alias the 'id' column from 'guardians'
            'guardians.name as guardian_name', // Select and alias the 'name' column from 'guardians'
            'guardians.phone as guardian_phone', // Select and alias any other guardian columns
            'guardians.idcard as guardian_idcard',
            'guardians.district as guardian_district',
            'guardians.sector as guardian_sector'
        )
            ->join('guardians', 'guardians.id', '=', 'members.guardID') // Adjust the foreign key
            ->get();
        $departments = Guardian::all();
        return view('admin.pages.Organization.Department.members', compact('departments', 'members'));
    }

    public function share()
    {
        $shares = Member::select(
            'shares.*',                // Select all columns from the 'shares' table
            'm.id as member_id',        // Select and alias the 'id' column from the alias 'm'
            'm.name as member_name',    // Alias 'name' from the alias 'm'
            'm.phone as member_phone',  // Alias 'phone' from the alias 'm'
            'm.idcard as member_idcard',
            'm.district as member_district',
            'm.sector as member_sector'
        )
        ->join('shares', 'shares.memberID', '=', 'm.id')  // Alias the members table as 'm'
        ->from('members as m') // Set alias for the members table
        ->get();
    

        $departments = Member::all();

        return view('admin.pages.Organization.Department.share', compact('departments', 'shares'));
    }


    public function shareStore(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'memberID' => 'required|exists:members,id',       // Member ID must exist in the members table
            'amount' => 'nullable|numeric|min:0',             // Amount must be a number greater than or equal to 0
            'joining_date' => 'nullable|date',                // Joining date must be a valid date
            'amount_increase' => 'nullable|numeric|min:0',    // Amount increase (optional), must be a number
            'interest_rate' => 'nullable|numeric|min:0|max:100', // Interest rate (optional), between 0 and 100
            'total_share' => 'nullable|numeric|min:0',            // Sector is required
        ]);

        if ($validate->fails()) {

            notify()->error($validate->getMessageBag());
            return redirect()->back();

        }

        $joining_date = Carbon::parse($request->joining_date);

        Share::create([
            'memberID' => $request->memberID,
            'amount' => $request->amount,
            'joining_date' =>  $joining_date,
            'amount_increase' => $request->amount_increase,
            'interest_rate' => $request->interest_rate,
            'total_share' => $request->total_share,
        ]);
        notify()->success('New share created successfully.');
        return redirect()->back();
    }


    public function shareEdit($id) {
        $department = Member::select(
                'shares.*',                // Select all columns from the 'shares' table
                'm.id as member_id',        // Select and alias the 'id' column from the alias 'm'
                'm.name as member_name',    // Alias 'name' from the alias 'm'
                'm.phone as member_phone',  // Alias 'phone' from the alias 'm'
                'm.idcard as member_idcard',
                'm.district as member_district',
                'm.sector as member_sector'
            )
            ->join('shares', 'shares.memberID', '=', 'm.id')  // Join on the memberID field and alias members table as 'm'
            ->from('members as m')                            // Set alias for the members table
            ->where('shares.id', $id)                         // Filter by share ID
            ->first();                                        // Retrieve the first matching record
    
        if ($department) {
            return view('admin.pages.Organization.Department.editShare', compact('department'));
        } else {
            return redirect()->back()->with('error', 'Share not found.');
        }
    }



    public function shareDelete($id) {
        $department = Share::find($id);
        if ($department) {
            $department->delete();
        }
        notify()->success('share Deleted Successfully.');
        return redirect()->back();
    }
    


    public function shareUpdate(Request $request, $id) {
          // Validate the incoming request data


      
          $validate = Validator::make($request->all(), [
            'amount' => 'nullable|numeric|min:0',             // Amount must be a number greater than or equal to 0
            'joining_date' => 'nullable|date',                // Joining date must be a valid date
            'amount_increase' => 'nullable|numeric|min:0',    // Amount increase (optional), must be a number
            'interest_rate' => 'nullable|numeric|min:0|max:100', // Interest rate (optional), between 0 and 100
            'total_share' => 'nullable|numeric|min:0',            // Sector is required
        ]);



          // Check if validation fails
          if ($validate->fails()) {
            return redirect()->back()
                ->withErrors($validate)      // Return with validation errors
                ->withInput();                // Return with old input data
        }



        // Find the guardian by ID
        $share = Share::findOrFail($id);

        $joining_date = Carbon::parse($request->joining_date);


        // Update the guardian record
        $share->update([
            'amount' => $request->amount,
            'joining_date' =>  $joining_date,
            'amount_increase' => $request->amount_increase,
            'interest_rate' => $request->interest_rate,
            'total_share' => $request->total_share,
        ]);

        notify()->success('Updated successfully.');

        return redirect()->route('organization.share');



        // // Redirect back with a success message
        // return redirect()->back()->with('success', 'Guardian updated successfully');
    }

    


    public function properties()
    {
        $departments = Member::all();
        return view('admin.pages.Organization.Department.properties', compact('departments'));
    }

    public function meeting()
    {
        $departments = Member::all();
        return view('admin.pages.Organization.Department.meeting', compact('departments'));
    }



    public function punishment()
    {
        $departments = Member::all();
        return view('admin.pages.Organization.Department.punishment', compact('departments'));
    }


    public function expenduture()
    {
        $departments = Member::all();
        return view('admin.pages.Organization.Department.expenduture', compact('departments'));
    }


    public function agent()
    {
        $departments = Member::all();

        return view('admin.pages.Organization.Department.agent', compact('departments'));
    }






    public function departmentList()
    {
        $guardians = Guardian::all();
        return view('admin.pages.Organization.Department.department', compact('guardians'));
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255',            // Guardian name
            'phone' => 'required|digits:10', // Exactly 10 digits for phone number
            'idcard' => 'required|digits:16|unique:guardians,idcard', // Exactly 16 digits for ID card, must be unique
            'district' => 'required|string|max:255',        // District is required
            'sector' => 'required|string|max:255',          // Sector is required
        ]);

        if ($validate->fails()) {

            notify()->error($validate->getMessageBag());
            return redirect()->back();

            return redirect()->back()->withErrors($validate);
        }

        Guardian::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'idcard' => $request->idcard,
            'district' => $request->district,
            'sector' => $request->sector,
        ]);
        notify()->success('New Guardian created successfully.');
        return redirect()->back();
    }

    public function memberStore(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255',            // Guardian name
            'phone' => 'required|digits:10', // Exactly 10 digits for phone number
            'idcard' => 'required|digits:16|unique:guardians,idcard', // Exactly 16 digits for ID card, must be unique
            'district' => 'required|string|max:255',        // District is required
            'sector' => 'required|string|max:255',          // Sector is required
        ]);

        if ($validate->fails()) {

            notify()->error($validate->getMessageBag());
            return redirect()->back();

            return redirect()->back()->withErrors($validate);
        }

        Member::create([
            'name' => $request->name,
            'guardID' => $request->guardID,
            'phone' => $request->phone,
            'idcard' => $request->idcard,
            'district' => $request->district,
            'sector' => $request->sector,
        ]);
        notify()->success('New member created successfully.');
        return redirect()->back();
    }

    public function delete($id)
    {
        $department = Guardian::find($id);
        if ($department) {
            $department->delete();
        }
        notify()->success('Guardian Deleted Successfully.');
        return redirect()->back();
    }
    public function edit($id)
    {
        $department = Guardian::find($id);
        return view('admin.pages.Organization.Department.editDepartment', compact('department'));
    }


    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|digits:10', // Exactly 10 digits for phone number
            'idcard' => 'required|digits:16|unique:guardians,idcard,' . $id, // Ensure ID card is unique except for the current record
            'district' => 'required|string|max:255',
            'sector' => 'required|string|max:255',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)      // Return with validation errors
                ->withInput();                // Return with old input data
        }

        // Find the guardian by ID
        $guardian = Guardian::findOrFail($id);

        // Update the guardian record
        $guardian->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'idcard' => $request->idcard,
            'district' => $request->district,
            'sector' => $request->sector,
        ]);

        notify()->success('Updated successfully.');
        return redirect()->route('organization.department');




        // // Redirect back with a success message
        // return redirect()->back()->with('success', 'Guardian updated successfully');
    }














    public function searchDepartment(Request $request)
    {
        $searchTerm = $request->search;

        $departments = Department::where(function ($query) use ($searchTerm) {
            $query->where('department_name', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('department_id', 'LIKE', '%' . $searchTerm . '%');
        })->paginate(10);

        return view('admin.pages.Organization.Department.searchDepartment', compact('departments'));
    }
}

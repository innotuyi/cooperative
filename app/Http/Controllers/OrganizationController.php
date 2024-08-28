<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

    class OrganizationController extends Controller
{
    public function department()
    {
        $departments = Department::all();
        return view('admin.pages.Organization.Department.guardian', compact('departments'));
    }


    public function member()
    {
        $departments = Member::all();
        return view('admin.pages.Organization.Department.members', compact('departments'));
    }

    public function share()
    {
        $departments = Member::all();
        return view('admin.pages.Organization.Department.share', compact('departments'));
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
        $departments = Department::all();
        return view('admin.pages.Organization.Department.department', compact('departments'));
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $validate = Validator::make($request->all(), [
            'department_name' => 'required',
        ]);

        if ($validate->fails()) {

            notify()->error($validate->getMessageBag());
            return redirect()->back();

             return redirect()->back()->withErrors($validate);
        }

        Department::create([
            'department_name' => $request->department_name,
        ]);
        // notify()->success('New Department created successfully.');
        return redirect()->back();
    }
    public function delete($id)
    {
        $department = Department::find($id);
        if ($department) {
            $department->delete();
        }
        notify()->success('Department Deleted Successfully.');
        return redirect()->back();
    }
    public function edit($id)
    {
        $department = Department::find($id);
        return view('admin.pages.Organization.Department.editDepartment', compact('department'));
    }
    public function update(Request $request, $id)
    {
        $department = Department::find($id);
        if ($department) {
            $department->update([
                'department_name' => $request->department_name,
                'department_id' => $request->department_id,
            ]);
            notify()->success('Updated successfully.');
            return redirect()->route('organization.department');
        }
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


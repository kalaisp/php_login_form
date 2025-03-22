<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
{
    //
    public function index()
    {
        $staff = Staff::all();

        return view('dashboard', compact('staff'));
    }
    public function logout()
    {
        Auth::logout();  // Log the user out

        return view('/login');  // Redirect to login page
    }

    public function showInsertForm()
    {
        return view('insert');
    }
    public function insertstaff(Request $request)
    {
        Staff::create($request->only(['name', 'dateofbirth', 'mobileno', 'address']));
        return redirect()->route('staff.index')->with('success', 'Staff member created successfully.');
    }
    public function updateStaff(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'dateofbirth' => 'required|date',
            'mobileno' => 'required|regex:/^\d{10}$/',
            'address' => 'required|max:255',
        ], [
            'mobileno.regex' => 'Please enter a valid mobile number with 10 digits',

        ]);
        $staff = Staff::find($id);
        $staff->update($request->all());
        return redirect()->route('staff.index')->with('success', 'Staff member updated successfully.');
    }
  public function deletestaff($id)
  {
    $staff = Staff::find($id);
    $staff->delete();
    return redirect()->route('staff.index')->with('success', 'Staff member created successfully.');
  }

  public function edit($id)
  {
    $member = Staff::find($id);
    return view('edit', compact('member'));
  }

}

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\emp;

use Illuminate\Support\Facades\Auth;
class EmpController extends Controller
{
    public function logout()
    {
        Auth::logout();  // Log the user out

        return view('/login');  // Redirect to login page
    }
    public function indexemp()
    {
        $emp = Emp::all();

        return view('indexemp', compact('emp'));
    }
  public function showInsertForm()
    {
        return view('insertemp');
    }
    public function insertemp(Request $request)
    {
     $request->validate([
        'emp_name' => 'required|max:255',
        'phone' => 'required|regex:/^\d{10}$/',
        'address' => 'required|max:255',
        'gender' => 'required|max:255',
        'email' => 'required|email|max:255',
        'state' => 'required|max:255',
        'salary' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        'hobbies' => 'required|array|min:1',
        'hobbies.*' => 'in:Reading books,Playing Carrom,Cricket',
    ], [
        'salary.regex' => 'Please enter a valid salary (e.g., 1000 or 1000.50)',
    ]);

    $hobbies = implode(',', $request->input('hobbies'));

    Emp::create($request->only([
        'emp_name', 'gender', 'email', 'state', 'salary', 'phone', 'address'
    ]) + ['hobbies' => $hobbies]);

    return redirect()->route('indexemp');
}

    public function updateEmp(Request $request, $id)
    {
        $request->validate([
            'emp_name' => 'required|max:255',
            'phone' => 'required|regex:/^\d{10}$/',
            'address' => 'required|max:255',
            'gender' => 'required|max:255',
            'email' => 'required|email|max:255',
            'state' => 'required|max:255',
            'salary' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'hobbies' => 'required|array|min:1',
            'hobbies.*' => 'in:Reading books,Playing Carrom,Cricket',
        ], [
            'salary.regex' => 'Please enter a valid salary (e.g., 1000 or 1000.50)',
        ]);
        $hobbies = implode(',', $request->input('hobbies'));

        $staff = Emp::find($id);
        $staff->update($request->all([
            'emp_name', 'gender', 'email', 'state', 'salary', 'phone', 'address'
        ])+ ['hobbies' => $hobbies] );
        return redirect()->route('indexemp')->with('success', 'Staff member updated successfully.');
    }
    public function deleteemp($id)
    {
        $staff = Emp::find($id);
        $staff->delete();
        return redirect()->route('indexemp')->with('success', 'Staff member deleted successfully.');
    }
    public function listemp($id)
    {
        $emp = Emp::findOrFail($id);
         return view('listemp', compact('emp'));
    }
    public function editem($id)
    {
        $member = Emp::find($id);
        return view('editemp', compact('member'));
    }

}

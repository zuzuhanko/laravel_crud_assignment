<?php

namespace App\Http\Controllers;

use id;
use App\Models\employeeList;
use Illuminate\Http\Request;
use App\Http\Controllers\FirstController;
use Illuminate\Support\Facades\Validator;

class FirstController extends Controller
{
 public function main(){
$data = employeeList::get();
    return view('main')->with(['employee'=>$data]);
 }

 public function createlist(){
    return view('insert');
 }

 //insert employee data
 public function insert(Request $request){

    $validator = Validator::make($request->all(), [
        'firstname' => 'required',
        'lastname' => 'required',
        'job'=>'required',
        'phone'=>'required',
        'address'=>'required',
        'age' => 'required',

     ]);

     if ($validator->fails()) {
         return back()
                     ->withErrors($validator)
                     ->withInput();
     }
   employeeList::create([
        'first_name'=>$request->firstname,
        'last_name'=>$request->lastname,
        'job'=>$request->job,
        'phone'=>$request->phone,
        'address'=>$request->address,
        'age'=>$request->age,    ]) ;

    return redirect()->route('main');

}

//edit employee data
 public function edit($id){

$data = employeeList::where('employee_id',$id)->first();


 return view('edit')->with(['employee'=>$data]);

 }

 public function update(Request $request,$id){
 $updateData = ([
    'first_name'=>$request->firstname,
    'last_name'=>$request->lastname,
    'job'=>$request->job,
    'phone'=>$request->phone,
    'address'=>$request->address,
    'age'=>$request->age,    ]) ;

    employeeList::where('employee_id',$id)->update($updateData);



    return redirect()->route('main');

 }

 //delete employee data
 public function delete($id){
    employeeList::where('employee_id',$id)->delete();

    return redirect()->route('main');
 }
}

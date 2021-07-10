<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
class ApiController extends Controller
{
    //crete employ
    function createEmployee(Request $request){
        //validation
        $request->validate(['name'=>"required",
        'email'=>"required|email|unique:employees",
        'phone'=>"required",
        'gender'=>"required",
        'age'=>"required"

        ]);
        //create data
        $employee=new Employee();
        $employee->name=$request->name;
        $employee->email=$request->email;
        $employee->phone=$request->phone;
        $employee->gender=$request->gender;
        $employee->age=$request->age;
        $employee->save();
       //  another way Employee::create()
return response()->json([
    "status"=>1,
    "message"=>"employee created successfully"
]);

    }
    //list employees
    function listEmployees(){
        $employees=Employee::get();
        return response()->json(['status'=>1,"message"=>"listed successfully",
    "data"=>$employees]);

    }
    // get single employee
    function getSingleEmployee($id){
        if(Employee::where("id",$id)->exists()){
$employee_detail=Employee::where("id",$id)->first();
return response()->json(['status'=>1,
'message'=>"employee by id",
'data'=>$employee_detail
]);
        }else{
            return response()->json(['status'=>0,
        'message'=>"not found"]);
        }


    }
     // update employee
     function updateEmployee( Request $request,$id){
        

    }
// delete employee
function deleteEmployee($id){
        

}

}

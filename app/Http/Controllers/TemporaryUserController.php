<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\temporary_user;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class TemporaryUserController extends Controller
{
    function application(Request $req){
        return $req->file('application')->store('docs/temp_users/user1');
    }

    function id(Request $req){
        return $req->file('id')->store('docs/temp_users/user1');
    }


    function toUploadPage(){
        return view("tempory_user.registration.upload");
    }

    function toApplication(){
        return view("tempory_user.registration.application");
        
    }

    function addData(Request $req){
        $temporary_user = new temporary_user;
        $temporary_user->fname=$req->fname;
        $temporary_user->mname=$req->mname;
        $temporary_user->lname=$req->lname;
        $temporary_user->gender=$req->gender;
        $temporary_user->civil_status=$req->civil_status;
        $temporary_user->current_postal_address=$req->current_postal_address;
        $temporary_user->permenant_postal_address=$req->permenant_postal_address;
        $temporary_user->current_mobile=$req->current_mobile;
        $temporary_user->permenant_mobile=$req->permenant_mobile;
        $temporary_user->police_division=$req->police_division;
        $temporary_user->email=$req->email;
        $temporary_user->dob=$req->dob;
        $temporary_user->age_as_at_closing_date=$req->age_as_at_closing_date;
        $temporary_user->citizenship=$req->citizenship;
        $temporary_user->designation=$req->designation;
        $temporary_user->nic=$req->nic;
        $temporary_user->driving_licen_no=$req->driving_licen_no;
        $temporary_user->driving_licen_issuing_date=$req->driving_licen_issuing_date;
        $temporary_user->save();
        return redirect('temp_user/upload');
    }

    public function tempUserView(Request $req){
        $data = temporary_user::all();

        $data1 = DB::table('designations')
        ->select('designation_name')
        ->get();
        
        
        return view('ma.registration.view_temp_user',['temporary_users'=>$data],['designation'=>$data1]);
        
     }

     public function search(Request $req){
        //if($request->isMethod('post')){
            //$id=$request->post('id');
            //return "id";
            
            //$data= temporary_user::where('application_id','LIKE','%'. $id . '%')->paginate(5);

            return view('ma.registration.vi');
        //}
       //return view('ma.registration.view_temp_user', ['temporary_users'=>$data]);
        
     }

     public function search1(Request $req){
        $id=$req->post('id');
        $fname=$req->post('fname');
        $mname=$req->post('mname');
        $lname=$req->post('lname');
        $gender=$req->post('gender');
        $civil_status=$req->post('civil_status');
        $current_postal_address=$req->post('current_postal_address');
        $permenant_postal_address=$req->post('permenant_postal_address');
        $current_mobile=$req->post('current_mobile');
        $permenant_mobile=$req->post('permenant_mobile');
        $police_division=$req->post('police_division');
        $email=$req->post('email');
        $dob=$req->post('dob');
        $age_as_at_closing_date=$req->post('age_as_at_closing_date');
        $citizenship=$req->post('citizenship');
        $nic=$req->post('nic');
        $driving_licen_no=$req->post('driving_licen_no');
        $driving_licen_issuing_date=$req->post('driving_licen_issuing_date');

        if($id!=""){
            
            $data = temporary_user::where('application_id',$id)->where('gender',$gender)->post();
            return view('ma.registration.xxx',['temporary_users'=>$data],['id'=>$id],['gender'=>$gender]);
            
        }

        $data = temporary_user::all();
        return view('ma.registration.xxx',['temporary_users'=>$data]);
        
     }

    function applicationSummary(Request $req1){
        //$result = temporary_user::all();
        //$results = temporary_user::select ('select COUNT(application_id),designation from temporary_users GROUP BY designation');
        $result = DB::table('temporary_users')
        ->select('designation',DB::raw('COUNT(application_id) as application_id_count'))
        ->groupBy('designation')
        ->get();

        return view('ma.registration.application_summary',['temporary_users'=>$result]);
        return $result;
        
     }

     function designationSteup1(Request $req2){
        $data = DB::table('designations')
        ->select('designation_name')
        ->get();
        
        return view('ma.registration.view_temp_user',['designation'=>$data]);
        
        
        
     }

     function designationSteup2(Request $req2){
        
        for ($i=0; $i < sizeof($req2->returned_designations); $i++) { 
                
            $designation = $req2->returned_designations[$i];  
            $designation_var = str_replace(" ", "_",$req2->returned_designations[$i]);
                
                if(empty($req2->$designation_var)){
                    $affected = DB::table('temporary_users')
                        ->where('designation', $designation)
                        ->update(['practical' => 0],['exam' => 1]);
                    continue;
        
                }

                if(count($req2->$designation_var)==2){
                        echo $designation_var."_Exam = 1";
                        echo "<br>";
                        echo $designation_var."_Practical = 1";
                        echo "<br>";

                        $affected = DB::table('temporary_users')
                        ->where('designation', $designation)
                        ->update(['exam' => 1],['practical' => 1]);
                    }
                    if(count($req2->$designation_var)==1){

                        if($req2->$designation_var[0]==$designation_var[0]."_Exam"){
                            echo $designation_var."_Exam = 1";
                            echo "<br>";

                            $affected = DB::table('temporary_users')
                            ->where('designation', $designation)
                            ->update(['exam' => 1]);
                        }
                        else{
                            echo $designation_var."_Practical = 1";
                            echo "<br>";

                            $affected = DB::table('temporary_users')
                            ->where('designation', $designation)
                            ->update(['practical' => 1]);
                        }
                        
                    }
                    
                
            }
        
        
     }
     
     function ExamDetails(Request $req){

        $data = DB::table('tempuser_tests')->get();

        $id=$req->get('test_id');

        
        return view('tempory_user.registration.exam_details',['temp_test' => $data]);
     }

     function ExamTimeTable(Request $req){
        $from=$req->get('from');
        $to=$req->get('to');


        $data3 = DB::table('tempuser_tests')
                    ->select('*')
                    ->whereBetween('date', [$from, $to])
                    ->get();
            
    
        return view('tempory_user.registration.exam_report1',['data3' => $data3]);
        
     }

     function ExamReport(Request $req){
        $id=$req->get('test_id');
        $marks_limit=$req->get('marks_limit');

        $data1 = DB::table('tempuser_tests')
             ->select('test_id','test_name','designation_id','test_type','date','time')
             ->where('test_id', $id)
             ->get();

        $data2 = DB::table('tempuser_test_users')
             ->select('application_id','marks','ststus')
             ->where('temptest_id', $id)
             ->get();

        if (isset($marks_limit)) {
            $update_ststus_passed = DB::table('tempuser_test_users')
                ->where('marks', '>', $marks_limit)
                ->update(['ststus' => "Passed"]);
                
            $update_ststus_failed = DB::table('tempuser_test_users')
                ->where('marks', '<', $marks_limit)
                ->update(['ststus' => "failed"]);

                return view('tempory_user.registration.exam_report2',['data1' => $data1],['data2' => $data2]);
        } 
            //  foreach ($data2 as $appliciant) {

            //     $appliciant->application_id;
                
            //   }
            

        return view('tempory_user.registration.exam_report2',['data1' => $data1],['data2' => $data2]);

     }

     function PaperMakingReport(Request $req){
        $id=$req->get('test_id');
        $date=$req->get('date');
        $designation=$req->get('designation_id');
        $test_name=$req->get('test_name');
        $to=$req->get('to');
        
        return view('tempory_user.registration.paper_making_request')->with('id',$id)->with('date',$date)->with('designation_id',$designation)->with('test_name',$test_name)->with('to',$to);
        
     }

     function ExamMarks(Request $req){

        $new_marks=$req->post('new_marks');
        $application_id=$req->post('application_id');

        echo $new_marks;
        echo $application_id;
        
        if($_POST[$application_id]=="update") {
            //echo $new_marks;
            //echo $application_id;

            $update_marks = DB::table('tempuser_test_users')
               ->where('application_id', $application_id)
               ->update(['marks' => $new_marks]);

            //   echo $new_marks;
            //   echo $application_id;
            return view('tempory_user.registration.exam_report2');
              //return redirect('temp_user/exam-report');
        //     $new_marks=$req->post('new marks');
            // $note->update($request->all());
            // return redirect('/card/'.$note->card_id); 
            
        
         }
         else{
             echo "else";
         }
         
     }

}
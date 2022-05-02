@extends('ma.ma_master')
@section('ma')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<style>
	
	@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
	.search-box{
		display: inline-block;
	}

    
*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

.show-btn, .container{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

#show{
  display: none;
}

.container{
    
  display: none;
  margin-left: auto;
    margin-right: auto;
  width: 410px;
  padding: 30px;
  box-shadow: 0 0 8px rgba(0,0,0,0.1);
}

#show:checked ~ .container{
  display: block;
}

.container .close-btn{
  position: absolute;
  right: 20px;
  top: 15px;
  font-size: 18px;
  cursor: pointer;
}

.container .close-btn:hover{
  color: #3498db;
}


</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
		
			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">User List</h3>

				  <!-- mudeesha -->
				  <div class="search-area">
					  <form class="search" action="search" method="get">
					  	@csrf

					  	<div class="search-box">
						  <label for="">ID</label><br>
						  <input type="search" class="form-control form-control-sm" placeholder="Search" area-lable="Search" name="id">
						</div>

						<div class="search-box">
						  <label for="">Name</label><br>
						  <input type="search" class="form-control form-control-sm" placeholder="Search" area-lable="Search" name="name">
						</div>

						<div class="search-box">
						  <label for="">Gender</label><br>
						  <input type="search" class="form-control form-control-sm" placeholder="Search" area-lable="Search" name="gender">
						</div>

						<div class="search-box">
						  <label for="">Civil Status</label><br>
						  <input type="search" class="form-control form-control-sm" placeholder="Search" area-lable="Search" name="civil_status">
						</div>

						<div class="search-box">
						  <label for="">Current_Postal_Address</label><br>
						  <input type="search" class="form-control form-control-sm" placeholder="Search" area-lable="Search" name="current_postal_address">
						</div>

						<div class="search-box">
						  <label for="">Permenant Postal Address</label><br>
						  <input type="search" class="form-control form-control-sm" placeholder="Search" area-lable="Search" name="permenant_postal_address">
						</div>

						<div class="search-box">
						  <label for="">Current Mobile</label><br>
						  <input type="search" class="form-control form-control-sm" placeholder="Search" area-lable="Search" name="current_mobile">
						</div>

						<div class="search-box">
						  <label for="">Permenent Mobile</label><br>
						  <input type="search" class="form-control form-control-sm" placeholder="Search" area-lable="Search" name="permenant_mobile">
						</div>

						<div class="search-box">
						  <label for="">Police Division</label><br>
						  <input type="search" class="form-control form-control-sm" placeholder="Search" area-lable="Search" name="police_division">
						</div>

						<div class="search-box">
						  <label for="">Email</label><br>
						  <input type="search" class="form-control form-control-sm" placeholder="Search" area-lable="Search" name="email">
						</div>

						<div class="search-box">
						  <label for="">Birthday</label><br>
						  <input type="search" class="form-control form-control-sm" placeholder="Search" area-lable="Search" name="dob">
						</div>

						<div class="search-box">
						  <label for="">Age</label><br>
						  <input type="search" class="form-control form-control-sm" placeholder="Search" area-lable="Search" name="age_as_at_closing_date">
						</div>

						<div class="search-box">
						  <label for="">Citizenship</label><br>
						  <input type="search" class="form-control form-control-sm" placeholder="Search" area-lable="Search" name="citizenship">
						</div>

						<div class="search-box">
						  <label for="">NIC</label><br>
						  <input type="search" class="form-control form-control-sm" placeholder="Search" area-lable="Search" name="nic">
						</div>

						<div class="search-box">
						  <label for="">Driving_Licen_No</label><br>
						  <input type="search" class="form-control form-control-sm" placeholder="Search" area-lable="Search" name="driving_licen_no">
						</div>

						<div class="search-box">
						  <label for="">Driving Licen Issuing Date</label><br>
						  <input type="search" class="form-control form-control-sm" placeholder="Search" area-lable="Search" name="driving_licen_issuing_date">
						</div>

						<button type="submit" class="btn btn-rounded btn-success mb-5">Search</button>
					  </form>
				  </div>
                  <!-- <a href="{{route('users.add')}}" style="float: right;"  class="btn btn-rounded btn-success mb-5">Add User</a> -->
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						  
						<thead>
							<tr>
                            <th>Test ID</th>
                            <th>Designation Name</th>
                            <th>Test Name</th>
                            <th>Test Part</th>
                            <th>Test Type</th>
                            <th>Test Date</th>
                            <th>Test Time</th>
								
							</tr>
						</thead>
						<tbody>
                            @foreach($temp_test as $temp_test)
							<tr>
                            <td>{{$temp_test->test_id}}</td>
                            <td>{{$temp_test->designation_id}}</td>
                            <td>{{$temp_test->test_name}}</td>
                            <td>{{$temp_test->test_part}}</td>
                            <td>{{$temp_test->test_type}}</td>
                            <td>{{$temp_test->date}}</td>
                            <td>{{$temp_test->time}}</td>
								
							</tr>
						@endforeach	
						</tbody>
						<tfoot>
							
						</tfoot>
					  </table>
					  
                      <button type="submit" class="btn btn-rounded btn-success mb-5">Approve</button>

                      <div class="box-header with-border">
                          <hr>
                      <div class="center">
    <input type="checkbox" id="show">
        <label for="show" class="btn btn-rounded btn-success mb-5">View Exam Details</label>

        <div class=container>
        <div class="sidebar-menu tree">
            
                <label for="show" class="close-btn fas fa-times" title="close"></label>
                <div class="text">
                Login Form
                </div>
            

            <form action="exam-timetable" method="get">

               <div class="">
                  <label>From</label>
                  <input type="date" class="form-control form-control-sm" name="from" required>
               </div>
               <div class="">
                  <label>TO</label>
                  <input type="date" class="form-control form-control-sm" name="to" required>
               </div>
               <div class="">
                  <div class="inner"></div>
                  <input type="submit" class="btn btn-rounded btn-success mb-5">
               </div>
               
            </form>
            
        </div>
</div>
</div>

                      </div>
					</div>
				
				</div>
				<!-- /.box-body -->
				
			<!-- /.col -->

		  </div>
		  <!-- /.row -->
		  
      </div>
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>



@endsection
@extends('ma.ma_master')
@section('ma')

<style>
	
	@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
	.search-box{
		display: inline-block;
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
                  <a href="{{route('users.add')}}" style="float: right;"  class="btn btn-rounded btn-success mb-5">Add User</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						  
						<thead>
							<tr>
							<th width="5%">Id</th>
								<th>Name</th>
								<th>Gender</th>
								<th>civil Status</th>
								<th>current Postal Address</th>
								<th>Permenent Postal Address</th>
								<th>Current Contact No</th>
								<th>Permenent Contact No</th>
								<th>police Division</th>
								<th>Email</th>
								<th>Birth Day</th>
								<th>Age</th>
								<th>Citizenship</th>
								<th>NIC</th>
								<th>Driving Licence No</th>
								<th>Driving Licen Issuing Date</th>
								
							</tr>
						</thead>
						<tbody>
                            @foreach($temporary_users as $temporary_users)
							<tr>
								<td>{{$temporary_users['application_id']}}</td>
								<td>{{$temporary_users['fname']}} {{$temporary_users['mname']}} {{$temporary_users['lname']}}</td>
								<td>{{$temporary_users['gender']}}</td>
								<td>{{$temporary_users['civil_status']}}</td>
								<td>{{$temporary_users['current_postal_address']}}</td>
								<td>{{$temporary_users['permenant_postal_address']}}</td>
								<td>{{$temporary_users['current_mobile']}}</td>
								<td>{{$temporary_users['permenant_mobile']}}</td>
								<td>{{$temporary_users['police_division']}}</td>
								<td>{{$temporary_users['email']}}</td>
								<td>{{$temporary_users['dob']}}</td>
								<td>{{$temporary_users['age_as_at_closing_date']}}</td>
								<td>{{$temporary_users['citizenship']}}</td>
								<td>{{$temporary_users['nic']}}</td>
								<td>{{$temporary_users['driving_licen_no']}}</td>
								<td>{{$temporary_users['driving_licen_issuing_date']}}</td>
								
							</tr>
						@endforeach	
						</tbody>
						<tfoot>
							
						</tfoot>
					  </table>
					  
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
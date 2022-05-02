@extends('sar.sar_master')
@section('sar')


<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
		
			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Appliciant List</h3>
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
								<td>{{$temporary_users['emp_id']}}</td>
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
			  </div>
			          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>



@endsection
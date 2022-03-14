@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
	  <div class="container-full">
<section class="content">
		  <div class="row">
			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Profile</h3>
                  <a href="{{route('users.add')}}" style="float: right;"  class="btn btn-rounded btn-success mb-5">Update</a>
				</div>
                <div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
						@foreach($Employeez as $Employee)
							<tr>
							<!-- <td>profile_photo_path</td> -->
							<td>Emp_id</td><td>{{$Employee['Emp_id']}}</td></tr>
							<tr><td>Name</td><td>{{$Employee['Name']}}</td></tr>
							<tr><td>Current Postal Address</td><td>{{$Employee['Current_Postal_Address']}}</td><tr>
							<tr><td>Current Mobile</td><td> {{$Employee['Current_Mobile']}}  </td></tr>
							<tr><td> Driving Licen No</td><td>{{$Employee['Driving_Licen_No']}}</td></tr>
							<tr><td>Email</td><td>{{$Employee['Email']}}</td>
       
       </tr>
							<tr><td> Driving Licen Issuing Date</td> <td>{{$Employee['Driving_Licen_Issuing_Date']}}</td></tr>
							<tr><td> Department Id</td> <td>{{$Employee['Department_Id']}}</td></tr>
								
							</tr>
							@endforeach
						</thead>
						<tbody>
                            
						</tbody>
						<tfoot>
							
						</tfoot>
					  </table>
					</div>
				</div>
</div>
</div>

</section>
</div>
</div>                
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Profile</h1>
    
<form method="get" action="ShowProfile">
    
    <input type="submit" value="show">
<table border="1">
    <tr>
        <td>profile_photo_path</td>
        <td>Emp_id</td>
        <td>Name</td>
        <td>Current_Postal_Address
</td>
        <td>Current_Mobile</td>
        <td> Driving_Licen_No</td>
        <td>Email</td>
        <td> Driving_Licen_Issuing_Date</td>
        <td> Department_Id</td>

</tr>
@foreach($Employeez as $Employee)
<tr>

</tr>
        <!-- <td> {{$Employee['id']}}  </td> -->
        <!-- <td>{{$Employee['Emp_id']}}</td>
        <td>{{$Employee['Name']}}</td>
        <td>{{$Employee['Current_Postal_Address']}}</td>
        <td> {{$Employee['Current_Mobile']}}  </td>
        <td>{{$Employee['Driving_Licen_No']}}</td>
        <td>{{$Employee['Email']}}</td>
        <td>{{$Employee['Driving_Licen_Issuing_Date']}}</td>
        <td>{{$Employee['Department_Id']}}</td>
</td>
        
        
        

@endforeach
</tr>
</table>
</form>
</body>
</html> --> -->
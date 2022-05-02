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
				  
                  <!-- <a href="{{route('users.add')}}" style="float: right;"  class="btn btn-rounded btn-success mb-5">Add User</a> -->
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						  
						<thead>
							<tr>
                            <th>Test ID</th>
                            <th>Test Name</th>
                            <th>Test Part</th>
                            <th>Test Type</th>
                            <th>Test Date</th>
                            <th>Test Time</th>
								
							</tr>
						</thead>
						<tbody>
                            @foreach($data3 as $details)
							<tr>
                                <td>{{$details->test_id}}</td>
                                <td>{{$details->test_name}}</td>
                                <td>{{$details->test_part}}</td>
                                <td>{{$details->test_type}}</td>
                                <td>{{$details->date}}</td>
                                <td>{{$details->time}}</td>
								
							</tr>
						@endforeach	
						</tbody>
						<tfoot>
							
						</tfoot>
					  </table>

                      <div class="box-header with-border">
                          <hr>
                      <div class="center">
    <input type="checkbox" id="show">
        <label for="show" class="btn btn-rounded btn-success mb-5">View Exam Details</label>

        <div class=container>
        <div class="sidebar-menu tree">
            
                <label for="show" class="close-btn fas fa-times" title="close"></label>
                <div class="text">
                Genarate Exam Report
                </div>
            

            <form action="exam-report" method="get">
                
                <!-- <div class="data">
                   <label>Test ID</label>
                   <input type="text" name="test_id" required>
                </div> -->
 
                <div class="data">
                   <label>Exam ID</label>
                   <select name="test_id" class="form-control" required>
                      @foreach($data3 as $details)
                      <option value="{{$details->test_id}}">{{$details->test_id}}</option>
                      @endforeach	
                   </select>
                </div>
                
                <div class="btn">
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
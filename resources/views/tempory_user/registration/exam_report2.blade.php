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
                  @foreach($data1 as $details)
    
                    {{$details->test_id}} <br>
                    {{$details->test_name}} <br>
                    {{$details->test_type}} <br>
                    {{$details->designation_id}} <br>
                    {{$details->date}} <br>
                    {{$details->time}} <br>
                    
                  @endforeach

				  <!-- mudeesha -->
				  
                  <!-- <a href="{{route('users.add')}}" style="float: right;"  class="btn btn-rounded btn-success mb-5">Add User</a> -->
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						  
						<thead>
							<tr>
                                <th width="5%">Appliciant ID</th>
                                <!-- <th>Sign</th> -->
                                <th>Status
                                  <form action="exam-report" method="get">
                                    <div style="display: inline-block;">
                                    @foreach($data1 as $details)
                                      <input type="number" name="marks_limit" placeholder="Enter the Marks Limit" class="form-control form-control-sm">
                                      <input type="hidden" name="test_id" value="{{$details->test_id}}">
                                      <input type="submit" name="" class="btn btn-info" value="update">
                                    @endforeach
                                    </div>
                                  </form>
                                </th>
                                <th>Marks</th>
                                <th  width="25%">Edit Marks</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($data2 as $appliciant)
							<tr>
								<td>{{$appliciant->application_id}}</td>
                <td>{{$appliciant->ststus}}</td>
								<td>{{$appliciant->marks}}</td>
                                <form action="exam-marks" method="post">
                                @csrf
                                <td>
                                    <input type="number" name="new_marks">
                                    <input type="hidden" name="application_id" value="{{$appliciant->application_id}}" formaction="exam-marks">
                                    <input type="submit" name="{{$appliciant->application_id}}" class="btn btn-info" value="update" formaction="exam-marks">
                                </td>
                                
			
							</tr>
						@endforeach
                        
                        </form>	
						</tbody>
						<tfoot>
            <tr>
                            <td>nj</td>
                            <td>h</td>
                            <td>hh</td>
                            <td>
                                <input type="submit" class="btn btn-info" value="Update All" formaction="exam-report">
                            </td>
                        </tr>
						</tfoot>
					  </table>

                      <!-- SAR approvevel button -->
                      <input type="submit" value="Approve" class="btn btn-rounded btn-success mb-5">

                      
					</div>
				
				</div>
				<!-- /.box-body -->
                <h1>Make Paper Making Request</h1>
                @foreach($data1 as $details)
                <form action="paper-making-report">
                    <label for="to">To</label><br>
                    <textarea id="to" name="to" rows="5" cols="50" class="form-control form-control-sm"></textarea><br>
                    <input type="hidden" value="{{$details->test_name}}" name="test_name">
                    <input type="hidden" value="{{$details->designation_id}}" name="designation_id">
                    <input type="hidden" value="{{$details->date}}" name="date">
                    <input type="hidden" value="{{$details->test_id}}" name="test_id">
                    <input type="submit" value="Genarate Request Report" class="btn btn-rounded btn-success mb-5">
                </form>
                @endforeach
				
			<!-- /.col -->

		  </div>
		  <!-- /.row -->
		  
      </div>
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>



@endsection
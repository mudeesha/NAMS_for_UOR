@extends('tempory_user.temp_user_master')
@section('tempory_user')



<div class="content-wrapper">
	  <div class="container-full">



      <section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">New Employee's Application</h4>
     <h6 class="box-subtitle">University of Ruhuna </h6>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">

           <form method="post" action="application">
           @csrf 
             <div class="row">
               <div class="col-12">		

  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <h5>Surname <span class="text-danger">*</span></h5>
            <div class="controls">
              <input type="text" name="surname" class="form-control" required="" data-validation-required-message="This field is required">
                <div class="help-block"></div>
            </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <h5>First Name <span class="text-danger">*</span></h5>
            <div class="controls">
              <input type="text" name="fname" class="form-control" required="" data-validation-required-message="This field is required">
                <div class="help-block"></div>
            </div>
        </div> 
      </div>
  </div>
  
  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <h5>Middle Name <span class="text-danger">*</span></h5>
            <div class="controls">
              <input type="text" name="mname" class="form-control" required="" data-validation-required-message="This field is required">
                <div class="help-block"></div>
            </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <h5>Last Name <span class="text-danger">*</span></h5>
            <div class="controls">
              <input type="text" name="lname" class="form-control" required="" data-validation-required-message="This field is required">
                <div class="help-block"></div>
            </div>
        </div> 
      </div>
  </div>
               

            <div class="row">
              <div class="col-md-6">                  
                <div class="form-group">
                  <h5>Gender <span class="text-danger">*</span></h5>
                    <div class="controls">
                      <input type="radio" id="male" name="gender" value="male" class="form-control">
                      <label for="male">Male</label>
                      <input type="radio" id="female" name="gender" value="female" class="form-control">
                      <label for="female">Female</label>
                    <div class="help-block"></div></div>
                </div>
              </div>



                <div class="col-md-6">
                  <div class="form-group">
                    <h5>Civil Status <span class="text-danger">*</span></h5>
                      <div class="controls">
                        <input type="text" name="civil_status" class="form-control" required="" data-validation-required-message="This field is required"> 
                          <div class="help-block">
                          </div>
                      </div>
                  </div>
                 </div>

             </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <h5>Current Address <span class="text-danger">*</span></h5>
            <div class="controls">
              <input type="text" name="current_postal_address" class="form-control" required="" data-validation-required-message="This field is required">
                <div class="help-block"></div>
            </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <h5>Permenent Address <span class="text-danger">*</span></h5>
            <div class="controls">
              <input type="text" name="permenant_postal_address" class="form-control" required="" data-validation-required-message="This field is required">
                <div class="help-block"></div>
            </div>
        </div> 
      </div>
  </div>

  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <h5>Current Mobile No <span class="text-danger">*</span></h5>
            <div class="controls">
              <input type="tel" pattern="+94[7-9]{2}-[0-9]{3}-[0-9]{4}" name="current_mobile" class="form-control" required="" data-validation-required-message="This field is required">
                <div class="help-block"></div>
            </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <h5>Permenent Mobile <span class="text-danger">*</span></h5>
            <div class="controls">
              <input type="tel" pattern="+94[7-9]{2}-[0-9]{3}-[0-9]{4}" name="permenant_mobile" class="form-control" required="" data-validation-required-message="This field is required">
                <div class="help-block"></div>
            </div>
        </div> 
      </div>
  </div>

  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <h5>Police Devision <span class="text-danger">*</span></h5>
            <div class="controls">
              <input type="text" name="police_division" class="form-control" required="" data-validation-required-message="This field is required">
                <div class="help-block"></div>
            </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <h5>email <span class="text-danger">*</span></h5>
            <div class="controls">
              <input type="email" name="email" class="form-control" required="" data-validation-required-message="This field is required">
                <div class="help-block"></div>
            </div>
        </div> 
      </div>
  </div>

  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <h5>Birthday <span class="text-danger">*</span></h5>
            <div class="controls">
              <input type="date" name="dob" class="form-control" required="" data-validation-required-message="This field is required">
                <div class="help-block"></div>
            </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <h5>Age as Closing Date <span class="text-danger">*</span></h5>
            <div class="controls">
              <input type="number" name="age_as_at_closing_date" class="form-control" required="" data-validation-required-message="This field is required">
                <div class="help-block"></div>
            </div>
        </div> 
      </div>
  </div>

  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <h5>Citizenship <span class="text-danger">*</span></h5>
            <div class="controls">
              <input type="text" name="citizenship" class="form-control" required="" data-validation-required-message="This field is required">
                <div class="help-block"></div>
            </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <h5>NIC Number <span class="text-danger">*</span></h5>
            <div class="controls">
              <input type="text" name="nic" class="form-control" required="" data-validation-required-message="This field is required">
                <div class="help-block"></div>
            </div>
        </div> 
      </div>
  </div>

  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <h5>Driving Licence <span class="text-danger">*</span></h5>
            <div class="controls">
              <input type="text" name="driving_licen_no" class="form-control" required="" data-validation-required-message="This field is required">
                <div class="help-block"></div>
            </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <h5>Driving Licence issued date <span class="text-danger">*</span></h5>
            <div class="controls">
              <input type="date" name="driving_licen_issuing_date" class="form-control" required="" data-validation-required-message="This field is required">
                <div class="help-block"></div>
            </div>
        </div> 
      </div>
  </div>

  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <h5>Job Role <span class="text-danger">*</span></h5>
            <div class="controls">
              <select name="designation" id="select" required="" class="form-control">
                               <option value="" disabled="">Select Your Role</option>
                               <option value="Registrar">Registrar</option>
                               <option value="manager_assistent">Manager Assistent</option>
                               <option value="security">Security</option>
                               <option value="helper">Helper</option>
                               <option value="technical_officer">Technical Officer</option>
                               <option value="manager_assistent">Manager Assistent</option>
                               <option value="Other">Other</option>
              </select>
            <div class="help-block"></div>
        </div>
      </div>
  </div>

      <div class="col-md-6">
        <div class="form-group">
          <h5>Photo <span class="text-danger">*</span></h5>
            <div class="controls">
              <input type="file" name="profile_photo_path" class="form-control" required="" data-validation-required-message="This field is required">
                <div class="help-block"></div>
            </div>
        </div> 
      </div>
  </div> 

                <div class="text-xs-right">
                   <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
               </div>
                
            
               
           </form>
           <div></div>
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
   </div>
   <!-- /.box-body -->
 </div>
 <!-- /.box -->

</section>





    </div>
</div>



@endsection
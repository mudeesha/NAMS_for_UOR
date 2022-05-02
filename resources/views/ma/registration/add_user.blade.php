@extends('admin.admin_master')
@section('admin')



<div class="content-wrapper">
	  <div class="container-full">



      <section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">System Add User Form</h4>
     <h6 class="box-subtitle">You Can Add Users </h6>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">

           <form method="post" action="{{route('users.store')}}">
           @csrf 
             <div class="row">
               <div class="col-12">		
                   
               

            <div class="row">

                <div class="col-md-6">                  
                   <div class="form-group">
                       <h5>Select Role <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <select name="usertype" id="select" required="" class="form-control">
                               <option value="" disabled="">Select Your Role</option>
                               <option value="Registrar">Registrar</option>
                               <option value="VC">VC</option>
                               <option value="SAR">SAR</option>
                               <option value="AR">AR</option>
                               <option value="Dean">Dean</option>
                               <option value="MA">MA</option>
                               <option value="Other">Other</option>
                           </select>
                       <div class="help-block"></div></div>
                   </div>
                </div>



                <div class="col-md-6">
                <div class="form-group">
                       <h5>Enter Your Name <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="name" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                      
                   </div>
                 </div>


             </div>



     <div class="row">

     <div class="col-md-6">
                <div class="form-group">
                       <h5>Enter Your Password <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="password" name="password" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                      
                   </div>
                 </div>

        <!-- <div class="col-md-6">                  
                    <div class="form-group">
                       <h5>Enter Date <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="date" name="date" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                      
                     </div>   
            </div> -->



        <div class="col-md-6">
                 <div class="form-group">
                       <h5>Enter Your Email <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="email" name="email" class="form-control" required="" data-validation-required-message="This field is required">
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
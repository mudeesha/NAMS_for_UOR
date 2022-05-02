
<style>
		
	.search-box{
		display: inline-block;
	}


</style>

<div class="center">
         <input type="checkbox" id="show1">
         <label for="show1" class="show1-btn">View Form</label>
         <div class="form-container">
            <label for="show1" class="close-btn fas fa-times" title="close"></label>
            <div class="main-text">
               Designations
            </div>
            <form action="desig-setup2" method="get">
              <?php  
                $designations=[];
              ?>
              
            <!-- @csrf -->
              @foreach($designation as $desig)
              <div style="display:flex;">
                  <div class="main_label">
                    <label for="">{{$desig->designation_name}}</label>
                  </div>
           
                  <div style="display:flex">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="flexCheckChecked" value="{{$desig->designation_name}}_Exam" name="{{$desig->designation_name}}[]">
							<label class="form-check-label" for="flexCheckDefault">
								Default checkbox
							</label>
						</div>

						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="flexCheckChecked" value="{{$desig->designation_name}}_Exam" name="{{$desig->designation_name}}[]">
							<label class="form-check-label" for="flexCheckChecked">
								Checked checkbox
							</label>
						</div>
					</div>
          
              <input class="form-control" type="hidden" id="" name="returned_designations[]" value="{{$desig->designation_name}}">
              </div>
              
              @endforeach
              <div>
                <input type="submit" class="btn btn-rounded btn-success mb-5" value="Save">
              </div>
            </form>
            <form action="">
                <input type="checkbox">
                <label for=""></label>
            </form>
         </div>
      </div>
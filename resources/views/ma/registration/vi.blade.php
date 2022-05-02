<!DOCTYPE html>
<html lang="en">
  <style>
	  @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  /* display: grid;
  height: 100%; */
  /* place-items: center; */
  background: #664AFF;
}
.checkbox{
  height: 60px;
  width: 150px;
  padding: 10px;
  display: flex;
  background: #fff;
  align-items: center;
  border-radius: 5px;
  box-shadow: 5px 5px 30px rgba(0,0,0,.2);
  justify-content: space-between;
  display: inline-block;
  
}
.checkbox input{
  outline: none;
  height: 20px;
  width: 45px;
  border-radius: 50px;
  -webkit-appearance: none;
  position: relative;
  background: #e6e6e6;
  box-shadow: inset 0 0 5px rgba(0,0,0,0.2);
  transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.checkbox input:checked{
  background: #664AFF;
}
.checkbox input:before{
  position: absolute;
  content: "";
  left: 0;
  height: 100%;
  width: 20px;
  background: linear-gradient(#fff,#f2f2f2,#e6e6e6,#d9d9d9);
  box-shadow: 0 2px 5px rgba(0,0,0,.2);
  border-radius: 50px;
  transform: scale(0.85);
  transition: left 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
input:checked:before{
  left: 25px;
}
.checkbox .text:before{
  content: "Disabled";
  font-size: 15px;
  padding-right: 6px;
  font-weight: 500;
  color: #bfbfbf;
}
input:checked ~ .text:before{
  color: #664AFF;
  font-size: 15px;
  padding-right: 6px;
  font-weight: 500;
  content: "Available";
}

.checkbox-raw{
	padding:20px;	
}

.main_label{
	display: inline-block;
	height: 60px;
	width: 150px;
	padding:10px;
	background: #fff;
	border-radius: 5px;
	box-shadow: 5px 5px 30px rgba(0,0,0,.2);
	
}
	

}


  </style>

  <h1>Designations</h1>
  <!-- <form action="">
	  <label>Add designations</label><br>
	  <input type="text" id="designation" name="designation">
  	  <input type="submit" value="Submit">
  </form> -->
  <form action="desig-setup2" method="get">
    <?php $items=0; 
      $designations=[];
    ?>
    {{$items}}
  <!-- @csrf -->
    @foreach($designation as $desig)
    <div class="checkbox-raw">
        <div class="main_label">
          <label for="">{{$desig->designation_name}}</label>
        </div>
 
        
          <div class="checkbox">
            <input type="checkbox" value="{{$desig->designation_name}}_Exam" id="{{$desig->designation_name}}" name="{{$desig->designation_name}}[]">
            <label for="click" class="text"><div class="upper-text">Exam</div></label>
          </div>

          <div class="checkbox">
            <input type="checkbox" value="{{$desig->designation_name}}_Practical" id="{{$desig->designation_name}}" name="{{$desig->designation_name}}[]">
            <?php //$designations[$items]="{$desig->designation_name}_practical"?>
            <label for="click" class="text"><div class="upper-text">Practical</div></label>
          </div>

          <input type="hidden" id="" name="returned_designations[]" value="{{$desig->designation_name}}">
    </div>
    <?php $items=$items+1 ?>
    @endforeach
    <div>
      <input type="submit" value="Save">
    </div>
  </form>

	

	
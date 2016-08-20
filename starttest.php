<!DOCTYPE html>
<html>
<body style="background-color:#77dd77;">
<h3> <font color = "red"> Start Test!</font> </h3>



<script type="text/javascript">
<!-- Gracefully hide from old browsers

// Javascript to compute elapsed time between "Start" and "Finish" button clicks
function timestamp_class(this_current_time, this_start_time, this_end_time, this_time_difference) { 
    	this.this_current_time = this_current_time;
    	this.this_start_time = this_start_time;
    	this.this_end_time = this_end_time;
    	this.this_time_difference = this_time_difference;
    	this.GetCurrentTime = GetCurrentTime;
    	this.StartTiming = StartTiming;
    	this.EndTiming = EndTiming;
    }

    //Get current time from date timestamp
    function GetCurrentTime() {
    var my_current_timestamp;
    	my_current_timestamp = new Date();		//stamp current date & time
    	return my_current_timestamp.getTime();
    	}

    //Stamp current time as start time and reset display textbox
    function StartTiming() {
    	this.this_start_time = GetCurrentTime();	//stamp current time
    	document.TimeDisplayForm.TimeDisplayBox.value = 0;	//init textbox display to zero
    	}

    //Stamp current time as stop time, compute elapsed time difference and display in textbox
    function EndTiming() {
    	this.this_end_time = GetCurrentTime();		//stamp current time
    	this.this_time_difference = (this.this_end_time - this.this_start_time) / 1000;	//compute elapsed time
		document.TimeDisplayForm.TimeDisplayBox.value = this.this_time_difference;	//set elapsed time in display box
			
	}

var time_object = new timestamp_class(0, 0, 0, 0);  //create new time object and initialize it

//-->
</script>
 <table width="280" border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td>		
			<form>
				<img onClick="time_object.StartTiming()"; name="StartButton" type="button" src="img/start.png" height="50" style="background-color:transparent; border-color:transparent;"/>
			</form>
	  </td>
	  <td>		
			<form>
				<img onClick="time_object.EndTiming()"; name="EndButton" type="button" src="img/stop.png" height="50" style="background-color:transparent; border-color:transparent;"/>
			</form>	
	  </td>
    </tr>	   
  </table>
  
    <form name="TimeDisplayForm">
		<form action="">	
			Elapsed time1:
			  <input type="text" name="TimeDisplayBox" size="6">seconds
			  <input type="reset" name="Reset">
		</form>
		<form action="">
			Elapsed time2:
			  <input type="text" name="TimeDisplayBox2" size="6">seconds
			  <input type="reset" name="Reset">
		</form>
		<form action="">
			Elapsed time3:
			  <input type="text" name="TimeDisplayBox3" size="6">seconds
			  <input type="reset" name="Reset">
		</form>	   
    </form>
	
	
	
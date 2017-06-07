<?php
	require_once './connect_db/connect.php';
	
	$dateSelected = $_GET['dateSelected'];
	
	
	$query = mysqli_query($connection, "SELECT * FROM booking WHERE date = '$dateSelected'");

	if($query){
		$times = array("8:30am - 11:30am", "9:30am - 12:30pm", "11:00am - 2:00pm", "12:00pm - 3:00pm", "1:00pm - 4:00pm");
		if(mysqli_num_rows($query) > 0 ){
			$avail_options = $times;
			while($result = mysqli_fetch_assoc($query)){
				if(in_array($result['time'], $times)) {
					array_splice($avail_options, array_search($result['time'], $avail_options), 1);
				}
			}

			if(count($avail_options) > 0 ){
				foreach ($avail_options as $option) {
					echo "<option value = '".$option."'>".$option."</option>";	
				}
			}
			else {
				echo "<option value = ''>No available time for this date.</option>";
			}
			
		}
		else{
			foreach ($times as $option) {
				echo "<option value = '".$option."'>".$option."</option>";	
			}
		}
	}
	else{
		exit();
	}
	
	
?>
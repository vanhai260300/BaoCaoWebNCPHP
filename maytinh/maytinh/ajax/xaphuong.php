<?php
	include('../connect.php');
	$ma_quanhuyen= $_POST['quanhuyen'];
	$sl= "select * from ward where districtid=".$ma_quanhuyen;
	$exec= mysqli_query($connect, $sl);
	while($row= mysqli_fetch_array($exec)){
		echo '<option value="'.$row['wardid'].'">'.$row['type'].' '.$row['name'].'</option>';
} ?>
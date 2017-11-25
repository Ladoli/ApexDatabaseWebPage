<?php
		$val1 = $_POST['val1'];
		$val2 = $_POST['val2'];
		$val3 = $_POST['val3'];
		$val4 = $_POST['val4'];
			
			$link = mysqli_connect("localhost", "root", "", "demo2300");
			if($link)
			{

				$sql = "INSERT into INGREDIENTS VALUES ('$val1' ,'$val2', '$val3', '$val4')";
				$result = mysqli_query($link, $sql);
				
			}
			

?>
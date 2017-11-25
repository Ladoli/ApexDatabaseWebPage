<?php
		
			
			$link = mysqli_connect("localhost", "root", "", "demo2300");
			if($link)
			{
				$headernames = "";

				
				$sql = "SHOW COLUMNS FROM INGREDIENTS";
				$result = mysqli_query($link, $sql);
				while($row = mysqli_fetch_array($result)){
				$headernames .=  $row['Field'].", ";
				}
				
				echo $headernames;
				
			}
			

?>
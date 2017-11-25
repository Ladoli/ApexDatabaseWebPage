<?php
			$link = mysqli_connect("localhost", "root", "", "demo2300");
			echo "TEST";
			if($link)
			{
				$result = mysqli_select_db($link, 'login');
				echo "TEST";
				if($result)
				{
					
						
						$query = "SELECT count(*) FROM INGREDIENTS";
						$rowCount = mysqli_query($link, $query);
					
						
						
						echo $rowCount
						
						
				}
			}
			
			echo "TEST";
?>
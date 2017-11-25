<?php
		
			
			$link = mysqli_connect("localhost", "root", "", "demo2300");
			if($link)
			{
				$headernames = "";

				
				$sql = "SELECT * FROM INGREDIENTS";
				$result = mysqli_query($link, $sql);
				while($row = mysqli_fetch_assoc($result))
				{
				$headernames .=  $row["Ingredientid"].", ".$row["Unit"].", ".$row["IngredientName"].", ".$row["Cost"]."^";
				}
				
				echo $headernames;
				
			}
			

?>
<?php
		$table =$_POST['table'];
		$header =$_POST['headers'];
		$headernames = explode(", ",$header[sizeof($header)]);		
			$link = mysqli_connect("localhost", "root", "", "demo2300");
			if($link)
			{
				$content = "";
				$rowfetcher ="";
				$count = 0;
				$sql = "SELECT * FROM " . $table;
				$result = mysqli_query($link, $sql);
				while($row = mysqli_fetch_assoc($result))
				{
				$content .=  $row[$headernames[0]].", ".$row[$headernames[1]].", ".$row[$headernames[2]].", ".$row[$headernames[3]]."^";
				}
				
				echo $content;
				
			}
			

?>
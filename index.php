<?php	
	echo "<h2> Mohamed Abdelmoneim - Machine learning on Embedded Systems, the IoT </h2><hr>"	;
	$query = $_SERVER['QUERY_STRING'];
	if($query != null){
		$city= $_GET['city'];
		$id= $_GET['id'];
		$greet=$_GET['greet'];
		$qLine = $id.",".$city.",".$greet."\n";
		
		$file = fopen("data.csv", "a") or exit("Unable to open file!");
		fwrite($file,$qLine);
		fclose($file);
	}
	

	$file = fopen("data.csv", "r") or exit("Unable to open file!");
	while (!feof($file)) {
		$line = fgets($file);
		$myarray= explode(',',$line);
		
		if(count($myarray) > 1){
			echo "<b>$myarray[0]</b>"."<b>@</b>"."<b>$myarray[1]</b>".": "."<i>$myarray[2]</i>"."<br><hr>";
		}
	}
	fclose($file);
?>




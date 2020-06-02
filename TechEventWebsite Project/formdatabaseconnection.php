<?php
	
	$conn = mysqli_connect("localhost", "root", "", "Registeration");
	if (!$conn) 
	{
    	die("Connection failed: " . mysqli_connect_error());
	}
	if(isset($_POST['submit']))
	{ 
		$name = $_POST['name'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$event;
		$workshop;
		foreach ($POST['event'] as $i ) 
		{
  			$event= $i;
  			$query = "INSERT INTO Record(NAME, EVENT, WORKSHOP, EMAIL, MOBILENO) VALUES ('$name', '$event',  '$workshop', $email', '$contact')" ;

		}
		foreach ($POST['workshop'] as $i ) 
		{
  			$workshop[] = $i;
  			$query = "INSERT INTO Record(NAME, EVENT, WORKSHOP, EMAIL, MOBILENO) VALUES ('$name', '$event',  '$workshop', $email', '$contact')" ;
		}
		if (mysqli_query($conn, $query)) 
		{
    		echo "Regitered successfully";
		} 
		else 
		{
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
?>


<?php

$server='localhost';
$user = 'root';
$password = '';
$db = 'coronadb';

$con = mysqli_connect($server, $user, $password, $db);

if($con){
	?>
	<script>
		alert("connection successful");
	</script>
	<?php
}
else {
	?>
	<script>
		alert("No connection");
	</script>

	
	<?php
}


$data = file_get_contents('https://api.covid19api.com/summary');
$coronadata = json_decode($data);


?>
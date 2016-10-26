
<?php



/* Database config */

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'ajaxphpmysql'; 

/* End config */



$con = mysqli_connect($db_host,$db_user,$db_pass,$db_database);

if (mysqli_connect_errno()){
die("Database connection failed: ". 
mysqli_connect_error()."(".mysqli_connect_errno().")"
);
}


 if (isset($_POST['submit'])){
$file = $_FILES['file']['tmp_name'];
$handle = fopen($file,'r');
while (($fileop = fgetcsv($handle,2000,',')) !== false){

echo $fileop[0];?>
<br/>
<?Php

$place= $fileop[0];
$query3 = "INSERT INTO Akure (place) VALUES ('$place')";
		$result3 = mysqli_query($con, $query3);
		
}
if($result3){
echo "data uploaded successfully";
}
}?>
<h2>Upload data</h2>
						<form action ="uploaddata.php" method="post" enctype="multipart/form-data">
							<p>Upload Places: <input type="file" name="file" id=""/></p>
							
							
							<input type="submit" name="submit" value="Submit" id="" />
							</form>
							<br />
							
</div>	
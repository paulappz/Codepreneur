<?php



/* Database config */

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'wakaondo'; 

/* End config */



$con = mysqli_connect($db_host,$db_user,$db_pass,$db_database);

if (mysqli_connect_errno()){
die("Database connection failed: ". 
mysqli_connect_error()."(".mysqli_connect_errno().")"
);
}

//CREATE QUERY TO DB AND PUT RECEIVED DATA INTO ASSOCIATIVE ARRAY
if (isset($_REQUEST['query'])) {
   $query = $_REQUEST['query'];
	
    $query2= "SELECT place FROM Area WHERE place LIKE '%{$query}%'";
			$result2 = mysqli_query($con, $query2);
    
    $array = array();
    while ($row = mysqli_fetch_array($result2)) {
        $array[] = array (
            'label' => $row['place'],
            'value' => $row['place']
            
        );
   }
    //RETURN JSON ARRAY
    echo json_encode ($array);
}

?>

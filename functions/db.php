<?php 

$con = mysqli_connect('eu-cdbr-west-01.cleardb.com', 'beabe289a11738', '91f7d04f', 'heroku_56756d9f02bc645');


function row_count($result){


return mysqli_num_rows($result);

}



function escape($string) {
	global $con;

	return mysqli_real_escape_string($con, $string);


}

function confirm($result) {

	global $con;

	if(!$result) {

		die("QUERY FAILED" . mysqli_error($con));

	}

}



function query($query) {

	global $con;

	$result =  mysqli_query($con, $query);

	confirm($result);

	return $result;


}





function fetch_array($result) {

	global $con;


	return mysqli_fetch_array($result);



}









 ?>
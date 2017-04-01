<?php 
include("includes/dbinfo.inc.php");


if(isset($_POST["category"])) {
	$run_query = oci_parse($con, "SELECT * FROM categories ORDER BY category_name");
	oci_execute($run_query);

	echo "<div class='nav'><li class='label label-danger'><h5><b>CATEGORIES</b></h5></li>";
		
	if (oci_num_rows($run_query) >= 0) {
		while($row = oci_fetch_array($run_query)) {
				$category_id = $row[0];
				$category_name = $row[1];
				
				echo "<li><a href='#' class='category' cid='$category_id'>$category_name</a></li>";
		} 

		echo "</div>";
	}
}

if(isset($_POST["animal"])) {
	$run_query = oci_parse($con, "SELECT * FROM animals ORDER BY animal_name");
	oci_execute($run_query);

	echo "<div class='nav'><li class='label label-danger'><h5><b>ANIMALS</b></h5></li>";
		
	if (oci_num_rows($run_query) >= 0) {
		while($row = oci_fetch_array($run_query)) {
				$animal_id = $row[0];
				$animal_name = $row[1];
				echo "<li><a href='#' class='brand' aid='$animal_id'>$animal_name</a></li>";
		} 

		echo "</div>";
	}
}



?>
<?php 
	define("ORA_CON_UN", "petshop");
	define("ORA_CON_PW", "kankaloo");
	define("ORA_CON_DB", "//localhost/XE");

	$con = oci_pconnect(ORA_CON_UN,ORA_CON_PW,ORA_CON_DB);
 ?>
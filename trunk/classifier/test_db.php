<?php
// for every single file, include this file
require_once("./include/init.php");

echo "This test programme will list out all users in your database";

//testing the replace function, it works!
$result = db_query("SELECT * FROM `%s`", "user");

// this is the right way to write the select user query
//$result = db_query("SELECT * FROM user");

// test if you have users in database or not
if (mysql_num_rows($result) == 0)
	echo "<h3>oops, you have no user in your database, can u manually add some?</h3>";
else	
	while ($row = db_fetch_array($result)){	
		echo('<div><h3>user name:</h3> '. $row['username']."<br>");
		echo('<h3>password:</h3> '.$row['password']."<br></div>");
	}

?>
<?php
   require_once("./include/init.php");
   require_once('template/header.php');
   $login = check_logged_in(); 
   $nid = isset($_POST['node_id'])?$_POST['node_id']:$_GET['nid'];
   $query_get = "SELECT n_name, n_url from post_node WHERE nid = $nid";
   $result = db_query($query_get);
   $row = db_fetch_array($result);
   

   echo'<div class="edit_nodes">
		<form name="edit" action="midman/node_op.php" method="post">	     
        <input type="hidden" name="node_id" value="'.$nid.'" >
				 <div>New Title:</div>
		         <input type="text" name="title" value = "'.$row['n_name'].'" >
		         <br/>
		         <div>New URL:</div>
		         <input type="text" name="url" value = "'.$row['n_url'].'" >
		         <br/>
		         <div>New Tag:</div>
		         <input type="text" name="t_names" />
		         <br/>
        <input type="submit" name="op" value="Edit" /> 
		</form>';

require_once('template/footer.php');
?>		         
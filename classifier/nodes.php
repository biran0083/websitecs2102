<?php
   require_once("./include/init.php");
   require_once('template/header.php');
   require_once('midman/user_nodes.php');
   $login = check_logged_in();   //where to go if login fail
   $nid = 1;

   if (!$login){
   	echo "login in fail";
   }
   else
       {
	    echo '<div class="add_nodes">
	          <form name="add" action="midman/node_op.php" method="post">
			     <input type="hidden" name="node_id" value="0" >
				 <div>Title:</div>
		         <input type="text" name="title" />
		         <br/>
		         <div>URL:</div>
		         <input type="text" name="url" />
		         <br/>
				 <input type="submit" name="op" value="Add" />
			  </form>';
	    
        echo  '<div class="nodes_display">  
               <ul>dddd</ul>'.
	           node_search().'
	           </div>';
           
		}
require_once('template/footer.php');
?>
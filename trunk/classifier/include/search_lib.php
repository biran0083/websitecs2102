<?php

/**
 * search main function
 * @return unknown_type
 */

function s_search(){
	$key_words = $_POST['searchtext'];
	
	$sql_search_base = " SELECT DISTINCT(pn.nid),pn.* FROM post_node AS pn ";
	$sql_search_base.= " INNER JOIN node_tag AS nt ON (nt.nid = pn.nid)";
	$sql_search_base.= " INNER JOIN tag AS t ON (t.tid = nt.tid)";
	$sql_search_base.= " INNER JOIN node_category AS nc ON (nc.nid = pn.nid)";
	//$sql_search_base.= " nc"
	$result = db_query($sql_search_base);
	//die();
	return $result;
}

?>
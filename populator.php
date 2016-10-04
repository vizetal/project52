<?php
//populator

require 'dal.php';

function get_category_list($config)
{
	$conn = create_connection($config);
	$sql  = "SELECT category_name FROM categories ORDER BY id";
	return (fetch_all($conn, $sql));
}


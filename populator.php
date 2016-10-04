<?php
//populator
require 'config.php';
require 'dal.php';

function get_category_list()
{
	$conn = create_connection($config);
	$sql  = "SELECT category_name FROM categories ORDER BY id";
	print_r(fetch_all($conn, $sql));

}
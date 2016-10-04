<?php
// DB wrapper
//config

function create_connection($config)
{
	return mysqli_connect($config['host'], $config['user'], $config['pass'], $config['db']);
}

function insert_data($conn, $sql)
{
	if ($conn->query($sql) === true) 
    	return true;
	 else 
    	return false;
}

function fetch_all($conn, $sql)
{
	$result = mysqli_query($con, $sql);
	$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
	mysqli_free_result($result);
	return $data;
}
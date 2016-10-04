<?php
// DB wrapper
//config

function create_connection($config)
{
	return mysqli_connect($config['host'], $config['user'], $config['pass'], $config['db']);
}

function insert_data($conn, $sql)
{
	if ($conn->query($sql) === TRUE) 
    	return TRUE;
	 else 
    	return $conn->error;
}
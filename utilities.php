<?php
//utilities
function redirect_to_index($message)
{
	header('location: index.php?code=' . $message);
}

function sanitize_ip($conn, $data)
{
	return mysqli_real_escape_string($conn, $data);
}

function log_query($data)
{
	echo "<code>" . $data . "</code>";
}

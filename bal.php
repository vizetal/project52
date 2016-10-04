<?php

// Business layer
require 'config.php';
require 'dal.php';
require 'utilities.php';

$op   = (isset($_REQUEST['op']))   ? $_REQUEST['op']   : null;
$data = (isset($_REQUEST['data'])) ? $_REQUEST['data'] : null;

switch( $op )
{
	case 'create_category':
						$conn = create_connection($config);
						$cname = sanitize_ip($conn, $data['category']);
						$sql = "insert 
								into categories(category_name,parent_id)
								values ('" . $cname . "', '" . $data['parent_category_id'] . "')";
						

						$msg = (insert_data($conn, $sql)) ? 'CC1' : 'CC0';
						redirect_to_index($msg);
						break;

	case null;			
						redirect_to_index('NRQ');
}





//tests
/*
echo 'connection create...';
print_r(create_connection($config));
*/
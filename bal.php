<?php

// Business layer
require 'config.php';
require 'dal.php';

//tests
echo 'connection create...';
print_r(create_connection($config));
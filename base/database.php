<?php
# Database
define('database_host', 'localhost');
define('database_name', 'worpen');
define('database_user', 'root');
define('database_pass', 'root');
define('database_prefix', 'worpen_');

$connect = new mysqli(database_host, database_user, database_pass, database_name);
// if ($connect->connect_error) { die("Error connecting to MySQL: " . $connect->connect_errno); }
if ($connect->connect_error) { die("Ops, error connecting to MySQL"); }

<?php
session_start();

$db_host = getenv('DB_HOST');
$db_user = getenv('DB_USER');
$db_password = getenv('DB_PASSWORD');
$db_name = getenv('DB_NAME');

$conn = mysqli_connect(
  $db_host,
  $db_user,
  $db_password,
  $db_name
) or die(mysqli_error($conn));

?>


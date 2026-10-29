<!-- //Practice from CodeJogot Documentation -->

<!-- Chapter-22: PHP Include vs Require -->



<?php require "header-practice.php";?>
<?php require_once "header-practice.php"?>

<?php include "header-practice.php"?>
<?php include_once "header-practice.php" ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <h1>Welcome to my website!</h1>
</body>
</html>

<?php 
include "footer-practice.php" ;

if(!file_exists("footer-practice.php")){
  die("Error: File not found!");        //Best practice
}
else{
  include "footer-practice.php";
}

echo "hello";

?>



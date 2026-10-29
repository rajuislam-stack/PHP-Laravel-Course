<!-- //Practice from codejogot documentation -->
<?php

$name = '';
$email = '';

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["myemail"])){

  if(empty($_POST['myname'])){
    echo "Empty name <br>";
  }
  else{
    $name = htmlspecialchars($_POST['myname']);
  }


  if(empty($_POST["myemail"])){
    echo "Empty email <br>";
  }
  else if(!filter_var($_POST["myemail"],FILTER_VALIDATE_EMAIL) ){
    echo "Invalid email <br>";  //Form Validation
  }
  else{
    // $email = htmlspecialchars($_POST['myemail']);
    $email = filter_var($_POST['myemail'], FILTER_SANITIZE_EMAIL);
  }


  echo "Name: "  . $name . "<br>";   //Proccessing from data
  echo "Email: " . $email . "<br>";
}
else{
  echo "Its a get method <br>";        
  echo "Name: " . $_GET['myname'] . "<br>";
  echo "Email: " . $_GET['myemail'] . "<br>";
}

?>
<!-- //Class-86 //Chapters: PHP Functions, Array, Super Global Variables, Form Handling with GET & POST Method -->

<?php

//Chapter-11: PHP Functions


function sum($x, $y){     //User define function
  return $x + $y;
}

echo sum(5,20);
echo "<br>";


$arr1 = [48,58,3,45];
echo count($arr1);       //Built in function
echo "<br>";



//Chapter-12: PHP Arrays


$indexedArr = ['Apple','Banana',"Mango"];
echo $indexedArr[1];
echo "<br>";

$associativeArr =  ["apple"=> 5, "isStock"=> true , false => "hello"];
echo $associativeArr[false];
echo "<br>";



$details = ["name"=> "Alice", 'age'=>25, 'city'=>"New work"];

foreach($details as $key => $value){
  echo " $key: $value <br> ";
}


//Chapter-13: PHP Array: Create, Access, Add, Remove


$arr2 = ["Apple",'Mango', "Jackfruit"];

echo $arr2[0];
echo "<br>";

array_push($arr2,84);

array_shift($arr2);

print_r($arr2);
echo "<br>";


//Chapter-14:PHP Array Function : A Comprehensive  Guide


$arr3 = ["Name"=>"Sakib","id"=> 4,'Age'=>26];

asort($arr3);

ksort($arr3);

print_r($arr3);
echo "<br>";


$arr4 = [4,58,3,9,8];

$filteredArr = array_filter($arr4, function($num){
 return $num % 2 == 0;
});

print_r($filteredArr);
echo "<br>";


//Chapter-15: PHP Grobal Variables - Super Grobals


echo $_SERVER["SERVER_NAME"];
echo "<br>";
echo "<br>";

echo $_SERVER['PHP_SELF'];
echo "<br>";

echo $_SERVER['REQUEST_METHOD'];
echo "<br>";



//Chapter-16: PHP Regular Expressions (RegEx);


$pattern1 = '/php/i';
$str1 = "I love PHP";

if(preg_match($pattern1, $str1)){
  echo "Pattern found <br>";
}
else{
  echo 'Pattern is not found <br>';
}


$text1 = "PHP, C , JavaScript , php";
preg_match_all("/PHP/i", $text1, $matches);
print_r($matches);
echo "<br>";


$text2 = "Hello world!";
$newText = preg_replace("/world/i","PHP",$text2);
echo $newText;
echo "<br>";


$text3 = "Apple,Banana,Mango";
$newArr = preg_split("/,/",$text3);
print_r($newArr);
echo "<br>";




//Chapter-17: PHP Form Handling


// if($_SERVER["REQUEST_METHOD"] == "POST"){
//   $name = $_POST["myname"];
//   $email = $_POST["myemail"];

//   echo "Name: " . htmlspecialchars($name) . "<br>";
//   echo "Email: " . htmlspecialchars($email) . "<br>";     //Releted to class-86-html.php


// }
// else{
//  echo "It's a get Method.";
// }

$name = '';
$email = '';
$nameErr = '';
$emailErr = '';

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    if(empty($_POST["name1"])){
     $nameErr = "Name is required.";
    }
    else{
      $name = htmlspecialchars($_POST["name1"]);
    }

    if(empty($_POST["email1"])){
      $emailErr = "Email is required.";
    }
    else if(!filter_var($_POST["email1"], FILTER_VALIDATE_EMAIL)){
      $emailErr = "Invalid email.";
    }
    else{
      $email = htmlspecialchars($_POST["email1"]);
    }
}
 

echo "You enter name: $name <br>";

echo "You enter email: $email <br>";


//Chapter-18:PHP Form Validation  //Chapter-19: PHP Form Required Fields Validation //Chapter-20: PHP Forms Validate-Email & URL


 //Chapter-21: PHP Date and Time


  echo time();
  echo "<br>";

  date_default_timezone_set("Asia/Dhaka");
  echo "Current date:" . date("Y-m-d H:i:s");  echo "<br>";

  echo date_default_timezone_get();
  echo "<br>";

  echo date("m-d-Y");
  echo "<br>";


  echo date("m-d-Y",strtotime("+3 days -1 month +5 years"));
  echo "<br>";

  
?>


<h1>Form hanlding</h1>

<form method="POST">
  <label>
    Name:
    <input type="text" name="name1">
  </label> <br> <br>
  <span><?php echo $nameErr . "<br>"; ?></span>


  <label >
    Email:
    <input type="email" name="email1" >
  </label> <br> <br>
   <span><?php echo $emailErr . "<br>";?></span>


  <input type="submit" value="Submit">
</form>
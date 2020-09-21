<?php

$name = $username = $password = $retypepassword = $gender = $skill = $contact = $email = $university = $skill ="";
$skills;

$nameErr = $usernameErr = $passwordErr = $genderErr = $skillErr = $contactErr = $emailErr = $universityErr = $skillErr = "";

if (empty($_POST['name'])) {
  $nameErr = "Name is required";
} else {
  $name = test_input($_POST['name']);
  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
     $nameErr = "Only letters and white space allowed";
  }
}

if (empty($_POST['username'])) {
  $usernameErr = "Username is required";
} else {
  $username = test_input($_POST['username']);
  if (!preg_match("/^[a-z0-9][a-z0-9_]*[a-z0-9]$/",$username)){
  //if (!ctype_alnum($username)) {
     $usernameErr = "Only letters and numbers allowed";
  }
}

if (empty($_POST['password']) && empty($_POST['retypepassword'])) {
  $passwordErr = "Password is required";
} else {
  $password = test_input($_POST['password']);
  $retypepassword = test_input($_POST['retypepassword']);
  if (!strcmp($password,$retypepassword)){
     $passwordErr = "Password did not match";
  }
}

if (empty($_POST['gender'])) {
  $genderErr = "Gender is required";
} else {
  $gender = test_input($_POST["gender"]);
}

if (empty($_POST['skills'])) {
  $skillErr = "Skill is required";
} else {
  foreach($_POST['skills'] as $value) {
        echo $skill.test_input($value)." ";
    }
}

if (empty($_POST['contact'])) {
  $contactErr = "Contact is required";
} else {
  $contact = test_input($_POST['contact']);
  if (!preg_match("/^[1-9][0-9]*$/",$contact)){
  //if (!ctype_num($username)) {
     $contactErr = "Invalid Number";
  }
}

if (empty($_POST["email"])) {
  $emailErr = "Email is required";
} else {
  $email = test_input($_POST["email"]);
  // check if e-mail address is well-formed
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  }
}

if (empty($_GET['university'])) {
  $universityErr = "University is required";
} else {
  $university = test_input($_POST["university"]);
}

/*  echo $_GET['name']."<br/>";
echo $_GET['username']."<br/>";
echo $_GET['gender']."<br/>";
foreach($_GET['skills'] as $skill) {
      echo $skill." ";
  }
echo "<br/>";
echo $_GET['contact']."<br/>";
echo $_GET['email']."<br/>";
echo $_GET['university']."<br/>";*/

if (empty($nameErr)) {
  echo $name."<br/>";
} else {
  echo $nameErr."<br/>";
}

if (empty($usernameErr)) {
  echo $username."<br/>";
} else {
  echo $usernameErr."<br/>";
}

if (empty($passwordErr)) {
  echo $password."<br/>";
} else {
  echo $passwordErr."<br/>";
}

if (empty($genderErr)) {
  echo $gender."<br/>";
} else {
  echo $genderErr."<br/>";
}

if (empty($skillErr)) {
  echo $skill."<br/>";
} else {
  echo $skillErr."<br/>";
}

if (empty($contactErr)) {
  echo $contact."<br/>";
} else {
  echo $contactErr."<br/>";
}

if (empty($emailErr)) {
  echo $email."<br/>";
} else {
  echo $emailErr."<br/>";
}

if (empty($universityErr)) {
  echo $university."<br/>";
} else {
  echo $universityErr."<br/>";
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

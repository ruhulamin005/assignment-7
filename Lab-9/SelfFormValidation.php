<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form</title>

  </head>
  <body>

    <?php

    function test_input($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $name = $nameErr = $username = $usernameErr = "";
    if (empty($_POST['name'])) {
      $nameErr = "*Name is required";
    } else {
      $name = test_input($_POST['name']);
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
         $nameErr = "*Only letters and white space allowed";
      }
    }

    if (empty($_POST['username'])) {
      $usernameErr = "*Username is required";
    } else {
      $username = test_input($_POST['username']);
      if (!preg_match("/^[a-z0-9][a-z0-9_]*[a-z0-9]$/",$username)){
      //if (!ctype_alnum($username)) {
         $usernameErr = "*Only letters and numbers allowed";
      }
    }

    ?>

    <form class="container" name="Form" action="SelfFormValidation.php" method="post">
      <h1>Form</h1>
      <h1><?php echo "Hello World"; ?></h1>
      <table>
        <tr>
          <td>Name:</td>
          <td> <input type="text" name="name" value=<?php echo $name; ?>><span class="error">  <?php echo $nameErr;  ?> </span></td>
        </tr>
        <tr>
          <td>Username:</td>
          <td> <input type="text" name="username" value=<?php echo $username; ?>><span class="error">  <?php echo $usernameErr;  ?> </span></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td> <input type="password" name="password" value=""> </td>
        </tr>
        <tr>
          <td>Re-type Password:</td>
          <td> <input type="password" name="retypepassword" value=""></td>
        </tr>
        <tr>
          <td>Gender:</td>
          <td>  <input type="radio" name="gender" value="Male">Male
                  <input type="radio" name="gender" value="Female">Female
                  <input type="radio" name="gender" value="Others">Others</td>
        </tr>
        <tr>
          <td>Skill:</td>
          <td> <input type="checkbox" name="skills[]" value="Java">Java
                  <input type="checkbox" name="skills[]" value="Andriod">Andriod
                  <input type="checkbox" name="skills[]" value="Ruby">Ruby
                  <input type="checkbox" name="skills[]" value=".Net">.Net</td>
        </tr>
        <tr>
          <td>Contact no:</td>
          <td> <input type="text" name="contact" value=""></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td> <input type="text" name="email" value=""></td>
        </tr>
        <tr>
          <td>University:</td>
          <td><select name="university">
                <option value="">Please select university</option>
                <option value="NSU">North South University</option>
                <option value="IUB">Independent University Bangladesh</option>
              </select>
             </td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="" value="Submit"></td>
        </tr>
      </table>
    </form>
    <h2>
  </h2>

  </body>
</html>

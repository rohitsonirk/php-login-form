<?php
$name = $number = $email = $password = "";
$errName = $errNumber = $errEmail = $errPassword = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
      $errName = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }
  
    if (empty($_POST["number"])) {
      $errNumber = "Number is required";
    } else {
      $number = test_input($_POST["number"]);
    }
  
    if (empty($_POST["email"])) {
      $errEmail = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errEmail = "Invalid email format";
      }
    }
  
    if (empty($_POST["password"])) {
      $errPassword = "Password is required";
    } else {
      $password = test_input($_POST["password"]);
    }
  }



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Foam</title>
  </head>
  <body>
    <h3 class="text-center">Please Register The Form</h3>

     <form method="post" class="row-1 g-3 m-5 needs-validation" novalidate>
      <div class="col-5 mb-4">
        <label for="validationCustom01" class="form-label">Name</label>
        <input name="name" type="text" class="form-control" id="validationCustom01" value="" required>
        <span class="text-danger"><?php echo $errName ?></span>
      </div>

      <div class="col-5 mb-4">
        <label for="validationCustom02" class="form-label">Number</label>
        <input name="number" type="number" class="form-control" id="validationCustom02" value="" required>
        <span class="text-danger"><?php echo $errNumber ?></span>
      </div>
      <div class="col-5 mb-4">
        <label for="validationCustomUsername" class="form-label">Email</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
          <input name="email" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
          <span class="text-danger"><?php echo $errEmail ?></span>
        </div>
      </div>
      <div class="col-2 mb-4">
        <label for="validationCustom03" class="form-label">Password</label>
        <input name="password" type="text" class="form-control" id="validationCustom03" required>
        <span class="text-danger"><?php echo $errPassword ?></span>
      </div>
     
      
      <div class="col-12 mt-5">
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div>
    </form>
  
  </body>
</html>
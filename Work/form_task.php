<?php
  $firstname_error = '';
  $secondname_error = '';
  $email_error = '';
  $dateOfBirth_error = '';
  $favouriteColor_error= '';
  $gender_error = '';
  $department_error = '';
  $password_error = '';

  if (isset($_POST["submit"])) {
      if (empty($_POST["firstname"])) {
          $firstname_error = "<p>Firstname Required</p>";
      }
      else {
          if (!preg_match("/^[a-zA-Z ] *$/", $_POST["firstname"])) {
              $firstname_error = "<p>Only Letters and whitespace allowed</p>";
          }
      }
  }
  
  if (isset($_POST["submit"])) {
    if (empty($_POST["secondname"])) {
        $secondname_error = "<p>Secondname Required</p>";
    }
    else {
        if (!preg_match("/^[a-zA-Z ] *$/", $_POST["secondname"])) {
            $secondname_error = "<p>Only Letters and whitespace allowed</p>";
        }
    }
}

if (isset($_POST["submit"])) {
    if (empty($_POST["email"])) {
        $email_error = "<p>Email Required</p>";
    }
    else {
       if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
           $email_error = "<p>Invalid Email</p>";
       } 
    }
}


if (isset($_POST["submit"])) {
    if (empty($_POST["dateOfBirth"])) {
        $dateOfBirth_error = "<p>Date of Birth Required</p>";
    }
    else {
        test_input($_POST[dateOfBirth]); 
    }
}

if (empty($_POST["favouriteColor"])) {
    $favouriteColor_error = "<p>Favourite Color Required</p>";
}

if (empty($_POST["gender"])) {
        $gender_error = "<p>Gender Required</p>";
}

if (empty($_POST["department"])) {
    $department_error = "<p>Department Required</p>";
}


if (isset($_POST["submit"])) {
    if (empty($_POST["password"])) {
        $password_error = "<p>password Required</p>";
    }
    else {
        if (!preg_match("/^[a-zA-Z ] *$/", $_POST["password"])) {
            $email_error = "<p>Input strong password</p>";
        } 
    }
}

if ($firstname_error == "" && $secondname_error =="" && $email_error == "" && $dateOfBirth_error == "" && $favouriteColor_error  =="" && $gender_error =="" && $department_error == "" && $password_error =="") {
    echo "Welcome to the next page";
}
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>USER LOGIN DETAILS</h1>
    <dil>
    
    <form action="/header.php" method="POST">
    <div>
        <p>Firstname<span>*</span><br /><input type="text" id="Firstname" spellcheck="false">
        <?php echo $firstname_error; ?></span></p>
        <p>Second name<span>*</span><br /><input type="text" id="Secondname" spellcheck="false">
        <?php echo $secondname_error; ?></span></p>
        <p>Email address<span>*</span><br /><input type="text" id="Email" spellcheck="false">
        <span><?php echo $email_error; ?></span></p>
        <p>Date of birth<span>*</span><br /><input type="date" id="Date of birth">
        <?php echo $dateOfBirth_error; ?></span></p>
        <p>Favourite color<span>*</span><br /><input type="color" name="Favourite color" id="">
        <?php echo $favouriteColor_error; ?></span></p>
        <p>Gender<span>*</span><br />
        <label for="male">Male </label>
        <input type="radio" name="gender" value="male" id="male">
        <label for="female">Female </label>
        <input type="radio" name="gender" value="female" id="female">
        <?php echo $gender_error; ?></span></p><br />
        <p>Department<span>*</span>
        <select id="Department">
        <option value="IT">IT</option>
        <option value="HR">HR</option>
        <option value="Staff">Staff</option>
        </select></p><br />
        <p>Password<span>*</span><br />
        <input type="password" name="password" id=""></p>
        <span><?php echo $password_error; ?></span><br />
        <div>
        <input type="submit" value="SUBMIT" class="btn brand z-depth-0">
        </div>
    </div>       
    </form>
</body>
</html>
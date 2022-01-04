<?php
include "../includes/functions.php";

include "../includes/users.php";
    
include "../includes/loginValidation.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./profile.php">profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./welcome.php">welcome</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container mt-5">
    <form method="POST" action="#">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <p class="text-danger">
            <?= isset($_SESSION['errors']['email']) ? $_SESSION['errors']['email'] : "" ?>
        </p>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        <p class="text-danger">
            <?= isset($_SESSION['errors']['password']) ? $_SESSION['errors']['password'] : "" ?>
        </p>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<h1 class="text-danger">
    <?= isset($_SESSION['errors']['loggedin']) ? $_SESSION['errors']['loggedin'] : "" ?>
</h1>

<h1 class="text-success">
    <?= isset($_SESSION['success']['loggedin']) ? $_SESSION['success']['loggedin'] : "" ?>
</h1>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>
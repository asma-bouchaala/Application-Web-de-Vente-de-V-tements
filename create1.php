<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $q = " INSERT INTO `crud2`(`name`, `email`, `phone`, `password`) VALUES ( '$name', '$email', '$phone', '$password'  )";

        $query = mysqli_query($conn,$q);
    }
?>
<!DOCTYPE html>
<html>
<head>
  <style>
        
 body {
  background-color: #f8f9fa;
  color:rgb(45, 70, 94);
  font-family: Arial, sans-serif;
  background-image: url('7720186.jpg');
  background-size: cover;
  background-position: center center;
  background-attachment: fixed;
}

.navbar {
  background-color:rgb(37, 60, 63);
  background-color:  !important;
  padding: 10px 0;
}

.navbar .navbar-brand {
  color: #fff !important;
  font-weight: bold;
}

.navbar .navbar-nav .nav-link {
  color: #fff !important;
}

.navbar .navbar-nav .nav-link:hover {
  color: #67d5d5aa !important;
}

.navbar-toggler-icon {
  background-color: #fff !important;
}

.col-lg-6.m-auto {
  margin-top: 50px;
}

.card {
  background-color: #ffffff;
  border-radius: 15px;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}


  .card-header {
  background-color: #28a745; /* Couleur verte pour l'entête */
  color: #fff;
  text-align: center;
  padding: 15px;
  font-size: 24px;
  font-weight: bold;
  border-radius: 15px 15px 0 0;


}

.card-body {
  padding: 30px;
}

label {
  font-weight: bold;
  margin-bottom: 10px;
}

input[type="text"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button[type="submit"] {
  background-color: #28a745;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
  background-color: #218838;
}

a.btn-info {
  background-color: #17a2b8;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
  display: inline-block;
  margin-top: 10px;
  transition: background-color 0.3s ease;
}

a.btn-info:hover {
  background-color: #138496;
}

@media (max-width: 767px) {
  .col-lg-6.m-auto {
    width: 100%;
  }

  .card {
    margin: 0 15px;
  }
}

  </style>
 <title>CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">create new member</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php"><span style="font-size:larger;"></span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div >
 
 </div><br>

 <label> NAME: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> EMAIL: </label>
 <input type="text" name="email" class="form-control"> <br>

 <label> PHONE: </label>
 <input type="text" name="phone" class="form-control"> <br>
 <label> mot de passe: </label>
 <input type="text" name="password" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index.html"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>
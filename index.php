<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    
    <style>
      body {
    background-color: #f8f9fa; 
    color: #212529; 
    font-family: Arial, sans-serif;
    background-image: url('7720186.jpg'); 
}

.navbar {
    background-color: #0069d9; 
}

.navbar-brand {
    font-weight: bold;
    color: #fff !important;
}

.table {
    border-collapse: separate;
    border-spacing: 0;
    background-color: #ffffff;
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.1);
}

.table th, .table td {
    padding: 12px 15px;
    text-align: left;
}

.table thead tr {
    background-color: #f1f1f1; 
}

.table tbody tr:nth-child(odd) {
    background-color: #f9f9f9;
}

.table tbody tr:hover {
    background-color: #e9ecef; 
}

.btn {
    border-radius: 20px; 
    padding: 8px 16px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.btn-success {
    background: linear-gradient(90deg, #28a745, #218838); 
    border: none;
    color: white;
}

.btn-success:hover {
    background: linear-gradient(90deg, #218838, #28a745); 
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.btn-danger {
    background: linear-gradient(90deg, #dc3545, #c82333);
    border: none;
    color: white;
}

.btn-danger:hover {
    background: linear-gradient(90deg, #c82333, #dc3545);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.container {
    margin-top: 20px;
    padding: 20px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
.btn-add-product {
    background-color: #67d5d5aa; 
    border: 1px solid #67d5d5; 
    color: white; 
    border-radius: 20px; 
    padding: 10px 20px; 
    font-size: 16px; 
    font-weight: bold; 
    cursor: pointer; 
    transition: all 0.3s ease; 
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
    text-decoration: none; 
}

.btn-add-product:hover {
    background-color: #67d5d5; 
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15); 
    transform: translateY(-2px); 
}


    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Panier</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
           
            <li class="nav-item">
              <a type="button" class="btn btn-add-product" href="http://localhost:81/projet%20A/index1.php">Ajouter produits </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>nom</th>
        <th>description</th>
        <th>image</th>
        <th>prix</th>
        <th>stock</th>
        <th>quantite</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "connection.php";
        $sql = "select * from produits";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <th>$row[id]</th>
        <td>$row[nom]</td>
        <td>$row[description]</td>
        <td>$row[image]</td>
        <td>$row[prix]</td>
        <td>$row[stock]</td>
        <td>$row[quantite]</td>
        <td>
                  <a class='btn btn-success' href='edit.php?id=$row[id]'>Edit</a>
                  <a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a>
                </td>
      </tr>
      ";
        }
      ?>
    </tbody>
  </table>
      </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
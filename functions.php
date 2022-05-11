<?php include "db.php";?>

<?php

function createRows() {

  if (isset($_POST["submit"])) {
    global $connection;

    $naam = $_POST['naam'];
    $password = $_POST['password'];

    $naam = mysqli_real_escape_string($connection,$naam );
    $password = mysqli_real_escape_string($connection,$password );

    $hashFormat ="$2y$10$";
    $salt ="eensteenisnetzozwaarals";
    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password,$hashF_and_salt);

    $query =  "INSERT INTO users(naam,password)";
    $query .= "VALUES ('$naam', '$password')";

    $result = mysqli_query($connection, $query);

    if(!$result) {

      die('Query Gefaald' . mysqli_error());

    } else {

      echo"Account aangemaakt";

    } 

  }

}

function readRows(){

    global $connection;

    $query =  "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if(!$result) {

      die('Query Gefaald' . mysqli_error());

    }

    while($row = mysqli_fetch_assoc($result)) {

      print_r($row);

    }
}


function showAllData() {

    global $connection;

    $query =  "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if(!$result) {

      die('Query Gefaald' . mysqli_error());

    }

    while($row = mysqli_fetch_assoc($result)) {

          $id = $row['id'];

          echo "<option value='$id'>$id</option>";
      }
}

function updateTable() {

    global $connection;

    if (isset($_POST["submit"])) {

    $id = $_POST['id'];
    $naam = $_POST['naam'];
    $password = $_POST['password'];

    $query = "UPDATE users SET ";
    $query .= "naam = '$naam', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);

      if(!$result) {

        die('Query Gefaald' . mysqli_error());

      } else {
        echo"Gegevens geupdate";
      }

    }

}

  function deleteRows(){

  global $connection;

  if (isset($_POST["submit"])) {
 
  $id = $_POST['id'];
  $naam = $_POST['naam'];
  $password = $_POST['password'];

  $query = "DELETE FROM users ";
  $query .= "WHERE id = $id ";

  $result = mysqli_query($connection, $query);

    if(!$result) {

      die('Query Gefaald' . mysqli_error());

    } else {
      echo "Gebruiker verwijderd";
    }

  }

  }

?>
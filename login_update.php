<?php include "db.php";?>
<?php include "functions.php";?>
<?php updateTable();?>
<?php include "includes/header.php";?>

    <div class="container">
      <div class="col-sm-6">
        <h1 class="text-center">Gegevens wijzigen</h1>
          <form action="login_update.php" method="post">

          <div class="form-group">
          <label for="naam">Naam</label>
          <input type="text" name="naam" class="form-control">
          </div>

          <div class="form-group">
          <label for="password">Wachtwoord</label>
          <input type="password" name="password" class="form-control">
          </div>

          <select name="id" id="">
          <?php
          showAllData();
          ?>
          </select><br>

          <input class="btn btn-primary" type="submit" name="submit" value="Update">
        </form>
      </div>
      
<?php include"includes/footer.php"?>
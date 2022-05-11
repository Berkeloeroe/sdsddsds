<?php include "db.php";?>
<?php include "functions.php";?>
<?php deleteRows();?>
<?php include "includes/header.php";?>

    <div class="container">
      <div class="col-sm-6">
        <h1 class="text-center">Gebruiker verwijderen</h1>
          <form action="login_delete.php" method="post">

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

          <input class="btn btn-primary" type="submit" name="submit" value="Verwijder">
        </form>
      </div>

<?php include"includes/footer.php"?>
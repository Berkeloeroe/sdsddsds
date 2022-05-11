<?php include "db.php";?>
<?php include "functions.php";?>
<?php include "includes/header.php";?>

<?php createRows();?>

    <div class="container">
      <div class="col-sm-6">
        <h1 class="text-center">Account maken</h1>
          <form action="login_create.php" method="post">

          <div class="form-group">
          <label for="naam">Naam</label>
          <input type="text" name="naam" class="form-control">
          </div>

          <div class="form-group">
          <label for="password">Wachtwoord</label>
          <input type="password" name="password" class="form-control">
          </div>

          <input class="btn btn-primary" type="submit" name="submit" value="Aanmaken">
        </form>
      </div>
    </div>

<?php include"includes/footer.php"?>
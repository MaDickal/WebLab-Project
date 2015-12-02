<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>
  <div class="container">
    <body align=center>
      <form name="register" action="login.php" method="post" class="form-horizontal">
        <input type="hidden" name="uid" value="<?= $user->getUID() ?>">
        <input type="hidden" name="admin" value="No">
        <input type="hidden" name="action" value="save_user">
        <div class="form-group">
          <div class="row">
            <label for="mail" class="col-xs-4 control-label text-right">Email:</label>
            <div class="col-xs-4">
              <input type="text" class="form-control" name="mail" placeholder="Email" value="" pattern=".{5,50}" title="between 5 and 50 characters -_-" required>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <label for="pass" class="col-xs-4 control-label text-right">Password:</label>
            <div class="col-xs-4">
              <input type="password" class="form-control" name="pass" placeholder="Password" value="" pattern=".{1,50}" title="between 1 and 50 characters -_-" required>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-xs-12">
              <input type="submit" value="Register" class="btn btn-success">
            </div>
          </div>
        </div>
      </form>

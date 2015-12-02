<div class="container">
  <h3>Viewing Information for User: </h3>
  <h2><small><?= $user->getMail() ?></small></h2>
</div>
<br>
<table align=center>
  <div class="row">
      <div class="col-xs-3">
      </div>
      <div class="col-xs-3" align=right>
        <b>User ID:</b>
      </div>
      <div class="col-xs-3" align=left>
        <?= $user->getUID() ?>
      </div>
      <div class="col-xs-3">
      </div>
  </div>
  <div class="row">
    <div class="col-xs-3">
    </div>
    <div class="col-xs-3" align=right>
      <b>Email:</b>
    </div>
    <div class="col-xs-3" align=left>
      <?= $user->getMail() ?>
    </div>
    <div class="col-xs-3">
    </div>
  </div>
  <div class="row">
    <div class="col-xs-3">
    </div>
    <div class="col-xs-3" align=right>
      <b>Password:</b>
    </div>
    <div class="col-xs-3" align=left>
      <?= $user->getPassword() ?>
    </div>
    <div class="col-xs-3">
    </div>
  </div>
  <div class="row">
    <div class="col-xs-3">
    </div>
    <div class="col-xs-3" align=right>
      <b>Admin:</b>
    </div>
    <div class="col-xs-3" align=left>
      <?= $user->getAdmin() ?>
    </div>
    <div class="col-xs-3">
    </div>
  </div>
</table>
<br>
  |
  <a href='user.php?action=delete_user&target=<?= $user->getUID() ?>' class='button'>Delete This User</a>
  |
  <a href='user.php?action=edit_user&target=<?= $user->getUID() ?>' class='button'>Edit This User</a>
  |
  <br>
  |
  <a href='user.php' class='button2'>View All Users</a>
  |

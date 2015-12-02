<?php $title = 'All Users'; ?>
<div class="container">
  <div class="page-header">
    <h3><?= $title ?></h3>
  </div>
  <table class="table table-bordered table-responsive">
    <thead>
      <tr>
        <th class="text-center">User ID</th>
        <th class="text-center">User Email</th>
        <th class="text-center">Password</th>
        <th class="text-center">Admin</th>
        <th class="text-center">View</th>
      </tr>
    </thead>
    <?php foreach($users as $user){ ?>
    <tbody>
      <tr>
        <td><?= $user->getUID() ?></td>
        <td><?= $user->getMail() ?></td>
        <td><?= $user->getPassword() ?></td>
        <td><?= $user->getAdmin() ?></td>
        <td><a href='user.php?action=view_user&target=<?= $user->getUID() ?>' class='button2'>view</a></td>
      </tr>
    </tbody>
    <?php } ?>
  </table>
<br><br>
|
<a href='user.php?action=add_user' class='button'>Add New User</a>
|
<br>
|
<a href='user.php?action=logout' class='button2'>Log Out</a>
|
</div>

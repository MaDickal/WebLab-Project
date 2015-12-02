<?php $title = 'All Users'; ?>
<div class="container">
    <h3><?= $title ?></h3>
<div class="table-bordered">
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th class="text-center">User ID</th>
          <th class="text-center">User Email</th>
          <th class="text-center">Password</th>
          <th class="text-center">Admin</th>
          <th class="text-center">View</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($users as $user){ ?>
        <tr>
          <td><?= $user->getUID() ?></td>
          <td><?= $user->getMail() ?></td>
          <td><?= $user->getPassword() ?></td>
          <td><?= $user->getAdmin() ?></td>
          <td><a href='user.php?action=view_user&target=<?= $user->getUID() ?>' class="btn btn-info">view</a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <a href='user.php?action=add_user' class="btn btn-primary">Add New User</a>
    <br>
    <a href='user.php?action=logout' class="btn btn-danger">Log Out</a>
    </div>
  </div>
</div>

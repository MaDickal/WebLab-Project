
<table>
    <tr>
        <td><b>User ID</b></td>
        <td><b>User Mail</b></td>
        <td><b>User Password</b></td>
    </tr>
  <?php foreach($users as $user){ ?>
  <tr>
    <td><?= $user->getUID() ?></td>
    <td><?= $user->getMail() ?></td>
    <td><?= $user->getPassword() ?></td>
    <td><a href='user.php?action=view_user&target=<?= $user->getUID() ?>' class='button'>view</a></td></td>
  </tr>
  <?php } ?>
</table>
<br><br>
<a href='user.php?action=add_user' class='button'>Add New User</a>
<a href='user.php?action=logout' class='button'>Log Out</a>

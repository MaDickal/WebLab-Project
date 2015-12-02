<form action="user.php" method="get">
  <input type="hidden" name="uid" value="<?= $user->getUID() ?>">
  <input type="hidden" name="action" value="save_user">

  <label>Email: </label><input type="text" name="mail" value="<?= $user->getMail() ?>"><br>
  <label>Password: </label><input type="text" name="pass" value=""><br>
  <label>Admin: </label>
  <select name="admin">
    <option value="No">No</option>
    <option value="Yes">Yes</option>
  </select><br>
  <input type="submit" value="Save"  class='button'>
</form>

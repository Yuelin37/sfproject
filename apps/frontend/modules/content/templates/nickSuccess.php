<p>Hello, world!</p>


<form method="post" action="<?php echo url_for('content/FirstPage') ?>">
  <label for="nickname">What is your name?</label>
  <input type="text" name="nickname" id="nickname" value="" />
  <input type="submit" value="Ok" />
  <?php echo link_to('I never say my name', 'content/FirstPage?name=anonymous') ?>
</form>
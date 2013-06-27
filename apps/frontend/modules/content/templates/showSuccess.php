<p>Hello, world!</p>
<?php if ($hour >= 18): ?>
  <p>Or should I say good evening? It is already <?php echo $hour ?>.</p>
<?php endif; ?>
<form method="post" action="<?php echo url_for('content/update') ?>">
  <label for="name">What is your name?</label>
  <input type="text" name="name" id="name" value="" />
  <input type="submit" value="Ok" />
  <?php echo link_to('I never say my name', 'content/update?name=anonymous') ?>
</form>
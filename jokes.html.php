<?php foreach ($News as $joke): ?>
<blockquote>
  <p>
  <?=htmlspecialchars($joke['newstext'], ENT_QUOTES, 'UTF-8')?>
  <form action="deletejoke.php" method="post">
    <input type="hidden" name="id" value="<?=$joke['id']?>">
    <input type="submit" value="Delete">
  </form>
  </p>
</blockquote>
<?php endforeach; ?>

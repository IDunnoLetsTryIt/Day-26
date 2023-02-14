Here is the form.
<form action="" method = "post">
<input type="text" name="items[<?=count($items)?>]">
    <?php foreach ($items as $i => $text) : ?>
    <input type="text" name="items[<?= $i?>]" value="<?= htmlspecialchars($text)?>">
    <?php endforeach; ?>
<button type="submit">Add</button>
</form>
<form action="Customer2.php" method="post">
    <p>Your name: <input type="text" name="name" /></p>
    <p>Your age: <input type="text" name="age" /></p>
    <p><input type="submit" /></p>
</form>
<?php
print_r($_POST);
?>

Hi <?php echo htmlspecialchars($_POST['name']); ?>.
You are <?php echo (int)$_POST['age']; ?> years old.





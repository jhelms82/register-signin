<?php
include('../../view/header.php');


?>
<main>
    <form action="." method="post" >

    <?php if (isset($error)) : ?>
        <p><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>
         <input type="hidden" name="action" value="register">

        <label>Username:</label>
        <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"><br>

        <label>Password:</label>
        <input type="password" name="password" value="<?php echo htmlspecialchars($password['password']); ?>"><br>

        <label>Confirm Password:</label>
        <input type="password" name="confirm_password" value="<?php echo htmlspecialchars($confirm_password['confirm_password']); ?>"><br>

         <input type="submit" value="register">
    </form>
</main>
<?php
include('../../view/footer.php');
?>
<?php
if (isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    echo $name . " has the email address as " . $email;
}
?>
<!-- <a href="<?php echo $_SERVER['PHP_SELF'] ?>?name=Essien&email=essienemma300@gmail.com"><br>Click</a> -->

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="email">Email: </label>
        <input type="text" name="email">
    </div>
    <input type="submit" value="submit" name="submit">
</form>
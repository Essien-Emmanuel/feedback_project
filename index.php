<?php
session_start();

if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    if ($username == "essien" && $password == "pass") {
        $_SESSION['username'] = $username;
        header("Location: /extras/dashboard.php");
    } else {
        echo 'invalid login credentials';
    }
}
?>

<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password">
    </div>
    <input type="submit" name="submit" value="submit">
</form>
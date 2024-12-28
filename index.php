<?php
if (isset($_POST['submit'])) {
    $allowed_exts = ['png', 'jpg', 'jpeg', 'jiff'];

    if (!empty($_FILES['upload']['name'])) {
        $file_name = $_FILES['upload']['name'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $file_size = $_FILES['upload']['size'];

        $target_dir = "uploads/$file_name";

        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        if (in_array($file_ext, $allowed_exts)) {
            if ($file_size <= 1024000) {
                move_uploaded_file($file_tmp, $target_dir);
                $message = '<p style="color: green";>File uploaded</p>';
            } else {

                $message = '<p style="color: red";>file too big. must be at most 1mb</p>';
            }
        } else {
            $message = '<p style="color: red";>Invalid file type</p>';
        }
    } else {
        $message = '<p style="color: red";>Please choose a file</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <?php echo $message ?? null ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
        Select image to upload: <br>
        <input type="file" name="upload"> <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>
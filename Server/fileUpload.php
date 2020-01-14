<?php
$SOURCE = $_FILES['profile_img']['tmp_name'];
$DEST = "./".basename($_FILES['profile_img']['name']);
move_uploaded_file($SOURCE, $DEST);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Profile Image</title>
    </head>
    <body>
        <img src="<?=$SOURCE?>" alt=""/>
    </body>
</html>
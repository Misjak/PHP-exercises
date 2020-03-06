<?php


// handle hte request
var_dump($_FILES);

$tmp_name = $_FILES['uploaded_file']['tmp_name'];

if (!file_exists('uploads')) {
  mkdir('uploads');
}

move_uploaded_file($tmp_name, '../'.$_FILES['uploaded_file']['name']);



sleep(10);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Uploading files</title>
</head>
<body>


    <form action="" method="post" enctype="multipart/form-data">

      <input type="file" name="uploaded_file"> <br>

      <br>

      <input type="submit" value="Upload">

    </form>

  
</body>
</html>
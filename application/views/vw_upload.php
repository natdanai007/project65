<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="<?php echo base_url();?>CSS/vw_upload.css" rel="stylesheet" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>File Upload</h1>
    <form action = "upload/upload_file" method ="post" enctype = "multipart/form-data">
        <input type="file" name = "image" id="image">
        <input type="submit" value="upload">
</form> 
</body>
</html>

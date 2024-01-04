<!DOCTYPE html>
<html>
<head></head>
<body>
    <form method="post" >
        <input name="file" type="file" >
        <input name="submit" type="submit">
    </form>
<?php
$target8dir='pdf/';
if(isset($_POST['submit'])){
    if(isset($_FILES['file']) && $_FILES['file']['error']=== UPLOAD_ERR_OK){
        $tmpName = $_FILES["file"]["tmp_name"];
        $name=$_FILES["file"]["name"];
        $size=$_FILES["file"]["size"];
        $type=$_FILES["file"]["type"];

        $allowedex=array('pdf');
        $fileex=pathinfo($name,PATHINFO_EXTENSION);
        if(in_array($fileex,$allowedex) && $size<= 1000000){
            move_uploaded_file($tmpname,$target8dir.basename($_FILES["file"]["name"]));
            echo 'your file is uploaded';      
        }else{
            echo 'your file is to large';
        }

    }else{
        echo 'there was an error uploading your file';
    }
}



?>

</body>
</html>
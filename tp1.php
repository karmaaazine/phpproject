<!DOCTYPE html>
<html>
<head></head>
<body>
    <form method="post" >
        <input name="pdfFile" type="file" >
        <input name="submit" type="submit">
    </form>    
<?php
if(isset($_POST["submit"])){
$target_dir="images/";
$target_file=$target_dir.basename($_FILES["pdfFile"]["name"]);
$uploaddone=1;

//if file is too large
if($_FILES["pdfFile"]["size"]>1000000)
{
    echo "your file is too large";
}
//if file is not a pdf file
if(in_array(strtolower(pathinfo($target_file,PATHINFO_EXTENSION)),$filetype)){
    echo "sorry, your file is not a PDF";
    $uploaddone=0;
}
if($uploaddone==0){
    echo "your file is not uploaded";
}else {
    if(move_uploaded_file($_FILES["pdfFile"]["tmp_name"],$target_file)){
    echo "the file ".htmlspecialchars(basename($_FILES["pdfFile"]["name"]))."is done uploading";
}else{
    echo "sorry there was a problem uploading your file";
}
}
setcookie("uploaded file", time()+(24*60*60)*10);
}

?>
</body>
</html>
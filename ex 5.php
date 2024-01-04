

<!DOCTYPE html>
<head>
</head>
<body>
    <form action="ex 5" method="post">
        name<input type="texteara" name="name" placeholder="name"><br><br>
        email<input type="texteara" name="email" placeholder="email"><br><br>
        phone numbre<input type="texteara" name="phonenum" placeholder="phone number"><br><br>
        submit <input type="submit" name="submit" value="submit">
    </form>   
    <?php
    
    if(isset($_POST['submit'])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $phonenum=$_POST["phonenum"];
        echo "hello".$name;
        }


    ?>
</body>
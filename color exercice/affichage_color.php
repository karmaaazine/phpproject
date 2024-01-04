<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body {
            <?php if(isset($_COOKIE['selected_color'])): ?>
                background-color: <?php echo $_COOKIE['selected_color']; ?>;
            <?php endif; ?>
        }
    </style>
</head>
<body>
    <h2>Welcome Home!</h2>
    <a href="index.php">Go back to choose color</a>
</body>
</html>
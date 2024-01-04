<?php
if(isset($_POST['submit']) && isset($_POST['color'])) {
    $selectedColor = $_POST['color'];
    setcookie('selected_color', $selectedColor, time() + 3600, '/');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Selected Color</title>
</head>
<body>
    <?php if(isset($_COOKIE['selected_color'])): ?>
        <h2>Your selected color is: <?php echo $_COOKIE['selected_color']; ?></h2>
        <?php ?>
    <?php else: ?>
        <p>No color selected.</p>
    <?php endif; ?>
</body>
</html>
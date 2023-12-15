<!DOCTYPE html>

<html>
<head>
    <title>Create Meal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header class="header">
        <div class="logo">
            <h1>MEAL PREP</h1>
        </div>
       
    </header>
    <section id="meal-creation-section" class="meal-creation-section">
        
        <h2>Create Your Meal Now</h2>

        <form method="post" >
    <label for="meal-name">Meal Name:</label>
    <input name="mealname" type="text" id="meal-name" placeholder="Enter meal name">
    <button type="submit" name="create"><a href="ingredients.php" >CREATE</a></button>
</form>

        <?php
        $servername = "localhost"; // Change this to your MySQL server hostname if needed
        $username = "root"; // Replace with your MySQL username
        $password = ""; // Replace with your MySQL password
        $dbname = "meal_prep"; // Replace with your MySQL database name
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        if (isset($_POST['create'])) {
            // Sanitize user input for table name
            $mealname = $conn->real_escape_string($_POST['mealname']);
        
            // SQL query to create table
            $sql = "CREATE TABLE meal (
                id INT AUTO_INCREMENT PRIMARY KEY,
                ingredient VARCHAR(255) NOT NULL,
                serving_size VARCHAR(100),
                calories INT,
                proteins FLOAT
            )";
        
            // Execute query
            if ($conn->query($sql) === true) {
                echo "Table '$mealname' created successfully";
                // Redirect to another page after successful table creation
                header('Location: ingredients.php');
                exit(); // Ensure to exit after redirection
            } else {
                echo "Error creating table: " .$sql
                . $conn->error;
            }
        }
        ?>

       
     
    </section>

  



    


    <script src="script.js"></script>
</body>
</html>
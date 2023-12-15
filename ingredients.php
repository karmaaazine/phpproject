<html>
  <head>
    <title>Ingredients</title>
    <link rel="stylesheet" href="style1.css">
  </head>
  <?php
  include('connection.php');
  ?>
 
    <body>
      
        
      <section id="app">
          <section id="ingredients-section" class="ingredients-section">
            <div class="ingredient-category">
            <form method="post">
              <h3>Fruits</h3>
              <ul>
            <li id="apple">
                <p name='ing'>Apple</p>
                <p name='serve'>Serving Size: 1 (4 oz.)</p>
                <p name='calories'>Calories: 59</p>
                <p name='protein'>Proteins: 0.5g</p>
                <button onclick="addToMeal('Apple')">+</button>
            </li>
            <li id="banana">
                <p name='ing'>Banana</p>
                <p name='serve'>Serving Size: 1 (6 oz.)</p>
                <p name='calories'>Calories: 151</p>
                <p name='protein'>Proteins: 1.5g</p>
                <button onclick="addToMeal('Banana')">+</button>
            </li>
        </ul>
        <li id="orange">
                <p name='ing'>Orange</p>
                <p name='serve'>Serving Size: 1 (4 oz.)</p>
                <p name='calories'>Calories: 53</p>
                <p name='protein'>Proteins: 1g</p>
                <button onclick="addToMeal('Orange')">+</button>
            </li>
            <li id="pear">
                <p name='ing'>Pear</p>
                <p name='serve'>Serving Size: 1 (5 oz.)</p>
                <p name='calories'>Calories: 82</p>
                <p name='protein'>Proteins: 0.6g</p>
                <button onclick="addToMeal('Pear')">+</button>
            </li>
            <!-- Add the remaining fruits similarly -->
            <li id="peach">
                <p name='ing'>Peach</p>
                <p name='serve'>Serving Size: 1 (6 oz.)</p>
                <p name='calories'>Calories: 67</p>
                <p name='protein'>Proteins: 1.2g</p>
                <button onclick="addToMeal('Peach')">+</button>
            </li>
            <li id="pineapple">
                <p name='ing'>Pineapple</p>
                <p name='serve'>Serving Size: 1 cup</p>
                <p name='calories'>Calories: 82</p>
                <p name='protein'>Proteins: 0.5g</p>
                <button onclick="addToMeal('Pineapple')">+</button>
            </li>
            <li id="strawberry">
                <p name='ing'>Strawberry</p>
                <p name='serve'>Serving Size: 1 cup</p>
                <p name='calories'>Calories: 53</p>
                <p name='protein'>Proteins: 1.1g</p>
                <button onclick="addToMeal('Strawberry')">+</button>
            </li>
            <li id="watermelon">
                <p name='ing'>Watermelon</p>
                <p name='serve'>Serving Size: 1 cup</p>
                <p name='calories'>Calories: 50</p>
                <p name='protein'>Proteins: 1g</p>
                <button onclick="addToMeal('Watermelon')">+</button>
            </li>
     
        </ul>
              </ul>
            </div>
      
            <div class="ingredient-category">
              <h3>Vegetables</h3>
              <ul>
                <li id="asparagus">
                  <p name='ing'>Asparagus</p>
                  <p name='serve'>Serving Size: 1 cup</p>
                  <p name='calories'>Calories: 27</p>
                  <p name='protein'>Proteins: 2.9g</p>
                  <button onclick="addToMeal('Asparagus')">+</button>
                </li>
                <li id="broccoli">
                  <p name='ing'>Broccoli</p>
                  <p name='serve'>Serving Size: 1 cup</p>
                  <p name='calories'>Calories: 45</p>
                  <p name='protein'>Proteins: 3.7g</p>
                  <button onclick="addToMeal('Broccoli')">+</button>
                </li>
                <li id="carrots">
                  <p name='ing'>Carrots</p>
                  <p name='serve'>Serving Size: 1 cup</p>
                  <p name='calories'>Calories: 50</p>
                  <p name='protein'>Proteins: 1.2g</p>
                  <button onclick="addToMeal('Carrots')">+</button>
                </li>
                <li id="cucumber">
                  <p name='ing'>Cucumber</p>
                  <p name='serve'>Serving Size: 4 oz.</p>
                  <p name='calories'>Calories: 17</p>
                  <p name='protein'>Proteins: 0.8g</p>
                  <button onclick="addToMeal('Cucumber')">+</button>
                </li>
                <li id="eggplant">
                  <p name='ing'>Eggplant</p>
                  <p name='serve'>Serving Size: 1 cup</p>
                  <p name='calories'>Calories: 35</p>
                  <p name='protein'>Proteins: 0.8g</p>
                  <button onclick="addToMeal('Eggplant')">+</button>
                </li>
                <li id="lettuce">
                  <p name='ing'>Lettuce</p>
                  <p name='serve'>Serving Size: 1 cup</p>
                  <p name='calories'>Calories: 5</p>
                  <p name='protein'>Proteins: 0.5g</p>
                  <button onclick="addToMeal('Lettuce')">+</button>
                </li>
                <li id="tomato">
                  <p name='ing'>Tomato</p>
                  <p name='serve'>Serving Size: 1 cup</p>
                  <p name='calories'>Calories: 22</p>
                  <p name='protein'>Proteins: 1g</p>
                  <button onclick="addToMeal('Tomato')">+</button>
                </li>
              </ul>
            </div>
      
            <div class="ingredient-category">
              <h3>Proteins</h3>
              <ul>
                <li id="beef">
                  <p name='ing'>Beef, Regular, Cooked</p>
                  <p name='serve'>Serving Size: 2 oz.</p>
                  <p name='calories'>Calories: 142</p>
                  <p name='protein'>Proteins: 16.5g</p>
                  <button onclick="addToMeal('Beef')">+</button>
                </li>
                <li id="chicken">
                  <p name='ing'>Chicken, Cooked</p>
                  <p name='serve'>Serving Size: 2 oz.</p>
                  <p name='calories'>Calories: 136</p>
                  <p name='protein'>Proteins: 26.5g</p>
                  <button onclick="addToMeal('Chicken')">+</button>
                </li>
                <li id="tofu">
                  <p name='ing'>Tofu</p>
                  <p name='serve'>Serving Size: 4 oz.</p>
                  <p name='calories'>Calories: 86</p>
                  <p name='protein'>Proteins: 9.8g</p>
                  <button onclick="addToMeal('Tofu')">+</button>
                </li>
                <li id="egg">
                  <p name='ing'>Egg</p>
                  <p name='serve'>Serving Size: 1 large</p>
                  <p name='calories'>Calories: 78</p>
                  <p name='protein'>Proteins: 6.7g</p>
                  <button onclick="addToMeal('Egg')">+</button>
                </li>
              </ul>
            </div>
      
            <div class="ingredient-category">
              <h3>Fishes</h3>
              <ul>
                <li id="catfish">
                  <p name='ing'>Fish, Catfish, Cooked</p>
                  <p name='serve'>Serving Size: 2 oz.</p>
                  <p name='calories'>Calories: 136</p>
                  <p name='protein'>Proteins: 22g</p>
                  <button onclick="addToMeal('Catfish')">+</button>
                </li>
                <li id="pork">
                  <p name='ing'>Pork, Cooked</p>
                  <p name='serve'>Serving Size: 2 oz.</p>
                  <p name='calories'>Calories: 137</p>
                  <p name='protein'>Proteins: 16.5g</p>
                  <button onclick="addToMeal('Pork')">+</button>
                </li>
                <li id="shrimp">
                  <p name='ing'>Shrimp, Cooked</p>
                  <p name='serve'>Serving Size: 2 oz.</p>
                  <p name='calories'>Calories: 56</p>
                  <p name='protein'>Proteins: 12g</p>
                  <button onclick="addToMeal('Shrimp')">+</button>
                </li>
                
              </ul>
            </div>
            
            <div class="ingredient-category">
              <h3>Grains</h3>
              <ul>
                <li id="rice">
                  <p name='ing'>Rice</p>
                  <p name='serve' >Serving Size: 1 cup cooked</p>
                  <p name='calories'>Calories: 206</p>
                  <p name='protein'>Proteins: 4.2g</p>
                  <button onclick="addToMeal('Rice')">+</button>
                </li>
                <li id="oats">
                  <p name='ing'>Oats</p>
                  <p name='serve'>Serving Size: 1 cup cooked</p>
                  <p name='calories'>Calories: 154</p>
                  <p name='protein'>Proteins: 6.6g</p>
                  <button onclick="addToMeal('Oats')">+</button>
                </li>
                <li id="brown-rice">
                  <p name='ing'>Brown Rice</p>
                  <p name='serve' >Serving Size: 1 cup cooked</p>
                  <p name='calories'>Calories: 215</p>
                  <p name='protein'>Proteins: 5g</p>
                  <button onclick="addToMeal('Brown Rice')">+</button>
                </li>
                <li id="quinoa">
                  <p name='ing'>Quinoa</p>
                  <p name='serve'>Serving Size: 1 cup cooked</p>
                  <p name='calories'>Calories: 222</p>
                  <p name='protein'>Proteins: 8g</p>
                  <button onclick="addToMeal('Quinoa')">+</button>
                </li>
              </ul>
            </div>
</form>
            
          </section>
          <section id="meal-section">
            <h2>Your Meal</h2>
            <ul id="meal-list"></ul>
            <button name="submit" onclick="saveMeal()">Save </button>
          </section>
          <script src="script1.js">
          </script>


      
    
  </body>
</html>
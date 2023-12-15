/*let mealItems = {};


function addToMeal(ingredient) {

  if (mealItems[ingredient]) {
    
    mealItems[ingredient].quantity++;
  } else {

    mealItems[ingredient] = {
      quantity: 1,
    
    };
  }


  updateMealList();
}


function removeFromMeal(ingredient) {

  if (mealItems[ingredient]) {

    mealItems[ingredient].quantity--;


    if (mealItems[ingredient].quantity === 0) {
      delete mealItems[ingredient];
    }
  }


  updateMealList();
}

function updateMealList() {
  const mealList = document.getElementById('meal-list');
 
  mealList.innerHTML = '';

  for (const ingredient in mealItems) {
    const listItem = document.createElement('li');
    listItem.textContent = `${ingredient} x${mealItems[ingredient].quantity}`;

    
    const removeButton = document.createElement('button');
    removeButton.textContent = '-';
    removeButton.onclick = function () {
      removeFromMeal(ingredient);
    };

    listItem.appendChild(removeButton);
    mealList.appendChild(listItem);
  }
}



function saveMeal() {
  alert('Meal saved!'); }*/

  // script1.js

// Your existing functions: addToMeal, removeFromMeal, updateMealList, addToMealSection, saveMeal

// Function to handle adding an ingredient to the meal
function addToMeal(ingredient) {
  if (mealItems[ingredient]) {
    mealItems[ingredient].quantity++;
  } else {
    mealItems[ingredient] = {
      quantity: 1,
    };
  }
  updateMealList();
}

// Function to remove an ingredient from the meal
function removeFromMeal(ingredient) {
  if (mealItems[ingredient]) {
    mealItems[ingredient].quantity--;
    if (mealItems[ingredient].quantity === 0) {
      delete mealItems[ingredient];
    }
  }
  updateMealList();
}

// Function to update the displayed meal list in the HTML
function updateMealList() {
  const mealList = document.getElementById('meal-list');
  mealList.innerHTML = '';

  for (const ingredient in mealItems) {
    const listItem = document.createElement('li');
    listItem.textContent = `${ingredient} x${mealItems[ingredient].quantity}`;

    const removeButton = document.createElement('button');
    removeButton.textContent = '-';
    removeButton.onclick = function () {
      removeFromMeal(ingredient);
    };

    listItem.appendChild(removeButton);
    mealList.appendChild(listItem);
  }
}

// Function to save the meal
function saveMeal() {
  alert('Meal saved!');
}

// Event listeners for your buttons (assuming 'addToMeal' is called with the ingredient name)
document.getElementById('apple').querySelector('button').addEventListener('click', function () {
  addToMeal('Apple');
});

// Add event listeners for other ingredients similarly...

// Ensure to add event listeners for other buttons following the same pattern as above

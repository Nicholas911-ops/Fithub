<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fithub- Begin our fitness jorney with us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://kit.fontawesome.com/c23bb116ef.js"></script>
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    .container-fluid {
      flex: 1;
    }

    .header {
      background: linear-gradient(to right, #2C3E50, #4CA1AF);
      color: white;
      text-align: center;
      padding: 10px 0;
      position: relative;
    }
    .nav-brand a{
      font-size:22px;
    }
    .nav-brand a i{
      font-size:22px;
    }

    .header .nav-item {
      margin-left: 20px;
    }

    .sidebar {
      background-color: #343a40;
      color: white;
      min-height: 100vh;
      padding-top: 20px;
    }

    .sidebar .nav-link {
      color: white;
    }

    .sidebar .nav-link.active {
      background-color: #495057;
    }
    .sidebar .nav-link a:hover {
      background-color: #355568;
    }

    .content {
      padding: 20px;
    }

    .card-custom {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s;
      margin-bottom: 20px;
    }

    .card-custom:hover {
      transform: scale(1.05);
    }

    .footer {
      background-color: #343a40;
      color: white;
      text-align: center;
      padding: 10px 0;
    }

    .product-image {
      height: 200px;
      object-fit: cover;
      border-radius: 15px 15px 0 0;
    }

    .workout-image, .meal-plan-image {
      height: 200px;
      object-fit: cover;
      border-radius: 15px 15px 0 0;
    }


    .checkout-btn:hover {
        background-color: #0056b3;
    }

        /* Dropdown Content (hidden by default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 1px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {background-color: #f1f1f1}

        /* Show the dropdown menu */
        .show {display:block;}

  </style>
  
</head>
<body>

<header class="header">
    <div class="container-fluid d-flex justify-content-center align-items-center">
      <a class="navbar-brand" href="main.blade.php">
          <img src="images/logo.png" alt="Fithub Logo" width="30" height="30"> <!-- Logo Image -->
           Fithub
      </a>
        <ul class="nav ms-auto">
            <li class="nav-item">
                <a class="nav-link text-white d-flex align-items-center" href="#" id="profileLink">
                    <img src="images/logo.png" id="profileImage" alt="Profile" class="rounded-circle" width="30" height="30"> <!-- Profile Image -->
                    <span class="ms-2">Profile <i class="fas fa-caret-down" ></i></span>
                </a>
                <div class="dropdown-content" id="profileDropdown">
                    <a href="#">Account</a>
                    <a href="#">Placed Orders</a>
                    <a href="#">Received Orders</a>
                    <a href="{{ route('welcome') }}">Log Out</a>
                </div>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white d-flex align-items-center" href="#" id="helpLink">
                <i class="fas fa-question-circle"></i> <!-- Help Icon -->
                <span class="ms-2">Help <i class="fas fa-caret-down" ></i></span>
            </a>
             <div class="dropdown-content" id="helpDropdown">
                <a href="#">FAQ</a>
                <a href="#">Support</a>
                <a href="#">Documentation</a>
                <a href="#">Contact Us</a>
             </div>
           </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">
                    <i class="fas fa-file-alt"></i> <!-- Subscriptions Icon -->
                    Subscriptions
                </a>
            </li>
            <!-- Cart Notification -->
            <li class="nav-item">
                <a class="nav-link text-white" href="cart.php" id="cartLink">
                    <i class="fas fa-shopping-cart"></i>
                    <span id="cart-notification" class="badge badge-danger">3</span>
                </a>
            </li>
        </ul>
    </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-md-block bg-dark sidebar">
      <div class="position-sticky">
        <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" data-content="workouts"><i class="fas fa-dumbbell"></i> Workouts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-content="shop"><i class="fas fa-store"></i> Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-content="mentor-mode"><i class="fas fa-user-friends"></i> Mentor Mode</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-content="meal-plans"><i class="fas fa-utensils"></i> Meal Plans</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-content="fitness-tracker"><i class="fas fa-heartbeat"></i> Fitness Tracker</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-content="notifications"><i class="fas fa-bell"></i> Notifications</a>
        </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 content" id="main-content">
      <!-- Dynamic content will be loaded here -->
      <div class="card card-custom">
        <div class="card-body">
          <h5 class="card-title">Welcome to the Fitness App</h5>
          <p class="card-text">Select a menu item from the sidebar to see more details.</p>
        </div>
      </div>
    </main>
  </div>
</div>


<footer class="footer">
  <p>&copy; 2024 Fithub by Nicholas_Ke. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
          // Header section script
          document.getElementById("profileLink").onclick = function(event) {
              event.preventDefault();
              closeAllDropdowns();
              document.getElementById("profileDropdown").classList.toggle("show");
          };

          document.getElementById("helpLink").onclick = function(event) {
              event.preventDefault();
              closeAllDropdowns();
              document.getElementById("helpDropdown").classList.toggle("show");
          };

          // Close the dropdowns if the user clicks outside of them
          window.onclick = function(event) {
              if (!event.target.matches('#profileLink') && !event.target.matches('#helpLink')) {
                  closeAllDropdowns();
              }
          };
          // Function to close all dropdowns
            function closeAllDropdowns() {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }


    document.getElementById("cartLink").onclick = function(event) {
        event.preventDefault();
        displayCart();
      };

    document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('.nav-link[data-content]');
    const content = document.getElementById('main-content');

    links.forEach(link => {
      link.addEventListener('click', function (event) {
        event.preventDefault();

        links.forEach(l => l.classList.remove('active'));
        link.classList.add('active');

        const contentKey = link.getAttribute('data-content');
        loadContent(contentKey);
      });
    });

    function loadContent(key) {
      let contentHtml = '';
      switch (key) {
        case 'workouts':
          contentHtml = `
            <div class="row">
              ${generateWorkoutCards()}
            </div>`;
          break;
        case 'shop':
          contentHtml = `
            <div class="row">
              ${displayShopCards()}
            </div>`;
          break;
          case 'mentor-mode':
      contentHtml = `
        <div class="mentor-mode-container">
          <div class="card card-custom">
            <div class="card-body">
              <h5 class="card-title">Mentor Mode</h5>
              <p class="card-text">Connect with fitness mentors.</p>
              <div id="mentorCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  ${generateMentorProfiles()}
                </div>
                <a class="carousel-control-prev" href="#mentorCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#mentorCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
          <div class="mentor-list">
            ${generateMentorList()}
          </div>
        </div>`;
      break;
        case 'meal-plans':
          contentHtml = `
            <div class="row">
              ${generateMealPlanCards()}
            </div>`;
          break;
        case 'fitness-tracker':
          contentHtml = `
            <div class="card card-custom">
              <div class="card-body">
                <h5 class="card-title">Fitness Tracker</h5>
                ${generateFitnessTracker()}
              </div>
            </div>`;
          break;
        case 'notifications':
          contentHtml = `
            <div class="card card-custom">
              <div class="card-body">
                <h5 class="card-title">Notifications</h5>
                <p class="card-text">Your latest notifications.</p>
              </div>
            </div>`;
          break;
          case 'cart':
          contentHtml = `
          <div class="cart-container">
            <h2>Shopping Cart</h2>
            <div class="cart-items">
              <!-- Cart items will be dynamically inserted here -->
            </div>
            <div class="cart-summary">
              <h3>Cart Summary</h3>
              <p>Subtotal: <span class="subtotal">$0.00</span></p>
              <p>Tax: <span class="tax">$0.00</span></p>
              <p>Total: <span class="total">$0.00</span></p>
              <button class="checkout-btn">Proceed to Checkout</button>
            </div>
          </div>`;
          break;

          default:
          contentHtml = `
            <div class="card card-custom">
              <div class="card-body">
                <h5 class="card-title">Welcome to the Fitness App</h5>
                <p class="card-text">Select a menu item from the sidebar to see more details.</p>
              </div>
            </div>`;
      }
      content.innerHTML = contentHtml;
      if (key === 'fitness-tracker') {
        renderFitnessChart();
      }
    }

    function generateWorkoutCards() {
      const workouts = [
        { name: "Cardio Blast", description: "High-intensity cardio workout", img: "{{ asset('images/cardioworkout.jpeg') }}" },
        { name: "Strength Training", description: "Build muscle and strength", img: "{{ asset('images/chestworkout.jpeg') }}" },
        { name: "Yoga Flow", description: "Relaxing yoga session", img: "{{ asset('images/yogaworkouts.jpeg') }}" },
        { name: "HIIT", description: "High-intensity interval training", img: "{{ asset('images/HIIT.jpeg') }}" },
        { name: "Pilates", description: "Core strength and flexibility", img: "{{ asset('images/coreworkout.jpeg') }}" },
        { name: "CrossFit", description: "Intense crossfit workout", img: "{{ asset('images/workouts.jpeg') }}" }
      ];

      return workouts.map(workout => `
         <div class="col-md-4">
          <div class="card card-custom">
            <img src="${workout.img}" class="card-img-top workout-image" alt="${workout.name}">
            <div class="card-body">
              <h5 class="card-title">${workout.name}</h5>
              <p class="card-text">${workout.description}</p>
              <a href="#" class="btn btn-primary">Start Workout</a>
            </div>
          </div>
        </div>
      `).join('');
    }

    const products = [
        { id: 1, name: "Yoga Mat", description: "High quality yoga mat", price: 20.00, img: "{{ asset('images/yogamat.jpeg') }}" },
        { id: 2, name: "Dumbbells", description: "Set of 2 dumbbells", price: 40.00, img: "{{ asset('images/Dumbell.jpeg') }}" },
        { id: 3, name: "Running Shoes", description: "Comfortable running shoes", price: 60.00, img: "{{ asset('images/shoes.jpeg') }}" },
        { id: 4, name: "Fitness Tracker", description: "Track your fitness progress", price: 80.00, img: "{{ asset('images/tracker.jpeg') }}" },
        { id: 5, name: "Protein Powder", description: "High protein supplement", price: 30.00, img: "{{ asset('images/proteinpowder.jpeg') }}" },
        { id: 6, name: "Gym Bag", description: "Spacious gym bag", price: 25.00, img: "{{ asset('images/gymbag.jpeg') }}" }
    ];

    document.addEventListener("DOMContentLoaded", () => {
        displayShopCards();
        updateCartNotification();
    });

    function displayShopCards() {
        const productList = document.getElementById('product-list');
        productList.innerHTML = generateShopCards();
    }

    function generateShopCards() {
        return products.map(product => `
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="${product.img}" class="card-img-top product-image" alt="${product.name}">
                    <div class="card-body">
                        <h5 class="card-title">${product.name}</h5>
                        <p class="card-text">${product.description}</p>
                        <p class="card-text"><strong>$${product.price.toFixed(2)}</strong></p>
                        <button class="btn btn-primary add-to-cart-btn" onclick="addToCart(${product.id})">Add to Cart</button>
                    </div>
                </div>
            </div>
        `).join('');
    }

    function addToCart(productId) {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        const existingProductIndex = cart.findIndex(item => item.id === productId);
        if (existingProductIndex !== -1) {
            cart[existingProductIndex].quantity += 1;
        } else {
            cart.push({ id: productId, quantity: 1 });
        }
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartNotification();
    }

    function updateCartNotification() {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        const cartCountElement = document.getElementById('cart-count');
        cartCountElement.innerText = cart.length;
        cartCountElement.style.display = cart.length > 0 ? 'inline' : 'none';
    }

    function displayCart() {
        const mainContent = document.getElementById('main-content');
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        let subtotal = 0;

        const cartItemsHtml = cart.map(item => {
            const product = products.find(p => p.id === item.id);
            if (product) {
                subtotal += product.price * item.quantity;
                return `
                    <div class="cart-item">
                        <div class="product-image">
                            <img src="${product.img}" alt="${product.name}" style="height: 100px; object-fit: cover;">
                        </div>
                        <div class="product-details">
                            <h3 class="product-name">${product.name}</h3>
                            <p class="product-description">${product.description}</p>
                            <p class="product-price">$${(product.price * item.quantity).toFixed(2)}</p>
                            <div class="quantity">
                                <label for="quantity">Quantity:</label>
                                <input type="number" class="quantity-input" value="${item.quantity}" min="1" data-product-id="${product.id}">
                            </div>
                            <button class="btn btn-danger remove-btn" onclick="removeItem(${product.id})">Remove</button>
                        </div>
                    </div>
                `;
            }
        }).join('');

        const taxRate = 0.10;
        const tax = subtotal * taxRate;
        const total = subtotal + tax;

        mainContent.innerHTML = `
            <div class="card">
                <div class="card-body">
                    <h2>Shopping Cart</h2>
                    <div class="cart-items">${cartItemsHtml}</div>
                    <div class="cart-summary mt-4">
                        <h3>Cart Summary</h3>
                        <p>Subtotal: <span class="subtotal">$${subtotal.toFixed(2)}</span></p>
                        <p>Tax: <span class="tax">$${tax.toFixed(2)}</span></p>
                        <p>Total: <span class="total">$${total.toFixed(2)}</span></p>
                        <button class="checkout-btn btn btn-success">Proceed to Checkout</button>
                    </div>
                </div>
            </div>
        `;

        attachCartEventListeners();
    }

    function removeItem(productId) {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart = cart.filter(item => item.id !== productId);
        localStorage.setItem('cart', JSON.stringify(cart));
        displayCart();
        updateCartNotification();
    }

    function attachCartEventListeners() {
        const quantityInputs = document.querySelectorAll('.quantity-input');
        const removeButtons = document.querySelectorAll('.remove-btn');

        quantityInputs.forEach(input => {
            input.addEventListener('change', updateCartQuantity);
        });

        removeButtons.forEach(button => {
            button.addEventListener('click', removeItem);
        });
    }

    function updateCartQuantity(event) {
        const input = event.target;
        const productId = parseInt(input.getAttribute('data-product-id'));
        const newQuantity = parseInt(input.value);
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        const productIndex = cart.findIndex(item => item.id === productId);
        if (productIndex !== -1) {
            cart[productIndex].quantity = newQuantity;
        }
        localStorage.setItem('cart', JSON.stringify(cart));
        displayCart();
        updateCartNotification();
    }

    document.getElementById('cartLink').addEventListener('click', (event) => {
        event.preventDefault();
        displayCart();
    });

    // Initialize the cart notification count on page load
    updateCartNotification();
    
      function generateMentorProfiles() {
        const mentors = [
          { name: 'John Doe', specialty: 'Strength Training', image: 'mentor1.jpg' },
          { name: 'Jane Smith', specialty: 'Yoga', image: 'mentor2.jpg' },
          { name: 'Alex Johnson', specialty: 'Cardio Fitness', image: 'mentor3.jpg' },
          // Add more mentors as needed
        ];

        return mentors.map((mentor, index) => `
          <div class="carousel-item ${index === 0 ? 'active' : ''}">
            <img src="${mentor.image}" class="d-block w-100" alt="${mentor.name}">
            <div class="carousel-caption d-none d-md-block">
              <h5>${mentor.name}</h5>
              <p>${mentor.specialty}</p>
              
            </div>
          </div>`).join('');
      }

      function generateMentorList() {
        const mentors = [
          { name: 'John Doe', specialty: 'Strength Training', image: 'mentor1.jpg', bio: 'Experienced strength coach.' },
          { name: 'Jane Smith', specialty: 'Yoga', image: 'mentor2.jpg', bio: 'Certified yoga instructor.' },
          { name: 'Alex Johnson', specialty: 'Cardio Fitness', image: 'mentor3.jpg', bio: 'Expert in cardio workouts.' },
          // Add more mentors as needed
        ];

        return mentors.map(mentor => `
          <div class="card mentor-card">
            <img src="${mentor.image}" class="card-img-top" alt="${mentor.name}">
            <div class="card-body">
              <h5 class="card-title">${mentor.name}</h5>
              <p class="card-text">${mentor.specialty}</p>
              <p class="card-text">${mentor.bio}</p>
              <a href="#" class="btn btn-primary">Book Session</a>
            </div>
          </div>`).join('');
      }

      function generateMealPlanCards() {
      const mealPlans = [
        { name: "Weight Loss Plan", description: "Healthy meals to help you lose weight", img: "{{ asset('images/weightloss.jpeg') }}" },
        { name: "Muscle Gain Plan", description: "Protein-rich meals for muscle growth", img: "{{ asset('images/Gain.jpeg') }}" },
        { name: "Vegetarian Plan", description: "Delicious vegetarian meals", img: "{{ asset('images/Vegeterian.jpeg') }}" },
        { name: "Keto Plan", description: "Low-carb ketogenic meals", img: "{{ asset('images/ketoplan.jpeg') }}" },
        { name: "Balanced Plan", description: "A balanced mix of all food groups", img: "{{ asset('images/Printables.jpeg') }}" },
        { name: "Mediterranean Plan", description: "Healthy Mediterranean meals", img: "{{ asset('images/cardio.jpeg') }}" },
        { name: "Cardio Plan", description: "A balanced mix of Cardio fat burn plans", img: "{{ asset('images/download.jpeg') }}" },
        { name: "Energy Plans", description: "Healthy Energy meals", img: "{{ asset('images/Sugarfree.jpeg') }}" },
        { name: "Meal Diaries", description: "Healthy Meal dairies ", img: "{{ asset('images/mealdairy.jpeg') }}" }
      ];

      return mealPlans.map(plan => `
        <div class="col-md-4">
          <div class="card card-custom">
            <img src="${plan.img}" class="card-img-top meal-plan-image" alt="${plan.name}">
            <div class="card-body">
              <h5 class="card-title">${plan.name}</h5>
              <p class="card-text">${plan.description}</p>
              <a href="#" class="btn btn-primary">View Plan</a>
            </div>
          </div>
        </div>
      `).join('');
    }

    document.addEventListener('DOMContentLoaded', () => {
      document.getElementById('meal-plan-cards').innerHTML = generateMealPlanCards();
    });

    function generateFitnessTracker() {
      return `
        <h6>Fitness Log</h6>
        <div class="mb-3">
          <label for="dateInput" class="form-label">Date</label>
          <input type="date" class="form-control" id="dateInput">
        </div>
        <div class="mb-3">
          <label for="workoutInput" class="form-label">Workout</label>
          <input type="text" class="form-control" id="workoutInput">
        </div>
        <div class="mb-3">
          <label for="durationInput" class="form-label">Duration (mins)</label>
          <input type="number" class="form-control" id="durationInput">
        </div>
        <div class="mb-3">
          <label for="caloriesInput" class="form-label">Calories Burned</label>
          <input type="number" class="form-control" id="caloriesInput">
        </div>
        <button type="button" class="btn btn-primary" onclick="addFitnessData()">Add to Log</button>
        <canvas id="fitnessChart" width="400" height="200"></canvas>`;
    }

    function addFitnessData() {
      const date = document.getElementById('dateInput').value;
      const workout = document.getElementById('workoutInput').value;
      const duration = document.getElementById('durationInput').value;
      const calories = document.getElementById('caloriesInput').value;

      if (!date || !workout || !duration || !calories) {
        alert('Please fill in all fields');
        return;
      }

      let fitnessData = JSON.parse(localStorage.getItem('fitnessData')) || [];
      fitnessData.push({ date, workout, duration, calories });
      localStorage.setItem('fitnessData', JSON.stringify(fitnessData));

      renderFitnessChart();
    }

    function renderFitnessChart() {
      let fitnessData = JSON.parse(localStorage.getItem('fitnessData')) || [];
      let labels = fitnessData.map(entry => entry.date);
      let data = fitnessData.map(entry => entry.calories);

      const ctx = document.getElementById('fitnessChart').getContext('2d');
      new Chart(ctx, {
        type: 'line',
        data: {
          labels: labels,
          datasets: [{
            label: 'Calories Burned',
            data: data,
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 2,
            fill: false
          }]
        },
        options: {
          responsive: true,
          scales: {
            x: {
              display: true,
              title: {
                display: true,
                text: 'Date'
              }
            },
            y: {
              display: true,
              title: {
                display: true,
                text: 'Calories'
              }
            }
          }
        }
      });
    }

    loadContent('home');
  });
</script>


</body>
</html>

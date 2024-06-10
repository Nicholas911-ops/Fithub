<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fithub- Begin our fitness jorney with us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
      height: 150px;
      object-fit: cover;
      border-radius: 15px 15px 0 0;
    }

    .workout-image, .meal-plan-image {
      height: 100px;
      object-fit: cover;
      border-radius: 15px 15px 0 0;
    }
  </style>
</head>
<body>

<header class="header">
  <div class="container-fluid d-flex justify-content-center align-items-center">
    <img src="logo.png" alt="Company Logo" style="height: 50px;">
    <h1 class="ms-3">Fithub</h1>
    <ul class="nav ms-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Subscriptions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Log Out</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Cart</a>
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
            <a class="nav-link active" aria-current="page" href="#" data-content="workouts">
              Workouts
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-content="shop">
              Shop
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-content="mentor-mode">
              Mentor Mode
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-content="meal-plans">
              Meal Plans
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-content="fitness-tracker">
              Fitness Tracker
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-content="notifications">
              Notifications
            </a>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
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
              ${generateShopCards()}
            </div>`;
          break;
        case 'mentor-mode':
          contentHtml = `
            <div class="card card-custom">
              <div class="card-body">
                <h5 class="card-title">Mentor Mode</h5>
                <p class="card-text">Connect with fitness mentors.</p>
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
        { name: "Cardio Blast", description: "High-intensity cardio workout", img: "https://via.placeholder.com/300x150?text=Cardio+Blast" },
        { name: "Strength Training", description: "Build muscle and strength", img: "https://via.placeholder.com/300x150?text=Strength+Training" },
        { name: "Yoga Flow", description: "Relaxing yoga session", img: "https://via.placeholder.com/300x150?text=Yoga+Flow" },
        { name: "HIIT", description: "High-intensity interval training", img: "https://via.placeholder.com/300x150?text=HIIT" },
        { name: "Pilates", description: "Core strength and flexibility", img: "https://via.placeholder.com/300x150?text=Pilates" },
        { name: "CrossFit", description: "Intense crossfit workout", img: "https://via.placeholder.com/300x150?text=CrossFit" }
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

    function generateShopCards() {
      const products = [
        { name: "Yoga Mat", description: "High quality yoga mat", price: "$20", img: "https://via.placeholder.com/300x150?text=Yoga+Mat" },
        { name: "Dumbbells", description: "Set of 2 dumbbells", price: "$40", img: "https://via.placeholder.com/300x150?text=Dumbbells" },
        { name: "Running Shoes", description: "Comfortable running shoes", price: "$60", img: "https://via.placeholder.com/300x150?text=Running+Shoes" },
        { name: "Fitness Tracker", description: "Track your fitness progress", price: "$80", img: "https://via.placeholder.com/300x150?text=Fitness+Tracker" },
        { name: "Protein Powder", description: "High protein supplement", price: "$30", img: "https://via.placeholder.com/300x150?text=Protein+Powder" },
        { name: "Gym Bag", description: "Spacious gym bag", price: "$25", img: "https://via.placeholder.com/300x150?text=Gym+Bag" }
      ];

      return products.map(product => `
        <div class="col-md-4">
          <div class="card card-custom">
            <img src="${product.img}" class="card-img-top product-image" alt="${product.name}">
            <div class="card-body">
              <h5 class="card-title">${product.name}</h5>
              <p class="card-text">${product.description}</p>
              <p class="card-text"><strong>${product.price}</strong></p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
      `).join('');
    }

    function generateMealPlanCards() {
      const mealPlans = [
        { name: "Weight Loss Plan", description: "Healthy meals to help you lose weight", img: "https://via.placeholder.com/300x150?text=Weight+Loss+Plan" },
        { name: "Muscle Gain Plan", description: "Protein-rich meals for muscle growth", img: "https://via.placeholder.com/300x150?text=Muscle+Gain+Plan" },
        { name: "Vegetarian Plan", description: "Delicious vegetarian meals", img: "https://via.placeholder.com/300x150?text=Vegetarian+Plan" },
        { name: "Keto Plan", description: "Low-carb ketogenic meals", img: "https://via.placeholder.com/300x150?text=Keto+Plan" },
        { name: "Balanced Plan", description: "A balanced mix of all food groups", img: "https://via.placeholder.com/300x150?text=Balanced+Plan" },
        { name: "Mediterranean Plan", description: "Healthy Mediterranean meals", img: "https://via.placeholder.com/300x150?text=Mediterranean+Plan" }
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
    <button type="button" class="btn btn-primary" onclick="addFitnessData()">Add Data</button>
    <hr>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Date</th>
          <th>Workout</th>
          <th>Duration (mins)</th>
          <th>Calories Burned</th>
        </tr>
      </thead>
      <tbody id="fitnessLogBody">
        <!-- Fitness log data will be dynamically added here -->
      </tbody>
    </table>
    <canvas id="fitnessChart" width="400" height="200"></canvas>
  `;
}

function addFitnessData() {
  const date = document.getElementById('dateInput').value;
  const workout = document.getElementById('workoutInput').value;
  const duration = parseInt(document.getElementById('durationInput').value);
  const calories = parseInt(document.getElementById('caloriesInput').value);

  if (!date || !workout || isNaN(duration) || isNaN(calories)) {
    alert('Please fill in all fields with valid data.');
    return;
  }

  const fitnessLogBody = document.getElementById('fitnessLogBody');
  const newRow = `
    <tr>
      <td>${date}</td>
      <td>${workout}</td>
      <td>${duration}</td>
      <td>${calories}</td>
    </tr>
  `;
  fitnessLogBody.insertAdjacentHTML('beforeend', newRow);

  updateFitnessChart(date, calories);
}

function updateFitnessChart(date, calories) {
  let chart = Chart.getOrCreate('fitnessChart');

  if (!chart) {
    const ctx = document.getElementById('fitnessChart').getContext('2d');
    chart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: [date],
        datasets: [{
          label: 'Calories Burned',
          data: [calories],
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  } else {
    chart.data.labels.push(date);
    chart.data.datasets[0].data.push(calories);
    chart.update();
  }
}



    // Load the default content
    loadContent('workouts');
  });
</script>

</body>
</html>

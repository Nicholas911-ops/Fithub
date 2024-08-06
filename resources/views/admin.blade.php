<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fithub Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            flex-direction: column; /* Modified to accommodate the header */
        }

        .header {
            width: 100%;
            background-color: #2c3e50;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 7px 14px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        .header .logo {
            display: flex;
            align-items: center;
            flex-basis: 30%; /* Adjust flex-basis for logo */
        }

        .header .logo img {
            height: 40px;
            margin-right: 10px;
            border-radius: 10%;
        }

        .header .search-bar {
            display: flex;
            justify-content: center;
            align-items: center; /* Align items vertically */
            position: relative;
            flex-basis: 40%; /* Adjust flex-basis for search bar */
        }

        .header .search-bar input {
            width: 100%;
            padding: 8px 35px 8px 15px; /* Adjust padding for search icon */
            border: none;
            border-radius: 25px;
        }

        .header .search-bar .search-icon {
            position: absolute;
            right: 10px;
            color: #aaa;
        }

        .header .profile {
            display: flex;
            align-items: center;
            flex-basis: 30%; /* Adjust flex-basis for profile */
            justify-content: center; /* Align profile to the right */
        }

        .header .profile img {
            height: 30px;
            border-radius: 50%;
            margin-right: 18px;
        }

        .header .profile span {
            display: flex;
            align-items: center;
        }

        .header .profile span i {
            margin-left: 10px;
        }


        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            height: 100vh;
            position: fixed;
            top: 60px; /* Adjusted to make space for the header */
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.5em;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 20px 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .sidebar ul li a:hover {
            background-color: #1abc9c;
        }

        .sidebar ul li a i {
            margin-right: 10px;
        }

        .main-content {
            margin-left: 270px;
            margin-top: 80px; /* Adjusted to make space for the header */
            padding: 20px;
            flex: 1;
        }

        .section {
            display: none;
        }

        .section.active {
            display: block;
        }

        .section h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .form-container h2 {
            margin-top: 0;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-container button {
            padding: 10px 20px;
            background-color: #2980b9;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .form-container button:hover {
            background-color: #3498db;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .intro {
            margin-top: 10px;
            margin-bottom: 10px;
            margin-left: 15px;
        }

        .dashboard-cards {
            display: flex;
            justify-content: space-around;
            margin-top: 25px;
            margin-bottom: 30px;
        }

        .card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 23%;
            margin-right: 10px;
            margin-left: 15px;
        }

        .card-icon {
            font-size: 3em;
            color: #3498db;
            margin-bottom: 10px;
        }

        .card-content h3 {
            margin: 0;
            font-size: 1.2em;
            color: #333;
        }

        .card-content p {
            margin: 5px 0 0;
            font-size: 1.5em;
            color: #3498db;
        }

        .quick-actions {
            display: flex;
            justify-content: space-around;
        }

        .action-btn {
            background-color: #2980b9;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .action-btn:hover {
            background-color: #3498db;
        }

        .profile {
            position: relative;
            display: inline-block;
        }

        .dropdown-menu {
            display: none; /* Hide the dropdown menu by default */
            position: absolute;
            top: 100%; /* Position the menu below the profile section */
            right: 17%;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000; /* Ensure the menu is on top of other elements */
        }

        .dropdown-menu a {
            display: block;
            padding: 8px 16px;
            text-decoration: none;
            color: #333;
        }

        .dropdown-menu a:hover {
            background-color: #f0f0f0;
        }

    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="images/logo.png" alt="Fithub Logo">
            <h1>Fithub</h1>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
            <i class="fas fa-search search-icon"></i>
        </div>
        <div class="profile">
            <img src="images/logo.png" alt="Admin Profile">
                <span>
                    Admin 
                    <i class="fas fa-caret-down" id="dropdownToggle"></i>
                </span>
            <div class="dropdown-menu" id="dropdownMenu">
                    <a href="#">Account Details</a>
                    <a href="#">Department</a>
                    <a href="#">Log out</a>
              </div>
        </div>

    </div>

    <div class="sidebar">
        
        <ul>
            <li><a id="sidebar-dashboard" href="#dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a id="sidebar-users" href="#users"><i class="fas fa-user-cog"></i> Users</a></li>
            <li><a id="sidebar-manage-videos" href="#manage-videos"><i class="fas fa-video"></i> Videos</a></li>
            <li><a id="sidebar-manage-users" href="#manage-users"><i class="fas fa-box"></i> Manage Users</a></li>
            <li><a id="sidebar-manage-videos" href="#manage-videos"><i class="fas fa-video"></i> Manage Videos</a></li>
            <li><a id="sidebar-orders" href="#orders"><i class="fas fa-video"></i> Orders</a></li>
            <li><a id="sidebar-orders" href="#orders"><i class="fas fa-chart-bar"></i> Reports</a></li>
            <li><a id="sidebar-manage-videos" href="#manage-videos"><i class="fas fa-globe"></i> Regions</a></li>
            <li><a id="sidebar-orders" href="#orders"><i class="fas fa-cog"></i> Settings</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div id="dashboard" class="section active">
            <div class="intro">
                <h1>Dashboard</h1>
                <p> Welcome to the Fithub Admin Dashboard.</p>
            </div>
            <div class="dashboard-cards">
                <div class="card">
                    <div class="card-icon"><i class="fas fa-users"></i></div>
                    <div class="card-content">
                        <h3>Users</h3>
                        <p class="user-count">65</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-icon"><i class="fas fa-video"></i></div>
                    <div class="card-content">
                        <h3>Videos</h3>
                        <p>45</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-icon"><i class="fas fa-box"></i></div>
                    <div class="card-content">
                        <h3>Orders</h3>
                        <p>30</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-icon"><i class="fas fa-dollar-sign"></i></div>
                    <div class="card-content">
                        <h3>Revenue</h3>
                        <p>$5,000</p>
                    </div>
                </div>
            </div>
            <div class="quick-actions">
                <button class="action-btn" onclick="showContent('#manage-users')"><i class="fas fa-user-plus"></i> Revenue Oversight</button>
                <button class="action-btn" onclick="showContent('#manage-videos')"><i class="fas fa-plus-circle"></i>Generate Reports</button>
                <button class="action-btn" onclick="showContent('#orders')"><i class="fas fa-eye"></i> View Orders</button>
            </div>
        </div>
        <div id="manage-users" class="section">
            <h1>Manage Users</h1>
            <div class="form-container">
                <h2>Add User</h2>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button id="add-user-btn">Add User</button>
            </div>
            <div class="form-container">
                <h2>Remove User</h2>
                <label for="remove-username">Username:</label>
                <input type="text" id="remove-username" name="username" required>
                <button id="remove-user-btn">Remove User</button>
            </div>
            <table id="users-table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dynamic content will be inserted here -->
                </tbody>
            </table>
        </div>
        <div id="manage-videos" class="section">
            <h1>Manage Videos</h1>
            <div class="form-container">
                <h2>Add Video</h2>
                <label for="video-title">Title:</label>
                <input type="text" id="video-title" name="title" required>
                <label for="video-url">URL:</label>
                <input type="url" id="video-url" name="url" required>
                <button id="add-video-btn">Add Video</button>
            </div>
            <div class="form-container">
                <h2>Remove Video</h2>
                <label for="remove-video-title">Title:</label>
                <input type="text" id="remove-video-title" name="title" required>
                <button id="remove-video-btn">Remove Video</button>
            </div>
            <table id="videos-table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>URL</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dynamic content will be inserted here -->
                </tbody>
            </table>
        </div>
        <div id="orders" class="section">
            <h1>Orders</h1>
            <table id="orders-table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>User</th>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Date of Submission</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dynamic content will be inserted here -->
                </tbody>
            </table>
        </div>
        <div id="users" class="section">
            <h1>Orders</h1>
            <table id="users-table">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dynamic content will be inserted here -->
                </tbody>
            </table>
        </div>
    </div>
    <script>

        fetch('/user-count')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                const userCountElement = document.querySelector('.user-count');
                if (data && data.userCount !== undefined) {
                    userCountElement.textContent = data.userCount;
                } else {
                    console.error('Invalid data format:', data);
                    userCountElement.textContent = 'N/A';
                }
            })
            .catch(error => {
                console.error('Error fetching user count:', error);
                const userCountElement = document.querySelector('.user-count');
                userCountElement.textContent = 'Error';
            });


    
        document.addEventListener('DOMContentLoaded', function () {
            const sections = document.querySelectorAll('.section');
            const sidebarLinks = document.querySelectorAll('.sidebar ul li a');

            function activateSection(targetId) {
                sections.forEach(section => {
                    section.classList.remove('active');
                });

                document.getElementById(targetId).classList.add('active');
            }

            sidebarLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    activateSection(targetId);
                });
            });

            document.getElementById('dashboard-btn').addEventListener('click', function () {
                document.getElementById('sidebar-dashboard').click();
            });

            function renderOrders() {
                const ordersTableBody = document.getElementById('orders-table').querySelector('tbody');
                ordersTableBody.innerHTML = '';
                orders.forEach(order => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${order.id}</td>
                        <td>${order.user}</td>
                        <td>${order.item}</td>
                        <td>${order.quantity}</td>
                        <td>${order.date}</td>
                        <td>${order.status}</td>
                    `;
                    ordersTableBody.appendChild(row);
                });
            }

            function renderUsers() {
                const ordersTableBody = document.getElementById('users-table').querySelector('tbody');
                ordersTableBody.innerHTML = '';
                orders.forEach(order => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${order.id}</td>
                        <td>${order.username}</td>
                        <td>${order.email}</td>
                        <td>${order.role}</td>
                    `;
                    ordersTableBody.appendChild(row);
                });
            }

            function renderVideos() {
                const videosTableBody = document.getElementById('videos-table').querySelector('tbody');
                videosTableBody.innerHTML = '';
                videos.forEach(video => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${video.title}</td>
                        <td>${video.url}</td>
                    `;
                    videosTableBody.appendChild(row);
                });
            }

            document.getElementById('add-user-btn').addEventListener('click', function () {
                const username = document.getElementById('username').value;
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;

                if (username && email && password) {
                    users.push({ username, email });
                    renderUsers();
                    document.getElementById('username').value = '';
                    document.getElementById('email').value = '';
                    document.getElementById('password').value = '';
                } else {
                    alert('Please fill out all fields.');
                }
            });

            document.getElementById('remove-user-btn').addEventListener('click', function () {
                const username = document.getElementById('remove-username').value;

                const index = users.findIndex(user => user.username === username);
                if (index !== -1) {
                    users.splice(index, 1);
                    renderUsers();
                    document.getElementById('remove-username').value = '';
                } else {
                    alert('User not found.');
                }
            });

            document.getElementById('add-video-btn').addEventListener('click', function () {
                const title = document.getElementById('video-title').value;
                const url = document.getElementById('video-url').value;

                if (title && url) {
                    videos.push({ title, url });
                    renderVideos();
                    document.getElementById('video-title').value = '';
                    document.getElementById('video-url').value = '';
                } else {
                    alert('Please fill out all fields.');
                }
            });

            document.getElementById('remove-video-btn').addEventListener('click', function () {
                const title = document.getElementById('remove-video-title').value;

                const index = videos.findIndex(video => video.title === title);
                if (index !== -1) {
                    videos.splice(index, 1);
                    renderVideos();
                    document.getElementById('remove-video-title').value = '';
                } else {
                    alert('Video not found.');
                }
            });

            renderOrders();
            renderUsers();
        });

        // quick btns js
        function showContent(targetId) {
            event.stopPropagation(); // Prevent event bubbling
            const contentSections = document.querySelectorAll('.content-section');
            contentSections.forEach(section => {
                section.style.display = 'none';
            });

            const targetSection = document.getElementById(targetId);
            if (targetSection) {
                targetSection.style.display = 'block';
            } else {
                console.error('Target element not found:', targetId);
            }
        }

        // Function to toggle the dropdown menu
        function toggleDropdown() {
            var dropdownMenu = document.getElementById('dropdownMenu');
            var isDisplayed = dropdownMenu.style.display === 'block';
            dropdownMenu.style.display = isDisplayed ? 'none' : 'block';
        }

        // Event listener for the caret icon to toggle the dropdown menu
        document.getElementById('dropdownToggle').addEventListener('click', function(event) {
            event.stopPropagation(); // Prevent the click event from propagating to the document
            toggleDropdown();
        });

        // Event listener to close the dropdown menu if clicking outside
        window.addEventListener('click', function(event) {
            var dropdownMenu = document.getElementById('dropdownMenu');
            var profile = document.querySelector('.profile');
            if (!profile.contains(event.target)) {
                if (dropdownMenu.style.display === 'block') {
                    dropdownMenu.style.display = 'none';
                }
            }
        });


    </script>
</body>
</html>

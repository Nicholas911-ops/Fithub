<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fithub Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

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
           <li><a id="sidebar-users" href="#users"><i class="fas fa-users-cog"></i> Users</a></li>
           <li><a id="sidebar-manage-videos" href="#workout-videos"><i class="fas fa-video"></i> Videos</a></li>
           <li><a id="sidebar-manage-users" href="#mentors"><i class="fas fa-user-graduate"></i> Mentors</a></li>
           <li><a id="sidebar-manage-sessions" href="#manage-sessions"><i class="fas fa-calendar-alt"></i> Sessions</a></li>
           <li><a id="sidebar-orders" href="#orders"><i class="fas fa-shopping-cart"></i> Orders</a></li>
           <li><a id="sidebar-reports" href="#reports"><i class="fas fa-chart-line"></i> Reports</a></li>
           <li><a id="sidebar-manage-users" href="#manage-users"><i class="fas fa-users"></i> Manage Users</a></li>
           <li><a id="sidebar-manage-videos" href="#manage-videos"><i class="fas fa-video"></i> Manage Videos</a></li>

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
                        <p class="user-count"></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-icon"><i class="fas fa-video"></i></div>
                    <div class="card-content">
                        <h3>Videos</h3>
                        <p class="video-count"></p>
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
            <h1>Users</h1>
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

            <div id="mentors" class="section">
                <h1>Mentors</h1>
                <table id="mentors-table">
                    <thead>
                        <tr>
                            <th>Mentor ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Bio</th>
                            <th>Profile</th> <!-- New column for images -->
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dynamic content will be inserted here -->
                    </tbody>
                </table>
            </div>


            <div id="workout-videos" class="section">
                <h1>Workout Videos</h1>
                <table id="workout-videos-table">
                    <thead>
                        <tr>
                            <th>Video ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Video URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dynamic content will be inserted here -->
                    </tbody>
                </table>
            </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include your JavaScript files -->
    <script src="{{ asset('js/videos_mentors.js') }}"></script>
    <script src="{{ asset('js/users.js') }}"></script>
    <script>

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

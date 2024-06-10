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
        }

        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            height: 100vh;
            position: fixed;
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
        .dashboard-cards {
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
    margin-bottom: 30px;
}

.card {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 23%;
    margin-right:10px;
    margin-left:10px;
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
    border-radius: 5
}
    </style>
</head>
<body>
  <div class="sidebar">
    <h2>Fithub Admin</h2>
   <ul>
    <li><a id="sidebar-dashboard" href="#dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li><a id="sidebar-manage-users" href="#manage-users"><i class="fas fa-users"></i> Manage Users</a></li>
    <li><a id="sidebar-manage-videos" href="#manage-videos"><i class="fas fa-video"></i> Manage Videos</a></li>
    <li><a id="sidebar-orders" href="#orders"><i class="fas fa-box"></i> Orders</a></li>
   </ul>

    </div>
    <div class="main-content">
    <div id="dashboard" class="section active">
    <h1>Dashboard</h1>
    <p>Welcome to the Fithub Admin Dashboard.</p>
    <div class="dashboard-cards">
        <div class="card">
            <div class="card-icon"><i class="fas fa-users"></i></div>
            <div class="card-content">
                <h3>Users</h3>
                <p>120</p>
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
        <button class="action-btn" onclick="location.href='#manage-users'"><i class="fas fa-user-plus"></i> Add User</button>
        <button class="action-btn" onclick="location.href='#manage-videos'"><i class="fas fa-plus-circle"></i> Add Video</button>
        <button class="action-btn" onclick="location.href='#orders'"><i class="fas fa-eye"></i> View Orders</button>
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
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dynamic content will be inserted here -->
                </tbody>
            </table>
        </div>
    </div>
    
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

                    document.getElementById('add-user-btn').addEventListener('click', function () {
                        document.getElementById('add-user-btn').click();
                    });

                    document.getElementById('add-video-btn').addEventListener('click', function () {
                        document.getElementById('add-video-btn').click();
                    });

                    document.getElementById('view-orders-btn').addEventListener('click', function () {
                        document.getElementById('orders-table').click();
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
                    <td>${order.status}</td>
                `;
                ordersTableBody.appendChild(row);
            });
        }

        function renderUsers() {
            const usersTableBody = document.getElementById('users-table').querySelector('tbody');
            usersTableBody.innerHTML = '';
            users.forEach(user => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${user.username}</td>
                    <td>${user.email}</td>
                `;
                usersTableBody.appendChild(row);
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
            });

    </script>
</body>
</html>

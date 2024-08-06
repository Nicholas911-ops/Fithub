<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Fithub</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            padding-top: 80px; /* Adjust as needed based on the height of your header */
            background-image: url('gym.jpg'); /* Replace 'gym-background.jpg' with your background image */
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
         header {
            background-color: #2c3e50; /* Change the background color */
            color: #fff;
            padding: 20px;
            text-align: center;
            position: fixed; /* Stick the header to the top of the page */
            width: 100%; /* Make the header span the entire width of the viewport */
            top: 0; /* Align the header to the top of the page */
            z-index: 1000; /* Ensure the header is above other content */
        }

        header h1 {
            margin: 0;
            font-size: 29px;
            color:#fff;
            margin-bottom: 15px;
        }

        nav {
            background-color: #34495e; /* Change the background color */
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #2c3e50; /* Change the hover background color */
        }

        .content {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            max-width: 600px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
        }

        .cta-buttons a {
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 0 10px;
            transition: background-color 0.3s ease;
        }

        .cta-buttons a:hover {
            background-color: #0056b3;
        }
        
    </style>
</head>
<body>
    <header>
        <h1>Fithub </h1>
     <nav>
        <a href="home.html">Home</a>
        <a href="#">Workouts</a>
        <a href="#">Nutrition</a>
        <a href="#">Community</a>
    </nav>
    </header>

    <div class="content">
        <h1>Welcome to Fithub</h1>
        <p>Your ultimate fitness companion</p>
        <div class="cta-buttons">
         <a href="{{ route('login') }}">Login</a>
         <a href="{{ route('register') }}">Create account</a>
        </div>

    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sheraton Hotels</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
 
        body {
            background-color: #f4f4f9;
            color: #333;
        }
 
        /* Header and Navigation */
        header {
            background: linear-gradient(135deg, #6a1b9a, #ab47bc);
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
 
        header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }
 
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-size: 1.2em;
        }
 
        nav a:hover {
            text-decoration: underline;
        }
 
        /* Search Bar */
        .search-container {
            background: white;
            padding: 20px;
            margin: 20px auto;
            width: 80%;
            max-width: 800px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
 
        .search-container form {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
 
        .search-container input, .search-container select {
            padding: 10px;
            border: 1px solid #ab47bc;
            border-radius: 5px;
            flex: 1;
            min-width: 200px;
        }
 
        .search-container button {
            background-color: #6a1b9a;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
 
        .search-container button:hover {
            background-color: #ab47bc;
        }
 
        /* Hotel Listings */
        .hotel-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }
 
        .hotel-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
 
        .hotel-card:hover {
            transform: translateY(-5px);
        }
 
        .hotel-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
 
        .hotel-card-content {
            padding: 15px;
        }
 
        .hotel-card-content h3 {
            color: #6a1b9a;
            margin-bottom: 10px;
        }
 
        .hotel-card-content p {
            margin-bottom: 10px;
            color: #555;
        }
 
        .hotel-card-content button {
            background-color: #6a1b9a;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
 
        .hotel-card-content button:hover {
            background-color: #ab47bc;
        }
 
        /* Booking Form */
        .booking-form {
            background: white;
            padding: 20px;
            margin: 20px auto;
            width: 80%;
            max-width: 600px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
 
        .booking-form h2 {
            color: #6a1b9a;
            margin-bottom: 20px;
        }
 
        .booking-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ab47bc;
            border-radius: 5px;
        }
 
        .booking-form button {
            background-color: #6a1b9a;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
 
        .booking-form button:hover {
            background-color: #ab47bc;
        }
 
        /* Filters */
        .filters {
            margin: 20px auto;
            width: 80%;
            max-width: 800px;
            display: flex;
            gap: 10px;
        }
 
        .filters select {
            padding: 10px;
            border: 1px solid #ab47bc;
            border-radius: 5px;
        }
 
        /* Responsive Design */
        @media (max-width: 768px) {
            .search-container form {
                flex-direction: column;
            }
 
            .filters {
                flex-direction: column;
            }
        }
 
        /* Confirmation Message */
        .confirmation {
            display: none;
            position: fixed;
            top: 20px;
            right: 20px;
            background: #6a1b9a;
            color: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <header>
        <h1>Sheraton Hotels</h1>
        <nav>
            <a href="#home">Home</a>
            <a href="#hotels">Hotels</a>
            <a href="#booking">Book Now</a>
        </nav>
    </header>
 
    <div class="search-container" id="home">
        <form id="searchForm">
            <input type="text" id="destination" placeholder="Destination" required>
            <input type="date" id="checkin" required>
            <input type="date" id="checkout" required>
            <select id="priceRange">
                <option value="">Price Range</option>
                <option value="low">Low ($0-$100)</option>
                <option value="mid">Mid ($100-$200)</option

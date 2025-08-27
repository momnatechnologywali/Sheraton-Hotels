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
                <option value="mid">Mid ($100-$200)</option>
                <option value="high">High ($200+)</option>
            </select>
            <select id="rating">
                <option value="">Rating</option>
                <option value="4">4+ Stars</option>
                <option value="3">3+ Stars</option>
            </select>
            <button type="submit">Search</button>
        </form>
    </div>
 
    <div class="filters">
        <select id="sort">
            <option value="">Sort By</option>
            <option value="priceLow">Price: Low to High</option>
            <option value="priceHigh">Price: High to Low</option>
            <option value="rating">Best Rated</option>
        </select>
    </div>
 
    <div class="hotel-list" id="hotels">
        <!-- Hotel cards will be populated here -->
    </div>
 
    <div class="booking-form" id="booking" style="display: none;">
        <h2>Book Your Stay</h2>
        <form id="bookingForm">
            <input type="text" id="hotelId" hidden>
            <input type="text" id="userName" placeholder="Your Name" required>
            <input type="email" id="userEmail" placeholder="Your Email" required>
            <input type="text" id="hotelName" placeholder="Hotel Name" readonly>
            <input type="text" id="roomType" placeholder="Room Type" readonly>
            <input type="number" id="guests" placeholder="Number of Guests" required>
            <button type="submit">Confirm Booking</button>
        </form>
    </div>
 
    <div class="confirmation" id="confirmation">
        Booking Confirmed! Check your email for details.
    </div>
 
    <script>
        // Sample hotel data (in production, fetch from database)
        let hotels = [
            { id: 1, name: "Sheraton Grand", location: "New York", price: 150, rating: 4.5, image: "https://via.placeholder.com/300x200", amenities: ["Wi-Fi", "Pool"], roomType: "Deluxe" },
            { id: 2, name: "Sheraton Plaza", location: "London", price: 200, rating: 4.0, image: "https://via.placeholder.com/300x200", amenities: ["Gym", "Spa"], roomType: "Suite" },
            { id: 3, name: "Sheraton Elite", location: "Paris", price: 250, rating: 4.8, image: "https://via.placeholder.com/300x200", amenities: ["Wi-Fi", "Breakfast"], roomType: "Standard" }
        ];
 
        // Display hotels
        function displayHotels(hotelsToShow) {
            const hotelList = document.getElementById('hotels');
            hotelList.innerHTML = '';
            hotelsToShow.forEach(hotel => {
                const card = document.createElement('div');
                card.className = 'hotel-card';
                card.innerHTML = `
                    <img src="${hotel.image}" alt="${hotel.name}">
                    <div class="hotel-card-content">
                        <h3>${hotel.name}</h3>
                        <p>Location: ${hotel.location}</p>
                        <p>Price: $${hotel.price}/night</p>
                        <p>Rating: ${hotel.rating} ★</p>
                        <p>Amenities: ${hotel.amenities.join(', ')}</p>
                        <button onclick="showBookingForm(${hotel.id}, '${hotel.name}', '${hotel.roomType}')">Book Now</button>
                    </div>
                `;
                hotelList.appendChild(card);
            });
        }
 
        // Search and filter hotels
        document.getElementById('searchForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const destination = document.getElementById('destination').value.toLowerCase();
            const priceRange = document.getElementById('priceRange').value;
            const rating = document.getElementById('rating').value;
 
            let filteredHotels = hotels.filter(hotel => {
                let match = true;
                if (destination && !hotel.location.toLowerCase().includes(destination)) match = false;
                if (priceRange === 'low' && hotel.price > 100) match = false;
                if (priceRange === 'mid' && (hotel.price < 100 || hotel.price > 200)) match = false;
                if (priceRange === 'high' && hotel.price < 200) match = false;
                if (rating && hotel.rating < parseFloat(rating)) match = false;
                return match;
            });
 
            displayHotels(filteredHotels);
        });
 
        // Sort hotels
        document.getElementById('sort').addEventListener('change', function() {
            const sortBy = this.value;
            let sortedHotels = [...hotels];
            if (sortBy === 'priceLow') {
                sortedHotels.sort((a, b) => a.price - b.price);
            } else if (sortBy === 'priceHigh') {
                sortedHotels.sort((a, b) => b.price - a.price);
            } else if (sortBy === 'rating') {
                sortedHotels.sort((a, b) => b.rating - a.rating);
            }
            displayHotels(sortedHotels);
        });
 
        // Show booking form
        function showBookingForm(hotelId, hotelName, roomType) {
            document.getElementById('booking').style.display = 'block';
            document.getElementById('hotelId').value = hotelId;
            document.getElementById('hotelName').value = hotelName;
            document.getElementById('roomType').value = roomType;
            window.location.hash = 'booking';
        }
 
        // Handle booking
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = {
                hotelId: document.getElementById('hotelId').value,
                userName: document.getElementById('userName').value,
                userEmail: document.getElementById('userEmail').value,
                hotelName: document.getElementById('hotelName').value,
                roomType: document.getElementById('roomType').value,
                guests: document.getElementById('guests').value
            };
 
            // Send booking data to server
            fetch('book.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(formData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const confirmation = document.getElementById('confirmation');
                    confirmation.style.display = 'block';
                    setTimeout(() => confirmation.style.display = 'none', 3000);
                    document.getElementById('bookingForm').reset();
                    document.getElementById('booking').style.display = 'none';
                    window.location.hash = 'hotels';
                }
            });
        });
 
        // Initial display
        displayHotels(hotels);
    </script>
</body>
</html>

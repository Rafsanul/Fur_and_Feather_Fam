<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/Homepage.css') }}">
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="container">
            @if(session()->has('user'))
                <h1>Welcome, {{ session('user')->name }}</h1> <!-- Display logged-in user's name -->
            @else
                <h1>You are not logged in</h1>
            @endif
            <nav>
                <ul>
                    @if(session()->has('user'))
                        <!-- User is logged in, show Dashboard and Logout -->
                        <li><a href="/userhome">Home</a></li>
                        <li><a href="/caretips">Care Tips</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <!-- <li><a href="/profile/{{ session('user')->uname }}">Profile</a></li> -->
                        <li><a href="/profile">Profile</a></li>
                        <li><a href="/logout">Logout</a></li>
                    @else
                        <!-- User is not logged in, show Login and Sign Up -->
                        <li><a href="/">Home</a></li>
                        <li><a href="/caretips">Care Tips</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/login">Login</a></li>
                        <li><a href="/signup">Sign Up</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h2>Welcome to Fur & Feather Fam!</h2>
            <p>Your trusted portal for adopting and caring for pets.</p>
            <a href="/pets" class="btn-primary">Find Your Companion</a>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="feature-box">
                <h3>Adopt a Pet</h3>
                <p>Browse through a wide range of pets ready to find their forever home.</p>
            </div>
            <div class="feature-box">
                <h3>Care Tips</h3>
                <p>Learn how to take care of your furry, feathery, or scaly friends.</p>
            </div>
            <div class="feature-box">
                <h3>Connect with Us</h3>
                <p>Have questions? Our team is here to help you with all pet-related inquiries.</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Fur & Feather Fam. All rights reserved.</p>
            <p>Follow us: 
                <a href="#">Facebook</a> | 
                <a href="#">Instagram</a> | 
                <a href="#">Twitter</a>
            </p>
        </div>
    </footer>
</body>
</html>

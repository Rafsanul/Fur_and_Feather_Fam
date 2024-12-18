<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fur & Feather Fam</title>
    <link rel="stylesheet" href="{{ asset('css/Homepage.css') }}">
</head>
<body>
    <header class="navbar">
        <div class="container">
            <h1>Fur & Feather Fam</h1>
            <nav>
                <ul>
                    <li><a href="/caretips">Care Tips</a></li>
                    <li><a href="/contact">Contact</a></li>
                    @auth
                        <!-- If the user is logged in -->
                        <li><span class="user-name">Welcome, {{ Auth::user()->name }}!</span></li>
                        <li>
                            <form action="/logout" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="logout-button">Logout</button>
                            </form>
                        </li>
                    @else
                        <!-- If the user is not logged in -->
                        <li><a href="/login">Login</a></li>
                        <li><a href="/signup">Sign up</a></li>
                        <li><a href="/admin/login">Admin Login</a></li>
                    @endauth
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
                <h3><a href="/caretips">Care Tips</a></h3>
                <p>Learn how to take care of your furry, feathery, or scaly friends.</p>
            </div>
            <div class="feature-box">
                <h3><a href="/contact">Connect with Us</a></h3>
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

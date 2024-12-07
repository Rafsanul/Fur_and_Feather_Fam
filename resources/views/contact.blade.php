<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Fur & Feather Fam</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="container">
            <h1>Fur & Feather Fam</h1>
            <nav>
                <ul>
                    @if(session()->has('user'))
                        <!-- User is logged in, show Dashboard and Logout -->
                        <li><a href="/userhome">Home</a></li>
                        <li><a href="/caretips">Care Tips</a></li>
                        <li><a href="/logout">Logout</a></li>
                    @else
                        <!-- User is not logged in, show Login and Sign Up -->
                        <li><a href="/userhome">Home</a></li>
                        <li><a href="/caretips">Care Tips</a></li>
                        <li><a href="/login">Login</a></li>
                        <li><a href="/signup">Sign Up</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </header>

    <section class="contact-header">
        <div class="container">
            <h2>Contact Us</h2>
            <p>We'd love to hear from you! Reach out to us anytime.</p>
        </div>
    </section>

    <section class="contact-details">
        <div class="container">
            <div class="contact-card">
                <i class="fas fa-envelope contact-icon"></i>
                <h3>Email Us</h3>
                <p>support@furandfeatherfam.com</p>
            </div>
            <div class="contact-card">
                <i class="fas fa-phone contact-icon"></i>
                <h3>Call Us</h3>
                <p>+123-456-7890</p>
            </div>
            <div class="contact-card">
                <i class="fas fa-map-marker-alt contact-icon"></i>
                <h3>Visit Us</h3>
                <p>123 Pet Lane, Pet City, PC 56789</p>
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


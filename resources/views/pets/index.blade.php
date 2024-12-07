<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Adoption</title>
    <link rel="stylesheet" href="{{ asset('css/pet.css') }}">
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
                        <li><a href="/userhome">Home</a></li>
                        <li><a href="/caretips">Care Tips</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/userprofile">Profile</a></li>
                        <li><a href="/logout">Logout</a></li>
                    @else
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

    <!-- Pet Adoption Section -->
    <section class="pets-adoption">
        <div class="container">
            <h2 class="text-center">Pets Available for Adoption</h2>
            @if ($pets->isEmpty())
                <p class="text-center">No pets are currently available for adoption. Please check back later!</p>
            @else
                <div class="row">
                    @foreach ($pets as $pet)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <a href="{{ url('/pets/' . $pet->id) }}">
                                <img src="{{ $pet->photo ? asset('storage/' . $pet->photo) : asset('images/default-pet.png') }}" 
                                         class="card-img-top" 
                                         alt="{{ $pet->name }}" 
                                         style="height: 200px; object-fit: cover;">
                                </a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $pet->name }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
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
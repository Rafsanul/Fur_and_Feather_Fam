<!-- userdetails.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details - Fur & Feather Fam</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="container">
            @if(session()->has('user'))
                <h1>Welcome, {{ session('user')->name }}</h1>
            @else
                <h1>You are not logged in</h1>
            @endif
            <nav>
                <ul>
                    <li><a href="/userhome">Home</a></li>
                    <li><a href="/AH">Adoption History</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/userprofile">Edit Profile</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- User Details Section -->
    <section class="user-details">
        <div class="container">
            <h2>Your Profile</h2>

            <div class="profile-info">
                <p><strong>Name:</strong> {{ $user->name }}</p>
                <p><strong>Username:</strong> {{ $user->uname }}</p>
                <p><strong>User ID:</strong> {{ $user->id }}</p>
                <p><strong>Email:</strong> {{ $user->mail }}</p>
                <p><strong>Birthdate:</strong> {{ $user->bday }}</p>
            </div>

            <!-- Button to Edit Profile -->
            <div class="edit-profile-btn">
                <a href="/userprofile" class="btn-primary">Edit Profile</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
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

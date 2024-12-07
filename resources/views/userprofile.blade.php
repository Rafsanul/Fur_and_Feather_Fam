<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Fur & Feather Fam</title>
    <link rel="stylesheet" href="{{ asset('css/userprofile.css') }}">
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="container">
            @if(session()->has('user'))
                <!-- <h1>Welcome, {{ session('user')->name }}</h1> Display logged-in user's name -->
                <h1>Welcome, {{ session('user')->name }}</h1>
            @else
                <h1>You are not logged in</h1>
            @endif
            <nav>
                <ul>
                    <li><a href="/userhome">Home</a></li>
                    <li><a href="/caretips">Care Tips</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Profile Section -->
    <section class="profile">
        <div class="container">
            <h2>Edit Profile</h2>

            <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('update.profile') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" 
                           value="{{ old('name', $user->name) }}" required>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="mail">Email:</label>
                    <input type="email" id="mail" name="mail" class="form-control" 
                           value="{{ old('mail', $user->mail) }}" required>
                    @error('mail')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="pass">Password:</label>
                    <input type="text" id="pass" name="pass" class="form-control" 
                            value="{{ old('pass', $user->pass) }}" required>
                    @error('pass')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn-primary">Update Profile</button>
            </form>
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

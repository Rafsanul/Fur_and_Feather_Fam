<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
     <link rel="stylesheet" href="{{ asset('css/reqapp.css') }}">
</head>
<body>
    <div class="form-container">
        <h1>Application Form</h1>
        <form id="application-form" action="" method="post">
              @csrf
            <!-- Full Name -->
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            
            <!--username -->
            <label for="username">Username:</label>
            <input type="varchar" id="username" name="username" placeholder="Enter your username" required>

            <!-- userid -->

            <!-- <label for="userid">UserID:</label>
            <input type="int" id="userid" name="userid" placeholder="Enter your UserID number" required> -->
            
            <!-- nid -->
            <label for="NID">NID:</label>
            <input type="int" id="NID" name="NID" placeholder="Enter your NID number" required>

            <!-- Email -->
            <label for="email">Email Address:</label>
            <input type="varchar" id="email" name="email" placeholder="Enter your email" required>

            <!-- Phone Number -->
            <label for="phone">Phone Number:</label>
            <input type="int" id="phone" name="phone" placeholder="Enter your phone number" required>
            
            <!-- age -->
            <label for="age">Age:</label>
            <input type="int" id="age" name="age" placeholder="Enter your age" required>

            <!-- Date of Birth -->
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <!-- Passport number -->
            <label for="passport">Passport Number:</label>
            <input type="int" id="passport" name="passport" placeholder="Enter your passport number" required>

            <!-- Gender -->
            <label for="gender">Gender:</label>
             <input type="text" id="gender" name="gender" placeholder="Enter your gender" required>

            <!-- nid -->
            <label for="petid">PetID:</label>
            <input type="int" id="petid" name="petid" placeholder="Enter the PetID number" required>


            <!-- Address -->
            <label for="address">Address:</label>
            <textarea id="varchar" name="address" rows="2" placeholder="Enter your address" required></textarea>

            <!-- Submit Button -->
            <button type="submit">Submit Application</button>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pet</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <div class="container">
        <h2>Edit Pet</h2>
        <form action="#" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="" required>
            </div>

            <div class="form-group">
                <label for="breed">Breed</label>
                <input type="text" id="breed" name="breed" value="" required>
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" value="" required>
            </div>

            <div class="form-group">
                <label for="size">Size</label>
                <input type="text" id="size" name="size" value="" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="health_status">Health Status</label>
                <select id="health_status" name="health_status" required>
                    <option value="healthy">Healthy</option>
                    <option value="sick">Sick</option>
                    <option value="injured">Injured</option>
                </select>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" required>
                    <option value="available">Available</option>
                    <option value="adopted">Adopted</option>
                    <option value="pending">Pending</option>
                </select>
            </div>

            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" id="photo" name="photo">
                <img src="#" alt="Pet Image" id="pet-photo" class="hidden">
            </div>

            <div class="form-group">
                <label for="care_requirements">Care Requirements</label>
                <textarea id="care_requirements" name="care_requirements" required></textarea>
            </div>

            <div class="form-group">
                <label for="additional_notes">Additional Notes</label>
                <textarea id="additional_notes" name="additional_notes"></textarea>
            </div>

            <button type="submit">Update Pet</button>
        </form>
    </div>
</body>
</html>

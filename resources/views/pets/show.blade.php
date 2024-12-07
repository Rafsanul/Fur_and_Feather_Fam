<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Details</title>
    <link rel="stylesheet" href="petview.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="card">
            <img src="{{ $pet->photo ? asset('storage/' . $pet->photo) : asset('images/default-pet.png') }}" 
                 class="card-img-top" 
                 alt="{{ $pet->name }}">
            <div class="card-body">
                <h2 class="card-title text-center">{{ $pet->name }}</h2>
                <div class="pet-info">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Pet ID:</strong> {{ $pet->id }}</li>
                        <li class="list-group-item"><strong>Breed:</strong> {{ $pet->breed }}</li>
                        <li class="list-group-item"><strong>Age:</strong> {{ $pet->age }} years</li>
                        <li class="list-group-item"><strong>Size:</strong> {{ $pet->size }}</li>
                        <li class="list-group-item"><strong>Gender:</strong> {{ $pet->gender }}</li>
                        <li class="list-group-item"><strong>Health Status:</strong> {{ $pet->health_status }}</li>
                        <li class="list-group-item"><strong>Care Requirements:</strong> {{ $pet->care_requirements }}</li>
                        <li class="list-group-item"><strong>Adoption History:</strong> {{ ucfirst($pet->status) }}</li>
                        @if($pet->additional_notes)
                        <li class="list-group-item"><strong>Additional Notes:</strong> {{ $pet->additional_notes }}</li>
                        @endif
                    </ul>
                </div>
                <div class="text-center mt-4">
                    <a href="/req_app" class="btn btn-primary">Adopt This Pet</a>
                    <a href="/pets" class="btn btn-primary">Back to All Pets</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
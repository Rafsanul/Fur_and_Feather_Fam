<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care Tips - Fur & Feather Fam</title>
    <link rel="stylesheet" href="{{ asset('css/petcare.css') }}">
</head>
<body>
    <header class="navbar">
        <div class="container">
            <h1>Fur & Feather Fam</h1>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Pet Care Tips</h1>
            <p3>Learn how to take care of your furry, feathery, or scaly friends.</p3>
        </div>
    </section>

    <section class="videos">
        <div class="container">
            <h3>Helpful Pet Care Videos</h3>
            <div class="video-container">
                <!-- Video 1: How to cut your pet's nails -->
                <div class="video">
                    <h4>How to Cut Your Cat's Nails</h4>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/o_YxH7h2dws" frameborder="0" allowfullscreen></iframe>
                </div>

                <!-- Video 2: How to cut your pet's nails -->
                <div class="video">
                    <h4>How to Cut Your Dog's Nails</h4>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/VnJafu_NMoQ" frameborder="0" allowfullscreen></iframe>
                </div>

                <!-- Video 3: How to clean your pet's ears -->
                <div class="video">
                    <h4>How to Clean Your Dog's Ears</h4>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/59SdwsPEheM" frameborder="0" allowfullscreen></iframe>
                </div>

                <!-- Video 4: How to clean your pet's ears -->
                <div class="video">
                    <h4>How to Clean Your Cat's Ears</h4>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/21aKN-tcKrc" frameborder="0" allowfullscreen></iframe>
                </div>

                <!-- Video 5: How to give your pet a bath -->
                <div class="video">
                    <h4>How to Give Your Kitten a Bath</h4>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/LPeRN0r9DCY" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="care-tips">
        <div class="container">
            <h3>Pet Care Articles</h3>
            <div class="articles">
                <div class="article">
                    <div class="content">
                        <h4>How to Groom Your Pet</h4>
                        <p>Grooming your pet is essential for their overall health and well-being. Regular grooming helps keep their coat shiny and free from tangles, while also preventing skin infections and matting. Begin with brushing your pet's fur to remove dirt and loose hair, using the appropriate brush for their coat type. Trim their nails to avoid discomfort, and clean their ears to prevent infections. Bathing your pet should be done as needed, using a pet-friendly shampoo. Lastly, always check your pet's teeth and gums for signs of dental problems. Consistent grooming helps strengthen the bond between you and your pet while keeping them happy and healthy.</p>
                    </div>
                    <img src="{{ asset('images/petcare.jpg') }}" alt="Grooming Your Pet">
                </div>

                <div class="article">
                    <div class="content">
                        <h4>Understanding Pet Nutrition</h4>
                        <p>Proper nutrition is crucial for the health and longevity of your pet. Just like humans, pets need a balanced diet to thrive, with the right mix of protein, fats, carbohydrates, vitamins, and minerals. The specific needs of your pet depend on factors such as their age, breed, activity level, and any underlying health conditions. For dogs, high-quality protein sources like chicken, beef, or fish are essential for muscle development and energy. Cats, being obligate carnivores, require a diet rich in animal-based proteins. Both pets also need healthy fats for skin and coat health, as well as a range of vitamins and minerals to support their immune systems.</p>
                        <p>When choosing food, always opt for commercially prepared pet food that is formulated to meet the nutritional needs of your specific pet. Read the label carefully to ensure it meets the standards set by reputable organizations like the Association of American Feed Control Officials (AAFCO). In addition to regular meals, be mindful of treats and snacks, as they can contribute to overfeeding. It’s also important to provide fresh water at all times. Consulting your veterinarian for personalized nutrition advice and feeding guidelines will help ensure your pet’s diet is balanced and suited to their individual needs.</p>
                    </div>
                    <img src="{{ asset('images/nut.jpg') }}" alt="Understanding Pet Nutrition">
                </div>

                <div class="article">
                    <div class="content">
                        <h4>Pet First Aid: What Every Pet Owner Should Know</h4>
                        <p>Accidents can happen at any time, and knowing basic pet first aid can save your pet's life. Always keep a pet first aid kit on hand, which should include bandages, antiseptics, tweezers, and a thermometer. Learn how to perform CPR on pets, especially in case of choking or respiratory failure. Recognize signs of poisoning, like vomiting, drooling, or seizures, and seek immediate veterinary help. Keep emergency numbers handy, and never hesitate to take your pet to the vet in case of serious injury or illness. Being prepared ensures you can act quickly in emergencies.</p>
                    </div>
                    <img src="{{ asset('images/aid.jpg') }}" alt="Safe Home for Pets">
                </div>

                <div class="article">
                    <div class="content">
                        <h4>Signs Your Pet Needs a Vet Visit</h4>
                        <p>If you notice sudden changes in your pet's behavior, it might be time to visit the vet. Common signs include loss of appetite, excessive vomiting or diarrhea, unexplained weight changes, or excessive thirst. If your pet is lethargic, hides more than usual, or becomes unusually aggressive, it could indicate pain or discomfort. Other red flags include persistent coughing or difficulty breathing, limping, bad breath, or skin issues like itching and hair loss. Seizures or tremors should never be ignored. Regular vet check-ups can help detect health issues early, ensuring your pet’s well-being.</p>
                    </div>
                    <img src="{{ asset('images/sick.jpg') }}" alt="Vet Visit">
                </div>

                <div class="article">
                    <div class="content">
                        <h4>How to Train Your Pet Effectively</h4>
                        <p>Training your pet effectively requires patience, consistency, and positive reinforcement. Start with basic commands like "sit," "stay," and "come," using treats or praise as rewards. Keep training sessions short and engaging to prevent boredom, aiming for 5-10 minutes each time. Establish a routine, so your pet knows what to expect, and always be consistent with commands and rules. Socialization is also crucial; expose your pet to different environments, people, and other animals to reduce fear and anxiety. Positive reinforcement builds trust and encourages good behavior, while negative reinforcement should be avoided. Be patient—training takes time!</p>
                    </div>
                    <img src="{{ asset('images/train.jpg') }}" alt="Training Your Pet">
                </div>
            </div>
        </div>
    </section>


    <section class="qa-section">
        <div class="container">
            <h3>Q&A Section</h3>
            <p>Have a question about your pet's care? Feel free to ask us, and our community of pet lovers will help you!</p>
            <form action="/postcaretips" method="POST">
                @csrf
                <div class="form-group">
                    <label for="question">Your Question</label>
                    <textarea id="question" name="question" placeholder="Ask us anything about pet care" required></textarea>
                </div>
                <button type="submit">Submit Question</button>
            </form>
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

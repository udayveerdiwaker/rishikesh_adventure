<?php
include 'header.php';
?>
<!-- Hero Section with Video Background -->
<section class="hero">
    <video autoplay muted loop id="heroVideo">
        <source src="assets/videos/hero-background.mp4" type="video/mp4">
    </video>
    <div class="hero-content">
        <h1>Experience the Thrill of Rishikesh</h1>
        <p>Whitewater rafting, bungee jumping, and Himalayan adventures await you</p>
        <a href="#booking" class="btn btn-large">Start Your Adventure</a>
    </div>
</section>

<!-- Quick Booking Widget -->
<section id="booking" class="booking-widget">
    <div class="container">
        <h2>Book Your Adventure</h2>
        <form id="quickBookForm">
            <div class="form-group">
                <label for="activity">Activity</label>
                <select id="activity" required>
                    <option value="">Select Activity</option>
                    <option value="rafting">Whitewater Rafting</option>
                    <option value="bungee">Bungee Jumping</option>
                    <option value="trekking">Himalayan Trekking</option>
                    <option value="yoga">Yoga Retreat</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" id="date" required>
            </div>
            <div class="form-group">
                <label for="participants">Participants</label>
                <input type="number" id="participants" min="1" max="10" value="1" required>
            </div>
            <button type="submit" class="btn btn-primary">Check Availability</button>
        </form>
    </div>
</section>

<!-- Featured Activities -->
<section class="featured-activities">
    <div class="container">
        <h2>Popular Adventures</h2>
        <div class="activity-grid">
            <div class="activity-card">
                <img src="assets/images/activities/rafting.jpg" alt="Whitewater Rafting">
                <h3>Whitewater Rafting</h3>
                <div class="difficulty medium">Medium</div>
                <p>Experience the thrilling rapids of the Ganges with our expert guides.</p>
                <a href="pages/activities.html#rafting" class="btn btn-secondary">Learn More</a>
            </div>

            <div class="activity-card">
                <img src="assets/images/activities/bungee.jpg" alt="Bungee Jumping">
                <h3>Bungee Jumping</h3>
                <div class="difficulty hard">Hard</div>
                <p>Take the 83m plunge at India's highest bungee jumping platform.</p>
                <a href="pages/activities.html#bungee" class="btn btn-secondary">Learn More</a>
            </div>

            <div class="activity-card">
                <img src="assets/images/activities/trekking.jpg" alt="Himalayan Trekking">
                <h3>Himalayan Trekking</h3>
                <div class="difficulty medium">Medium</div>
                <p>Explore scenic trails through the foothills of the Himalayas.</p>
                <a href="pages/activities.html#trekking" class="btn btn-secondary">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonials">
    <div class="container">
        <h2>Adventurer Stories</h2>
        <div class="testimonial-slider">
            <div class="testimonial">
                <img src="assets/images/testimonials/user1.jpg" alt="Rahul">
                <p>"The rafting experience was incredible! Safety was top priority and the guides were very professional."</p>
                <div class="name">- Rahul, Mumbai</div>
            </div>
            <div class="testimonial">
                <img src="assets/images/testimonials/user2.jpg" alt="Priya">
                <p>"Never thought I'd bungee jump, but the team made me feel so safe. Best adrenaline rush ever!"</p>
                <div class="name">- Priya, Delhi</div>
            </div>
        </div>
    </div>
</section>

<section class="adventure-cards">
    <div class="container">
        <h2>Our Thrilling Adventures</h2>
        <div class="card-grid">
            <!-- Card 1 -->
            <div class="adventure-card" data-activity="rafting">
                <div class="card-image">
                    <img src="assets/images/rafting.jpg" alt="White Water Rafting">
                    <div class="difficulty-level medium">Medium</div>
                </div>
                <div class="card-content">
                    <h3>White Water Rafting</h3>
                    <div class="card-meta">
                        <span class="duration">⏱️ 3-4 hours</span>
                        <span class="price">₹1,500+</span>
                    </div>
                    <p>Challenge the rapids of the holy Ganges with expert guides.</p>
                    <div class="card-actions">
                        <a href="#" class="btn btn-outline">Details</a>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="adventure-card" data-activity="bungee">
                <!-- Similar structure for other activities -->
            </div>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Grand Aurora Hotel - Luxury Beachfront Resort</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="index.php">
                <img src="images/The-Grand-Aurora-logo.png" alt="The Grand Aurora" height="60" class="logo-img">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Accommodations.html">ACCOMMODATIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Rating.html">RATING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Gallery.html">GALLERY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Dining.html">DINING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.html">ABOUT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Overlay -->
    <div class="hero-container">
        <img src="images/beachview.jpg" class="img-fluid hero-image" alt="beachview">
        <div class="hero-overlay">
            <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="display-3 fw-bold mb-3">The Grand Aurora</h1>
                <p class="lead mb-4">Where Luxury Meets Paradise</p>
                <button class="btn btn-luxury btn-lg">Book Your Stay</button>
            </div>
        </div>
    </div>

    <!-- Welcome Section -->
    <div class="welcome-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="welcome-badge mb-3">
                        <i class="fas fa-star"></i>
                        <span>5-Star Luxury Resort</span>
                    </div>
                    <h2 class="section-title mb-4">Welcome to Your Luxurious Home Away From Home</h2>
                    <p class="section-text mb-4">
                        Experience unparalleled luxury and comfort at The Grand Aurora Hotel. Our world-class amenities and exceptional service ensure your stay is nothing short of extraordinary.
                    </p>
                    <p class="section-text mb-4">
                        From breathtaking ocean views to elegant accommodations, every detail is designed with your comfort in mind. Discover a sanctuary where sophistication meets serenity.
                    </p>
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-wifi"></i>
                            <span>Free High-Speed WiFi</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-swimming-pool"></i>
                            <span>Infinity Pool</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-concierge-bell"></i>
                            <span>24/7 Concierge</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-spa"></i>
                            <span>Luxury Spa</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="image-frame">
                        <img src="images/outsideview.jpg" class="img-fluid rounded shadow-lg" alt="outsideview">
                        <div class="image-decoration"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Stats Section -->
    <div class="stats-section">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-item">
                        <i class="fas fa-bed"></i>
                        <h3 class="stat-number" data-target="250">0</h3>
                        <p>Luxury Rooms</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-item">
                        <i class="fas fa-utensils"></i>
                        <h3 class="stat-number" data-target="5">0</h3>
                        <p>Restaurants</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-item">
                        <i class="fas fa-award"></i>
                        <h3 class="stat-number" data-target="15">0</h3>
                        <p>Awards Won</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-item">
                        <i class="fas fa-users"></i>
                        <h3 class="stat-number" data-target="50000">0</h3>
                        <p>Happy Guests</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Amenities -->
    <div class="amenities-section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">World-Class Amenities</h2>
                <p class="section-subtitle">Everything you need for an unforgettable stay</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="amenity-card">
                        <div class="amenity-icon">
                            <i class="fas fa-dumbbell"></i>
                        </div>
                        <h4>Fitness Center</h4>
                        <p>State-of-the-art equipment and personal trainers available 24/7</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="amenity-card">
                        <div class="amenity-icon">
                            <i class="fas fa-cocktail"></i>
                        </div>
                        <h4>Beach Bar</h4>
                        <p>Tropical cocktails and gourmet bites with stunning ocean views</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="amenity-card">
                        <div class="amenity-icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <h4>Valet Parking</h4>
                        <p>Complimentary valet service for all our valued guests</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="cta-section" data-aos="fade-up">
        <div class="container text-center">
            <h2 class="mb-4">Ready to Experience Luxury?</h2>
            <p class="lead mb-4">Book your stay today and discover paradise</p>
            <button class="btn btn-light btn-lg me-3">Book Now</button>
            <button class="btn btn-outline-light btn-lg">View Offers</button>
        </div>
    </div>

    <!-- FOOTER SECTION -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <img src="images/The-Grand-Aurora-logo.png" alt="Logo" height="60" class="mb-3">
                    <p>Experience the epitome of luxury at The Grand Aurora Hotel. Your perfect getaway awaits.</p>
                    <div class="social-links mt-3">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <h5>Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="Accommodations.html">Accommodations</a></li>
                        <li><a href="Gallery.html">Gallery</a></li>
                        <li><a href="Dining.html">Dining</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h5>Contact Us</h5>
                    <ul class="footer-contact">
                        <li><i class="fas fa-map-marker-alt"></i> 123 Paradise Beach, Manila</li>
                        <li><i class="fas fa-phone"></i> +63 123 456 7890</li>
                        <li><i class="fas fa-envelope"></i> info@grandaurora.com</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-5">
                    <h5>Newsletter</h5>
                    <p>Subscribe for exclusive offers</p>
                    <div class="newsletter-form">
                        <input type="email" class="form-control" placeholder="Your email">
                        <button class="btn btn-luxury mt-2 w-100">Subscribe</button>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p class="mb-0">&copy; 2026 The Grand Aurora Hotel. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button id="scrollTopBtn" class="scroll-top-btn">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="script.js"></script>
</body>
</html>
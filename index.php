<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Grand Aurora Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>


    <!-- NAVIGATION BAR -->
    <nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
        <a class="navbar-brand" href="#">The Grand Aurora</a>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading1">ACCOMODATIONS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading2">RATING</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading3">GALLERY</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading4">DINING</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading5">ABOUT US</a>
            </li>
        </ul>
    </nav>

    <!-- Hero Image -->
    <img src="images/beachview.jpg" class="img-fluid hero-image" alt="beachview">

    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
        <h4 id="scrollspyHeading1">Accomodations</h4>
        <p>Our Accomodations consists of...</p>

        <h4 id="scrollspyHeading2">Rating</h4>
        <p>...</p>

        <h4 id="scrollspyHeading3">Gallery</h4>
        <p>...</p>

        <h4 id="scrollspyHeading4">Dining </h4>
        <p>...</p>

        <h4 id="scrollspyHeading5">About Us</h4>
        <p>...</p>
    </div>


    <!-- Welcome Page -->
    <div class="welcome-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3>Welcome to your luxurious home away from home</h3>
                    <p>Experience unparalleled luxury and comfort at The Grand Aurora Hotel. Our world-class amenities and exceptional service ensure your stay is nothing short of extraordinary. From breathtaking ocean views to elegant accommodations, every detail is designed with your comfort in mind.</p>
                </div>
                <div class="col-md-6">
                    <img src="images/outsideview.jpg" class="img-fluid" alt="outsideview">
                </div>
            </div>
        </div>
    </div>


    <!-- ACCOMODATIONS SECTION -->

    <div class="accomodations-section">
        <h2>ACCOMODATIONS</h2>
        
        <div class="container">
            <div class="row g-3">
                <div class="col-md-4">
                    <img src="images/room1.jpg" class="img-fluid accommodation-img" alt="Room 1">
                </div>
                <div class="col-md-4">
                    <img src="images/room2.jpg" class="img-fluid accommodation-img" alt="Room 2">
                </div>
                <div class="col-md-4">
                    <img src="images/room3.jpg" class="img-fluid accommodation-img" alt="Room 3">
                </div>
            </div>
        </div>
    </div>


    <!-- RATINGS SECTION -->
    <h2>RATINGS</h2>


    <!-- FOOTER SECTION -->
    <footer> </footer>
</body>
</html>
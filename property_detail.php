<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ganpati Paying Guest | PG Life</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/property_detail.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "includes/header.php";
    ?>

  <nav aria-lable="breadcrumb">
    <ol class="breadcrumb py-2">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item">
        <a href="property_list.php">Mumbai</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">
        Ganpati Paying Guest
      </li>
    </ol>
  </nav>

  <div id="property-images" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#property-images" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#property-images" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#property-images" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/properties/1/1d4f0757fdb86d5f.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/properties/1/46ebbb537aa9fb0a.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/properties/1/eace7b9114fd6046.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#property-images" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#property-images" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="property-summary page-container">
    <div class="row no-gutters justify-content-between">
      <div class="star-container" title="4.8">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <div class="interested-container">
        <i class="is-intersted-image far fa-heart"></i>
        <div class="intersted-text">
          <span class="intersted-user-count">6</span> interested
        </div>
      </div>
    </div>
    <div class="detail-container">
      <div class="property-name">Ganpati Paying Guest</div>
      <div class="property-address">Police Beat, Sainath Complex, Besides, SV Rd, Daulat Nagar, Borivali East, Mumbai - 400066</div>
      <div class="property-gender">
        <img src="img/unisex.png" />
      </div>
    </div>
    <div class="row no-gutters">
      <div class="rent-container col-6">
        <div class="rent">Rs 8,500/-</div>
        <div class="rent-unit">per month</div>
    </div>
    <div class="button-container col-6">
        <a href="#" class="btn btn-primary">Book Now</a>
    </div>
    </div>
  </div>

  
  <div class="property-amenities">
    <div class="page-container">
        <h1>Amenities</h1>
        <div class="row justify-content-between">
            <div class="col-md-auto">
                <h5>Building</h5>
                <div class="amenity-container">
                    <img src="img/amenities/powerbackup.svg">
                    <span>Power backup</span>
                </div>
                <div class="amenity-container">
                    <img src="img/amenities/lift.svg">
                    <span>Lift</span>
                </div>
            </div>

            <div class="col-md-auto">
                <h5>Common Area</h5>
                <div class="amenity-container">
                    <img src="img/amenities/wifi.svg">
                    <span>Wifi</span>
                </div>
                <div class="amenity-container">
                    <img src="img/amenities/tv.svg">
                    <span>TV</span>
                </div>
                <div class="amenity-container">
                    <img src="img/amenities/rowater.svg">
                    <span>Water Purifier</span>
                </div>
                <div class="amenity-container">
                    <img src="img/amenities/dining.svg">
                    <span>Dining</span>
                </div>
                <div class="amenity-container">
                    <img src="img/amenities/washingmachine.svg">
                    <span>Washing Machine</span>
                </div>
            </div>

            <div class="col-md-auto">
                <h5>Bedroom</h5>
                <div class="amenity-container">
                    <img src="img/amenities/bed.svg">
                    <span>Bed with Matress</span>
                </div>
                <div class="amenity-container">
                    <img src="img/amenities/ac.svg">
                    <span>Air Conditioner</span>
                </div>
            </div>

            <div class="col-md-auto">
                <h5>Washroom</h5>
                <div class="amenity-container">
                    <img src="img/amenities/geyser.svg">
                    <span>Geyser</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="property-about page-container">
    <h1>About the Property</h1>
    <p>Furnished studio apartment - share it with close friends! Located in posh area of Bijwasan in Delhi, this house is available for both boys and girls. Go for a private room or opt for a shared one and make it your own abode. Go out with your new friends - catch a movie at the nearest cinema hall or just chill in a cafe which is not even 2 kms away. Unwind with your flatmates after a long day at work/college. With a common living area and a shared kitchen, make your own FRIENDS moments. After all, there's always a Joey with unlimited supply of food. Remember, all it needs is one crazy story to convert a roomie into a BFF. What's nearby/Your New Neighborhood 4.0 Kms from Dwarka Sector- 21 Metro Station.</p>
</div>

<div class="property-rating">
    <div class="page-container">
        <h1>Property Rating</h1>
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6">
                <div class="rating-criteria row">
                    <div class="col-6">
                        <i class="rating-criteria-icon fas fa-broom"></i>
                        <span class="rating-criteria-text">Cleanliness</span>
                    </div>
                    <div class="rating-criteria-star-container col-6" title="4.3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="rating-criteria row">
                    <div class="col-6">
                        <i class="rating-criteria-icon fas fa-utensils"></i>
                        <span class="rating-criteria-text">Food Quality</span>
                    </div>
                    <div class="rating-criteria-star-container col-6" title="3.4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>

                <div class="rating-criteria row">
                    <div class="col-6">
                        <i class="rating-criteria-icon fa fa-lock"></i>
                        <span class="rating-criteria-text">Safety</span>
                    </div>
                    <div class="rating-criteria-star-container col-6" title="4.8">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="rating-circle">
                    <div class="total-rating">4.2</div>
                    <div class="rating-circle-star-container">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="property-testimonials page-container">
    <h1>What people say</h1>
    <div class="testimonial-block">
        <div class="testimonial-image-container">
            <img class="testimonial-img" src="img/man.png">
        </div>
        <div class="testimonial-text">
            <i class="fa fa-quote-left" aria-hidden="true"></i>
            <p>You just have to arrive at the place, it's fully furnished and stocked with all basic amenities and services and even your friends are welcome.</p>
        </div>
        <div class="testimonial-name">- Ashutosh Gowariker</div>
    </div>
    <div class="testimonial-block">
        <div class="testimonial-image-container">
            <img class="testimonial-img" src="img/man.png">
        </div>
        <div class="testimonial-text">
            <i class="fa fa-quote-left" aria-hidden="true"></i>
            <p>You just have to arrive at the place, it's fully furnished and stocked with all basic amenities and services and even your friends are welcome.</p>
        </div>
        <div class="testimonial-name">- Karan Johar</div>
    </div>
</div>

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>
</body>

</html>
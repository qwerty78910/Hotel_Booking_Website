<!-- https://www.youtube.com/watch?v=BLqDewjag48&t=618s -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Hotel-HOME</title>
   
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <style>
        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px) {
            .availability-form {
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style>
</head>

<body class="bg-light">

    <?php require('inc/header.php');?>

   
    <!-- carousel -->
    <div class="container-fluid px-lg-4 mt-4">
        <!-- Swiper -->
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="Images/1.jpeg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="Images/2.jpeg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="Images/3.jpeg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="Images/4.jpeg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="Images/5.jpeg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="Images/6.jpeg" class="w-100 d-block" />
                </div>
            </div>

        </div>
    </div>


    <!-- check availability form -->

    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">
                    Check Booking Availability
                </h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500">Check in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500">Check out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500">Adult</label>
                            <select class="form-select shadow-none" aria-label="Default select example">
                                <!-- <option selected>Open this select menu</option> -->
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight:500">Children</label>
                            <select class="form-select shadow-none" aria-label="Default select example">
                                <!-- <option selected>Open this select menu</option> -->
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- room cards -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>

    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="Images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">₹200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">
                                Features
                            </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                2 rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">
                                Facilities
                            </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Room Heater
                            </span>

                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">
                                Rating
                            </h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill  text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex justify-content-evenly mb-2">

                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2nd card -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="Images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">₹200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">
                                Features
                            </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                2 rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">
                                Facilities
                            </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Room Heater
                            </span>

                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">
                                Rating
                            </h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill  text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex justify-content-evenly mb-2">

                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- 3rd card -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="Images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">₹200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">
                                Features
                            </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                2 rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">
                                Facilities
                            </h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Room Heater
                            </span>

                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">
                                Rating
                            </h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill  text-warning"></i>
                            </span>

                        </div>
                        <div class="d-flex justify-content-evenly mb-2">

                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 shadow-none">more rooms >>></a>
            </div>
        </div>
    </div>
    <!-- our facilities -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="Images/facilities/IMG_43553.svg" width="80px">
                <h5 class="mt-3">
                    Wifi
                </h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="Images/facilities/IMG_43553.svg" width="80px">
                <h5 class="mt-3">
                    Wifi
                </h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="Images/facilities/IMG_43553.svg" width="80px">
                <h5 class="mt-3">
                    Wifi
                </h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="Images/facilities/IMG_43553.svg" width="80px">
                <h5 class="mt-3">
                    Wifi
                </h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="Images/facilities/IMG_43553.svg" width="80px">
                <h5 class="mt-3">
                    Wifi
                </h5>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 shadow-none">more facilities >>></a>
            </div>

        </div>
    </div>
    <!-- testimonials -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>
    <div class="container mt-5">

        <!-- Swiper -->
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">


                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="Images/facilities/IMG_43553.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>

                    </div>


                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quam corporis ducimus officia
                        illo! Ab sequi vel voluptate accusantium animi? </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill  text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="Images/facilities/IMG_43553.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>

                    </div>


                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quam corporis ducimus officia
                        illo! Ab sequi vel voluptate accusantium animi? </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill  text-warning"></i>
                    </div>
                </div>


                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="Images/facilities/IMG_43553.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>

                    </div>


                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quam corporis ducimus officia
                        illo! Ab sequi vel voluptate accusantium animi? </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill  text-warning"></i>
                    </div>
                </div>



            </div>

            <div class="swiper-pagination"></div>
           
        </div>



        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 shadow-none">know more >>></a>
        </div>
    </div>

    <!-- Reach us -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320 px"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115330.43462063557!2d81.80158454999999!3d25.40226375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398534c9b20bd49f%3A0xa2237856ad4041a!2sPrayagraj%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1659596052250!5m2!1sen!2sin"
                    height="450" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call Us</h5>
                    <a href="tel: +91999999999" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                            class="bi bi-telephone-fill"></i> +91999999999</a>
                    <br>
                    <a href="tel: +91999999999" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                            class="bi bi-telephone-fill"></i> +91999999999</a>

                </div>

                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="d-inline-block mb-3 "><span class="badge bg-light text-dark fs-6 p-2"><i
                                class="bi bi-twitter me-1"></i> Twitter</span></a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 "><span class="badge bg-light text-dark fs-6 p-2"><i
                                class="bi bi-facebook me-1"></i> Facebook</span></a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 "><span class="badge bg-light text-dark fs-6 p-2"><i
                                class="bi bi-instagram me-1"></i> Instagram</span></a>
                </div>
            </div>
        </div>
    </div>


    <?php require('inc/footer.php');?>





    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    





    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }
        });
    </script>

    <!-- Initialize Swiper for second -->
    <script>
        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    sliderPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>

</html>
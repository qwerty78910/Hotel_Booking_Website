<!-- https://www.youtube.com/watch?v=BLqDewjag48&t=618s -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Hotel-About</title>
   
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />  
   
<style>
    .box{
        border-top-color:var(--teal) !important;
    }
</style>
</head>

<body class="bg-light">

    <?php require('inc/header.php');?>

   <div class="my-5 px-4">
      <h2 class="fw-bold h-font text-center">
About Us
      </h2>
      <div class="h-line bg-dark"> </div>
     
        <p class="text-center mt-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Neque omnis provident numquam vel iste. Nulla, earum illo! Laborum, a ut!
        </p>  
   </div>

   <div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
            <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis laudantium, ut optio odio illo sunt officia velit porro sapiente omnis? Suscipit quis aspernatur esse id nobis sapiente nemo, iusto quam aliquam voluptate, corrupti ea praesentium odio dolores earum cumque? Tenetur.
            </p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
            <img src="Images/about/about.jpg" class="w-100">
        </div>
    </div>
   </div>  

   <div class="container mt-5">
<div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shaodw p-4 border-top border-4 text-center box">
        <img src="Images/about/hotel.svg" width="70px">
        <h4 class="mt-3">100+ Rooms</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shaodw p-4 border-top border-4 text-center box">
        <img src="Images/about/customers.svg" width="70px">
        <h4 class="mt-3">200+ Customers</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shaodw p-4 border-top border-4 text-center box">
        <img src="Images/about/rating.svg" width="70px">
        <h4 class="mt-3">150+ Reviews</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shaodw p-4 border-top border-4 text-center box">
        <img src="Images/about/staff.svg" width="70px">
        <h4 class="mt-3">200+ Staffs</h4>
      </div>
    </div>
</div>
   </div>

   <h3 class="my-5 fw-bold h-font text-center">Management Team</h3>

   <div class="container px-4">
       <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="Images/about/IMG_17352.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="Images/about/IMG_17352.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="Images/about/IMG_17352.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="Images/about/IMG_17352.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="Images/about/IMG_17352.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
   </div>

    <?php require('inc/footer.php');?>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

     <!-- Initialize Swiper -->
     <script>
      var swiper = new Swiper(".mySwiper", {
        // slidesPerView:4,
        spaceBetween:40,
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
                    sliderPerView: 3,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
      });
    </script>

</body>

</html>
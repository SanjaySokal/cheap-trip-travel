<!doctype html>
<html lang="en">

<head>
   <?php include 'inc/head.php' ?>
</head>

<body class="home">
   <div id="page" class="full-page">
      <?php include 'inc/header.php' ?>
      <main id="content" class="site-main">
         <!-- Home slider html start -->
         <section class="home-slider-section">
            <div class="home-slider">
               <div class="home-banner-items">
                  <div class="banner-inner-wrap" style="background-image: url(assets/images/slider-banner-1.jpg);">
                  </div>
                  <div class="banner-content-wrap">
                     <div class="container">
                        <div class="banner-content text-center">
                           <h2 class="banner-title">Aspire, Travel & Celebrate</h2>
                           <p>Fully Customisable packages for solo travel, family trip or couple trip.<br>Unlock
                              exclusive offers you won't find elsewhere, Easy Booking just a click away.</p>
                           <a href="#" class="button-primary" type="button" data-toggle="modal"
                              data-target="#exampleModal">Get Quotes Now</a>
                        </div>
                     </div>
                  </div>
                  <div class="overlay"></div>
               </div>
               <div class="home-banner-items">
                  <div class="banner-inner-wrap" style="background-image: url(assets/images/slider-banner-2.jpg);">
                  </div>
                  <div class="banner-content-wrap">
                     <div class="container">
                        <div class="banner-content text-center">
                           <h2 class="banner-title">Aspire, Travel & Celebrate</h2>
                           <p>Fully Customisable packages for solo travel, family trip or couple trip.<br>Unlock
                              exclusive offers you won't find elsewhere, Easy Booking just a click away.</p>
                           <a href="#" class="button-primary" type="button" data-toggle="modal"
                              data-target="#exampleModal">Get Quotes Now</a>
                        </div>
                     </div>
                  </div>
                  <div class="overlay"></div>
               </div>
            </div>
         </section>
         <!-- slider html start -->
         <!-- Home search field html start -->


         <form class="trip-search-section shape-search-section" method="post" action="mail.php">
            <div class="slider-shape"></div>
            <div class="container">
               <div class="trip-search-inner white-bg">
                  <h3 class="text-center mb-4">Request Quotes For Your Next Trip!!</h3>
                  <div class="row">
                     <div class="input-group col-md-6 col-lg-3">
                        <label for="namee"> Your Full Name* </label>
                        <input type="text" id="namee" name="name" class="w-100" placeholder="Full Name" required="">
                     </div>
                     <div class="input-group col-md-6 col-lg-3">
                        <label for="email"> Your Email Address* </label>
                        <input type="email" id="email" name="email" class="w-100" placeholder="Email Address" required="">
                     </div>
                     <div class="input-group col-md-6 col-lg-3">
                        <label for="phone"> Your Phone Number* </label>
                        <input type="tel" class="w-100" name="phone" placeholder="Phone Number (With Country Code)" id="phone"
                           required="">
                     </div>

                     <!-- ///////////////////////// -->

                     <div class="input-group col-md-6 col-lg-3">
                        <label for="name"> Enter Destination* </label>
                        <input type="text" id="name" name="destination" class="w-100" placeholder="Enter Destination" required="">
                     </div>
                     <div class="input-group col-md-6 col-lg-3">
                        <label for="pax"> Pax Number* </label>
                        <input type="number" id="pax" name="people" class="w-100" placeholder="No.of People" required="">
                     </div>
                     <div class="input-group col-md-6 col-lg-3">
                        <label for="date"> Travel Date* </label>
                        <input type="date" class="w-100" name="start" placeholder="MM / DD / YY" id="date"
                           required="">
                     </div>
                     <div class="input-group col-md-6 col-lg-3">
                        <label for="datee"> Return Date* </label>
                        <input type="date" class="w-100" name="message" placeholder="MM / DD / YY" id="datee"
                           required="">
                     </div>
                     <div class="input-group col-md-6 col-lg-3">
                        <!--<label class="screen-reader-text"> Search </label>-->
                        <input type="submit" name="travel-search" style="margin-top:35px;" class="w-100" value="Get Quotes Now">
                     </div>
                  </div>
               </div>
            </div>
         </form>

         <!-- //////////////////////////// -->

         <!-- search search field html end -->
         <section class="destination-section">
            <div class="container">
               <div class="section-heading">
                  <div class="row align-items-end">
                     <div class="col-lg-7">
                        <h5 class="dash-style">TOP NOTCH DESTINATION</h5>
                        <h2>POPULAR DESTINATIONS IN INDIA</h2>
                     </div>
                     <div class="col-lg-5">
                        <div class="section-disc">
                           India, has a unique place in the tourism. The country offers scenic beauty, colorful
                           festivals, varied landscapes, and ancient monuments to those visiting the region, But
                           planning a vacation is a worry for many. For a worry-free holiday experience, every holiday
                           needs detailed planning and execution.
                        </div>
                     </div>
                  </div>
               </div>
               <div class="destination-inner destination-three-column">
                  <div class="row">
                     <div class="col-lg-7">
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="assets/images/tour-5.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">Kashmir</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">20% Exclusive Ddiscount On Kashmir Packages</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 4">
                                       <span style="width: 53%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="assets/images/tour-6.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">Rajsthan</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">25% Additional Discount Today Only</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 5">
                                       <span style="width: 100%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-5">
                        <div class="row">
                           <div class="col-md-6 col-xl-12">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="assets/images/tour-7.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">Kerala</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">10% Off For Family Trip</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 5">
                                       <span style="width: 100%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 col-xl-12">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="assets/images/tour-8.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">Andeman Nikobar</a></a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">15% Honeymoon Discount For Couples</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 4">
                                       <span style="width: 60%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="btn-wrap text-center">
                     <a href="vacations.php" class="button-primary">MORE DESTINATION</a>
                  </div>
               </div>
            </div>
         </section>
         <section class="destination-section">
            <div class="container">
               <div class="section-heading">
                  <div class="row align-items-end">
                     <div class="col-lg-7">
                        <h5 class="dash-style">TOP NOTCH OVERSEAS DESTINATIONS</h5>
                        <h2>POPULAR INTERNATIONAL DESTINATIONS</h2>
                     </div>
                     <div class="col-lg-5">
                        <div class="section-disc">
                           Getting out from familiar circumstances and traveling to an international tourist destination
                           is anyone’s dream. The journey to an unknown land provides you with excitement that cannot be
                           duplicated by anything else. Celebrate a magical vacation in a foreign country, choose your
                           destination now
                        </div>
                     </div>
                  </div>
               </div>
               <div class="destination-inner destination-three-column">
                  <div class="row">
                     <div class="col-lg-7">
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="assets/images/img1.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">THAILAND</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">5% Off On Booking Today, Hurry Offer Expires Soon!</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 4">
                                       <span style="width: 53%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="assets/images/img2.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">Dubai</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">5% Off On Booking Today, Hurry Offer Expires Soon!</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 5">
                                       <span style="width: 100%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-5">
                        <div class="row">
                           <div class="col-md-6 col-xl-12">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="assets/images/img3.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">SINGAPORE</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">10% Off On Booking Today, Hurry Offer Expires Soon!</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 5">
                                       <span style="width: 100%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 col-xl-12">
                              <div class="desti-item overlay-desti-item">
                                 <figure class="desti-image">
                                    <img src="assets/images/img4.jpg" alt="">
                                 </figure>
                                 <div class="meta-cat bg-meta-cat">
                                    <a href="#">UNITED STATES</a>
                                 </div>
                                 <div class="desti-content">
                                    <h3>
                                       <a href="#">5% Off On Booking Today, Hurry Offer Expires Soon!</a>
                                    </h3>
                                    <div class="rating-start" title="Rated 5 out of 4">
                                       <span style="width: 60%"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="btn-wrap text-center">
                     <a href="vacations.php" class="button-primary">MORE DESTINATION</a>
                  </div>
               </div>
            </div>
         </section>
         <!-- Home packages section html start -->
         <section class="package-section">
            <div class="container">
               <div class="section-heading text-center">
                  <div class="row">
                     <div class="col-lg-8 offset-lg-2">
                        <h5 class="dash-style">EXPLORE GREAT PLACES</h5>
                        <h2>WITH GREAT SERVICE</h2>
                        <p>We are serious about our responsibility to provide you with a stress-free journey. Our team
                           foresees all the possible problems that you may have to face on an trip and take proactive
                           measures to mitigate them. We are happy to provide all end to end services, Like</p>
                     </div>
                  </div>
               </div>
               <div class="package-inner">
                  <div class="row">
                     <div class="col-lg-4 col-md-6">
                        <div class="package-wrap">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="assets/images/hotel-book.jpg" class="w-100" alt="">
                              </a>
                           </figure>
                           <div class="package-price">
                              <h6>
                                 <span>Hotels</span> At Prime Locations
                              </h6>
                           </div>
                           <div class="package-content-wrap">
                              <div style="display: none;" class="package-meta text-center">
                              </div>
                              <div class="package-content">
                                 <h3 class="mt-3">
                                    <a href="#">Exclusive 4&5 STAR Hotels @ 10% Off</a>
                                 </h3>
                                 <p>Going For A Business Meeting Or Function And Looking For A Stay In Diffrent City? We
                                    Got Your Back Here, Now Book Your Stay Eaisly With Us.</p>
                                 <div class="btn-wrap">
                                    <a href="hotels.php" class="button-text width-6">Explore Now<i
                                          class="fas fa-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="package-wrap">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="assets/images/flight-book.jpg" class="w-100" alt="">
                              </a>
                           </figure>
                           <div class="package-price">
                              <h6>
                                 <span>Flights </span> At Cheap Prices
                              </h6>
                           </div>
                           <div class="package-content-wrap">
                              <div style="display: none;" class="package-meta text-center">

                              </div>
                              <div class="package-content">
                                 <h3 class="mt-3">
                                    <a href="#">Heavy Deals On Flight Booking, Save Upto 10%</a>
                                 </h3>
                                 <p>Want to see family & friends, celebrate the holidays, or plan a trip? We offer the
                                    most affordable flights to Anywhere on the most convenient routes for you. </p>
                                 <div class="btn-wrap">
                                    <a href="flights.php" class="button-text width-6">Explore Now<i
                                          class="fas fa-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="package-wrap">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="assets/images/taxi-book.jpg" class="w-100" alt="">
                              </a>
                           </figure>
                           <div class="package-price">
                              <h6>
                                 <span>Car Rentals </span> At Cheap Price
                              </h6>
                           </div>
                           <div class="package-content-wrap">
                              <div style="display: none;" class="package-meta text-center">

                              </div>
                              <div class="package-content">
                                 <h3 class="mt-3">
                                    <a href="#">Renting A Car Is Easy, 10% Off For New Users</a>
                                 </h3>
                                
                                 <p>Rent a brand new car from a wide variety of models at a great prices, All of our
                                    vehicles are customized with wheels, tinted windows, wraps, etc.</p>
                                 <div class="btn-wrap">
                                    <a href="auto-rentals.php" class="button-text width-6">Explore Now<i
                                          class="fas fa-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- packages html end -->
         <!-- Home callback section html start -->
         <section class="callback-section">
            <div class="container">
               <div class="row no-gutters align-items-center">
                  <div class="col-lg-5">
                     <div class="callback-img" style="background-image: url(assets/images/img8.jpg);">
                        <div class="video-button">
                           <!-- <a id="video-container" data-video-id="IUN664s7N-c">
                              <i class="fas fa-play"></i>
                           </a> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="callback-inner">
                        <div class="section-heading section-heading-white">
                           <h5 class="dash-style">CALL US FOR DISCOUNTS</h5>
                           <h2>GO TRAVEL, DISCOVER & REMEMBER US!!</h2>
                           <p>We Are Providing Travel Services at Cheap Pricing With Best in Class Services, To Avail Best Deals And Discount Packages Call Us Anytime Round The Clock, We Are Being Recommended By Our Customers.</p>
                        </div>
                        <div class="callback-counter-wrap">
                           <div class="counter-item">
                              <div class="counter-icon">
                                 <img src="assets/images/icon1.png" alt="">
                              </div>
                              <div class="counter-content">
                                 <span class="counter-no">
                                    <span class="counter">500</span>K+
                                 </span>
                                 <span class="counter-text">
                                    Satisfied Clients
                                 </span>
                              </div>
                           </div>
                           <div class="counter-item">
                              <div class="counter-icon">
                                 <img src="assets/images/icon2.png" alt="">
                              </div>
                              <div class="counter-content">
                                 <span class="counter-no">
                                    <span class="counter">150</span>+
                                 </span>
                                 <span class="counter-text">
                                    Exclusive Deals For You
                                 </span>
                              </div>
                           </div>
                           <div class="counter-item">
                              <div class="counter-icon">
                                 <img src="assets/images/icon3.png" alt="">
                              </div>
                              <div class="counter-content">
                                 <span class="counter-no">
                                    <span class="counter">90</span>%
                                 </span>
                                 <span class="counter-text">
                                    Recommended by customers
                                 </span>
                              </div>
                           </div>
                           <div class="counter-item">
                              <div class="counter-icon">
                                 <img src="assets/images/icon4.png" alt="">
                              </div>
                              <div class="counter-content">
                                 <span class="counter-no">
                                    <span class="counter">24</span>/
                                    <span class="counter">7</span>
                                    </span>
                                 </span>
                                 <span class="counter-text">
                                    Customer Service
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="support-area">
                           <div class="support-icon">
                              <img src="assets/images/icon5.png" alt="">
                           </div>
                           <div class="support-content">
                              <h4>Call Our 24/7 Phone Number</h4>
                              <h3>
                                 <a href="tel:+18314271969">+1-831-427-1969</a>
                              </h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- callback html end -->
         <!-- Home special section html start -->
         <section class="best-section">
            <div class="container">
               <div class="row">
                  <div class="col-lg-5">
                     <div class="section-heading">
                        <h5 class="dash-style">OUR TOUR GALLERY</h5>
                        <h2>BEST TRAVELER'S SHARED PHOTOS</h2>
                        <p>We think Next Photo In Our Gallery will Be From You, Lets Plan Your Next Trip For You Or Your Group. We Have Exciting Offer Running to Close This Season Discount, Hurry.</p>
                     </div>
                     <figure class="gallery-img">
                        <img src="assets/images/img12.jpg" alt="">
                     </figure>
                  </div>
                  <div class="col-lg-7">
                     <div class="row">
                        <div class="col-sm-6">
                           <figure class="gallery-img">
                              <img src="assets/images/img13.jpg" alt="">
                           </figure>
                        </div>
                        <div class="col-sm-6">
                           <figure class="gallery-img">
                              <img src="assets/images/img14.jpg" alt="">
                           </figure>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-12">
                           <figure class="gallery-img">
                              <img src="assets/images/img15.jpg" alt="">
                           </figure>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- best html end -->
      </main>
      <?php include 'inc/footer.php' ?>
   </div>

</body>

</html>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
            <form action="mail.php" method="post">
               <div class="row">
                  <div class="col-md-4 back-pop m-0 p-0"></div>
                  <div class="col-md-8 col-sm-12">
                     <div class="right-pop-content">
                        <h3>Book Your Ride</h3>
                        <div class="row">
                           <div class="col-md-6">
                              <input type="text" id="namee" name="name" class="w-100 my-2" placeholder="Full Name" required="">
                           </div>
                           <div class="col-md-6">
                              <input type="email" id="email" name="email" class="w-100 my-2" placeholder="Email Address" required="">
                           </div>
                           <div class="col-md-6">
                              <input type="tel" class="w-100 my-2" name="phone" placeholder="Phone Number (With Country Code)" id="phone" required="">
                           </div>
                           <div class="col-md-6">
                              <input type="text" id="name" name="destination" class="w-100 my-2" placeholder="Enter Destination" required="">
                           </div>
                           <div class="col-md-6">
                              <input type="number" id="pax" name="people" class="w-100 my-2" placeholder="No.of People" required="">
                           </div>
                           <div class="col-md-6">
                              <input type="date" class="w-100 my-2" name="start" placeholder="MM / DD / YY" id="date" required="">
                           </div>
                           <div class="col-md-6">
                              <input type="date" class="w-100 my-2" name="message" placeholder="MM / DD / YY" id="date" required="">
                           </div>
                           <div class="col-md-6">
                              <input type="submit" name="travel-search" class="w-100 my-2">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

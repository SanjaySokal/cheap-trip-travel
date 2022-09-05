<!doctype html>
<html lang="en">

<head>
   <?php include 'inc/head.php' ?>
   <style>
       .details-content span {
           display:block;
       }
   </style>
</head>

<body>
   <div id="page" class="full-page">

      <?php include 'inc/header.php' ?>

      <main id="content" class="site-main">
         <!-- Inner Banner html start-->
         <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url(assets/images/inner-banner.jpg);">
               <div class="container">
                  <div class="inner-banner-content">
                     <h1 class="inner-title">Contact us</h1>
                  </div>
               </div>
            </div>
            <div class="inner-shape"></div>
         </section>
         <!-- Inner Banner html end-->
         <!-- contact form html start -->
         <div class="contact-page-section">
            <div class="contact-form-inner">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="contact-from-wrap">
                           <div class="section-heading">
                              <h5 class="dash-style">GET IN TOUCH WITH US</h5>
                              <h2>CONTACT US TO GET MORE INFO</h2>
                              <p>Please Fill Your Information Below To Get in Touch With Us For Reporting Any Issue in Your Travel Or Any Other Query.</p>
                           </div>
                           <form method="post" action="mail.php" class="contact-from">
                              <p>
                                 <input type="text" name="name" placeholder="Your Full Name*" required>
                              </p>
                              <p>
                                 <input type="email" name="email" placeholder="Your Email Address*" required>
                              </p>
                              <p>
                                 <input type="tel" name="phone" placeholder="Your Phone Number*" required>
                              </p>
                              <p>
                                 <textarea rows="8" name="mwssage" placeholder="Your Message*" required></textarea>
                              </p>
                              <p>
                                 <input type="submit" name="submit" value="SUBMIT MESSAGE">
                              </p>
                           </form>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="contact-detail-wrap">
                           <h3>Need help ?? Feel free to contact us !</h3>
                           <p>If you have any questions related to new reservations, existing reservations, billing (or any other travel related issues), please feel free to contact us by phone or e-mail during our regular business hours.</p>
                           <p>We are working 24/7 all days in week.</p>
                           <div class="details-list">
                              <ul>
                                 <li>
                                    <span class="icon">
                                       <i class="fas fa-map-signs"></i>
                                    </span>
                                    <div class="details-content">
                                       <h4>Location Address</h4>
                                       <span> <b>USA:</b> 241 Kings Village Rd, Scotts Valley, CA 95067, United States</span>
                                       <span> <b>INDIA:</b> PLOT NO 118, Sarkhej - Gandhinagar Hwy, Ahmedabad, Gujarat 380015</span>
                                    </div>
                                 </li>
                                 <li>
                                    <span class="icon">
                                       <i class="fas fa-envelope-open-text"></i>
                                    </span>
                                    <div class="details-content">
                                       <h4>Email Address</h4>
                                       <span>info@cheaptreap.com</span>
                                    </div>
                                 </li>
                                 <li>
                                    <span class="icon">
                                       <i class="fas fa-phone-volume"></i>
                                    </span>
                                    <div class="details-content">
                                       <h4>Phone Number</h4>
                                       <span>USA: +1-831-427-1969 / INDIA: +91-98-1106-0976</span>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                           <div class="contct-social social-links">
                              <h3>Follow us on social media..</h3>
                              <ul>
                                 <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                 <li><a href="https://twitter.com/"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                 <li><a href="https://www.instagram.com/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                 <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="map-section">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3184.4001451527915!2d-122.03061648538848!3d37.047946561415436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808e472d38d22d0f%3A0xf739570d6f040717!2s241%20Kings%20Village%20Rd%2C%20Scotts%20Valley%2C%20CA%2095066%2C%20USA!5e0!3m2!1sen!2sin!4v1653550723669!5m2!1sen!2sin" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
         </div>
         <!-- contact form html end -->
      </main>

      <?php include 'inc/footer.php' ?>
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
                              <input type="text" id="name" name="destination" class="w-100 my-2" placeholder="From"
                                 required="">
                           </div>
                           <div class="col-md-6">
                              <input type="text" id="pax" name="people" class="w-100 my-2" placeholder="To" required="">
                           </div>
                           <div class="col-md-6">
                              <input type="date" class="w-100 my-2" name="start" placeholder="Round-Trip" id="date"
                                 required="">
                           </div>
                           <div class="col-md-6">
                              <input type="date" class="w-100 my-2" name="message" placeholder="Round-Trip" id="message"
                                 required="">
                           </div>
                           <div class="col-md-6">
                              <input type="email" id="email" name="email" class="w-100 my-2" placeholder="Enter Email"
                                 required="">
                           </div>
                           <div class="col-md-6">
                              <input type="tel" class="w-100 my-2" name="phone"
                                 placeholder="Enter Phone Number (with country code)" id="phone" required="">
                           </div>
                           <div class="col-md-6">
                              <input type="text" id="namee" name="name" class="w-100 my-2" placeholder="Enter Name"
                                 required="">
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


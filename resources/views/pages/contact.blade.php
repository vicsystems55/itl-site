@extends('layouts.app')


@section('content')

    <!-- ========================= 
            Google Map
    =========================  -->
    <section class="google-map py-0">
        <div id="map" style="height: 500px;"></div>
        <script src="assets/js/google-map.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
        <!-- CLICK HERE (https://developers.google.com/maps/documentation/embed/get-api-key) TO  LERAN MORE ABOUT GOOGLE MAPS API KEY -->
      </section><!-- /.GoogleMap -->
  
      <!-- ==========================
          contact layout 1
      =========================== -->
      <section class="contact-layout1 pt-0 mt--100">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="contact-panel d-flex flex-wrap">
                <div class="contact-panel__info">
                  <div class="bg-img"><img src="assets/images/backgrounds/3.jpg" alt="banner"></div>
                  <div class="contact-block">
                    <h5 class="contact-block__title">Our Location</h5>
                    <ul class="contact-block__list list-unstyled">
                      <li>2307 Beverley Rd Brooklyn, New York 11226 United States.</li>
                    </ul>
                  </div><!-- /.contact-panel__info__block -->
                  <div class="contact-block">
                    <h5 class="contact-block__title">Quick Contact</h5>
                    <ul class="contact-block__list list-unstyled">
                      <li><a href="mailto:DataSoft@7oroof.com"></a>Email: DataSoft@7oroof.com</li>
                      <li><a href="mailto:DataSoft@7oroof.com"></a>Support: DataSoft@7oroof.com</li>
                    </ul>
                  </div><!-- /.contact-panel__info__block -->
                  <div class="contact-block">
                    <h5 class="contact-block__title">Opening Hours</h5>
                    <ul class="contact-block__list list-unstyled">
                      <li>Monday - Friday</li>
                      <li>09:00 AM - 06:00 PM</li>
                    </ul>
                  </div><!-- /.contact-panel__info__block -->
                  <p class="color-white mb-20">If you have any questions or need help, feel free to contact with our team.
                  </p>
                  <a href="tel:01061245741" class="phone-number">
                    <i class="icon-phone"></i> <span>01061245741</span>
                  </a>
                </div>
                <form class="contact-panel__form" method="post" action="assets/php/contact.php" id="contactForm">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 class="contact-panel__title">Get In Touch</h4>
                      <p class="contact-panel__desc mb-20">Our deep pool of certified engineers and IT staff are ready to
                        help you to keep your IT business safe & ensure high availability.</p>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                          required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" id="contact-email"
                          name="contact-email" required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                          name="contact-phone" required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Website (optional)" id="contact-website"
                          name="contact-website">
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-12">
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Describe your inquirey!" id="contact-message"
                          name="contact-message"></textarea>
                      </div>
                      <button type="submit" class="btn btn__primary btn__icon btn__xhight mt-10">
                        <span>Submit Request</span> <i class="icon-arrow-right"></i>
                      </button>
                      <div class="contact-result"></div>
                    </div><!-- /.col-lg-12 -->
                  </div><!-- /.row -->
                </form>
              </div>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.contact layout 1 -->
  
      <!-- ==========================
         Contact Info
      ============================ -->
      <section class="contact-info pt-0 pb-70">
        <div class="container">
          <div class="row">
            <!-- Contact panel #1 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="contact-info-box">
                <h4 class="contact__info-box-title">London Office</h4>
                <ul class="contact__info-list list-unstyled">
                  <li>Email: <a href="mailto:DataSoft@7oroof.com">DataSoft@7oroof.com</a></li>
                  <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                  <li>Phone: <a href="tel:5565454117">55 654 541 17</a></li>
                  <li>Hours: Mon-Fri: 8am – 7pm</li>
                </ul><!-- /.contact__info-list -->
              </div><!-- /.contact-info-box -->
            </div><!-- /.col-lg-4 -->
            <!-- Contact panel #2 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="contact-info-box">
                <h4 class="contact__info-box-title">Berlin Office</h4>
                <ul class="contact__info-list list-unstyled">
                  <li>Email: <a href="mailto:DataSoft@7oroof.com">DataSoft@7oroof.com</a></li>
                  <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                  <li>Phone: <a href="tel:5565454117">55 654 541 17</a></li>
                  <li>Hours: Mon-Fri: 8am – 7pm</li>
                </ul><!-- /.contact__info-list -->
              </div><!-- /.contact-info-box -->
            </div><!-- /.col-lg-4 -->
            <!-- Contact panel #3 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="contact-info-box">
                <h4 class="contact__info-box-title">Manchester Office</h4>
                <ul class="contact__info-list list-unstyled">
                  <li>Email: <a href="mailto:DataSoft@7oroof.com">DataSoft@7oroof.com</a></li>
                  <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                  <li>Phone: <a href="tel:5565454117">55 654 541 17</a></li>
                  <li>Hours: Mon-Fri: 8am – 7pm</li>
                </ul><!-- /.contact__info-list -->
              </div><!-- /.contact-info-box -->
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Contact Info -->
    
@endsection
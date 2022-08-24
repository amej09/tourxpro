<!doctype html>
<html lang="en">

<?php include('template/header.php')?>


    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">Contact Us</h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="contact-wrapper pt-100">
        <div class="container">
            <div class="row align-items-center justify-content-lg-center gy-5">
                <div class="col-lg-6">
                    <div class="contatc-intro-figure">
                        <img src="../assets/images/banner/contact-bg.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-info">
                        <h3>Contact Info.</h3>
                        <ul>
                            <li>
                                <h6>Let’s Talk</h6>
                                <a href="https://demo.egenslab.com/cdn-cgi/l/email-protection#5b32353d341b3e233a362b373e75383436"><span class="__cf_email__" data-cfemail="2e474048416e4b564f435e424b004d4143">[email&#160;protected]</span></a>
                                <a href="https://demo.egenslab.com/cdn-cgi/l/email-protection#11787f777e517469707c617d743f727e7c"><span class="__cf_email__" data-cfemail="771e19111837120f161a071b125914181a">[email&#160;protected]</span></a>
                                <a href="tel:8801761111456">+212 0176 1111 456</a>
                            </li>
                            <li>
                                <h6>Loacation.</h6>
                                <a href="#"> Marrakech / Morocco </a>
                            </li>
                            <li>
                                <h6>Visit Us.</h6>
                                <a href="#">Facebook: https://www.facebook.com/</a>
                                <a href="#">Twitter: https://www.twitter.com/</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="contact-map mt-120">
                <div class="mapouter">
                    <div class="gmap_canvas">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d108703.09887085269!2d-8.0078531!3d31.6346214!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafee8d96179e51%3A0x5950b6534f87adb8!2sMarrakech!5e0!3m2!1sfr!2sma!4v1661342547245!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-120">
            <form action="../sender.php" method="post"   id="contact_form">
                <div class="contact-form-wrap">
                    <h4>Get a free Keystroke quote now</h4>
                    <p>Your email address will not be published. Required fields are marked *</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="custom-input-group">
                                <input type="hidden"   name="name_tour" value="contact">

                                <label for="name">Name</label>
                                <input type="text" placeholder="Your name" name="name" id="name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="custom-input-group">
                                <label for="email">Email</label>
                                <input type="text" placeholder="Your Email" name="email" id="email">
                            </div>
                        </div>
                    </div>
                    <div class="custom-input-group">
                        <textarea cols="20" rows="7" placeholder="Your message" name="message"></textarea>
                    </div>
                    <div class="custom-input-group">
                        <div class="submite-btn">
                            <button type="submit">Send Message</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <?php include('template/footer.php')?>


    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/chain_fade.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>

    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from demo.egenslab.com/html/tourxpro/demo/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2022 11:47:17 GMT -->

</html>
<!doctype html>
<html lang="en">

    <?php include('template/header.php')?>

    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">Buggy Adventure in Agafay Desert   </h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="index.php">acceuil</a></li>
                    <li class="breadcrumb-item active">Agafay</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="package-details-wrapper pt-76">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4">
                    <div class="package-sidebar">
                        <aside class="package-widget-style-2 widget-form mt-30">
                            <div class="widget-title">
                            <table class="table" style="color: white; border: solid 0px ;border-color: #162b32; ">
                                    <tr  style="height: 40px ;text-align: center;">
                                        <th   >Privat</th>
                                    </tr>
                                    <tr  style="height: 40px ;text-align: center;">
                                        <th   >130 €</th>
                                    </tr>
                                    <tr  style="height: 40px;text-align: center; ">
                                        <th > Per person </th>                                        
                                    </tr>
                                   
                                </table>
                            </div>

                            <div class="widget-body">
                                <form action="../assets/php/sender.php" method="post" id="booking-form">
                                    <div class="booking-form-wrapper">
                                        <div class="custom-input-group">
                                            <input type="hidden"      name="type_reservation"  value="prive"/> &nbsp;
                                            <input type="hidden"      name="type_tour" value="Agafay"/> &nbsp;
                                            <input type="hidden"      name="name_tour" value="Buggy Adventure in Agafay Desert "/> &nbsp;

                                            Select date and participants: 
                                            <i class="bi bi-calendar3"></i>
                                            <input placeholder="Select your date" type="date" name="date"
                                                id="datepickerprive" value="" class="calendar" required>
                                        </div>
                                        <div class="row">
                                            <div class="custom-input-group">
                                                <i class="bi bi-chevron-down"></i>
                                                <select id="truist-adult" name="numbertravels">
                                                    <option  value="notselected" selected > Number of travelers: </option>
                                                    <option value="1"> 1</option>
                                                    <option value="2"> 2</option>
                                                    <option value="3"> 3</option>
                                                    <option value="4"> 4</option>
                                                    <option value="5"> 5</option>
                                                </select>
                                            </div>
                                        </div><br>
                                        
                                        <div class="custom-input-group">
                                       
                                            Total Price in  €<input type="text"  id="totalpriceprive"  name="totalprice" class="form-control" disabled>
                                        </div>
                                        <div class="custom-input-group">
                                            <input type="text" placeholder="Your Full Name" id="name" name="name" required>
                                        </div>
                                        <div class="custom-input-group">
                                            <input type="email" placeholder="Your Email" id="email" name="email" >
                                        </div>
                                        <div class="custom-input-group">
                                            <input type="tel" placeholder="Phone" id="phone" name="phone" required>
                                        </div>
                                        
                                         
                                       
                                       
                                        <div class="custom-input-group">
                                            <textarea cols="20" rows="7" name="message" placeholder="Your message"></textarea>
                                        </div>
                                        <div class="custom-input-group">
                                            <div class="submite-btn">
                                                <button type="submit" >Book Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </aside>
                    </div>    
                 </div>
                 <div class="col-lg-8">
                    <div class="tour-package-details">
                        <div class="pd-header">
                            <div class=" pd-top row row-cols-lg-4 row-cols-md-2 row-cols-2 gy-4">
                                <div class="col">
                                    <div class="pd-single-info">
                                        <div class="info-icon">
                                            <img src="../assets/images/icons/pd1.svg" alt="">
                                        </div>
                                        <div class="info">
                                            <h6>Duration</h6>
                                            <span>3-4 hours</span>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col">
                                    <div class="pd-single-info">
                                        <div class="info-icon">
                                            <img src="../assets/images/icons/pd2.svg" alt="">
                                        </div>
                                        <div class="info">
                                            <h6>Departure time</h6>
                                            <span> 9h030 / 14h30 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="pd-single-info">
                                        <div class="info-icon">
                                            <img src="../assets/images/icons/pd4.svg" alt="">
                                        </div>
                                        <div class="info">
                                            <h6> Availability </h6>
                                            <span>Every day</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pd-thumb">
                                <img src="../assets/images/Agafay/agafayg2.jpg" alt="">
                            </div>
                            <div class="header-bottom">
                                <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <h5 class="location"><i class="bi bi-geo-alt"></i> Agafay, morocco</h5>
                                    <ul class="d-flex align-items-center rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                </div>
                                <h2 class="pd-title">Buggy Adventure in Agafay Desert  </h2>
                            </div>
                        </div>
                    </div>    
                </div>
               

            </div>
            <br>
            <div class="row ">
                
                <div class="col-lg-12">
                    <div class="tour-package-details">

                        <div class="package-details-tabs">
                                <ul class="nav nav-pills tab-switchers gap-xxl-4 gap-3" id="pills-tab" role="tablist">
                                    <li class="nav-item navmargin" role="presentation">
                                        <button class="nav-link active" id="pills-package1" data-bs-toggle="pill"
                                            data-bs-target="#pill-body1" type="button" role="tab" aria-controls="pill-body1"
                                            aria-selected="true"><i class="bi bi-info-lg"></i> Information</button>
                                    </li>
                                    
                                    <li class="nav-item navmargin" role="presentation">
                                        <button class="nav-link" id="pills-package3" data-bs-toggle="pill"
                                            data-bs-target="#pill-body3" type="button" role="tab" aria-controls="pill-body3"
                                            aria-selected="false"><i class="bi bi-images"></i> Tour Gallary</button>
                                    </li>
                                  
                                </ul>
                            <div class="tab-content" id="pills-tabContent">

                                <div class="tab-pane fade show active package-info-tab mt-3" id="pill-body1"
                                    role="tabpanel" aria-labelledby="pills-package1">
                                    <h3 class="d-subtitle">Package Details</h3>
<pre>


Agafay Desert is the perfect playgroud for this unique « side-by-side tour ».  Only 45 minutes away from Marrakech, Agafay Desert is famous for its light and for its clear horizon on High Atlas Mountains.

Departure  from your hotel /riadTransfer to the lake of Takerkoust 37km from Marrakech. Once participants have reached the base, they are given a briefing on the safe use of buggies along with the appropriate health and saftey equipment. The buggy tour start to lake of Lalla Takerkoust, provision of buggy and ride into the mountains of Atlas, crossing the Agafay desert and discovery of the valley of the turtles and the small  Berber village located on the circuit.

The Marrackchi desert had to offer its arid hills and stony grounds leaving you in complete peace and quiet in such an impressive landscape. This desert area that opens up onto the plateau of Kik , gives you the feelings of being alone without anyone being able to disturb you. This place is dominated by the High Atlas Mountains with peaks rising to over 4000 meters. Across the plains the villages are dotted around, where life seems to be quiet. As we travel through the plains we will see lots crops and livestock, of which are very important resources to the people that live here. At the end of this magnificent day, pancakes with the traditional mint tea will be offered before it is time to return back to your hotel /riad.

On the return to Marrakech you’ll enjoy sublime views of the Atlas Mountains.

* Our prices are per Buggy, 1 Buggy can be booked for 1 or 2 persons

* This excursion is available for persons over 14 years old
Children under 14 years old may join this experience as passengers 

Duration: 3 – 4 Hours
Buggy Tour: 2 hours

Distance: 30 Km x 2 
Availability: Every day
Deparature time: At your Choice

    <i class='bx bx-check'></i>No Booking Fees
    <i class='bx bx-check'></i>Book Now and Pay Later
    <i class='bx bx-check'></i>Best Price Guaranteed
    <i class='bx bx-check'></i>Excellent Service
    <i class='bx bx-check'></i>Free cancellation
    <i class='bx bx-check'></i>Available every day

What is included? 

    <i class='bx bx-check'></i>Hotel pickup and drop-off
    <i class='bx bx-check'></i>Transport by air-conditioned minivan
    <i class='bx bx-check'></i>Buggy
    <i class='bx bx-check'></i>Traditional Moroccan tea
    <i class='bx bx-check'></i>Necessary equipment (gloves, masks, goggles)
    <i class='bx bx-check'></i>Supervision and assistance by professional quad guides.
    <i class='bx bx-check'></i>Liability insurance.
    <i class='bx bx-check'></i>All taxes.

What is not included?

    <i class='bx bx-check'></i>Lunch
    <i class='bx bx-check'></i>Drinks
    <i class='bx bx-check'></i>Tips

Meeting place:

    <i class='bx bx-check'></i>Our driver will pick you up at your hotel/Riad or any other location at the agreed time.
    <i class='bx bx-check'></i>In case of any problem: please email us or call us on the numbers displayed on contact informations.

Easy Booking: Accepted until 6pm the day before (Marrakech time), If you have any difficulties to book or need another service, please use our <a href="contact.php" > Contact Form </a> 


Payment Methods:

    In cash (Euros or MAD) upon arrival
</pre>                    
                                </div>
                                <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body3" role="tabpanel"
                                    aria-labelledby="pills-package3">
                                    <div class="row g-4">
                                         <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Agafay/quad.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Agafay/quad2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Agafay/agafayg.jpg" alt="">
                                            </div>
                                        </div>
                                         <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Agafay/agafayg1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Agafay/agafay.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Agafay/agafayg3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/Agafay/agafayg4.jpg" alt="">
                                                </div>
                                        </div>
                                        

                                        
                                        
                                    </div>
                                </div>
                                <!--<form action="#" id="comment_form" method="post">
                                        <div class="comment-form mt-110">
                                            <h4>Leave Your Comment</h4>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="custom-input-group">

                                                        <input type="text" placeholder="Your Full Name"  id="namecontact">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="custom-input-group">
                                                        <input type="text" placeholder="Your Email" id="emailcontact">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-input-group">
                                                <input type="text" placeholder="your number" id="phonecontact">
                                            </div>
                                            <div class="custom-input-group">
                                                <input type="text" placeholder="Tour Type" id="typecontact">
                                            </div>
                                            <div class="custom-input-group">
                                                <textarea cols="20" rows="7" placeholder="Write Message" id="messagecontact"></textarea>
                                            </div>
                                            <ul class="form-rating d-flex">
                                                <li><i class="bi bi-star"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                            </ul>
                                            <div class="custom-input-group">
                                                <div class="submite-btn">
                                                <button type="button" id="send" class="btn btn-warning">send</button>                                                </div>
                                            </div>
                                        </div>
                                    </form>-->

                            </div>
                        </div>

                    </div>
                </div>
              
            </div>
        </div>
    </div>

    <?php include('template/footer.php')?>


 
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/chain_fade.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <script src="../assets/js/jquery.fancybox.min.js"></script>
    <script src="../assets/js/select2.min.js"></script>
    <script src="../assets/js/jquery-ui.js"></script>

    <script src="../assets/js/main.js"></script>
   
    <script >
        var nbr_prive=130;
        $('#totalpriceprive').val(nbr_prive );

       
       $( '#truist-adult' ).change(function() {
    
        nbr= $( '#truist-adult' ).val();
        nbr_prive=130 * nbr;
       
       $('#totalpriceprive').val(nbr_prive );

       });
</script>

</body>

<!-- Mirrored from demo.egenslab.com/html/tourxpro/demo/package-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2022 11:46:30 GMT -->

</html>
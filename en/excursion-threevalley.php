<!doctype html>
<html lang="en">

 


    <?php include('template/header.php')?>



    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">Day Trip to The Three Valleys   </h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">excursion</li>
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
                                <table class="table" style="color: white;">
                                     <tr  style="height: 40px ;text-align: center;" class="privebackground">
                                        <th  colspan="5" >Privat</th>
                                    </tr>
                                    <tr>
                                        <th>nbr max*</th>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <th>prix* €</th>
                                        <td>60</td>
                                        <td>40</td>
                                        <td>30</td>
                                        <td>24</td>

                                    </tr>
                                </table>
                            </div>

                            <div class="widget-body">
                                <form action="../assets/php/sender.php" method="post" id="booking-form">
                                    <div class="booking-form-wrapper">
                                        <div class="custom-input-group">
                                            <input type="hidden"      name="type_reservation"  value="prive"/> &nbsp;
                                            <input type="hidden"      name="type_tour" value="Excursion"/> &nbsp;
                                            <input type="hidden"      name="name_tour" value="the three valley"/> &nbsp;

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
                                        <div class="row">
                                            
                                             <div class="col-md-6">
                                                <input type="checkbox" class="radiosize" id="Guide"    value="Guide (15€)"/> &nbsp;
                                            
                                                Guide(15€)
                                            </div>
                                           
                                            <div class="col-md-6">
                                                <input type="checkbox"  class="radiosize"  id="Lunch"    value="Lunch (10€ / per)"/>&nbsp;
                                          
                                                Lunch (10€ / per)  

                                            </div> 

                                            
                                        </div>
                                        <div class="custom-input-group">
                                       
                                            Total Price in  € Per Person<input type="text"  id="totalpriceprive"  name="totalprice" class="form-control" disabled>
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
                                            <span>8 hours</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="pd-single-info">
                                        <div class="info-icon">
                                            <img src="../assets/images/icons/pd2.svg" alt="">
                                        </div>
                                        <div class="info">
                                            <h6> Distance</h6>
                                            <span>85 Km x 2</span>
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
                                            <span> 09h00</span>
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
                                <img src="../assets/images/excursion/valley4.jpg" alt="">
                            </div>
                            <div class="header-bottom">
                                <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <h5 class="location"><i class="bi bi-geo-alt"></i> The Three Valleys, morocco</h5>
                                    <ul class="d-flex align-items-center rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                </div>
                                <h2 class="pd-title">Day Trip to The Three Valleys </h2>
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
                                    <li class="nav-item navmargin" role="presentation">
                                        <button class="nav-link" id="pills-package4" data-bs-toggle="pill"
                                            data-bs-target="#pill-body4" type="button" role="tab" aria-controls="pill-body4"
                                            aria-selected="false"><i class="bi bi-geo-alt"></i> Itinerary</button>
                                    </li>
                                  
                                  
                                </ul>
                            <div class="tab-content" id="pills-tabContent">

                                <div class="tab-pane fade show active package-info-tab mt-3" id="pill-body1"
                                    role="tabpanel" aria-labelledby="pills-package1">
                                    <h3 class="d-subtitle">Package Details</h3>
 <pre>


 Explore the Atlas Mountains, beautiful valleys and traditional Berber life on this full-day trip from Marrakech. You get to see how different life is in the villages of the valleys and what a truly beautiful country Morocco is. Begin your small-group day trip with a pickup from your Marrakech hotel or riad, and board your air-conditioned 4x4. Hear about Morocco’s rural way of life as you drive into the foothills of the Atlas Mountains. Admire the snow-tipped peaks as you head further into the spectacular range, and after roughly an hour, arrive at the Ourika Valley. The Plateau du Kik is situated over Asni, he dominates the dam of Lalla Takerkoust Lake.

The combination of these three valleys brings you into secluded fertile valleys where daily life of the indigenous Berber inhabitant moves wih time honoured traditions.

 

Distance: 100 Km x 2  
Duration:   8 hours
Availability: Every day
Deparature time: 9h00 am

<i class='bx bx-check'></i>  No Booking Fees
<i class='bx bx-check'></i>  Book Now and Pay Later
<i class='bx bx-check'></i> Best Price Guaranteed
<i class='bx bx-check'></i>  Excellent Service
<i class='bx bx-check'></i> Free cancellation
<i class='bx bx-check'></i>  Available every day

What is included?

<i class='bx bx-check'></i> Transportation with a driver Guide
<i class='bx bx-check'></i> Transportation Insurance
<i class='bx bx-check'></i> Quality service reliability
<i class='bx bx-check'></i> All taxes

What is not included?

<i class='bx bx-check'></i> Lunch
<i class='bx bx-check'></i> Tips

Meeting place:

<i class='bx bx-check'></i> Our driver will pick you up at your hotel/Riad or any other location at the agreed time.
<i class='bx bx-check'></i> In case of any problem: please email us or call us on the numbers displayed on contact informations.

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
                                                <img  src="../assets/images/excursion/valley2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/excursion/valley3.jpg" alt="">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/excursion/valley4.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/excursion/valley5.jpg" alt="">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/excursion/valley.jpg" alt="">
                                                </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <div class="tab-pane fade package-location-tab mt-3" id="pill-body4" role="tabpanel"
                                    aria-labelledby="pills-package4">
                                    <div class="mapouter">
                                             <div class="package-gallary-item  ">
                                            <img  class="imageininerary" src="../assets/images/excursion/valley11.jpg" alt="">
                                            </div>
                                        <br>
                                    </div>
                                </div>

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
        var nbr_prive=120;
        $('#totalpriceprive').val(nbr_prive );

       $('#Guide').change(function() {
         /* */
          if($(this).is(':checked')){
              nbr_prive+=15;
          }
          else{
              nbr_prive-=15;
          }
          $('#totalpriceprive').val(nbr_prive );

       });
       $('#Lunch').change(function() {
          /* */          
          var lunch=10;

          if($(this).is(':checked')){
            nbr_prive+=lunch;     
          }
          else{
            nbr_prive-=lunch;
       }
          $('#totalpriceprive').val(nbr_prive );

      });

       $( '#truist-adult' ).change(function() {
          $( "#Lunch" ).prop( "checked", false );
          $( "#Guide" ).prop( "checked", false );
        nbr= $( '#truist-adult' ).val();
        nbr_prive=parseInt(120 / nbr);

       $('#totalpriceprive').val(nbr_prive );

       });
</script>

</body>

<!-- Mirrored from demo.egenslab.com/html/tourxpro/demo/package-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2022 11:46:30 GMT -->

</html>
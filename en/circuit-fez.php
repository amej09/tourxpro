<!doctype html>
<html lang="en">
    <?php include('template/header.php')?>



    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">3-Days Desert Trip from Marrakech to Fez :  </h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Cercuits</li>
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
                                        <td>364</td>
                                        <td>270</td>
                                        <td>220</td>
                                        <td>190</td>

                                    </tr>
                                </table>
                            </div>

                            <div class="widget-body">
                                <form action="../assets/php/sender.php" method="post" id="booking-form">
                                    <div class="booking-form-wrapper">
                                        <div class="custom-input-group">
                                            <input type="hidden"      name="type_reservation"  value="prive"/> &nbsp;
                                            <input type="hidden"      name="type_tour" value="Cercuits"/> &nbsp;
                                            <input type="hidden"      name="name_tour" value="Fez"/> &nbsp;

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
                                        
                                        <div class="row">
                                                <div class="custom-input-group">
                                                    <i class="bi bi-chevron-down"></i>
                                                    <select id="truist-adult" name="adlut">
                                                        <option value="notselected" selected>Adult</option>
                                                        <option value="1"> 1</option>
                                                        <option value="2"> 2</option>
                                                        <option value="3"> 3</option>
                                                        <option value="4"> 4</option>
                                                        <option value="5"> 5</option>
                                                    </select>
                                                </div>
                                            
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
                                            <span>3 days/ 2 nights</span>
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
                                            <span>1017 km</span>
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
                                            <span> 07h00</span>
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
                                <img src="../assets/images/Circuit/details/fez1.jpg" alt="">
                            </div>
                            <div class="header-bottom">
                                <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <h5 class="location"><i class="bi bi-geo-alt"></i> Fez, morocco</h5>
                                    <ul class="d-flex align-items-center rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                </div>
                                <h2 class="pd-title">3-Days Desert Trip from Marrakech to Fez  : </h2>
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



 A private desert tour from Marrakech to the amazing dunes of Merzouga.

Travel across fascinating desert landscapes and impressive Berber villages before spending an unforgettable experience in the middle of the Sahara.

After this desert trip, your private chauffeur will drive directly to Fez to continue exploring the authentic Morocco.


1st Day: Marrakech - Ait Ben Haddou - Ouarzazate - Boumalne Dadès (300 Km)

    After an early pick up from your hotel or Riad in Marrakech, you will start your desert tour through Tizi n’Tichka Pass before reaching
    the famous Kasbah of Ait Ben Haddou where you will have a short guided visit and lunch.
    Continuation to Ouarzazate and Dades valley with its 1000 Kasbah, then arrival in Boulmane where you will spend your first night.  

2nd Day: Boumalne Dadès - Tinghir - Todra Gorge - Arfoud - Merzouga Dunes (250 km)   

    Early breakfast and departure to Merzouga trough amazing desert landscapes with a stop in Tinghir village and Todra Gorge. Then
    continuation to Tinjedad, Touroug and Erfoud before arriving to Merzouga.
    Upon you arrival, you will have the chance too enjoy a camel ride in the middle of the splendid Erg Chebbi Dunes, then you will have
     dinner with a wonderful Berber party around the campfire before spending your second night under nomadic tents in Merzouga Desert.

3rd Day: Merzouga - Fez (467 Km)  

    After an early wake up, you will enjoy a short sunrise trekking over Erg Chebbi dunes, then departure to Fez crossing the beautiful Ziz
    Valley through the road of Errachidia. You will have a lunch break in Midelt. Continuation to Imouzzar and Ifrane before arriving to
    Fez where the desert tour end with a drop off at your hotel or Riad.  




Duration: 3 days / 2 night
Distance: 1017 Km 
Availability: Every day
Deparature time: 07h00 am

<i class='bx bx-check'></i> No Booking Fees
<i class='bx bx-check'></i> Book Now and Pay Later
<i class='bx bx-check'></i> Best Price Guaranteed
<i class='bx bx-check'></i> Excellent Service
<i class='bx bx-check'></i> Free cancellation
<i class='bx bx-check'></i> Available every day

What is included?

<i class='bx bx-check'></i> Transportation with a private driver
<i class='bx bx-check'></i> Air-conditioning and comfortable 4x4
<i class='bx bx-check'></i> Half Board Accommodation:
                                • 1st night  : Night at the hostel
                                • 2nd night: Night in Bivouac
<i class='bx bx-check'></i> Camel ride in Merzouga dunes
<i class='bx bx-check'></i> Transport & Liability Insurance
<i class='bx bx-check'></i> Quality service reliability
<i class='bx bx-check'></i> All taxes 

What is not included?

<i class='bx bx-check'></i> Lunch
<i class='bx bx-check'></i> Local Guide
<i class='bx bx-check'></i> Tips



Meeting place:

<i class='bx bx-check'></i> Our driver will pick you up at your hotel/Riad or any other location at the agreed time.
<i class='bx bx-check'></i> In case of any problem: please email us or call us on the numbers displayed on contact informations.

Easy Booking: Accepted until 6pm the day before (Marrakech time), If you have any difficulties to book or need another service, please use our <a href="contact.php" > Contact Form </a> 


Payment Methods:

<i class='bx bx-check'></i> In cash (Euros or MAD) upon arrival


 </pre>                    
                                </div>
                                <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body3" role="tabpanel"
                                    aria-labelledby="pills-package3">
                                    <div class="row g-4">
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Circuit/details/fez1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Circuit/details/fez2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/Circuit/details/fez3.jpg" alt="">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Circuit/details/fez4.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/Circuit/details/fez5.jpg" alt="">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/Circuit/details/fez6.jpg" alt="">
                                                </div>
                                        </div>
                                        
                                        
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
        var nbr_prive=680;
        $('#totalpriceprive').val(nbr_prive );

       $( '#truist-adult' ).change(function() {
          
        nbr= $( '#truist-adult' ).val();
       var new_nbr_prive = nbr_prive / nbr ;
       $('#totalpriceprive').val(new_nbr_prive );

       });
</script>
<script >
  var nbr_group=65 ;
  $('#totalpricegroup').val(nbr_group );

 $('#Guidegroup').change(function() {
   /* */
    if($(this).is(':checked')){
      nbr_group+=15;
    }
    else{
      nbr_group-=15;
    }
    $('#totalpricegroup').val(nbr_group );

 });
 $('#Lunchgroup').change(function() {
   /* */
      var lunchgroup=10;

    if($(this).is(':checked')){
      nbr= $( '#truist-adultgroup' ).val();
      if(nbr=='2'){
          nbr_group+= lunchgroup * 2;
      }else if(nbr=='3'){
          nbr_group+= lunchgroup * 3;
      }
      else if(nbr=='4'){
          nbr_group+= lunchgroup * 4;
      }
      else if(nbr=='5'){
          nbr_group+= lunchgroup * 5;
      }else{
          nbr_group+= lunchgroup;

      }
          
    }
    else{
      if(nbr=='2'){
          nbr_group-= lunchgroup * 2;
      }else if(nbr=='3'){
          nbr_group-= lunchgroup * 3;
      }
      else if(nbr=='4'){
          nbr_group-= lunchgroup * 4;
      }
      else if(nbr=='5'){
          nbr_group-= lunchgroup * 5;
      }else{
          nbr_group-= lunchgroup;

      }
    }
    $('#totalpricegroup').val(nbr_group );
 });

 $( '#truist-adultgroup' ).change(function() {
    $( "#Lunchgroup" ).prop( "checked", false );
    $( "#Guidegroup" ).prop( "checked", false );
  nbr= $( '#truist-adultgroup' ).val();
  nbr_group=25;
 if(nbr=='2'){
      nbr_group=(nbr_group * 2);
 }else if(nbr=='3'){
  nbr_group=(nbr_group * 3);
 }
 else if(nbr=='4'){
  nbr_group=(nbr_group * 4);
 }
 else if(nbr=='5'){
  nbr_group=(nbr_group * 5);
 }
 $('#totalpricegroup').val(nbr_group );

 });
</script>
</body>

<!-- Mirrored from demo.egenslab.com/html/tourxpro/demo/package-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2022 11:46:30 GMT -->

</html>
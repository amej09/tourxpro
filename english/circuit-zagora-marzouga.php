<!doctype html>
<html lang="en">
    <?php include('template/header.php')?>



    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">4-Day Desert Tour to Zagora & Merzouga :  </h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="index.html">acceuil</a></li>
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
                                    <tr  style="height: 40px ;text-align: center;">
                                        <th  colspan="5" >Prive</th>
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
                                        <td>380</td>
                                        <td>300</td>
                                        <td>260</td>
                                        <td>230</td>

                                    </tr>
                                </table>
                            </div>

                            <div class="widget-body">
                                <form action="../sender.php" method="post" id="booking-form">
                                    <div class="booking-form-wrapper">
                                        <div class="custom-input-group">
                                            <input type="hidden"      name="type_reservation"  value="prive"/> &nbsp;
                                            <input type="hidden"      name="type_tour" value="Cercuits"/> &nbsp;
                                            <input type="hidden"      name="name_tour" value="Zagoura And Marzouga"/> &nbsp;

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
                                            <span>4 days/ 3 nights</span>
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
                                            <span>480km x 2</span>
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
                                <img src="../assets/images/Circuit/details/marzouga5.jpg" alt="">
                            </div>
                            <div class="header-bottom">
                                <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <h5 class="location"><i class="bi bi-geo-alt"></i> Marzouga, Zagoura, morocco</h5>
                                    <ul class="d-flex align-items-center rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                </div>
                                <h2 class="pd-title">4-Day Desert Tour to Zagora & Merzouga : </h2>
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

If you would like to explore the beauty and the charm of Morocco’s Sahara, this 4-day private desert tour is made for you.

Discover amazing desert landscapes, oasis, Kasbahs and authentic Berber villages while travelling in complete comfort with a professional English speaking driver-guide.

 

Highlights of the tour

    • Discover the panoramic views of the High Atlas
    • Cross the splendid Tichka Pass
    • Visit the famous Kasbah of Ait Benhaddou
    • Visit Kasbah Taourirte and Cinema studio in Ouarzazate
    • Enjoy the beautiful palm trees and oases of Draa Valley
    • Experience the nomadic lifestyle of Sahara Desert
    • Join a wonderful camel ride tour in Zagora & Merzouga dunes
    • Appreciate breathtaking desert sunset and sunrise
    • Enjoy a traditional evening with Berber music around the campfire

 

                                                                Program of the Tour

Day 1: Marrakech - Ouarzazate - Zagora

    A private driver will pick you up from your hotel or Riad in Marrakech early in the morning to start your desert trip through the high
    Atlas Mountains. You will across the famous Tizi N’Tichka Pass and charming Berber villages before arriving to the great Kasbah of Ait
    Ben Haddou, where you will have the chance to explore this amazing historical world heritage with a local guide.

    After a short break for lunch in Ouarzazate, we will continue to Draa Valley through Agdz to explore the real authentic Morocco with its
    large palm oasis and fortified Kasbahs.

    Upon arrival at Zagora, you will join a camel ride tour in the middle of sand dunes before spending your first night in a traditional 
    Berber guest house.

Day 2: Zagora - Merzouga

    An early pick up from your guest house after breakfast, and we will continue our excursion through the Anti Atlas Mountains direction 
    Alnif where we will have lunch.

    Continuation of our desert tour to Merzouga, we will start with a camel trek to explore the magic dunes of Erg Chebbi and the 
    breathtaking sunset over the large desert before joining our Sahara camp to have dinner in a unique atmosphere with a desert Berber party around the campfire.

    We will spend the second night under a nomadic tent between the dunes of Merzouga.

 Day 3: Merzouga - Tinghir - Boumalne Dades

    You will have to wake up very early to enjoy the amazing sunrise in the middle of this vast and charming desert.

    After breakfast, we will go back to Alnif, from where, we will get to the village of Tinghir for a small tour to discover the 
    agriculture fields and old irrigation systems used by locals with a private guide as well as a Berber workshop to explore the art of 
    traditional Berber carpets.

    20 km after Tinghir, you will be amazed by the spectacular Todra Gorges & Canyons, one of the most beautiful natural sites in this 
    region. We will have a stop for lunch then we will continue our desert excursion to Boulmane Dades. Dinner and overnight in a 
    traditional Berber guesthouse.

Day 4: Boumalne Dades – Ouarzazate - Marrakech

    After having breakfast in your guesthouse, you will continue exploring the fabulous desert landscapes while driving through Ifri, Kelaat 
    Mgouna and Skoura.

    A lunch break in Ouarzazate and continuation to Marrakech where this great 4-day desert tour will end with a drop-off in your hotel or 
    Riad in Marrakech.

 

Duration: 4 days
Distance: 480 Km x 2  
Availability: Every day
Deparature time: 07h00 am

<i class='bx bx-check'></i> No Booking Fees
<i class='bx bx-check'></i> Book Now and Pay Later
<i class='bx bx-check'></i> Best Price Guaranteed
<i class='bx bx-check'></i> Excellent Service
<i class='bx bx-check'></i> Free cancellation
<i class='bx bx-check'></i> Available every day

What is included?

<i class='bx bx-check'></i> Transportation with an English speaking driver-guide
<i class='bx bx-check'></i> Air-conditioning and comfortable 4x4
<i class='bx bx-check'></i> Half Board Accommodation:
        • 1st night: Riad Lamane or Similar
        • 2nd night: Nomadic Tent in Bivouac
        • 3rd night : Gazelle du Dades or Similar
<i class='bx bx-check'></i> Camel ride tour in Zagora & Merzouga Dunes
<i class='bx bx-check'></i> Transport & Liability Insurance
<i class='bx bx-check'></i> All taxes 

What is not included?

<i class='bx bx-check'></i> Lunch
<i class='bx bx-check'></i> Local Guide
<i class='bx bx-check'></i> Tips



Meeting place:

<i class='bx bx-check'></i> Our driver will pick you up at your hotel/Riad or any other location at the agreed time.
<i class='bx bx-check'></i> In case of any problem: please email us or call us on the numbers displayed on contact informations.

Easy Booking: Accepted until 6pm the day before (Marrakech time), If you have any difficulties to book or need another service, please use our Contact Form


Payment Methods:

<i class='bx bx-check'></i> In cash (Euros or MAD) upon arrival


 </pre>                    
                                </div>
                                <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body3" role="tabpanel"
                                    aria-labelledby="pills-package3">
                                    <div class="row g-4">
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Circuit/details/marzouga1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Circuit/details/marzouga2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/Circuit/details/marzouga3.jpg" alt="">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Circuit/details/marzouga4.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/Circuit/details/marzouga5.jpg" alt="">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/Circuit/details/marzouga6.jpg" alt="">
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
        var nbr_prive=640;
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
              nbr= $( '#truist-adult' ).val();
              if(nbr=='2'){
                  nbr_prive+=lunch*2;
              }else if(nbr=='3'){
                  nbr_prive+=lunch*3;
              }
              else if(nbr=='4'){
                  nbr_prive+=lunch*4;
              }
              else if(nbr=='5'){
                  nbr_prive+=lunch*5;
              }else{
                  nbr_prive+=lunch;

              }
                  
          }
          else{
              nbr= $( '#truist-adult' ).val();
              if(nbr=='2'){
                  nbr_prive-=lunch*2;
              }else if(nbr=='3'){
                  nbr_prive-=lunch*3;
              }
              else if(nbr=='4'){
                  nbr_prive-=lunch*4;
              }
              else if(nbr=='5'){
                  nbr_prive-=lunch*5;
              }else{
                  nbr_prive-=lunch;

              }            }
          $('#totalpriceprive').val(nbr_prive );

      });

       $( '#truist-adult' ).change(function() {
          $( "#Lunch" ).prop( "checked", false );
          $( "#Guide" ).prop( "checked", false );
        nbr= $( '#truist-adult' ).val();
        nbr_prive=70;
         if(nbr=='2'){
          nbr_prive+=10;
         }else if(nbr=='3'){
          nbr_prive+=20;
       }else if(nbr=='4'){
          nbr_prive+=30;
       }else if(nbr=='5'){
          nbr_prive+=30;
       }
       $('#totalpriceprive').val(nbr_prive );

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
<!doctype html>
<html lang="en">

<!-- Mirrored from demo.egenslab.com/html/tourxpro/demo/package-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2022 11:46:12 GMT -->
 


    <?php include('template/header.php')?>



    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">Day Trip to Ouzoud Waterfalls  </h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="index.html">acceuil</a></li>
                    <li class="breadcrumb-item active">excursion</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="package-details-wrapper pt-76">
        <div class="container">
            <div class="row ">
                <div class="col-lg-3">
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
                                        <td>60</td>
                                        <td>44</td>
                                        <td>35</td>
                                        <td>30</td>

                                    </tr>
                                </table>
                            </div>

                            <div class="widget-body">
                                <form action="../sender.php" method="post" id="booking-form">
                                    <div class="booking-form-wrapper">
                                        <div class="custom-input-group">
                                            <input type="hidden"      name="type_reservation"  value="prive"/> &nbsp;
                                            <input type="hidden"      name="type_tour" value="Excursion"/> &nbsp;
                                            <input type="hidden"      name="name_tour" value="ouzoud"/> &nbsp;

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
                 <div class="col-lg-6">
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
                                            <span>10 hours</span>
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
                                            <span>160 Km x 2</span>
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
                                            <span> 08h00</span>
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
                                <img src="../assets/images/excursion/ouzoud2.jpg" alt="">
                            </div>
                            <div class="header-bottom">
                                <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <h5 class="location"><i class="bi bi-geo-alt"></i> ouzoud, morocco</h5>
                                    <ul class="d-flex align-items-center rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                </div>
                                <h2 class="pd-title">Day Trip to Ouzoud Waterfalls</h2>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="col-lg-3">
                    <div class="package-sidebar">
                        <aside class="package-widget-style-2 widget-form mt-30">
                            <div class="widget-title">
                                <table class="table" style="color: white; border: solid 0px ;border-color: #162b32; ">
                                    <tr  style="height: 40px ;text-align: center;">
                                        <th   >Groupe</th>
                                    </tr>
                                    <tr  style="height: 40px ;text-align: center;">
                                        <th   >30 €</th>
                                    </tr>
                                    <tr  style="height: 40px;text-align: center; ">
                                        <th > Per person </th>                                        
                                    </tr>
                                   
                                </table>
                            </div>

                            <div class="widget-body">
                                <form action="../sender.php" method="post" id="booking-form">
                                    <div class="booking-form-wrapper">
                                        <div class="custom-input-group">
                                            <input type="hidden"      name="type_reservation" value="groupe"/> &nbsp;
                                            <input type="hidden"      name="type_tour" value="Excursion"/> &nbsp;
                                            <input type="hidden"      name="name_tour" value="ouzoud"/> &nbsp;

                                            Select date and participants: 
                                            <i class="bi bi-calendar3"></i>
                                            <input placeholder="Select your date" type="date" name="date"
                                                id="datepickerfroup" value="" class="calendar" required>
                                        </div>
                                        <div class="row">
                                            <div class="custom-input-group">
                                                <i class="bi bi-chevron-down"></i>
                                                <select id="truist-adultgroup" name="numbertravels">
                                                    <option value="notselected" selected> Number of travelers: </option>
                                                    <option value="1"> 1</option>
                                                    <option value="2"> 2</option>
                                                    <option value="3"> 3</option>
                                                    <option value="4"> 4</option>
                                                    <option value="5"> 5</option>
                                                </select>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            
                                            <div class="col-6">
                                               <input type="checkbox" class="radiosize" id="Guidegroup"  name="Guide" value="Guide (15€)"/> &nbsp;
                                           
                                               Guide(15€)
                                           </div>
                                          
                                           <div class="col-6">
                                            <input type="checkbox"  class="radiosize"  id="Lunchgroup"  name="Lunch" value="Lunch (10€ / per)"/>&nbsp;
                                          
                                               Lunch (10€ / per)  

                                           </div> 

                                           
                                       </div>
                                       <div class="custom-input-group">
                                      
                                           Total Price in  €<input type="text"   id="totalpricegroup" name="totalprice"  class="form-control" disabled>
                                       </div>
                                        <div class="custom-input-group">
                                            <input type="text" placeholder="Your Full Name" name="name" id="name" required> 
                                        </div>
                                        <div class="custom-input-group">
                                            <input type="email" placeholder="Your Email" name="email" id="email">
                                        </div>
                                        <div class="custom-input-group">
                                            <input type="tel" placeholder="Phone" name="phone" id="phone" required>
                                        </div>
                                        
                                        <div class="row">
                                                <div class="custom-input-group">
                                                    <i class="bi bi-chevron-down"></i>
                                                    <select id="truist-adult" name="adult">
                                                        <option value="notselected"selected>Adult</option>
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
                                                <button type="submit"  >Book Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </aside>
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


 Early departure from Marrakesh heading the direction of the famous Ouzoud waterfalls of about 110 metres in height, which constitute one of the most spectacular natural beauty spots in Morocco. The surrounding countryside offers red cliffs, oleander and doves.  And if you are lucky, you will catch a glimpse of some Barbary apes. Bird-watchers will enjoy a trip to the waterfalls, in addition to walkers who can enjoy the area at any time of year. There are plenty of places to have lunch with a view over the waterfalls from their terraces. A short walk will bring you to the top of the falls from where you can see small and constantly active mills.

Distance: 160 Km x 2  
Duration:   10 hours
Availability: Every day
Deparature time: 8h00 am

<i class='bx bx-check'></i> No Booking Fees
<i class='bx bx-check'></i> Book Now and Pay Later
<i class='bx bx-check'></i> Best Price Guaranteed
<i class='bx bx-check'></i> Excellent Service
<i class='bx bx-check'></i> Free cancellation
<i class='bx bx-check'></i> Available every day

What is included?

<i class='bx bx-check'></i> Hotel pickup and drop-off
<i class='bx bx-check'></i> Transport by air-conditioned minivan
<i class='bx bx-check'></i> Transportation Insurance
<i class='bx bx-check'></i> Professional Liability Insurance
<i class='bx bx-check'></i> Quality service reliability
<i class='bx bx-check'></i> All taxes

What is not included?

<i class='bx bx-check'></i> Lunch
<i class='bx bx-check'></i> Local Guide
<i class='bx bx-check'></i> Tips

Meeting place:

    Our driver will pick you up at your hotel/Riad or any other location at the agreed time.
    In case of any problem: please email us or call us on the numbers displayed on contact informations.

Easy Booking: Accepted until 6pm the day before (Marrakech time), If you have any difficulties to book or need another service, please use our Contact Form


Payment Methods:

    In cash (Euros or MAD) upon arrival


 </pre>                    
                                </div>
                                <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body3" role="tabpanel"
                                    aria-labelledby="pills-package3">
                                    <div class="row g-4">
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/excursion/ouzoud1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/excursion/ouzoud7.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/excursion/ouzoud3.jpg" alt="">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/excursion/ouzoud4.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/excursion/ouzoud5.jpg" alt="">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/excursion/ouzoud6.jpg" alt="">
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
        nbr_prive=120;
         if(nbr=='3'){
          nbr_prive+=12;
         }else if(nbr=='4'){
          nbr_prive+=20;
       }else if(nbr=='5'){
          nbr_prive+=30;
       }
       $('#totalpriceprive').val(nbr_prive );

       });
</script>
<script >
  var nbr_group=30 ;
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
  nbr_group=30;
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
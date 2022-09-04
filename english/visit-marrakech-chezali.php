<!doctype html>
<html lang="en">

    <?php include('template/header.php')?>

    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">Restaurant chez Ali Marrakech - Diner & spectacle Fantasia </h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="index.php">acceuil</a></li>
                    <li class="breadcrumb-item active">visits</li>
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
                                        <th  colspan="5" >In Private</th>
                                    </tr>
                                    <tr>
                                        <th>nbr max*</th>
                                        <td>Person</td>
                                        
                                    </tr>
                                    <tr>
                                        <th>prix* €</th>
                                        <td>45</td>
                                        

                                    </tr>
                                </table>
                            </div>

                            <div class="widget-body">
                                <form action="../assets/php/sender.php" method="post" id="booking-form">
                                    <div class="booking-form-wrapper">
                                        <div class="custom-input-group">
                                            <input type="hidden"      name="type_reservation"  value="prive"/> &nbsp;
                                            <input type="hidden"      name="type_tour" value="visites"/> &nbsp;
                                            <input type="hidden"      name="name_tour" value="chez ali"/> &nbsp;

                                            Select date and participants: 
                                            <i class="bi bi-calendar3"></i>
                                            <input placeholder="Select your date" type="date" name="date"
                                                id="datepickerprive" value="" class="calendar" required>
                                        </div>
                                        <div class="row">
                                                     
                                                <div class="custom-input-group">
                                               
                                                    <i class="bi bi-chevron-down"></i>
                                                    <select id="truist-menu" name="menue">
                                                    <option  value="menu1" selected > Menu N° 1  </option>
                                                    <option  value="menu2"  > Menu N° 2  </option>
                                                    <option  value="menu3"  > Menu N° 3  </option>
                                                    <option  value="menu4"  > Menu N° 4  </option>
                                                    
                                                    </select>
                                                 </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="custom-input-group">
                                                <i class="bi bi-chevron-down"></i>
                                                <select id="truist-adult" name="numbertravels">
                                                    <option value="1" selected > Number of travelers: </option>
                                                    <option value="1"> 1</option>
                                                    <option value="2"> 2</option>
                                                    <option value="3"> 3</option>
                                                    <option value="4"> 4</option>
                                                    <option value="5"> 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="custom-input-group">
                                                <i class="bi bi-chevron-down"></i>
                                                <select id="truist-child" name="numberchilds">
                                                    <option  value="0" selected > Number of childs:(Age 4-11) </option>
                                                    <option value="0"> 0</option>
                                                    <option value="1"> 1</option>
                                                    <option value="2"> 2</option>
                                                    <option value="3"> 3</option>
                                                    <option value="4"> 4</option>
                                                    <option value="5"> 5</option>
                                                </select>
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
                                            <span>3 -4  hours</span>
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
                                            <span> 20h00</span>
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
                                <img src="../assets/images/visites/chezali5.jpg" alt="">
                            </div>
                            <div class="header-bottom">
                                <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <h5 class="location"><i class="bi bi-geo-alt"></i> marrakech, morocco</h5>
                                    <ul class="d-flex align-items-center rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                </div>
                                <h2 class="pd-title">Restaurant Chez Ali Marrakech - Dinner & Fantasia Show </h2>
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


    An unbelievable night of entertainment, offers the chance to experience the sights and sounds of Moroccan musicians and dancers, while eating a 5 courses meal in caidal tents. Berber Tribes singing and greeting you upon arrival. It delivers all sorts of entertainment-food, song, dance, horse back stunts, fireworks, parades, acrobats, belly dancers.  

    Originated from the Rif, the fantasia is a war ceremony which consists of opposing different groups of horsemen; each represents the best rider of his own tribe. Each group quivers away in a glaring light; all its members point their rifles to the sky and shoot at the same time leaving behind them a tumult burst and shouts. Enjoy a typical Moroccan dinner which mainly includes Harira, Mechoui and couscous under caidal "tents". A traditional event including an opportunity to see the Berber folklore, the jugglers’ performance, the flying carpet, the belly dancing and finally the fantasia show. 

    Our Menus :

 

    Menu N° 1 – Drinks excluded :     

    Moroccan Harira
    - Chiken Tagine with lemon
    Or Lamb Tagine with prunes
    - Seven-Vegetable Couscous
    - Seasonal fruits
    - Mint tea
    - Moroccan pastries
        

    Menu N° 2 – Drinks excluded :

    - Maroccan Harira
    - 1/2 Méchoui (lamb)
    - Seven-Vegetable Couscous
    - Seasonal fruits
    - Mint tea
    - Moroccan pastries

    Duration: 3 to 4 hours
    Availability: Every day.
    Deparature time: 20h00

    <i class='bx bx-check'></i>No Booking Fees
    <i class='bx bx-check'></i>Book Now and Pay Later
    <i class='bx bx-check'></i>Best Price Guaranteed
    <i class='bx bx-check'></i>Excellent Service
    <i class='bx bx-check'></i>Free cancellation

    What is included?

    <i class='bx bx-check'></i>Transportation with a driver Guide
    <i class='bx bx-check'></i>Vehicle conditioning and very comfortable 4x4 or mini bus.
    <i class='bx bx-check'></i>Diner (one menu of your choice)
    <i class='bx bx-check'></i>Show and entertainment
    <i class='bx bx-check'></i>Transportation Insurance
    <i class='bx bx-check'></i>Quality service reliability
    <i class='bx bx-check'></i>All taxes.

    What is not included?

    <i class='bx bx-check'></i>Extra drinks
    <i class='bx bx-check'></i>Tips

    Meeting place:

    <i class='bx bx-check'></i>Our driver will pick you up at your hotel/Riad or any other location at the agreed time.
    <i class='bx bx-check'></i>In case of any problem: please email us or call us on the numbers displayed on contact informations.

    Child Policy:
    - Children from 0 to 4 years : free of charge
    - Children from 5 to 10 years : 50% discount
    - Children 11 years and older will be charged the full price

    Easy Booking: Accepted until 18h00 the day before (Marrakech time), If you have any difficulties to book or need another service, please use our <a href="contact.php" > Contact Form </a> 

    
    Payment Methods:

        In cash (Euros or MAD) upon arrival
 

</pre>                    
                                </div>
                                <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body3" role="tabpanel"
                                    aria-labelledby="pills-package3">
                                    <div class="row g-4">
                                         
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/visites/chezali.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/visites/chezali1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/visites/chezali2.jpg" alt="">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/visites/chezali3.jpg" alt="">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/visites/chezali4.jpg" alt="">
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
        var nbr_prive=35;
        $('#totalpriceprive').val(nbr_prive );
     
        
        
        
         $( '#truist-child' ).change(function() {
            var childtaxes=0;
            var nuberchild= $( '#truist-child' ).val();
             menu= $( '#truist-menu' ).val();
             if(menu=='menu1'){
                nbr_prive=35;
                childtaxes=17.5;

            }else if(menu=='menu2'){
                nbr_prive=42;
                childtaxes=21;

            }else if(menu=='menu3'){
                nbr_prive=44;
                childtaxes=22;

            }else if(menu=='menu4'){
                nbr_prive=48;
                childtaxes=24;

            }
            nbr= $( '#truist-adult' ).val();
            nbr_prive=nbr_prive * nbr;
            nbr_prive+=nuberchild * childtaxes;
            $('#totalpriceprive').val(nbr_prive );

        });
        $( '#truist-menu' ).change(function() {
            $( '#truist-adult' ).val('1');
            $( '#truist-child' ).val('0');
            menu= $( '#truist-menu' ).val();

            if(menu=='menu1'){
                nbr_prive=35;
            }else if(menu=='menu2'){
                nbr_prive=42;
            }else if(menu=='menu3'){
                nbr_prive=44;
            }else if(menu=='menu4'){
                nbr_prive=48;
            }

            $('#totalpriceprive').val(nbr_prive );

        });

       
       $( '#truist-adult' ).change(function() {
          menu= $( '#truist-menu' ).val();
            if(menu=='menu1'){
                nbr_prive=35;
                childtaxes=17.5;

            }else if(menu=='menu2'){
                nbr_prive=42;
                childtaxes=21;

            }else if(menu=='menu3'){
                nbr_prive=44;
                childtaxes=22;

            }else if(menu=='menu4'){
                nbr_prive=48;
                childtaxes=24;

            }
            var nuberchild= $( '#truist-child' ).val();
            nbr= $( '#truist-adult' ).val();
            nbr_prive=nbr_prive * nbr;
            nbr_prive+=nuberchild * childtaxes;

       $('#totalpriceprive').val(nbr_prive );

       });
</script>

</body>

<!-- Mirrored from demo.egenslab.com/html/tourxpro/demo/package-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2022 11:46:30 GMT -->

</html>
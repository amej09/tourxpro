<!doctype html>
<html lang="en">






<?php include('template/header.php') ?>



<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">Casablanca Mohamed V Airport <--> Marrakech
 </h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Transfer</li>
            </ul>
        </div>
    </div>
</div>

<div class="package-details-wrapper pt-76">
    <div class="container">
       <!-- <div class="row ">
            <div class="col-lg-4">
                <div class="package-sidebar">
                    <aside class="package-widget-style-2 widget-form mt-30">
                        <div class="widget-title">
                            <table class="table" style="color: white;">
                                <tr style="height: 40px ;text-align: center;">
                                    <th colspan="5">Privat</th>
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
                                    <td>50</td>
                                    <td>35</td>
                                    <td>30</td>
                                    <td>26</td>

                                </tr>
                            </table>
                        </div>

                        <div class="widget-body">
                            <form action="../../assets/php/sender.php" method="post" id="booking-form">
                                <div class="booking-form-wrapper">
                                    <div class="custom-input-group">
                                        <input type="hidden" name="type_reservation" value="prive" /> &nbsp;
                                        <input type="hidden" name="type_tour" value="visites" /> &nbsp;
                                        <input type="hidden" name="name_tour" value="Visite de Ville: Marrakech en ½ Journée " /> &nbsp;

                                        Select date and participants:
                                        <i class="bi bi-calendar3"></i>
                                        <input placeholder="Select your date" type="date" name="date" id="datepickerprive" value="" class="calendar" required>
                                    </div>
                                    <div class="row">
                                        <div class="custom-input-group">
                                            <i class="bi bi-chevron-down"></i>
                                            <select id="truist-adult" name="numbertravels">
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

                                        <div class="col-md-6">
                                            <input type="checkbox" class="radiosize" id="Guide" value="Guide (30€)" /> &nbsp;

                                            Guide(30€)
                                        </div>

                                        <div class="col-md-6">
                                            <input type="checkbox" class="radiosize" id="Lunch" value="Lunch (12€ / per)" />&nbsp;

                                            Lunch (12€ / per) <i class="bi bi-chevron-down"></i>

                                        </div>


                                    </div>
                                    <div class="custom-input-group">

                                        Total Price in €<input type="text" id="totalpriceprive" name="totalprice" class="form-control" disabled>
                                    </div>
                                    <div class="custom-input-group">
                                        <input type="text" placeholder="Your Full Name" id="name" name="name" required>
                                    </div>
                                    <div class="custom-input-group">
                                        <input type="email" placeholder="Your Email" id="email" name="email">
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
                                            <button type="submit">Book Now</button>
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
                                        <span> 09h00/14h00</span>
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
                            <img src="../assets/images/visites/marrakech.jpg" alt="">
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
                            <h2 class="pd-title">Marrakech City Highlights Half-Day Tour </h2>
                        </div>
                    </div>
                </div>
            </div>


        </div>-->
        <br>
        <div class="row ">

            <div class="col-lg-12">
                <div class="tour-package-details">

                    <div class="package-details-tabs">
                        <ul class="nav nav-pills tab-switchers gap-xxl-4 gap-3" id="pills-tab" role="tablist">
                        <li class="nav-item navmargin" role="reservation">
                                <button class="nav-link active" id="pills-package2" data-bs-toggle="pill" data-bs-target="#pill-body2" type="button" role="tab" aria-controls="pill-body2" aria-selected="true"><i class="bi bi-plus-circle"></i> Reservation</button>
                            </li>
                            <li class="nav-item navmargin" role="presentation">
                                <button class="nav-link" id="pills-package1" data-bs-toggle="pill" data-bs-target="#pill-body1" type="button" role="tab" aria-controls="pill-body1" aria-selected="true"><i class="bi bi-info-lg"></i> Information</button>
                            </li>

                            <li class="nav-item navmargin" role="presentation">
                                <button class="nav-link" id="pills-package3" data-bs-toggle="pill" data-bs-target="#pill-body3" type="button" role="tab" aria-controls="pill-body3" aria-selected="false"><i class="bi bi-images"></i>Gallary</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active package-info-tab mt-3" id="pill-body2" role="tabpanel" aria-labelledby="pills-package2">
                            
                            <table class="table" style="color: black;">
                                <tr>
                                    <th>Transfer arrival or departure</th>
                                    <th>Price</th>
                                    
                                </tr>
                                <tr>
                                    
                                    <td>1 --> 7 Pers</td>
                                    <td>150 Euro</td>
                                    

                                </tr>
                                <tr>
                                    <th>Transfer arrival & departure</th>
                                    <th>Price</th>
                                    
                                </tr>
                                <tr>
                                    
                                    <td>1 --> 7 Pers</td>
                                    <td>250 Euro</td>
                                    

                                </tr>
                            </table><br>
                            <h4>Choose <span style="color: #FF8C00;">transfer type : </span></h4>
                            <br>
                            <div class="accordion faq-accordion accordion-flush" id="faq-accordion-example">
                            <div class="accordion-item faq-accordion">
                                <h2 class="accordion-header" id="faq-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapseOne" aria-expanded="false"
                                        aria-controls="faq-collapseOne">
                                        Transfert Casablanca airport to Marrakech
                                    </button>
                                </h2>
                                <div id="faq-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="faq-headingOne" data-bs-parent="#faq-accordion-example">
                                    <div class="accordion-body">
                                        <div class="container mt-20">
                                            <form action="../assets/php/sender.php" id="booking-form">
                                                <input type="hidden"   name="name_tour" value="transfer">
                                                <input type="hidden"   name="type_tour" value="marrakech <==> Casablanca">
                                                <input type="hidden"   name="genre_tour" value="Arival">
                                                
                                                <div class="contact-form-wrap">
                                                    <h5><i class="bi bi-airplane"></i>Airoport <bold>--></bold><i class="bi bi-house"></i>Hotel/Riad</h5>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="name">Full Name</label>
                                                                <input type="text" placeholder="Your Full name" id="name" name="name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="passenger">Number Of Passenger</label>
                                                                <input type="number" placeholder="Number Of Passenger" name="passenger" id="passenger" min="0" max="5">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="arrival">Arrival date</label>
                                                                <input type="date" placeholder=" Your Arrival date" name="arrival" id="arrival">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="timearrival">Time of arrival</label>
                                                                <input type="time" placeholder="Your Time of arrival" name="timearrival" id="timearrival">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="flightnumber">Arrival flight number</label>
                                                                <input type="text" placeholder="Your Arrival flight number" name="flightnumber" id="flightnumber">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="destinition">The destination address in Marrakech</label>
                                                                <input type="text" placeholder="Your destination address in Marrakech" name="destinition" id="destinition">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="Email">Email </label>
                                                                <input type="text" placeholder="Your Email" id="Email" name="email">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="Phone">Phone Number</label>
                                                                <input type="text" placeholder="Your Phone Number" id="Phone" name="phone">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="custom-input-group">
                                                        <textarea cols="20" rows="7" placeholder="Your message" name="message"></textarea>
                                                    </div>
                                                    <div class="custom-input-group">
                                                        <div class="submite-btn">
                                                            <button type="submit">Send</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                         </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="accordion-item faq-accordion">
                                <h2 class="accordion-header" id="faq-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapseThree" aria-expanded="false"
                                        aria-controls="faq-collapseThree">
                                        Arrival and Departure marrakech - Casablanca
                                    </button>
                                </h2>
                                <div id="faq-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="faq-headingThree" data-bs-parent="#faq-accordion-example">
                                    <div class="accordion-body">
                                        <div class="container mt-20">
                                        <form action="../assets/php/sender.php" id="booking-form3">
                                                <input type="hidden"   name="name_tour" value="transfer">
                                                <input type="hidden"   name="type_tour" value="marrakech <==> Casablanca">
                                                <input type="hidden"   name="genre_tour" value="Arrival and departure">
                                                <div class="contact-form-wrap">
                                                    <h5><i class="bi bi-airplane"></i>Airoport <bold>--></bold> <i class="bi bi-house"></i>Hotel/Riad<bold>--></bold><i class="bi bi-airplane"></i>Airoport</h5>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="name">Full Name</label>
                                                                <input type="text" placeholder="Your Full name" id="name" name="name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="passenger">Number Of Passenger</label>
                                                                <input type="number" placeholder="Number Of Passenger" id="passenger" name="passenger"  min="0" max="5">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="arrival">Arrival date</label>
                                                                <input type="date" placeholder=" Your Arrival date" name="arrival" id="arrival">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">    
                                                            <div class="custom-input-group">
                                                                <label for="departure">Departure date</label>
                                                                <input type="date" placeholder=" Your Departure date" name="departure" id="departure">
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="timearrival">Time of Arrival</label>
                                                                <input type="time" placeholder="Your Time of Arrival" name="timearrival" id="timearrival">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="timedeparture">Time of Departure</label>
                                                                <input type="time" placeholder="Your Time of Departure" name="timedeparture" id="timedeparture">
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="arrivalflightnumber">Arrival flight number</label>
                                                                <input type="text" placeholder="Your Arrival flight number" name="arrivalflightnumber" id="arrivalflightnumber">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="departurflightnumber">Departure flight number</label>
                                                                <input type="text" placeholder="Your Departure flight number" name="departurflightnumber" id="departurflightnumber">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            
                                                                <div class="custom-input-group">
                                                                    <label for="destinationadresse">The destination address in Marrakech</label>
                                                                    <input type="text" placeholder="Your destination address in Casablance" name="destinationadresse" id="destinationadresse">
                                                                </div>
                                                            
                                                        </div>
                                                        <div class="col-lg-6">
                                                            
                                                                <div class="custom-input-group">
                                                                    <label for="pickupadresse">Pick Up Point Adresse</label>
                                                                    <input type="text" placeholder="Your Pick Up Point Adresse" name="pickupadresse" id="pickupadresse">
                                                                </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="Email">Email </label>
                                                                <input type="text" placeholder="Your Email" name="email" id="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="Phone">Phone Number</label>
                                                                <input type="text" placeholder="Your Phone Number" name="phone" id="Phone">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="custom-input-group">
                                                        <textarea cols="20" rows="7" placeholder="Your message" name="message"></textarea>
                                                    </div>
                                                    <div class="custom-input-group">
                                                        <div class="submite-btn">
                                                            <button type="submit">Send</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                            </div>
                            <div class="tab-pane fade  package-info-tab mt-3" id="pill-body1" role="tabpanel" aria-labelledby="pills-package1">
                                <h3 class="d-subtitle">Package Details</h3>
                                <br>
                                <pre>
Mohammed V Airport is an international airport located about 210 km north of Marrakech. With a capacity of almost fourteen million passengers and 150,000 tons of cargo a year, it is the main airport in Morocco.

Since the majority of international flights land at Mohamed V Casablanca airport, we offer private transfers to and from - Marrakech, for all travelers who want to reach Marrakech without making a stopover in Casablanca.

In order to always satisfy you, we have set up a management device which take into account our vehicles disponibility and our customer incoming calls, and which is linked up to a reservation exchange that works 24/24 and 7/7, ready to react to all our customers demands as soon as they reach us.

At your arrival in the lobby of the airport there will a driver, ready to wait you, to welcome you, and to help you to recover and carry your luggage.

All our drivers will introduce themselves with a welcome panel on which will appear your name as well as the one of your belonging organization, if you do not want that we mention your name, please let us know in order to identify you with the panel of your travel agency "Traces Berbères Voyages".

If you are looking for a professional shuttle service, this service is exactly what you need. Be sure that the beginning and end of your trip is in safe hands.

Whether you are travelling for leisure or business, you will be driven from Casablanca airport to Marrakech (or vice versa) in complete security and comfort.

Arrival Transfer from the airport: The driver will be waiting for you in the main hall of the airport, with a panel bearing your name or the name of your travel agency. If your flight is delayed, your driver will wait until your arrival.

Departure Transfer to the airport: Your professional driver will pick you up from your hotel or guest house in Marrakech at the agreed time, then he will make sure that you will be at the airport at least 2 hours before the departure flight, so you can have enough time for luggage check-in.

Airport-Hotel Transfer (Arrival & Departure): If you have a short stay in Morocco and you don’t want to waste your time in public transport, you can book a private suttle service for your transportation between Mohammed V Airport in Casablanca and your hotel or Riad in Marrakech and enjoy a luxury  and comfortable transport during your stay.

Distance: 210 Km 
Duration:   2 hours 30 minutes
Availability: Every day
 

<i class='bx bx-check'></i>  No Booking Fees
<i class='bx bx-check'></i>  Book Now and Pay Later
<i class='bx bx-check'></i>  Best Price Guaranteed
<i class='bx bx-check'></i>  Excellent Service
<i class='bx bx-check'></i>  Free cancellation
<i class='bx bx-check'></i>  Available every day
<bold>What is included?</bold>

<i class='bx bx-check'></i>  Transport with private driver
<i class='bx bx-check'></i>  Transport by air-conditioned 4x4 or minibus
<i class='bx bx-check'></i>  Transportation Insurance
<i class='bx bx-check'></i>  Professional Liability Insurance
<i class='bx bx-check'></i>  Quality service reliability
<i class='bx bx-check'></i>  All taxes

<bold>What is not included?</bold>
<i class='bx bx-check'></i>  Tips
<bold>Meeting place:</bold>

<i class='bx bx-check'></i>  Our driver will pick you up at your hotel/Riad or at the airport at the agreed time.
<i class='bx bx-check'></i>  In case of any problem: please email us or call us on the numbers displayed on contact informations.


<bold>Easy Booking:</bold> Accepted until 6pm the day before (Marrakech time), If you have any difficulties to book or need another service, please use our <a href="contact.php" > Contact Form </a> 

<bold>Payment Methods:</bold>


<i class='bx bx-check'></i>  In cash (Euros or MAD) upon arrival

                                </pre>
                            </div>
                            <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body3" role="tabpanel" aria-labelledby="pills-package3">
                                <div class="row g-4">
                                <div class="col-6">
                                        <div class="package-gallary-item">
                                            <img src="../assets/images/transfers/Mohammed_V_Airport_in_Casablanca.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="package-gallary-item">
                                            <img src="../assets/images/transfers/Passengers_in_Casablanca_Airport.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="package-gallary-item">
                                            <img src="../assets/images/transfers/The_Hall_of_Casablanca_Airport.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="package-gallary-item">
                                            <img src="../assets/images/transfers/marrakech-airoport4PNG.png" alt="">
                                        </div>
                                    </div>
                                    
                                    <div class="col-6">
                                        <div class="package-gallary-item">
                                            <img src="../assets/images/transfers/casa1.jpg" alt="">
                                        </div>
                                    </div>
                                    
                                    <div class="col-6">
                                        <div class="package-gallary-item">
                                            <img src="../assets/images/transfers/casa2.jpg" alt="">
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

<?php include('template/footer.php') ?>



<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="../assets/js/jquery-3.6.0.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/chain_fade.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/swiper-bundle.min.js"></script>
<script src="../assets/js/jquery.fancybox.min.js"></script>
<script src="../assets/js/select2.min.js"></script>
<script src="../assets/js/jquery-ui.js"></script>

<script src="../assets/js/main.js"></script>

<script>
    var nbr_prive = 60;
    $('#totalpriceprive').val(nbr_prive);

    $('#Guide').change(function() {
        /* */
        if ($(this).is(':checked')) {
            nbr_prive += 30;
        } else {
            nbr_prive -= 30;
        }
        $('#totalpriceprive').val(nbr_prive);

    });
    $('#Lunch').change(function() {
        /* */
        var lunch = 12;

        if ($(this).is(':checked')) {
            nbr = $('#truist-adult').val();
            if (nbr == '2') {
                nbr_prive += lunch * 2;
            } else if (nbr == '3') {
                nbr_prive += lunch * 3;
            } else if (nbr == '4') {
                nbr_prive += lunch * 4;
            } else if (nbr == '5') {
                nbr_prive += lunch * 5;
            } else {
                nbr_prive += lunch;

            }

        } else {
            nbr = $('#truist-adult').val();
            if (nbr == '2') {
                nbr_prive -= lunch * 2;
            } else if (nbr == '3') {
                nbr_prive -= lunch * 3;
            } else if (nbr == '4') {
                nbr_prive -= lunch * 4;
            } else if (nbr == '5') {
                nbr_prive -= lunch * 5;
            } else {
                nbr_prive -= lunch;

            }
        }
        $('#totalpriceprive').val(nbr_prive);

    });

    $('#truist-adult').change(function() {
        $("#Lunch").prop("checked", false);
        $("#Guide").prop("checked", false);
        nbr = $('#truist-adult').val();
        nbr_prive = 60;
        if (nbr == '2') {
            nbr_prive += 18;
        } else if (nbr == '3') {
            nbr_prive += 30;
        } else if (nbr == '4') {
            nbr_prive += 40;
        } else if (nbr == '5') {
            nbr_prive += 50;
        }
        $('#totalpriceprive').val(nbr_prive);

    });
</script>

</body>

<!-- Mirrored from demo.egenslab.com/html/tourxpro/demo/package-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2022 11:46:30 GMT -->

</html>
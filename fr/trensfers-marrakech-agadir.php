<!doctype html>
<html lang="en">






<?php include('template/header.php') ?>



<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">Marrakech <--> Agadir </h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                <li class="breadcrumb-item active">Transfert </li>
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
                                                <option value="notselected" selected> Nombre de voyageurs: </option>
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

                                        Prix ​​total en€<input type="text" id="totalpriceprive" name="totalprice" class="form-control" disabled>
                                    </div>
                                    <div class="custom-input-group">
                                        <input type="text" placeholder="Ton nom complet" id="name" name="name" required>
                                    </div>
                                    <div class="custom-input-group">
                                        <input type="email" placeholder="Votre Email" id="email" name="email">
                                    </div>
                                    <div class="custom-input-group">
                                        <input type="tel" placeholder="téléphone" id="phone" name="phone" required>
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
                                        <textarea cols="20" rows="7" name="message" placeholder="Votre message"></textarea>
                                    </div>
                                    <div class="custom-input-group">
                                        <div class="submite-btn">
                                            <button type="submit">Reserve maintenant</button>
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
                                        <h6>Heure de départ</h6>
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
                                        <h6> Disponibilité </h6>
                                        <span>Tous les jours</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pd-thumb">
                            <img src="../assets/images/visites/marrakech.jpg" alt="">
                        </div>
                        <div class="header-bottom">
                            <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                <h5 class="location"><i class="bi bi-geo-alt"></i> marrakech, maroc</h5>
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
                                    <th>Transfert arrivée ou départ</th>
                                    <th>Prix</th>
                                    
                                </tr>
                                <tr>
                                    
                                    <td>1 --> 7 Pers</td>
                                    <td>150 Euro</td>
                                    

                                </tr>
                               
                            </table><br>
                            <h4>Choisissez <span style="color: #FF8C00;">type de transfert : </span></h4>
                            <br>
                            <div class="accordion faq-accordion accordion-flush" id="faq-accordion-example">
                            <div class="accordion-item faq-accordion">
                                <h2 class="accordion-header" id="faq-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapseOne" aria-expanded="false"
                                        aria-controls="faq-collapseOne">
                                        Transfert de Marrakech à Agadir
                                    </button>
                                </h2>
                                <div id="faq-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="faq-headingOne" data-bs-parent="#faq-accordion-example">
                                    <div class="accordion-body">
                                        <div class="container mt-20">
                                            <form action="../assets/php/sender.php" id="booking-form">
                                                <input type="hidden"   name="name_tour" value="transfer">
                                                <input type="hidden"   name="type_tour" value="marrakech <==> agadir">
                                                <input type="hidden"   name="genre_tour" value="Arival">
                                                
                                                <div class="contact-form-wrap">
                                                    <h5><i class="bi bi-airplane"></i>Airoport <bold>--></bold><i class="bi bi-house"></i>Hotel/Riad</h5>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="name">Nom et prénom</label>
                                                                <input type="text" placeholder="Ton nom complet" id="name" name="name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="passenger">Nombre de passagers</label>
                                                                <input type="number" placeholder="Nombre de passagers" name="passenger" id="passenger" min="0" max="5">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="arrival">Date d'arrivée</label>
                                                                <input type="date" placeholder=" Your Date d'arrivée" name="arrival" id="arrival">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="timearrival">Heure d'arrivée</label>
                                                                <input type="time" placeholder="Your Heure d'arrivée" name="timearrival" id="timearrival">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="flightnumber">Numéro de vol d'arrivée</label>
                                                                <input type="text" placeholder="Your Numéro de vol d'arrivée" name="flightnumber" id="flightnumber">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="destinition">The destination address in Agadir</label>
                                                                <input type="text" placeholder="Your destination address in Agadir" name="destinition" id="destinition">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="Email">Email </label>
                                                                <input type="text" placeholder="Votre Email" id="Email" name="email">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="Phone">numéro de téléphone</label>
                                                                <input type="text" placeholder="Votre numéro de téléphone" id="Phone" name="phone">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="custom-input-group">
                                                        <textarea cols="20" rows="7" placeholder="Votre message" name="message"></textarea>
                                                    </div>
                                                    <div class="custom-input-group">
                                                        <div class="submite-btn">
                                                            <button type="submit">Envoyer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item faq-accordion">
                                <h2 class="accordion-header" id="faq-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapseTwo" aria-expanded="false"
                                        aria-controls="faq-collapseTwo">
                                        Transfert de Marrakech à Agadir
                                    </button>
                                </h2>
                                <div id="faq-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="faq-headingTwo" data-bs-parent="#faq-accordion-example">
                                    <div class="accordion-body">
                                        <div class="container mt-20">
                                        <form action="../assets/php/sender.php" id="booking-form2">
                                                <input type="hidden"   name="name_tour" value="transfer">
                                                <input type="hidden"   name="type_tour" value="agadir <==> Marrakech Airoport">
                                                <input type="hidden"   name="genre_tour" value="Departure">
                                                <div class="contact-form-wrap">
                                                    <h5> <i class="bi bi-house"></i>Hotel/Riad<bold>--></bold><i class="bi bi-airplane"></i>Airoport</h5>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="name">Nom et prénom</label>
                                                                <input type="text" placeholder="Ton nom complet" id="name" name="name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="passenger">Nombre de passagers</label>
                                                                <input type="number" placeholder="Nombre de passagers" name="passenger" id="passenger" min="0" max="5">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="departure">Date de départ</label>
                                                                <input type="date" placeholder=" Your Date de départ" name="departure" id="departure">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="timedeparture">Heure de départ</label>
                                                                <input type="time" placeholder="Your Heure de départ" name="timedeparture" id="timedeparture">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="flightnumber">Numéro du vol de départ</label>
                                                                <input type="text" placeholder="Your Numéro du vol de départ" name="flightnumber" id="flightnumber">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="pickupadresse">Adresse du point de retrait</label>
                                                                <input type="text" placeholder="Your Adresse du point de retrait" name="pickupadresse" id="pickupadresse">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="Email">Email </label>
                                                                <input type="text" placeholder="Votre Email" id="Email" name="email" >
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-input-group">
                                                                <label for="Phone">numéro de téléphone</label>
                                                                <input type="text" placeholder="Votre numéro de téléphone" id="Phone" name="phone">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="custom-input-group">
                                                        <textarea cols="20" rows="7" placeholder="Votre message" name="message"></textarea>
                                                    </div>
                                                    <div class="custom-input-group">
                                                        <div class="submite-btn">
                                                            <button type="submit">Envoyer</button>
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
                                <h3 class="d-subtitle">Détails du forfait</h3>
                                <br>
                                <pre>
                                Réservez votre Transport, pendant votre séjour dans la ville de marrakech, notre TAXI et Minibus sont à votre disposition pour visiter la ville d’Agadir,
 nous pouvons vous rejoindre dans une endoit de votre choix.

Agadir a été transformé d’une jolie ville de la taille d’une pinte avec un air calme dans un endroit plein d’hôtels de charme pour manger, boire et 
s’amuser.

 

<bold>Distance:</bold> 259Km
<bold>Duration:</bold> 3h50
<bold>Disponibilité:</bold> Tous les jours

<i class='bx bx-check'></i>  Aucuns frais de réservation
<i class='bx bx-check'></i>  Réserver maintenant et payer plus tard
<i class='bx bx-check'></i>  Meilleur prix garanti
<i class='bx bx-check'></i>  Excellent service
<i class='bx bx-check'></i>  Annulation gratuite
<i class='bx bx-check'></i>  Disponible Tous les jours
<bold>Qu’est-ce qui est inclus ? </bold>

<i class='bx bx-check'></i>  Transport avec chauffeur privé
<i class='bx bx-check'></i>  Transport par 4x4 climatisé ou minibus
<i class='bx bx-check'></i>  Assurance transport
<i class='bx bx-check'></i>  Assurance responsabilité civile professionnelle
<i class='bx bx-check'></i>  Fiabilité du service de qualité
<i class='bx bx-check'></i>  Toutes taxes

<bold>Qu’est-ce qui n’est pas inclus ? </bold>
<i class='bx bx-check'></i>  Conseils
<bold>Lieu de rencontre :</bold>

<i class='bx bx-check'></i>  Notre chauffeur viendra vous chercher à votre hôtel/riad ou à l’aéroport à l’heure convenue.
<i class='bx bx-check'></i>  En cas de problème, veuillez nous envoyer un courriel ou nous appeler aux numéros indiqués sur les coordonnées.


<bold>Easy Booking:</bold> Accepté jusqu’à 18h la veille (heure de Marrakech), Si vous avez des difficultés à réserver ou avez besoin d’un autre service, veuillez utiliser notre <a href="contact.php" > Formulaire de contact </a> 

<bold>Méthodes de paiement :</bold>


<i class='bx bx-check'></i>  En espèces (Euros ou MAD) à l’arrivée

                                </pre>
                            </div>
                            <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body3" role="tabpanel" aria-labelledby="pills-package3">
                                <div class="row g-4">
                                <div class="col-6">
                                        <div class="package-gallary-item">
                                            <img src="../assets/images/transfers/agadir1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="package-gallary-item">
                                            <img src="../assets/images/transfers/agadir2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="package-gallary-item">
                                            <img src="../assets/images/transfers/agadir3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="package-gallary-item">
                                            <img src="../assets/images/transfers/marrakech-airoport4PNG.png" alt="">
                                        </div>
                                    </div>
                                    
                                    <div class="col-6">
                                        <div class="package-gallary-item">
                                            <img src="../assets/images/transfers/agadir4.jpg" alt="">
                                        </div>
                                    </div>
                                    
                                    <div class="col-6">
                                        <div class="package-gallary-item">
                                            <img src="../assets/images/transfers/agadir5.jpg" alt="">
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

                                                        <input type="text" placeholder="Ton nom complet"  id="namecontact">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="custom-input-group">
                                                        <input type="text" placeholder="Votre Email" id="emailcontact">
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
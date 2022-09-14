<!doctype html>
<html lang="en">
    <?php include('template/header.php')?>



    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title"> 3 jours à Erg Chegaga  :  </h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                     <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
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
                                        <td>245</td>
                                        <td>270</td>
                                        <td>235</td>
                                        <td>210</td>

                                    </tr>
                                </table>
                            </div>

                            <div class="widget-body">
                                <form action="../assets/php/sender.php" method="post" id="booking-form">
                                    <div class="booking-form-wrapper">
                                        <div class="custom-input-group">
                                            <input type="hidden"      name="type_reservation"  value="prive"/> &nbsp;
                                            <input type="hidden"      name="type_tour" value="Cercuits"/> &nbsp;
                                            <input type="hidden"      name="name_tour" value="Erg Chagaga"/> &nbsp;

                                            Sélectionnez la date et les participants :
                                            <i class="bi bi-calendar3"></i>
                                            <input placeholder="Select your date" type="date" name="date"
                                                id="datepickerprive" value="" class="calendar" required>
                                        </div>
                                        <div class="row">
                                            <div class="custom-input-group">
                                                <i class="bi bi-chevron-down"></i>
                                                <select id="truist-adult" name="numbertravels">
                                                    <option  value="notselected" selected > Nombre de voyageurs: </option>
                                                    <option value="1"> 1</option>
                                                    <option value="2"> 2</option>
                                                    <option value="3"> 3</option>
                                                    <option value="4"> 4</option>
                                                    <option value="5"> 5</option>
                                                </select>
                                            </div>
                                        </div><br>
                                         
                                        <div class="custom-input-group">
                                       
                                            Prix ​​total en € Par personne<input type="text"  id="totalpriceprive"  name="totalprice" class="form-control" disabled>
                                        </div>
                                        <div class="custom-input-group">
                                            <input type="text" placeholder="Ton nom complet" id="name" name="name" required>
                                        </div>
                                        <div class="custom-input-group">
                                            <input type="email" placeholder="Votre Email" id="email" name="email" >
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
                                                <button type="submit" >Reserve maintenant</button>
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
                                            <span>390 km</span>
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
                                            <h6> Disponibilité </h6>
                                            <span>Tous les jours</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pd-thumb">
                                <img src="../assets/images/Circuit/details/chagaga1.jpg" alt="">
                            </div>
                            <div class="header-bottom">
                                <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <h5 class="location"><i class="bi bi-geo-alt"></i> Chagaga, maroc</h5>
                                    <ul class="d-flex align-items-center rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                </div>
                                <h2 class="pd-title">3-Day Tour to Erg Chegaga : </h2>
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
                                            aria-selected="false"><i class="bi bi-images"></i> Galerie  </button>
                                    </li>
                                    
                                  
                                </ul>
                            <div class="tab-content" id="pills-tabContent">

                                <div class="tab-pane fade show active package-info-tab mt-3" id="pill-body1"
                                    role="tabpanel" aria-labelledby="pills-package1">
                                    <h3 class="d-subtitle">Détails du forfait</h3>
 <pre>
 Optez pour cette excursion privée aux dunes de Chegaga à départ Marrakech, et partez à l’exploration des plus grandes dunes au Maroc avec un traitement VIP.

Traversez des villages typiques, des citadelles de terre avec des architectures impressionnantes, et profitez de la nature désertique à perte de vue dans ce merveilleux pays énigmatique !

Un chauffeur guide à disposition pendant tout le circuit vous fera découvrir les dunes de Chegaga de la meilleure façon possible.

 

Points Forts de l’excursion

• Traversez le Haut Atlas et le col de Tichka et profitez des vues panoramiques le long du chemin
• Visitez la magnifique Kasbah Ait Benhaddou
• Découvrez la ville de Ouarzazate, Kasbah Taourirte et les studios de Cinéma
• Traversez le charmant village d'Agdez et la vallée de Draa avec ses beaux palmiers et oasis
• Vivez des moments inoubliables sous un mode de vie des nomades en plein désert
• Participez à une balade à dromadaire aux dunes de Zagora et admirez le magnifique coucher du soleil
• Rejoignez une soirée traditionnelle animée autour du feu de camp
• Profitez du temps libre pour découvrir les villages berbères authentiques

 

Programme de l'excursion


Jour 1 : Marrakech - Tichka - Ait Ben Haddou - Agdez - Zagora

Après le ramassage depuis votre hôtel ou Riad à Marrakech, nous allons partir tôt le matin en circuit 4x4 vers le désert. Nous allons traversez col de Tizi n Tichka, puis nous allons visiter la Kasbah de Telouet avant de descendre vers la magnifique vallée d’Ounila où nous allons faire une pause pour visiter la Kasbah de Ait Ben Haddou. Après le col de Tizi n'Tinifift nous allons traverser la vallée de Draa en passant par des magnifiques oasis, palmiers et ksours. Nuit et dîner à Zagora.


Jour 2: Zagora - M'hamid - Erg chegaga

Après une courte visite de la fameuse bibliothèque coranique de Tamegroute et des ateliers de poterie, nous allons continuer notre excursion vers M'hamid el Ghizlane en traversant des magnifiques paysages sableux et une végétation désertique. En arrivant à Chegaga, nous allons rejoindre directement un magnifique camp bivouac installé en plein cœur des dunes. Vous aurez la possibilité de participez à une balade en chameaux dans les dunes ou de faire une petite randonnée à pied pour admirer les paysages extraordinaires des dunes et du désert… Dîner et nuit en Bivouac


Jour 3: Erg chegaga- Foum Zguid - Marrakech

Après le petit déjeuner nous allons partir vers les contreforts de l'Anti-Atlas en traversons l’immense plateau LAC IRIKI, Foum Zguid, Taznakht et Wawzguit ou la capitale des tapis berbères et du safran. Nous allons également passer par Amerzegane pour atteindre le col de Tizi N’Tichka en retour vers Marrakech.


Durée:  3 jours
Distance: 390 km x 2
Disponibilité: Tous les jours
Heur de départ: 07h00 am

<i class='bx bx-check'></i>Pas De Frais De Réservation
<i class='bx bx-check'></i>Réserver Maintenant et Payez Plus Tard
<i class='bx bx-check'></i>Garantie Du Meilleur Tarif
<i class='bx bx-check'></i>Excellent Service
 
Ce qui est inclus :

<i class='bx bx-check'></i>Transport avec chauffeur guide
<i class='bx bx-check'></i>4x4 climatisée et confortable
<i class='bx bx-check'></i>Hébergement en demi-pension :
<i class='bx bx-check'></i>1ère Nuit: Riad Lamane ou Similaire
<i class='bx bx-check'></i>2ème Nuit: Bivouac
<i class='bx bx-check'></i>Promenade à dos de chameaux dans les dunes
<i class='bx bx-check'></i>Assurance de transport
<i class='bx bx-check'></i>Service de qualité et fiabilité
<i class='bx bx-check'></i>Toutes les taxes
Ce qui n’est pas inclus :

<i class='bx bx-check'></i>Déjeuner
<i class='bx bx-check'></i>Guide Local
<i class='bx bx-check'></i>Pourboires
Point de rencontre :                                 

Notre chauffeur viendra vous chercher dans votre hôtel / Riad à Marrakech à l’heure convenue au moment de la réservation
En cas de problème : veuillez nous envoyer un email ou nous appeler sur les numéros affichés sur la bannière des contacts.
Réservations faciles : Acceptées jusqu'à 18h00 de la veille (heure de Marrakech), Si vous rencontrez des difficultés pour réserver ou avez besoin d'un autre service,<a href='contact.php'> contactez-nous </a>.

 
Modes de Paiement :

 <i class='bx bx-check'></i>En espèce (Euros ou MAD) à votre arrivée
  </pre>                    
                                </div>
                                <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body3" role="tabpanel"
                                    aria-labelledby="pills-package3">
                                    <div class="row g-4">
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Circuit/details/chagaga1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Circuit/details/chagaga2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/Circuit/details/chagaga3.jpg" alt="">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Circuit/details//chagaga4.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/Circuit/details/chagaga5.jpg" alt="">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/Circuit/details/chagaga6.jpg" alt="">
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
        var nbr_prive=605;
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

$( '#truist-adultgroup' ).change(function() {
   
  nbr= $( '#truist-adultgroup' ).val();
    
  var new_nbr_group =   nbr_group * nbr ;
 $('#totalpricegroup').val(new_nbr_group );

 });
</script>
</body>

<!-- Mirrored from demo.egenslab.com/html/tourxpro/demo/package-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2022 11:46:30 GMT -->

</html>
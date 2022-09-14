<!doctype html>
<html lang="en">
    <?php include('template/header.php')?>



    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">Circuit 4 Jours Zagora & Merzouga :  </h2>
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
                                        <td>380</td>
                                        <td>300</td>
                                        <td>260</td>
                                        <td>230</td>

                                    </tr>
                                </table>
                            </div>

                            <div class="widget-body">
                                <form action="../assets/php/sender.php" method="post" id="booking-form">
                                    <div class="booking-form-wrapper">
                                        <div class="custom-input-group">
                                            <input type="hidden"      name="type_reservation"  value="prive"/> &nbsp;
                                            <input type="hidden"      name="type_tour" value="Cercuits"/> &nbsp;
                                            <input type="hidden"      name="name_tour" value="Zagoura And Marzouga"/> &nbsp;

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
                                <img src="../assets/images/Circuit/details/marzouga5.jpg" alt="">
                            </div>
                            <div class="header-bottom">
                                <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <h5 class="location"><i class="bi bi-geo-alt"></i> Marzouga, Zagoura, maroc</h5>
                                    <ul class="d-flex align-items-center rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                </div>
                                <h2 class="pd-title">Circuit 4 Jours Zagora & Merzouga : </h2>
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
 Si vous souhaitez découvrir la beauté et le charme du grand Sahara marocain, ce circuit privatif de 4 jours dans le désert est fait spécialement pour vous.

Partez à la découverte des paysages désertiques stupéfiants, des oasis de palmiers, des kasbahs fortifiés et des villages berbères authentiques lors d’un circuit exceptionnel dans un confort absolu avec un chauffeur-guide professionnel.

 

Points forts du circuit

• Appréciez les vues panoramiques du Haut Atlas
• Traversez le fameux col de Tizi N’Tichka
• Visitez de la célèbre Kasbah d'Ait Benhaddou
• Visitez de la Kasbah Taourirte et un studio de cinéma à Ouarzazate
• Traversez les belles oasis de palmiers de la vallée du Draa
• Découvrez la simplicité de la vie nomade dans le désert
• Participez à une randonnée chamelière inoubliable dans les dunes de Zagora et Merzouga
• Admirez le magnifique coucher et lever du soleil dans les dunes du désert
• Profitez d'une soirée au rythme de la musique berbère autour du feu de camp

 

Programme du Circuit

 

 Jour 1: Marrakech - Ouarzazate - Zagora

Un chauffeur privé viendra vous chercher à votre hôtel ou Riad à Marrakech tôt le matin pour commencer votre circuit dans le désert à travers les montagnes du Haut Atlas. Vous traverserez le célèbre col de Tizi N'Tichka et une succession de villages berbères authentiques nichés sur les contreforts de l’Atlas avant d'arriver à la Kasbah historique d'Ait Ben Haddou, où vous aurez la chance de visiter et explorer ce magnifique patrimoine culturelle du Maroc avec un guide local.

Après une petite pause déjeuner à Ouarzazate, nous continuerons en direction de la vallée de Draa en passant par Agdz. Un point de départ incontournable pour plonger au cœur du vrai Maroc authentique et découvrir les admirables oasis du désert et ses Kasbahs fortifiées.

Dès votre arrivée à Zagora, vous allez participer à une promenade à dos de chameau dans les dunes de sable avant de passer votre première nuit dans une maison d'hôtes traditionnelle.

 Jour 2 : Zagora - Merzouga

Le chauffeur viendra vous chercher tôt après le petit-déjeuner pour poursuivre votre excursion à travers les montagnes de l'Anti-Atlas en direction d'Alnif.

Après le déjeuner, continuation de notre circuit désert vers Merzouga, où nous commencerons par une randonnée chamelière pour explorer la magie des dunes de l'Erg Chebbi ainsi que le coucher de soleil époustouflant dans le grand désert. Retour au camp pour se reposer et dîner dans une atmosphère conviviale presque unique avec une soirée berbère animée autour du feu de camp.

Vous allez passer la deuxième nuit sous une tente nomade entre les dunes de Merzouga.

Jour 3 : Merzouga - Tinghir - Boumalne Dades

Un éveil matinal pour profiter de l'incroyable lever de soleil dans les dunes de Merzouga avec une vue dégagée sur le grand désert de sable.

Après le petit-déjeuner, nous retournerons à Alnif, d'où nous allons emprunter la route vers le village de Tinghir, une petite visite guidée des champs agricoles et des anciens systèmes d'irrigation utilisés par les locaux ainsi qu'un atelier d’artisanat pour admirer l'art de fabrication des tapis berbères.

20 km après Tinghir, vous serez émerveillé par les Gorges spectaculaires et les Canyons de Todra, c’est l'un des plus beaux sites naturels dans cette région. Nous allons profiter d’une pause déjeuner avant de continuer notre excursion désertique en direction de Boulmane Dades. Dîner et nuit dans une maison d'hôtes berbère traditionnelle.

 Jour 4 : Boumalne Dades - Ouarzazate - Marrakech

Après le petit déjeuner dans votre maison d'hôtes, continuation de la découverte des fabuleux paysages désertiques en passant par Ifri, Kelaat Mgouna et Skoura.

Une pause déjeuner à Ouarzazate puis départ vers Marrakech où se termine ce grand circuit désert de 4 jours avec un dépôt à votre hôtel ou Riad à Marrakech.

 

Durée:  4 jours
Distance: 480 km x 2
Disponibilité: Tous les jours
Heur de départ: 07h00 am

<i class='bx bx-check'></i>Pas De Frais De Réservation
<i class='bx bx-check'></i>Réserver Maintenant et Payez Plus Tard
<i class='bx bx-check'></i>Garantie Du Meilleur Tarif
<i class='bx bx-check'></i>Excellent Service
 Ce qui est inclus :

<i class='bx bx-check'></i>Transport avec chauffeur-guide professionnel
<i class='bx bx-check'></i>4x4 climatisée et confortable
<i class='bx bx-check'></i>Hébergement en demi-pension :
<i class='bx bx-check'></i>1ère Nuit : Riad Lamane ou Similaire
<i class='bx bx-check'></i>2ème Nuit : Tente nomade en Bivouac
<i class='bx bx-check'></i>3ème Nuit : La Gazelle du Dades ou Similaire
<i class='bx bx-check'></i>Promenade chamelière dans les dunes de Zagora & Merzouga
<i class='bx bx-check'></i>Assurance de transport
<i class='bx bx-check'></i>Toutes les taxes
Ce qui n’est pas inclus :

<i class='bx bx-check'></i>Déjeuners
<i class='bx bx-check'></i>Visites Guidées
<i class='bx bx-check'></i>Pourboires
Point de rencontre :                                 

Notre chauffeur viendra vous chercher dans votre hôtel / Riad à Marrakech à l’heure convenue au moment de la réservation
En cas de problème : veuillez nous envoyer un email ou nous appeler sur les numéros affichés sur la bannière des contacts.
<i class='bx bx-check'></i>Réservations faciles : Acceptées jusqu'à 18h00 de la veille (heure de Marrakech), Si vous rencontrez des difficultés pour réserver ou avez besoin d'un autre service,<a href='contact.php'> contactez-nous </a>.

 
Modes de Paiement :

<i class='bx bx-check'></i>En espèce (Euros ou MAD) à votre arrivée
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
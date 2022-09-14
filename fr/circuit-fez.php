<!doctype html>
<html lang="en">
    <?php include('template/header.php')?>



    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">Circuit 3 jours Marrakech Merzouga Fès :  </h2>
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
                                <img src="../assets/images/Circuit/details/fez1.jpg" alt="">
                            </div>
                            <div class="header-bottom">
                                <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <h5 class="location"><i class="bi bi-geo-alt"></i> Fez, maroc</h5>
                                    <ul class="d-flex align-items-center rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                </div>
                                <h2 class="pd-title">Circuit 3 jours Marrakech Merzouga Fès  : </h2>
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
 Un circuit désert privé à départ de Marrakech vers les splendides dunes de Merzouga.

Partez à la découverte des fascinants paysages désertiques et traversez d'impressionnants villages berbères avant de passer une expérience inoubliable au cœur du grand Sahara.

Après ce magnifique tour du désert, votre chauffeur privé vous déposera directement à Fès pour continuer votre découverte du vrai Maroc authentique.

 

1er jour : Marrakech – Ait Ben Haddou – Ouarzazate – Boumalne Dadès (300 Km)

Après une prise en charge matinale depuis votre hôtel ou Riad à Marrakech, vous commencerez votre excursion en traversant le fameux col de Tizi n'Tichka avant d'arriver à la Kasbah Ait Ben Haddou où vous allez accompagner un guide local pour une petite visite avec une pause déjeuner.

Continuation en direction de Ouarzazate et la vallée du Dadès avant d’atteindre Boulmane où vous allez passer votre première nuit dans une auberge traditionnelle.

 

2eme jour : Boumalne dadès – Tinghir - Gorges de Todra – Arfoud – Dunes de Merzouga (250 Km)

Petit déjeuner matinal et départ vers Merzouga en traversant des paysages désertiques époustouflants deux arrêts en route, au village de Tinghir puis aux gorges de Todra. Continuation vers Tinjedad, Touroug et Erfoud avant d'arriver à Merzouga.

Dès votre arrivée, vous allez participer à une promenade à dos de dromadaire dans les splendides dunes d’Erg Chebbi. Vous serez invités à prendre le dîner sous une magnifique tente Caidale puis vous pourrez joindre une petite soirée berbère autour du feu de camp. 2ème Nuit en Bivouac dans les dunes de Merzouga.

3eme jour : Merzouga – Fès (467 Km)

Réveil matinal pour une petite randonnée à pied dans les dunes d’Erg Chebbi au lever du soleil, puis départ pour Fès par la route d'Errachidia en traversant la vallée du Ziz. Vous ferez une pause déjeuner à Midelt puis continuation vers Imouzzar et Ifrane avant d'arriver à Fès où se termine votre circuit du désert avec un dépôt à votre hôtel ou Riad. 

 

Durée:  3 Jours
Distance: 1017 Km
Disponibilité: Tous les jours
Heur de départ: 07h00 am

<i class='bx bx-check'></i>Pas De Frais De Réservation
<i class='bx bx-check'></i>Réserver Maintenant et Payez Plus Tard
<i class='bx bx-check'></i>Garantie Du Meilleur Tarif
<i class='bx bx-check'></i>Excellent Service
 
Ce qui est inclus:

<i class='bx bx-check'></i>Transport avec chauffeur privé
<i class='bx bx-check'></i>Véhicule confortable et climatisé
<i class='bx bx-check'></i>Hébergement en demi-pension: 2 nuits                                                               
<i class='bx bx-check'></i>1ere nuit   : Nuit à l'auberge                                  
<i class='bx bx-check'></i>2eme nuit : Nuit en Bivouac
<i class='bx bx-check'></i>Promenade à dos de chameau dans les dunes
<i class='bx bx-check'></i>Assurance de transport & responsabilité civile
 <i class='bx bx-check'></i>Toutes les taxes

Ce qui n’est pas inclus:

<i class='bx bx-check'></i>Déjeuner
<i class='bx bx-check'></i>Guide Local
<i class='bx bx-check'></i>Pourboires
Point de rencontre:                                 

Notre chauffeur viendra vous chercher dans votre hôtel / Riad à Marrakech à l’heure convenue au moment de la réservation
En cas de problème : veuillez nous envoyer un email ou nous appeler sur les numéros affichés sur la bannière des contacts.
<i class='bx bx-check'></i>Réservations faciles : Acceptées jusqu'à 18h00 de la veille (heure de Marrakech), Si vous rencontrez des difficultés pour réserver ou avez besoin d'un autre service,<a href='contact.php'> contactez-nous </a>.

 
Modes de Paiement:

 <i class='bx bx-check'></i>En espèce (Euros ou MAD) à votre arrivée
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
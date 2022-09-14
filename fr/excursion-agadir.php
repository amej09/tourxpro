<!doctype html>
<html lang="en">


    <?php include('template/header.php')?>



    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">Excursion vers Agadir   </h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
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
                                        <th  colspan="5" >Privée</th>
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
                                        <td>85</td>
                                        <td>56</td>
                                        <td>42</td>
                                        <td>34</td>

                                    </tr>
                                </table>
                            </div>

                            <div class="widget-body">
                                <form action="../assets/php/sender.php" method="post" id="booking-form">
                                    <div class="booking-form-wrapper">
                                        <div class="custom-input-group">
                                            <input type="hidden"      name="type_reservation"  value="prive"/> &nbsp;
                                            <input type="hidden"      name="type_tour" value="Excursion"/> &nbsp;
                                            <input type="hidden"      name="name_tour" value="agadir"/> &nbsp;

                                            Sélectionnez la date et les participants 
                                            <i class="bi bi-calendar3"></i>
                                            <input placeholder="Select your date" type="date" name="date"
                                                id="datepickerprive" value="" class="calendar" required>
                                        </div>
                                        <div class="row">
                                            <div class="custom-input-group">
                                                <i class="bi bi-chevron-down"></i>
                                                <select id="truist-adult" name="numbertravels">
                                                    <option  value="notselected" selected > Nombre de voyageurs: : </option>
                                                    <option value="1"> 1</option>
                                                    <option value="2"> 2</option>
                                                    <option value="3"> 3</option>
                                                    <option value="4"> 4</option>
                                                    <option value="5"> 5</option>
                                                </select>
                                            </div>
                                        </div><br>
                                         
                                        <div class="custom-input-group">
                                       
                                           Prix ​​total en € par personne<input type="text"  id="totalpriceprive"  name="totalprice" class="form-control" disabled>
                                        </div>
                                        <div class="custom-input-group">
                                            <input type="text" placeholder="Ton nom complet" id="name" name="name" required>
                                        </div>
                                        <div class="custom-input-group">
                                            <input type="email" placeholder="votre Email" id="email" name="email" >
                                        </div>
                                        <div class="custom-input-group">
                                            <input type="tel" placeholder="téléphone" id="phone" name="phone" required>
                                        </div>
                                        <div class="custom-input-group">
                                            <textarea cols="20" rows="7" name="message" placeholder="votre message"></textarea>
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
                                            <span>12 hours</span>
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
                                            <span>250  Km x 2</span>
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
                                <img src="../assets/images/excursion/agadir1.jpg" alt="">
                            </div>
                            <div class="header-bottom">
                                <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <h5 class="location"><i class="bi bi-geo-alt"></i> agadir, maroc</h5>
                                    <ul class="d-flex align-items-center rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                </div>
                                <h2 class="pd-title">Excursion vers Agadir </h2>
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
                                    <li class="nav-item navmargin" role="presentation">
                                        <button class="nav-link" id="pills-package4" data-bs-toggle="pill"
                                            data-bs-target="#pill-body4" type="button" role="tab" aria-controls="pill-body4"
                                            aria-selected="false"><i class="bi bi-geo-alt"></i> Itinéraire</button>
                                    </li>
                                  
                                </ul>
                            <div class="tab-content" id="pills-tabContent">

                                <div class="tab-pane fade show active package-info-tab mt-3" id="pill-body1"
                                    role="tabpanel" aria-labelledby="pills-package1">
                                    <h3 class="d-subtitle">Détails du forfait</h3>
 <pre>


 Départ de Marrakech vers la capitale de la région de Souss à 7h00. Agadir est un mot Berbères  de provenance  phénicienne désigne  « Grenier collectif ou village fortifié ». Aujourd’hui encore, ce mot est existant dans la région du Souss et désigne une sorte de magasin  pour toutes les fortunes de la tribu.

Quittez la vivacité de Marrakech et passer la journée dans l'une des stations balnéaires les plus célèbre du Maroc. Nous commencerons les visites par l’admiration de la vue pittoresque  sur la baie depuis le quartier médiéval de Kasbah Oufellah. C'est une citadelle, à une hauteur de 236 mètres offre une vue splendide  sur la baie d'Agadir.

Après la visite du port de pêche une promenade sur la corniche de la plage d'Agadir qui s'étend sur environ 10 km, Ensuite  nous visiterons la vallée des oiseaux et une coopérative d’huile d’argan où vous pouvez prendre plus d’information sur les produits alimentaire et le cosmétique à base d’huile d’argan.

Après le déjeuner nous découvrirons l’histoire d’Agadir avec une visite au Musée des Arts et Traditions Populaires, avec ses expositions d'anciens bijoux berbères, de poterie, de tapis, de boiseries et d'autres objets.

La dernière étape une brève visite du souks El Had . A la fin d'une magnifique tournée.

Durée: 12 heures
Distance: 250 km x 2
Disponibilité: Tous les jours
Heure de départ: 7h00

    <i class='bx bx-check'></i>Pas De Frais De Réservation
    <i class='bx bx-check'></i>Réserver Maintenant et Payez Plus Tard
    <i class='bx bx-check'></i>Garantie Du Meilleur Tarif
    <i class='bx bx-check'></i>Excellent Service

Ce qui est inclus:

    <i class='bx bx-check'></i>Transport avec chauffeur guide
    <i class='bx bx-check'></i>Service de qualité et  fiabilité
    <i class='bx bx-check'></i>Assurance de transport
    <i class='bx bx-check'></i>Assurance responsabilité civile.
    <i class='bx bx-check'></i>Toutes les taxes

Ce qui n’est pas inclus:

    <i class='bx bx-check'></i>Déjeuner
    <i class='bx bx-check'></i>Pourboires

Point de rencontre:                                 

    <i class='bx bx-check'></i>Notre chauffeur viendra vous chercher dans votre hôtel / Riad à Marrakech à l’heure convenue au moment de la réservation
    <i class='bx bx-check'></i>En cas de problème : veuillez nous envoyer un email ou nous appeler sur les numéros affichés sur la bannière des contacts.

Réservations faciles : Acceptées jusqu'à 18h00 de la veille (heure de Marrakech), Si vous rencontrez des difficultés pour réserver ou avez besoin d'un autre service,<a href='contact.php'> contactez-nous </a>.

 
Modes de Paiement:

    <i class='bx bx-check'></i>En ligne (nous vous ferons parvenir un lien sécurisé sur demande)
    <i class='bx bx-check'></i> En espèce (Euros ou MAD) à votre arrivée
  </pre>                    
                                </div>
                                <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body3" role="tabpanel"
                                    aria-labelledby="pills-package3">
                                    <div class="row g-4">
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/excursion/agadir2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/excursion/agadir7.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/excursion/agadir3.jpg" alt="">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/excursion/agadir4.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/excursion/agadir5.jpg" alt="">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/excursion/agadir9.jpg" alt="">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/excursion/agadir8.jpg" alt="">
                                                </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <div class="tab-pane fade package-location-tab mt-3" id="pill-body4" role="tabpanel"
                                    aria-labelledby="pills-package4">
                                    <div class="mapouter">
                                             <div class="package-gallary-item  ">
                                            <img  class="imageininerary" src="../assets/images/excursion/agadir11.jpg" alt="">
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
        var nbr_prive=170;
        $('#totalpriceprive').val(nbr_prive );

       $( '#truist-adult' ).change(function() {
      
        nbr= $( '#truist-adult' ).val();
        nbr_prive=parseInt(170 / nbr);
       
        $('#totalpriceprive').val(nbr_prive );

       });
</script>

</body>

<!-- Mirrored from demo.egenslab.com/html/tourxpro/demo/package-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2022 11:46:30 GMT -->

</html>
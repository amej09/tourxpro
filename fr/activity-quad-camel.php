<!doctype html>
<html lang="en">


    <?php include('template/header.php')?>



    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">Quad et Chameau au Coucher du Soleil:  </h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                     <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                    <li class="breadcrumb-item active">Activite</li>
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
                                <table class="table" style="color: white; border: solid 0px ;border-color: #162b32; ">
                                     <tr  style="height: 40px ;text-align: center;" class="privebackground">
                                        <th  colspan="5" >Private</th>
                                    </tr>
                                    <tr  style="height: 40px ;text-align: center;">
                                        <th   >75 €</th>
                                    </tr>
                                    <tr  style="height: 40px;text-align: center; ">
                                        <th > Par personne </th>                                        
                                    </tr>
                                   
                                </table>
                            </div>

                            <div class="widget-body">
                                <form action="../assets/php/sender.php" method="post" id="booking-form">
                                    <div class="booking-form-wrapper">
                                        <div class="custom-input-group">
                                            <input type="hidden"      name="type_reservation"  value="prive"/> &nbsp;
                                            <input type="hidden"      name="type_tour" value="Activity"/> &nbsp;
                                            <input type="hidden"      name="name_tour" value="Quad And Camel"/> &nbsp;

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
                                            <span>4 Hours</span>
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
                                            <span> 15h30</span>
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
                                <img src="../assets/images/Activite/Quad+Chameau.jpg" alt="">
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
                                <h2 class="pd-title">Quad et Chameau au Coucher du Soleil  </h2>
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
 <b>Demi-journée de Quad et promenade en Chameau au coucher du soleil à Marrakech</b>
 
 Profitez de deux activités amusantes lors d’une visite de quatre heures à Marrakech. Arrêtez-vous pour un thé  la menthe dans une maison traditionnelle et découvrez les villages Berbères traditionnels de la Palmeraie en quad.
 
 Après une prise en charge depuis votre hôtel ou votre riad à Marrakech (ou le parking le plus proche accessible en voiture), explorez le désert en quad. Tout l’équipement nécessaire (lunettes, casque et imperméable) est fourni. Un guide professionnel et attentif vous accompagne tout le long de la visite et adapte le rythme en fonction du niveau de chacun.
 
 Dirigez-vous vers par la suite vers votre chamelier pour une balade en chameau au coucher du soleil. Émerveillez-vous devant le terrain rocailleux et les belles palmeraies à dos de chameau.
 
 Tour en Quad: 2 heures
 Promenade en Chameaux: 1 heure
 Disponibilité: Tous les jours
 Heure de départ: 15h30
 
 NB: Cette excursion est accessible aux personnes âgées de plus de 14 ans
 Les enfants moins de 14 ans peuvent joindre cette expérience en tant que passagers
 
 Ce qui est inclus:
 
 <i class='bx bx-check'></i>Transfert aller / retour de votre hôtel/riad
 <i class='bx bx-check'></i>Véhicule climatisé et confortable, 4x4 ou minibus.
 <i class='bx bx-check'></i>1 Heure de Balade en Chameau
 <i class='bx bx-check'></i>2 Heures de Quad Biking
 <i class='bx bx-check'></i>Équipements nécessaire (gants, casques, lunettes)
 <i class='bx bx-check'></i>Encadrement et assistance par des guides professionnels
 <i class='bx bx-check'></i> Pause avec Thé traditionnel marocain
 <i class='bx bx-check'></i> Assurance responsabilité civile.

 Ce qui n’est pas inclus :
 
 <i class='bx bx-check'></i>Déjeuner
 <i class='bx bx-check'></i>Pourboires
 <i class='bx bx-check'></i>Point de rencontre:                                 
 
 Notre chauffeur viendra vous chercher dans votre hôtel / Riad ou dans un lieu convenu avec vous à l’heure que vous souhaitée et en concordance avec le temps du trajet.
 En cas de problème : veuillez nous envoyer un email ou nous appeler sur les numéros affichés sur la bannière des contacts.
 <i class='bx bx-check'></i>Réservations faciles : Acceptées jusqu'à 18h00 de la veille (heure de Marrakech), Si vous rencontrez des difficultés pour réserver ou avez besoin d'un autre service, <a href='contact.php'> contactez-nous </a>.
 
  
 Modes de Paiement:
 
 <i class='bx bx-check'></i>En espèce (Euros ou MAD) à votre arrivée
  
 NB: Minimum 2 Participants
 </pre>                    
                                </div>
                                <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body3" role="tabpanel"
                                    aria-labelledby="pills-package3">
                                    <div class="row g-4">
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Activite/Quad-Camel1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Activite/Quad-Camel2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/Activite/Quad-Camel3.jpg" alt="">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Activite/Quad-Camel4.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/Activite/Quad-Camel5.jpg" alt="">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/Activite/Quad-Camel6.jpg" alt="">
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
        var nbr_prive=75
        $('#totalpriceprive').val(nbr_prive );

       $( '#truist-adult' ).change(function() {
          
        nbr= $( '#truist-adult' ).val();
       var new_nbr_prive = nbr_prive * nbr ;
       $('#totalpriceprive').val(new_nbr_prive );

       });
</script>

</body>

<!-- Mirrored from demo.egenslab.com/html/tourxpro/demo/package-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2022 11:46:30 GMT -->

</html>
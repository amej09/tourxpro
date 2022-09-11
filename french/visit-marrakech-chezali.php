<!doctype html>
<html lang="en">

    <?php include('template/header.php')?>

    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">Restaurant chez Ali Marrakech - Diner & spectacle Fantasia</h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
                    <li class="breadcrumb-item active">visites</li>
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

                                            Sélectionnez la date et les participants 
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
                                                    
                                                    
                                                    </select>
                                                 </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="custom-input-group">
                                                <i class="bi bi-chevron-down"></i>
                                                <select id="truist-adult" name="numbertravels">
                                                    <option value="1" selected > Nombre de voyageurs: : </option>
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
                                                    <option  value="0" selected >Nombre d'enfants:(Age 4-11) </option>
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
                                       
                                            Prix ​​total en € <input type="text"  id="totalpriceprive"  name="totalprice" class="form-control" disabled>
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
                                            <h6>Heure de départ</h6>
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
                                            <h6> Disponibilité </h6>
                                            <span>Tous les jours</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pd-thumb">
                                <img src="../assets/images/visites/chezali5.jpg" alt="">
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
                                <h2 class="pd-title">Restaurant chez Ali Marrakech - Diner & spectacle Fantasia </h2>
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
                                    <h3 class="d-subtitle">Détails du forfait</h3>
<pre>



Envoûtés par les chants et danses des groupes folkloriques, on mange, on entend et on voit ce qu’on ne trouve nulle part ailleurs. Spectacle grandiose, dans une arène grande comme un terrain de football, défilent tour à tour, des cavaliers acrobates, de la fantasia, des chants et danses traditionnelles, le tout au son d’une musique qui vous fait rêver ...

Magique, grandiose, féerique, le spectacle de Chez Ali est tout cela à la fois. Au fil des années, sa renommée a parcouru le monde et il constitue aujourd’hui le point d’orgue d’un séjour réussi à Marrakech. Danseuses, musiciens, acrobates, cavaliers, magiciens, y vivent leurs passions avec enthousiasme.  

Certains soirs, un sultan et sa favorite survolent la foule… sur un tapis volant ! Digne des Mille et Une Nuit…  

Nos Menus:



Menu N° 1 – Hors boissons:                                

    <i class='bx bx-check'></i>Harira Marocaine
    <i class='bx bx-check'></i>Tajine de viande aux pruneaux  OU Tagine de poulet au citron. 
    <i class='bx bx-check'></i>Couscous aux sept  légumes 
    <i class='bx bx-check'></i>Fruits de saison 
    <i class='bx bx-check'></i>Thé à la menthe 
    <i class='bx bx-check'></i>Pâtisseries Marocaines  

 
	

Menu N° 2 – Hors boissons

    <i class='bx bx-check'></i>Harira Marocaine 
    <i class='bx bx-check'></i>1/2 Méchoui
    <i class='bx bx-check'></i>Couscous aux sept légumes 
    <i class='bx bx-check'></i>Fruits de saison 
    <i class='bx bx-check'></i>Thé à la menthe 
    <i class='bx bx-check'></i>Pâtisseries Marocaines

 

Durée: 3 à 4 heurs
Disponibilité: Tous les jours
Heur de départ: 19h00

    <i class='bx bx-check'></i>Pas De Frais De Réservation
    <i class='bx bx-check'></i>Réserver Maintenant et Payez Plus Tard
    <i class='bx bx-check'></i>Garantie Du Meilleur Tarif
    <i class='bx bx-check'></i>Excellent Service
 
Ce qui est inclus:

    <i class='bx bx-check'></i>Transport avec chauffeur guide
    <i class='bx bx-check'></i>Véhicule climatisé et très confort 4x4 ou bien mini bus.
    <i class='bx bx-check'></i>Dîner (menu de votre choix)
    <i class='bx bx-check'></i>Spectacle & Animation
    <i class='bx bx-check'></i>Assurance de transport
    <i class='bx bx-check'></i>Service de qualité et  fiabilité.
    <i class='bx bx-check'></i>Toutes les taxes

Ce qui n’est pas inclus:

    <i class='bx bx-check'></i>Boissons supplémentaires
    <i class='bx bx-check'></i>Pourboires

Point de rencontre:                                 

    <i class='bx bx-check'></i>Notre chauffeur viendra vous chercher dans votre hôtel / Riad à Marrakech à l’heure convenue au moment de la réservation
    <i class='bx bx-check'></i>En cas de problème : veuillez nous envoyer un email ou nous appeler sur les numéros affichés sur la bannière des contacts.

Politique Enfant :
Enfant de 0 à 04 ans : gratuit
Enfant de 05 à 10 ans : 50% réduction
Enfant de 11 et plus : plein tarif

Réservations faciles : Acceptées jusqu'à 18h00 de la veille (heure de Marrakech), Si vous rencontrez des difficultés pour réserver ou avez besoin d'un autre service, contactez-nous.

 
Modes de Paiement:

    <i class='bx bx-check'></i>En espèce (Euros ou MAD) à votre arrivée
 

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

                                                        <input type="text" placeholder="Ton nom complet"  id="namecontact">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="custom-input-group">
                                                        <input type="text" placeholder="votre Email" id="emailcontact">
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
                nbr_prive=44;
                childtaxes=22;

            }else if(menu=='menu2'){
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
                nbr_prive=44;
            }else if(menu=='menu2'){
                nbr_prive=48;
            }

            $('#totalpriceprive').val(nbr_prive );

        });

       
       $( '#truist-adult' ).change(function() {
          menu= $( '#truist-menu' ).val();
             if(menu=='menu1'){
                nbr_prive=44;
                childtaxes=22;

            }else if(menu=='menu2'){
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

 
</html>
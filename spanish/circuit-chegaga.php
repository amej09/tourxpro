<!doctype html>
<html lang="en">
    <?php include('template/header.php')?>



    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">Tour de 3 días a Erg Chegaga : </h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="index.php">Acogida</a></li>
                    <li class="breadcrumb-item active">Cercuitos</li>
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
                                        <th  colspan="5" >privado</th>
                                    </tr>
                                    <tr>
                                        <th>nbr max*</th>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <th>precio* €</th>
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

                                            Seleccione la fecha y los participantes: 
                                            <i class="bi bi-calendar3"></i>
                                            <input placeholder="Selecciona tu fecha" type="date" name="date"
                                                id="datepickerprive" value="" class="calendar" required>
                                        </div>
                                        <div class="row">
                                            <div class="custom-input-group">
                                                <i class="bi bi-chevron-down"></i>
                                                <select id="truist-adult" name="numbertravels">
                                                    <option  value="notselected" selected > Número de viajeros: </option>
                                                    <option value="1"> 1</option>
                                                    <option value="2"> 2</option>
                                                    <option value="3"> 3</option>
                                                    <option value="4"> 4</option>
                                                    <option value="5"> 5</option>
                                                </select>
                                            </div>
                                        </div><br>
                                         
                                        <div class="custom-input-group">
                                       
                                        Precio total en  € Por persona<input type="text"  id="totalpriceprive"  name="totalprice" class="form-control" disabled>
                                        </div>
                                        <div class="custom-input-group">
                                            <input type="text" placeholder="tu nombre completo" id="name" name="name" required>
                                        </div>
                                        <div class="custom-input-group">
                                            <input type="email" placeholder="tu correo electrónico" id="email" name="email" >
                                        </div>
                                        <div class="custom-input-group">
                                            <input type="tel" placeholder="número de teléfono" id="phone" name="phone" required>
                                        </div>
                                        
                                        <div class="row">
                                                <div class="custom-input-group">
                                                    <i class="bi bi-chevron-down"></i>
                                                    <select id="truist-adult" name="adlut">
                                                        <option value="notselected" selected>adulto</option>
                                                        <option value="1"> 1</option>
                                                        <option value="2"> 2</option>
                                                        <option value="3"> 3</option>
                                                        <option value="4"> 4</option>
                                                        <option value="5"> 5</option>
                                                    </select>
                                                </div>
                                            
                                        </div>
                                       
                                       
                                        <div class="custom-input-group">
                                            <textarea cols="20" rows="7" name="message" placeholder="tu mensaje"></textarea>
                                        </div>
                                        <div class="custom-input-group">
                                            <div class="submite-btn">
                                                <button type="submit" >¡Reserva ahora</button>
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
                                            <h6>duración</h6>
                                            <span>3 días/ 2 noches</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="pd-single-info">
                                        <div class="info-icon">
                                            <img src="../assets/images/icons/pd2.svg" alt="">
                                        </div>
                                        <div class="info">
                                            <h6> distancia</h6>
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
                                            <h6>hora de salida</h6>
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
                                            <h6> disponibilidad </h6>
                                            <span>todos los días</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pd-thumb">
                                <img src="../assets/images/Circuit/details/chagaga1.jpg" alt="">
                            </div>
                            <div class="header-bottom">
                                <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <h5 class="location"><i class="bi bi-geo-alt"></i> Chagaga, Marruecos</h5>
                                    <ul class="d-flex align-items-center rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                </div>
                                <h2 class="pd-title">Tour de 3 días a Erg Chegaga : </h2>
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
                                            aria-selected="true"><i class="bi bi-info-lg"></i> información</button>
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
                                    <h3 class="d-subtitle">detalles del paquete</h3>
 <pre>



 Únete a este viaje privado por el desierto de Marrakech a las grandes dunas de Chegaga y descubre las dunas más grandes de Marruecos con un servicio VIP completo.

¡Viaja a través de increíbles paisajes, auténticos pueblos bereberes, ciudadelas de tierra con una arquitectura impresionante y disfruta de los paisajes desérticos hasta donde alcanza la vista en este maravilloso y enigmático país!

Un guía conductor estará a su disposición durante todo el recorrido le hará descubrir las dunas de Chegaga de la mejor manera posible.

 

Lo más destacado del tour :

    • Cruce el Alto Atlas y el paso de Tichka y disfrute de unas vistas panorámicas perfectas

    • Visita la gran Kasbah histórica de Ait Benhaddou

    • Descubre la ciudad de Ouarzazate, Kasbah Taourirte y visita un estudio de cine

    • Viaja por el valle de Draa con sus hermosas palmeras y oasis

    • Vivir momentos inolvidables de estilo de vida nómada en el corazón del desierto

    • Únete a un tour en camello en las dunas de Zagora y aprecia la impresionante puesta de sol

    • Únete a una noche de música tradicional alrededor de la fogata

    • Aproveche su tiempo libre para descubrir los auténticos pueblos bereberes

 

                                                                programa del tour

 

                                                                Día 1: Marrakech - Tichka - Ait Ben Haddou - Agdez - Zagora

Después de la recogida en el hotel, saldremos de Marrakech temprano en la mañana para un viaje en 4x4 por el desierto. Cruzaremos el paso Tizi n Tichka,
luego visitaremos la Kasbah de Telouet antes de bajar al hermoso valle de Ounila donde tendremos un pequeño descanso para visitar
la Kasbah de Ait Ben Haddou con un guía turístico local. Después del paso de Tizi n'Tinifift cruzaremos el valle de Draa y su hermoso
oasis, palmeras y ksours. Noche y cena en Zagora.



Día 2: Zagora - M'hamid - Erg Chegaga

Después de una breve visita a la famosa biblioteca coranica de Tamegroute y los talleres de cerámica, continuaremos nuestra excursión a M'hamid el
Ghizlane a través de hermosos paisajes desérticos y vegetación. Al llegar a Chegaga, nos uniremos directamente a un vivac encantador y relajante
campamento instalado en el corazón de las dunas. Usted tendrá la oportunidad de unirse a un paseo en camello en las dunas o para hacer un poco de trekking
en el desierto para explorar los extraordinarios paisajes del Sahara. Cena y noche en Bivouac.



Día 3: Erg Chegaga- Foum Zguid - Marrakech

Después del desayuno saldremos de nuestro campamento del desierto cruzando la inmensa meseta del lago IRIKI, Foum Zguid, Taznakht y Wawzguit o 
capital de alfombras bereberes y azafrán. También pasaremos por Amerzegane para llegar al paso Tizi N'Tichka en nuestro camino de regreso a Marrakech.




Duración: 3 días/ 2 noches
Distancia: 390 km x 2  
Disponibilidad: Todos los días
Hora de salida: 07h00 am

<i class='bx bx-check'></i> Recogida y devolución en el hotel
    <i class='bx bx-check'></i> vehículo con aire acondicionado
    <i class='bx bx-check'></i> transporte privado
    <i class='bx bx-check'></i> Café o té o zumo de fruta o soda
    <i class='bx bx-check'></i> todos los impuestos

What is included?

<i class='bx bx-check'></i> Transporte con guía de conductor
<i class='bx bx-check'></i> Aire acondicionado y cómodo 4x4
<i class='bx bx-check'></i> Alojamiento en régimen de media pensión:
                                • 1ª noche: Riad Lamane o similar
                                • 2ª noche: Noche en Bivouac 
<i class='bx bx-check'></i> Paseo en camello por dunas abiertas
<i class='bx bx-check'></i> seguro de transporte
<i class='bx bx-check'></i> Fiabilidad del servicio de calidad
<i class='bx bx-check'></i> todos los impuestos

¿Qué no está incluido?

<i class='bx bx-check'></i> comida
<i class='bx bx-check'></i> guía local
<i class='bx bx-check'></i> Tips



Punto de encuentro:

    <i class='bx bx-check'></i> Nuestro conductor lo recogerá en su hotel/ Riad o en cualquier otro lugar a la hora acordada.
    <i class='bx bx-check'></i> En caso de cualquier problema: por favor envíenos un correo electrónico o llámenos a los números que aparecen en la información de contacto.

Easy Booking: Aceptado hasta las 6pm del día anterior (hora de Marrakech), Si tiene alguna dificultad para reservar o necesita otro servicio, utilice nuestro <a href="contact.php" > Formulario de contacto</a> 


Métodos de pago:

    En efectivo (Euros o MAD) a la llegada


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
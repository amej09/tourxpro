<!doctype html>
<html lang="en">
    <?php include('template/header.php')?>



    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">Excursión de 4 días al desierto de Zagora y Merzouga :  </h2>
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
                                            <input type="tel" placeholder="Número de teléfono" id="phone" name="phone" required>
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
                                            <span>4 días/ 3 noches</span>
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
                                <img src="../assets/images/Circuit/details/marzouga5.jpg" alt="">
                            </div>
                            <div class="header-bottom">
                                <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <h5 class="location"><i class="bi bi-geo-alt"></i> Marzouga, Zagoura, Marruecos</h5>
                                    <ul class="d-flex align-items-center rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                </div>
                                <h2 class="pd-title">Excursión de 4 días al desierto de Zagora y Merzouga : </h2>
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

 Si desea explorar la belleza y el encanto del Sahara de Marruecos, este tour privado del desierto de 4 días está hecho para usted.

Descubra increíbles paisajes desérticos, oasis, kasbahs y auténticos pueblos bereberes mientras viaja con total comodidad con un conductor-guía profesional de habla inglesa.

 

Aspectos más destacados del recorrido

    • Descubre las vistas panorámicas del Alto Atlas
    • Cruce el espléndido Paso de Tichka
    • Visita la famosa Kasbah de Ait Benhaddou
    • Visita Kasbah Taourirte y estudio de cine en Ouarzazate
    • Disfrute de las hermosas palmeras y oasis del valle de Draa
    • Experimenta el estilo de vida nómada del desierto del Sahara
    • Únete a un maravilloso tour en camello en las dunas de Zagora y Merzouga
    • Apreciar impresionante puesta de sol en el desierto y amanecer
    • Disfrute de una noche tradicional con música bereber alrededor de la fogata

 

                                                                programa del tour

                                                                Día 1: Marrakech - Ouarzazate - Zagora

Un conductor privado lo recogerá de su hotel o Riad en Marrakech temprano en la mañana para comenzar su viaje por el desierto a través de la alta
Montañas del Atlas. Cruzará el famoso paso Tizi N'Tichka y los encantadores pueblos bereberes antes de llegar a la gran kasbah de Ait
Ben Haddou, donde tendrá la oportunidad de explorar este increíble patrimonio histórico con un guía local.

Después de un breve descanso para almorzar en Ouarzazate, continuaremos hacia el valle de Draa a través de Agdz para explorar el auténtico Marruecos con su
gran oasis de palmeras y Kasbahs fortificadas.

Al llegar a Zagora, se unirá a un recorrido en camello en medio de dunas de arena antes de pasar su primera noche en una tradicional 
Casa de huéspedes bereber.

Día 2: Zagora - Merzouga

Una recogida temprana de su casa de huéspedes después del desayuno, y continuaremos nuestra excursión a través de la dirección Anti Atlas Mountains 
Alnif donde vamos a almorzar.

Continuación de nuestro viaje por el desierto a Merzouga, comenzaremos con una caminata en camello para explorar las dunas mágicas de Erg Chebbi y 
impresionante puesta de sol sobre el gran desierto antes de unirse a nuestro campamento del Sahara para cenar en un ambiente único con una fiesta bereber del desierto alrededor de la fogata.

Pasaremos la segunda noche bajo una tienda nómada entre las dunas de Merzouga.

Día 3: Merzouga - Tinghir - Boumalne Dades

Tendrás que levantarte muy temprano para disfrutar del increíble amanecer en medio de este vasto y encantador desierto.

Después del desayuno, regresaremos a Alnif, desde donde, llegaremos al pueblo de Tinghir para un pequeño tour para descubrir la 
campos agrícolas y viejos sistemas de riego utilizados por los lugareños con un guía privado, así como un taller bereber para explorar el arte de 
alfombras bereberes tradicionales.



20 km después de Tinghir, se sorprenderá por las espectaculares gargantas del Todra y cañones, uno de los sitios naturales más bellos de este 
    región. Tendremos una parada para el almuerzo y luego continuaremos nuestra excursión por el desierto a Boulmane Dades. Cena y noche en un 
    casa de huéspedes bereber tradicional.

Día 4: Boumalne Dades - Ouarzazate - Marrakech

    Después de desayunar en su casa de huéspedes, continuará explorando los fabulosos paisajes del desierto mientras conduce a través de Ifri, Kelaat 
    Mgouna y Skoura.

    Un almuerzo en Ouarzazate y la continuación a Marrakech, donde este gran tour del desierto de 4 días terminará con una entrega en su hotel o 
    Riad en Marrakech.

 

Duración: 4 días
Distancia: 480 km x 2  
Disponibilidad: Todos los días
Hora de salida: 07h00 am

<i class='bx bx-check'></i> Recogida y devolución en el hotel
    <i class='bx bx-check'></i> vehículo con aire acondicionado
    <i class='bx bx-check'></i> transporte privado
    <i class='bx bx-check'></i> Café o té o zumo de fruta o soda
    <i class='bx bx-check'></i> todos los impuestos
que esta incluido?

<i class='bx bx-check'></i> Transporte con un conductor-guía de habla inglesa
<i class='bx bx-check'></i> Aire acondicionado y cómodo 4x4
<i class='bx bx-check'></i> Alojamiento en régimen de media pensión:
        Primera noche: Riad Lamane o similar
        • 2ª noche: Tienda Nómada en Bivouac
        • 3ª noche : Gazelle du Dades o similar
<i class='bx bx-check'></i> Paseo en camello por las dunas de Zagora y Merzouga
<i class='bx bx-check'></i> Transporte y seguro de responsabilidad
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
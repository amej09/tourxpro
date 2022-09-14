<!doctype html>
<html lang="en">

    <?php include('template/header.php')?>

    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">Paseo en camello al atardecer en Agafay  </h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="index.php">Acogida</a></li>
                    <li class="breadcrumb-item active">Agafay</li>
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
                                    <tr  style="height: 40px ;text-align: center;">
                                        <th   >privado</th>
                                    </tr>
                                    <tr  style="height: 40px ;text-align: center;">
                                        <th   >45 €</th>
                                    </tr>
                                    <tr  style="height: 40px;text-align: center; ">
                                        <th >por persona</th>                                        
                                    </tr>
                                   
                                </table>
                            </div>

                            <div class="widget-body">
                                <form action="../assets/php/sender.php" method="post" id="booking-form">
                                    <div class="booking-form-wrapper">
                                        <div class="custom-input-group">
                                            <input type="hidden"      name="type_reservation"  value="prive"/> &nbsp;
                                            <input type="hidden"      name="type_tour" value="Agafay"/> &nbsp;
                                            <input type="hidden"      name="name_tour" value="Camel Ride at sunset in Agafay "/> &nbsp;

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
                                            <span>1 horas</span>
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
                                            <span> a elección  </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="pd-single-info">
                                        <div class="info-icon">
                                            <img src="../assets/images/icons/pd2.svg" alt="">
                                        </div>
                                        <div class="info">
                                            <h6>distancia</h6>
                                            <span> 30km </span>
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
                                <img src="../assets/images/Agafay/agafayc5.jpg" alt="">
                            </div>
                            <div class="header-bottom">
                                <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <h5 class="location"><i class="bi bi-geo-alt"></i> Agafay, Marruecos</h5>
                                    <ul class="d-flex align-items-center rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                </div>
                                <h2 class="pd-title">Paseo en camello al atardecer en Agafay </h2>
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


Considerado como uno de los sitios más bellos alrededor de Marrakech, el desierto de Agafay es un Reg (desierto pedregoso) situado a unos 30 kilómetros de la ciudad de Marrakech.

Este fabuloso desierto salvaje que se asemeja al Sahara ofrece un panorama de paisajes desérticos casi únicos con agradables vistas a los picos de las montañas del Atlas.

En esta excursión de medio día desde Marrakech, será conducido desde su hotel o Riad a la hora acordada por un conductor-guía profesional y amable.

A su llegada, se le invitará a disfrutar de un buen té de menta marroquí bajo una tienda nómada para apreciar más los paisajes panorámicos y la calma absoluta de este pequeño rincón del paraíso.

Use el Cheich (bufanda Sahraoui) y suba a su camello durante aproximadamente una hora en camello a través de los senderos y las hermosas dunas blancas del desierto.

Después de este impresionante paseo en camello, puede disfrutar de su tiempo libre para admirar la increíble puesta de sol en el desierto de Agafay, las vistas claras y una sensación inspiradora de estar solo en este mundo para purificar su mente y renovar la energía de su cuerpo.

Más tarde, usted será libre de unirse a su conductor para volver a Marrakech o para ir a una breve visita al lago Lalla Takerkoust con un pequeño descanso para tomar café por la orilla del lago.

Duración de la excursión: 3 a 4 horas
Duración del paseo en camello: 1h00
Disponibilidad: Todos los días
Deparature time: En su elección

Número de participantes: Mínimo 2 personas

    <i class='bx bx-check'></i>  gastos de reserva
    <i class='bx bx-check'></i>  Reserve ahora y pague más tarde
    <i class='bx bx-check'></i> mejor precio garantizado
    <i class='bx bx-check'></i> excelente servicio
    <i class='bx bx-check'></i> cancelación gratis
    <i class='bx bx-check'></i> disponible todos los días

que esta incluido?

    <i class='bx bx-check'></i>Recogida y devolución en el hotel
    <i class='bx bx-check'></i>Transporte en minivan con aire acondicionado
    <i class='bx bx-check'></i>Té tradicional marroquí
    <i class='bx bx-check'></i>1h00 Paseo en camello
    <i class='bx bx-check'></i>Bufanda del desierto
    <i class='bx bx-check'></i>seguro de responsabilidad civil
    <i class='bx bx-check'></i>todos los impuestos

¿Qué no está incluido?

    <i class='bx bx-check'></i>Pausa para el café en el restaurante Flouka
    <i class='bx bx-check'></i>almuerzo
    <i class='bx bx-check'></i>bebidas
    <i class='bx bx-check'></i>Tips

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
                                                <img  src="../assets/images/Agafay/agafayc.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Agafay/agafayc6.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Agafay/agafayg3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Agafay/agafayc1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Agafay/agafayg.jpg" alt="">
                                            </div>
                                        </div>
                                         <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Agafay/agafayg1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Agafay/agafay.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/Agafay/agafayc2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/Agafay/agafayg4.jpg" alt="">
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

                                                        <input type="text" placeholder="tu nombre completo"  id="namecontact">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="custom-input-group">
                                                        <input type="text" placeholder="Tu correo electrónico" id="emailcontact">
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
        var nbr_prive=45;
        $('#totalpriceprive').val(nbr_prive );

       
       $( '#truist-adult' ).change(function() {
    
        nbr= $( '#truist-adult' ).val();
        nbr_prive=45 * nbr;
       
       $('#totalpriceprive').val(nbr_prive );

       });
</script>

</body>

<!-- Mirrored from demo.egenslab.com/html/tourxpro/demo/package-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2022 11:46:30 GMT -->

</html>
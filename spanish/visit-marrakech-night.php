<!doctype html>
<html lang="en">

    <?php include('template/header.php')?>

    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">Tour privado por la ciudad de Marrakech de noche </h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="index.php">Acogida</a></li>
                    <li class="breadcrumb-item active">visits</li>
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
                                        <th>Premio* €</th>
                                        <td>25</td>
                                        <td>16</td>
                                        <td>12</td>
                                        <td>10</td>

                                    </tr>
                                </table>
                            </div>

                            <div class="widget-body">
                                <form action="../assets/php/sender.php" method="post" id="booking-form">
                                    <div class="booking-form-wrapper">
                                        <div class="custom-input-group">
                                            <input type="hidden"      name="type_reservation"  value="prive"/> &nbsp;
                                            <input type="hidden"      name="type_tour" value="visites"/> &nbsp;
                                            <input type="hidden"      name="name_tour" value="Marrakech by Night City privadoe Tour"/> &nbsp;

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
                                       
                                            Precio total en  € Per Person<input type="text"  id="totalpriceprive"  name="totalprice" class="form-control" disabled>
                                        </div>
                                        <div class="custom-input-group">
                                            <input type="text" placeholder="tu nombre completo" id="name" name="name" required>
                                        </div>
                                        <div class="custom-input-group">
                                            <input type="email" placeholder="Tu correo electrónico" id="email" name="email" >
                                        </div>
                                        <div class="custom-input-group">
                                            <input type="tel" placeholder="número de teléfono" id="phone" name="phone" required>
                                        </div>
                                        
                                       
                                       
                                        <div class="custom-input-group">
                                            <textarea cols="20" rows="7" name="message" placeholder="tu mensaje"></textarea>
                                        </div>
                                        <div class="custom-input-group">
                                            <div class="submite-btn">
                                                <button type="submit" >Reserva ahora</button>
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
                                            <span>3 horas</span>
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
                                            <h6> disponibilidad </h6>
                                            <span>todos los días</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pd-thumb">
                                <img src="../assets/images/visites/marrakechn3.jpg" alt="">
                            </div>
                            <div class="header-bottom">
                                <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <h5 class="location"><i class="bi bi-geo-alt"></i> marrakech, Marruecos</h5>
                                    <ul class="d-flex align-items-center rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                </div>
                                <h2 class="pd-title">Tour privado por la ciudad de Marrakech de noche</h2>
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
                                            aria-selected="true"><i class="bi bi-info-lg"></i> información
</button>
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


Ponemos a su disposición un conductor-guía experimentado, especialista en Marrakech, y un vehículo con aire acondicionado durante 3 horas para que pueda descubrir Marrakech después de la puesta del sol. Puede gestionar usted mismo el programa de la visita de acuerdo a su elección y sus prioridades, a continuación nuestra propuesta de programa:

Jemaa el Fna es la más concurrida y visitada de las plazas en el barrio de la medina de Marrakech y le encantará en cualquier momento del día o de la noche.

La plaza principal de Marrakech es la pieza central mágica de la ciudad, un escenario en el que se representan representaciones de teatro callejero durante todo el día. Como cualquier mago consumado, Djemaa El Fna no revela todos los trucos en su manga de inmediato, lo que significa que tendrá que volver a visitarlo varias veces durante el día para disfrutar del espectáculo completo. Esto es lo que puede esperar por la mañana, el mediodía y la noche.

Al anochecer, una ola constante de gente inunda el Djemaa.  Las luces se encienden, y las primeras ráfagas de humo se elevan por encima de los puestos de comida a medida que las parrillas se calientan. Montañas de conchas en espiral atraen a los comensales a arroparse en caldo de caracol mientras los camareros patrullan el área del puesto de comida blandiendo menús y promocionando para los negocios.

Las compañías musicales tocan tambores, tocan sus violines, cantan y afinan sus laúdes mientras una gran batalla sinfónica comienza por la noche. Las bandas de duelos se mezclan en un estruendo que se fusiona con los gritos de los vendedores de comida y las flautas de los encantadores de serpientes.

La Medina de Marrakech es el centro de la vida nocturna en Marrakech - pero la idea de "vida nocturna" no es completamente diferente a la que está acostumbrado. Aquí es donde vas a experimentar el bullicioso corazón de Marrakech, con cientos de restaurantes, puestos de bebidas y comida, y la plaza Djamaa El Fna donde puedes ver a artistas callejeros, y bailarines hacer lo suyo,

Si estás de humor para ir de fiesta más allá de los clubes y bares, puedes pasar la noche en una presentación de danza del vientre. No hay escasez de opciones de entretenimiento. Restaurantes acogedores a los clubes nocturnos en auge con los mejores djs girando hasta el wee horas a espectáculos de estilo cabaret, y bares de cócteles de moda son todas las opciones para una noche de fiesta en Marrakech.

Conocida por sus noches festivas, la ciudad roja tiene un gran número de restaurantes, bares, casino y discotecas para disfrutar de salir en Marrakech. Muchos ambientes coexisten, desde el típico marroquí a las noches orientales más de moda junto a las piscinas. Dependiendo de los barrios, el ambiente varía.

duración: 3 to 4 horas
disponibilidad: todos los días
Deparature time: At Your Choice

<i class='bx bx-check'></i>Sin tarifas de reserva
    <i class='bx bx-check'></i>Reserva ahora y paga después
    <i class='bx bx-check'></i>Mejor precio garantizado
    <i class='bx bx-check'></i>Excelente servicio
    <i class='bx bx-check'></i>Cancelación gratuita
    <i class='bx bx-check'></i>Disponible todos los días

¿Qué es lo que incluye?

    <i class='bx bx-check'></i>Transporte con guía del conductor
    <i class='bx bx-check'></i>Seguro de transporte
    <i class='bx bx-check'></i>Fiabilidad del servicio de calidad
    <i class='bx bx-check'></i>Todos los impuestos

¿Qué no está incluido?

    <i class='bx bx-check'></i>Consejos

¿Qué no está incluido?

<i class='bx bx-check'></i> comida
<i class='bx bx-check'></i> guía local
<i class='bx bx-check'></i> Consejos



Punto de encuentro:

    <i class='bx bx-check'></i> Nuestro conductor lo recogerá en su hotel/ Riad o en cualquier otro lugar a la hora acordada.
    <i class='bx bx-check'></i> En caso de cualquier problema: por favor envíenos un correo electrónico o llámenos a los números que aparecen en la información de contacto.

Easy Booking: Aceptado hasta las 6pm del día anterior (hora de Marrakech), Si tiene alguna dificultad para reservar o necesita otro servicio, use nuestro <a href="contact.php" > Formulario de contacto</a> 


Métodos de pago:

    En efectivo (Euros o MAD) a la llegada
</pre>                    
                                </div>
                                <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body3" role="tabpanel"
                                    aria-labelledby="pills-package3">
                                    <div class="row g-4">
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/visites/marrakechn1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/visites/marrakechn2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/visites/marrakech2.jpg" alt="">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/visites/marrakechn4.jpg" alt="">
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
        var nbr_prive=50;
        $('#totalpriceprive').val(nbr_prive );

       
       $( '#truist-adult' ).change(function() {
    
        nbr= $( '#truist-adult' ).val();
        nbr_prive=parseInt(50 / nbr);
       $('#totalpriceprive').val(nbr_prive );

       });
</script>

</body>

<!-- Mirrored from demo.egenslab.com/html/tourxpro/demo/package-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2022 11:46:30 GMT -->

</html>
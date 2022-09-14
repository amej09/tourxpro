<!doctype html>
<html lang="en">

<?php include('template/header.php') ?>



<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">Excursión Ouarzazate - Ait Benhaddou </h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="index.php">Acogida</a></li>
                <li class="breadcrumb-item active">excursión</li>
            </ul>
        </div>
    </div>
</div>

<div class="package-details-wrapper pt-76">
    <div class="container">
        <div class="row ">
            <div class="col-lg-3">
                <div class="package-sidebar">
                    <aside class="package-widget-style-2 widget-form mt-30">
                        <div class="widget-title">
                            <table class="table" style="color: white;">
                                <tr style="height: 40px ;text-align: center;" class="privebackground">
                                    <th colspan="5">privado</th>
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
                                    <td>70</td>
                                    <td>46</td>
                                    <td>35</td>
                                    <td>28</td>

                                </tr>
                            </table>
                        </div>

                        <div class="widget-body">
                            <form action="../assets/php/sender.php" method="post" id="booking-form">
                                <div class="booking-form-wrapper">
                                    <div class="custom-input-group">
                                        <input type="hidden" name="type_reservation" value="prive" /> &nbsp;
                                        <input type="hidden" name="type_tour" value="Excursion" /> &nbsp;
                                        <input type="hidden" name="name_tour" value="ouarzazat" /> &nbsp;

                                        Seleccione la fecha y los participantes:
                                        <i class="bi bi-calendar3"></i>
                                        <input placeholder="Selecciona tu fecha" type="date" name="date" id="datepickerprive" value="" class="calendar" required>
                                    </div>
                                    <div class="row">
                                        <div class="custom-input-group">
                                            <i class="bi bi-chevron-down"></i>
                                            <select id="truist-adult" name="numbertravels">
                                                <option value="notselected" selected> Número de viajeros: </option>
                                                <option value="1"> 1</option>
                                                <option value="2"> 2</option>
                                                <option value="3"> 3</option>
                                                <option value="4"> 4</option>
                                                <option value="5"> 5</option>
                                            </select>
                                        </div>
                                    </div><br>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <input type="checkbox" class="radiosize" id="Guide" value="Guide (15€)" /> &nbsp;

                                            Guía(15€)
                                        </div>

                                        <div class="col-md-6">
                                            <input type="checkbox" class="radiosize" id="Lunch" value="Almuerzo (10€ / por)" />&nbsp;

                                            Almuerzo (10€ / por)

                                        </div>


                                    </div>
                                    <div class="custom-input-group">

                                        Precio total en € por persona<input type="text" id="totalpriceprive" name="totalprice" class="form-control" disabled>
                                    </div>
                                    <div class="custom-input-group">
                                        <input type="text" placeholder="tu nombre completo" id="name" name="name" required>
                                    </div>
                                    <div class="custom-input-group">
                                        <input type="email" placeholder="Tu correo electrónico" id="email" name="email">
                                    </div>
                                    <div class="custom-input-group">
                                        <input type="tel" placeholder="número de teléfono" id="phone" name="phone" required>
                                    </div>


                                    <div class="custom-input-group">
                                        <textarea cols="20" rows="7" name="message" placeholder="tu mensaje"></textarea>
                                    </div>
                                    <div class="custom-input-group">
                                        <div class="submite-btn">
                                            <button type="submit">Reserva ahora</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="col-lg-6">
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
                                        <span>10 horas</span>
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
                                        <span>204 Km x 2</span>
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
                            <img src="../assets/images/ouarzazat.jpg" alt="">
                        </div>
                        <div class="header-bottom">
                            <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                <h5 class="location"><i class="bi bi-geo-alt"></i> Ouarzazate, Marruecos</h5>
                                <ul class="d-flex align-items-center rating">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                            <h2 class="pd-title">Excursión de un día a Ouarzazate - Ait Benhaddou</h2>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="package-sidebar">
                    <aside class="package-widget-style-2 widget-form mt-30">
                        <div class="widget-title">
                            <table class="table" style="color: white; border: solid 0px ;border-color: #162b32; ">
                                <tr style="height: 40px ;text-align: center;" class="groupbackground">
                                    <th>grupo</th>
                                </tr>
                                <tr style="height: 40px ;text-align: center;">
                                    <th>35 €</th>
                                </tr>
                                <tr style="height: 40px;text-align: center; ">
                                    <th> por persona </th>
                                </tr>

                            </table>
                        </div>

                        <div class="widget-body">
                            <form action="../assets/php/sender.php" method="post" id="booking-form2">
                                <div class="booking-form-wrapper">
                                    <div class="custom-input-group">
                                        <input type="hidden" name="type_reservation" value="groupe" /> &nbsp;
                                        <input type="hidden" name="type_tour" value="Excursion" /> &nbsp;
                                        <input type="hidden" name="name_tour" value="ouarzazat" /> &nbsp;

                                        Seleccione la fecha y los participantes:
                                        <i class="bi bi-calendar3"></i>
                                        <input placeholder="Selecciona tu fecha" type="date" name="date" id="datepickerfroup" value="" class="calendar" required>
                                    </div>
                                    <div class="row">
                                        <div class="custom-input-group">
                                            <i class="bi bi-chevron-down"></i>
                                            <select id="truist-adultgroup" name="numbertravels">
                                                <option value="notselected" selected> Número de viajeros: </option>
                                                <option value="1"> 1</option>
                                                <option value="2"> 2</option>
                                                <option value="3"> 3</option>
                                                <option value="4"> 4</option>
                                                <option value="5"> 5</option>
                                            </select>
                                        </div>
                                    </div><br>
                                    <div class="row">

                                        <div class="col-6">
                                            <input type="checkbox" class="radiosize" id="Guidegroup" name="Guide" value="Guide (15€)" /> &nbsp;

                                            Guía(15€)
                                        </div>

                                        <div class="col-6">
                                            <input type="checkbox" class="radiosize" id="Lunchgroup" name="Lunch" value="Almuerzo (10€ / por)" />&nbsp;

                                            Almuerzo (10€ / por)

                                        </div>


                                    </div>
                                    <div class="custom-input-group">

                                        Total Price in €<input type="text" id="totalpricegroup" name="totalprice" class="form-control" disabled>
                                    </div>
                                    <div class="custom-input-group">
                                        <input type="text" placeholder="tu nombre completo" name="name" id="name" required>
                                    </div>
                                    <div class="custom-input-group">
                                        <input type="email" placeholder="tu correo electrónico" name="email" id="email">
                                    </div>
                                    <div class="custom-input-group">
                                        <input type="tel" placeholder="número de teléfono" name="phone" id="phone" required>
                                    </div>

                                    <div class="row">
                                        <div class="custom-input-group">
                                            <i class="bi bi-chevron-down"></i>
                                            <select id="truist-adult" name="adult">
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
                                            <button type="submit">Reserva ahora</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </aside>
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
                                <button class="nav-link active" id="pills-package1" data-bs-toggle="pill" data-bs-target="#pill-body1" type="button" role="tab" aria-controls="pill-body1" aria-selected="true"><i class="bi bi-info-lg"></i> información</button>
                            </li>

                            <li class="nav-item navmargin" role="presentation">
                                <button class="nav-link" id="pills-package3" data-bs-toggle="pill" data-bs-target="#pill-body3" type="button" role="tab" aria-controls="pill-body3" aria-selected="false"><i class="bi bi-images"></i> Tour Gallary</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade show active package-info-tab mt-3" id="pill-body1" role="tabpanel" aria-labelledby="pills-package1">
                                <h3 class="d-subtitle">detalles del paquete</h3>
                                <pre>

Esta excursión de un día lo lleva a través de la cadena de las montañas del Alto Atlas y sobre el famoso paso de Tizi N'Tichka 1412 millas (2260 metros) de altura, el más alto de toda África. A lo largo de la ruta se pueden ver los pueblos bereberes encaramados en la ladera de las montañas, a veces apenas distinguibles de las montañas mismas...  

Al llegar al otro lado de las montañas el paisaje cambia dramáticamente, convirtiéndose en semiárido y desértico. Aquí está la arquitectura de la Kasbah con torretas en todos los edificios, adornado con ventanas a la parrilla y suaves paredes de color melocotón. Estas casas tradicionales están hechas de adobe, muy adecuado para las condiciones climáticas del sur.  

Después de su viaje a través de los hermosos valles, llegará a la antigua kasbah de Aït Ben Haddou, que es un sitio declarado Patrimonio de la Humanidad por la UNESCO. Después de visitar la Kasbah, viajará hacia Ouarzazate, mundialmente conocido como el Hollywood marroquí debido a las famosas películas que se han filmado allí, incluyendo el diamante del Nilo, Lawrence de Arabia, Sodome et Gomorre, le Joyau du Nil, Jésus de Nazareth, Reino de los cielos, la mamá, gladiador, 7 días en Tebet, Alejandro Magno, Babel...  

También puede visitar la Kasbah de Taourirt, declarada Patrimonio de la Humanidad por la UNESCO. También puede pasar por un estudio de cine si esto le interesa...

distancia: 204 km x 2  
duración:   10 horas
disponibilidad: todos los días
Hora de salida: 07h00 am

<i class='bx bx-check'></i> Sin tarifas de reserva
<i class='bx bx-check'></i> Reserva ahora y paga después
<i class='bx bx-check'></i> Mejor precio garantizado
<i class='bx bx-check'></i> Excelente servicio
<i class='bx bx-check'></i> Cancelación gratuita
<i class='bx bx-check'></i> Disponible todos los días

¿Qué es lo que incluye?

<i class='bx bx-check'></i> Recogida y entrega en el hotel
<i class='bx bx-check'></i> Transporte en minivan con aire acondicionado
<i class='bx bx-check'></i> Seguro de transporte
<i class='bx bx-check'></i> Seguro de responsabilidad profesional
<i class='bx bx-check'></i> Fiabilidad del servicio de calidad
<i class='bx bx-check'></i> Todos los impuestos

¿Qué no está incluido?

<i class='bx bx-check'></i> Almuerzo
<i class='bx bx-check'></i> Guía local
<i class='bx bx-check'></i> Consejos
<i class='bx bx-check'></i> Entradas (Cinema Studios y Taourirt Kasbah)

Lugar de encuentro:

<i class='bx bx-check'></i> Nuestro conductor lo recogerá en su hotel/Riad o en cualquier otro lugar a la hora acordada.
<i class='bx bx-check'></i> En caso de cualquier problema: envíenos un correo electrónico o llámenos a los números que se muestran en la información de contacto.

Easy Booking: Aceptado hasta las 6pm del día anterior (hora de Marrakech), Si tiene alguna dificultad para reservar o necesita otro servicio, utilice nuestro <a href="contact.php" > Formulario de contacto </a> 


Formas de pago:

    En línea (podemos enviarle un enlace seguro bajo petición)
    En efectivo (Euros o MAD) a la llegada

 </pre>
                            </div>
                            <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body3" role="tabpanel" aria-labelledby="pills-package3">
                                <div class="row g-4">
                                    <div class="col-6">
                                        <div class="package-gallary-item">
                                            <img src="../assets/images/excursion/ouarzazate1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="package-gallary-item">
                                            <img src="../assets/images/excursion/ouarzazate2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="package-gallary-item">
                                            <img src="../assets/images/excursion/ouarzazate3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="package-gallary-item">
                                            <img src="../assets/images/excursion/ouarzazate4.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="package-gallary-item">
                                            <img src="../assets/images/excursion/ouarzazate5.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="package-gallary-item">
                                            <img src="../assets/images/excursion/ouarzazate6.jpg" alt="">
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

<?php include('template/footer.php') ?>



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

<script>
    var nbr_prive = 140;
    $('#totalpriceprive').val(nbr_prive);

    $('#Guide').change(function() {
        /* */
        if ($(this).is(':checked')) {
            nbr_prive += 15;
        } else {
            nbr_prive -= 15;
        }
        $('#totalpriceprive').val(nbr_prive);

    });
    $('#Lunch').change(function() {
        /* */
        var lunch = 10;

        if ($(this).is(':checked')) {
         
                nbr_prive += lunch ;
        
        } else {
            nbr_prive -= lunch ;

        }
        $('#totalpriceprive').val(nbr_prive);

    });

    $('#truist-adult').change(function() {
        $("#Lunch").prop("checked", false);
        $("#Guide").prop("checked", false);
        nbr = $('#truist-adult').val();
        nbr_prive=parseInt(140 / nbr);
        $('#totalpriceprive').val(nbr_prive);

    });
</script>
<script>
    var nbr_group = 35;
    $('#totalpricegroup').val(nbr_group);

    $('#Guidegroup').change(function() {
        /* */
        if ($(this).is(':checked')) {
            nbr_group += 15;
        } else {
            nbr_group -= 15;
        }
        $('#totalpricegroup').val(nbr_group);

    });
    $('#Lunchgroup').change(function() {
        /* */
        var lunchgroup = 10;

        if ($(this).is(':checked')) {
            nbr = $('#truist-adultgroup').val();
            if (nbr == '2') {
                nbr_group += lunchgroup * 2;
            } else if (nbr == '3') {
                nbr_group += lunchgroup * 3;
            } else if (nbr == '4') {
                nbr_group += lunchgroup * 4;
            } else if (nbr == '5') {
                nbr_group += lunchgroup * 5;
            } else {
                nbr_group += lunchgroup;

            }

        } else {
            if (nbr == '2') {
                nbr_group -= lunchgroup * 2;
            } else if (nbr == '3') {
                nbr_group -= lunchgroup * 3;
            } else if (nbr == '4') {
                nbr_group -= lunchgroup * 4;
            } else if (nbr == '5') {
                nbr_group -= lunchgroup * 5;
            } else {
                nbr_group -= lunchgroup;

            }
        }
        $('#totalpricegroup').val(nbr_group);
    });

    $('#truist-adultgroup').change(function() {
        $("#Lunchgroup").prop("checked", false);
        $("#Guidegroup").prop("checked", false);
        nbr = $('#truist-adultgroup').val();
        nbr_group = 35 * nbr;
        
        $('#totalpricegroup').val(nbr_group);

    });
</script>
</body>

<!-- Mirrored from demo.egenslab.com/html/tourxpro/demo/package-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2022 11:46:30 GMT -->

</html>
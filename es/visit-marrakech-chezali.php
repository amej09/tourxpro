<!doctype html>
<html lang="en">

    <?php include('template/header.php')?>

    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">Restaurante chez Ali Marrakech - Cena y espectáculo Fantasia </h2>
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
                                        <th  colspan="5" >In privadoe</th>
                                    </tr>
                                    <tr>
                                        <th>nbr max*</th>
                                        <td>Person</td>
                                        
                                    </tr>
                                    <tr>
                                        <th>Premio* €</th>
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

                                            Seleccione la fecha y los participantes: 
                                            <i class="bi bi-calendar3"></i>
                                            <input placeholder="Selecciona tu fecha" type="date" name="date"
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
                                                    <option value="1" selected > Número de viajeros: </option>
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
                                                    <option  value="0" selected > Número de hijos:(Edad 4-11) </option>
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
                                       
                                            Precio total en  € <input type="text"  id="totalpriceprive"  name="totalprice" class="form-control" disabled>
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
                                            <span>3 -4  horas</span>
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
                                <img src="../assets/images/visites/chezali5.jpg" alt="">
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
                                <h2 class="pd-title">Restaurante Chez Ali Marrakech - Cena y Espectáculo de Fantasía </h2>
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


Una noche increíble de entretenimiento, ofrece la oportunidad de experimentar las vistas y sonidos de los músicos y bailarines marroquíes, mientras come una comida de 5 platos en tiendas caidal. Las tribus bereberes cantan y te saludan al llegar. Ofrece todo tipo de entretenimiento: comida, canciones, baile, acrobacias a caballo, fuegos artificiales, desfiles, acróbatas, bailarinas del vientre.  

Originaria del Rif, la fantasía es una ceremonia de guerra que consiste en oponerse a diferentes grupos de jinetes; cada uno representa al mejor jinete de su propia tribu. Cada grupo se estremece en una luz deslumbrante; todos sus miembros apuntan sus rifles al cielo y disparan al mismo tiempo dejando atrás un estallido de tumulto y gritos. Disfrute de una cena típica marroquí que incluye principalmente harira, mechoui y cuscús bajo "tiendas" caidal. Un evento tradicional que incluye la oportunidad de ver el folclore bereber, la actuación de los malabaristas, la alfombra voladora, la danza del vientre y finalmente el espectáculo de fantasía. 

Nuestros menús :



Menú N° 1 - Bebidas no incluidas:     

Harira marroquí
- Chiken Tagine con limón
O Tagine de cordero con ciruelas pasas
- Cuscús de siete verduras
- Frutas de temporada
- Té de menta
- Bollería marroquí
    

Menú N° 2 - Bebidas no incluidas:

- Maroccan Harira
- 1/2 Méchoui (cordero)
- Cuscús de siete verduras
- Frutas de temporada
- Té de menta
- Bollería marroquí

duración: 3 a 4 horas
disponibilidad: todos los días.
Hora de salida: 20h00

    <i class='bx bx-check'></i>Sin tarifas de reserva
    <i class='bx bx-check'></i>Reserva ahora y paga después
    <i class='bx bx-check'></i>Mejor precio garantizado
    <i class='bx bx-check'></i>Excelente servicio
    <i class='bx bx-check'></i>Cancelación gratuita

    ¿Qué es lo que incluye?

    <i class='bx bx-check'></i>Transporte con guía del conductor
    <i class='bx bx-check'></i>Acondicionamiento de vehículos y muy cómodo 4x4 o mini bus.
    <i class='bx bx-check'></i>Diner (un menú de su elección)
    <i class='bx bx-check'></i>Mostrar y entretenimiento
    <i class='bx bx-check'></i>Seguro de transporte
    <i class='bx bx-check'></i>Fiabilidad del servicio de calidad
    <i class='bx bx-check'></i>Todos los impuestos.

    ¿Qué no está incluido?

    <i class='bx bx-check'></i>Bebidas extra
    <i class='bx bx-check'></i>Consejos

    Lugar de encuentro:

    <i class='bx bx-check'></i>Nuestro conductor lo recogerá en su hotel/Riad o en cualquier otro lugar a la hora acordada.
    <i class='bx bx-check'></i>En caso de cualquier problema: envíenos un correo electrónico o llámenos a los números que se muestran en la información de contacto.

    Política del niño:
    - Niños de 0 a 4 años : gratuito
    - Niños de 5 a 10 años : 50% de descuento
    - Los niños de 11 años en adelante se les cobrará el precio completo

    Easy Booking: Aceptado hasta las 18h00 del día anterior (hora de Marrakech), Si tiene alguna dificultad para reservar o necesita otro servicio, utilice nuestro <a href="contact.php" > Formulario de contacto </a> 

    
    Formas de pago:

        En efectivo (Euros o MAD) a la llegada
 

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

<!-- Mirrored from demo.egenslab.com/html/tourxpro/demo/package-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2022 11:46:30 GMT -->

</html>
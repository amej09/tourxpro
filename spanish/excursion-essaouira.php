<!doctype html>
<html lang="en">

 

<?php include('template/header.php')?>



    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title"> Excursión de un día a Essaouira - Mogador  </h2>
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
                                        <td>60</td>
                                        <td>40</td>
                                        <td>30</td>
                                        <td>24</td>

                                    </tr>
                                </table>
                            </div>

                            <div class="widget-body">
                                <form action="../assets/php/sender.php" method="post" id="booking-form">
                                    <div class="booking-form-wrapper">
                                        <div class="custom-input-group">
                                            <input type="hidden"      name="type_reservation"  value="prive"/> &nbsp;
                                            <input type="hidden"      name="type_tour" value="Excursion"/> &nbsp;
                                            <input type="hidden"      name="name_tour" value="essaouira"/> &nbsp;

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
                                        <div class="row">
                                            
                                             <div class="col-md-6">
                                                <input type="checkbox" class="radiosize" id="Guide"   /> &nbsp;
                                            
                                                Guía(15€)
                                            </div>
                                           
                                            <div class="col-md-6">
                                                <input type="checkbox"  class="radiosize"  id="Lunch"  />&nbsp;
                                          
                                                Almuerzo (15€ / por)  

                                            </div> 

                                            
                                        </div>
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
                                            <span>9-10 horas</span>
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
                                            <span>170 Km x 2</span>
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
                                            <span> 08h00</span>
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
                                <img src="../assets/images/excursion/essaouira7.jpg" alt="">
                            </div>
                            <div class="header-bottom">
                                <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <h5 class="location"><i class="bi bi-geo-alt"></i> essaouira, Marruecos</h5>
                                    <ul class="d-flex align-items-center rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                </div>
                                <h2 class="pd-title"> Excursión de un día a Essaouira - Mogador : Programa </h2>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="col-lg-3">
                    <div class="package-sidebar">
                        <aside class="package-widget-style-2 widget-form mt-30">
                            <div class="widget-title">
                                <table class="table" style="color: white; border: solid 0px ;border-color: #162b32; ">
                                    <tr  style="height: 40px ;text-align: center;" class="groupbackground">
                                        <th   >Grupo</th>
                                    </tr>
                                    <tr  style="height: 40px ;text-align: center;">
                                        <th   >30 €</th>
                                    </tr>
                                    <tr  style="height: 40px;text-align: center; ">
                                        <th > Por persona </th>                                        
                                    </tr>
                                   
                                </table>
                            </div>

                            <div class="widget-body">
                                <form action="../assets/php/sender.php" method="post" id="booking-form2">
                                    <div class="booking-form-wrapper">
                                        <div class="custom-input-group">
                                            <input type="hidden"      name="type_reservation" value="groupe"/> &nbsp;
                                            <input type="hidden"      name="type_tour" value="Excursion"/> &nbsp;
                                            <input type="hidden"      name="name_tour" value="essaouira"/> &nbsp;

                                            Seleccione la fecha y los participantes: 
                                            <i class="bi bi-calendar3"></i>
                                            <input placeholder="Selecciona tu fecha" type="date" name="date"
                                                id="datepickerfroup" value="" class="calendar" required>
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
                                               <tipo de entrada="checkbox" class="radiosize" id="Guidegroup"  name="Guide" /> &nbsp;
                                           
                                               Guía(15€)
                                           </div>
                                          
                                           <div class="col-6">
                                            <tipo de entrada="checkbox"  class="radiosize"  id="Lunchgroup"  name="Lunch" />&nbsp;
                                          
                                               Almuerzo (15€ / por)  

                                           </div> 

                                           
                                       </div>
                                       <div class="custom-input-group">
                                      
                                           Precio total en  €<input type="text"   id="totalpricegroup" name="totalprice"  class="form-control" disabled>
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
                                        
                                       
                                       
                                        <div class="custom-input-group">
                                            <textarea cols="20" rows="7" name="message" placeholder="tu mensaje"></textarea>
                                        </div>
                                        <div class="custom-input-group">
                                            <div class="submite-btn">
                                                <button type="submit"  >Reserva ahora</button>
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


 Después de salir de Marrakech a las 8 de la mañana, será transportado personalmente a través del vasto e impresionante paisaje marroquí a Essaouira. En el viaje puede ver algunos pueblos dispersos y algunos camellos, ovejas y cabras pastando en el campo.

La vegetación luego cambia a árboles de Argán que solo crecen en la naturaleza y que proporcionan bayas para las cabras locales para comer. Si lo desea, es posible hacer una parada para degustar el aceite de argán en una pequeña cooperativa dirigida por mujeres locales, donde se extrae el aceite de argán de los árboles. Este aceite multiuso es muy famoso por sus usos en la cocina y también en cosmética.  

Muy cerca se puede contemplar una vista panorámica de Essaouira, una encantadora y artística ciudad azul y blanca. Una vez que llegue a Essaouira, podrá explorar sus peculiares maravillas en su tiempo libre. Pasee por los muelles, donde podrá ver cómo los pescadores descargan sus capturas del día y los barcos de pesca regresan a la costa, o disfrutar de los muchos buenos restaurantes del puerto y cenar pescado y marisco frescos.  

Essaouira es una ciudad pintoresca y diversa donde se puede explorar las murallas históricas y visitar la medina llena de artistas locales que venden sus artesanías hechas de madera de Thuya. Las murallas le darán una idea de cómo esta antigua aldea portuaria estaba armada contra la amenaza de invasión. La marquetería sigue siendo una especialidad tradicional de Essaouira; y otra hermosa atracción de la región es su tranquila playa, donde se puede pasar fácilmente una tarde relajante y tranquila.   

    Actividades opcionales para la excursión privada:
        Quad en varios campos: dunas, bosque... (2 horas)
        Paseo en camello por la playa de Essaouira (1 hora)

duración:   10 horas
distancia:   170Km x 2  
disponibilidad: todos los días
Hora de salida: 8h00
    
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
    
    <i class='bx bx-check'></i>  Almuerzo
    <i class='bx bx-check'></i>   Guía local
    <i class='bx bx-check'></i>  Consejos
    
    Lugar de encuentro:
    
    <i class='bx bx-check'></i>  Nuestro conductor lo recogerá en su hotel/Riad o en cualquier otro lugar a la hora acordada.
    <i class='bx bx-check'></i>  En caso de cualquier problema: por favor envíenos un correo electrónico o llámenos a los números que se muestran en la información de contacto.
    
    Easy Booking: Aceptado hasta las 6pm del día anterior (hora de Marrakech), Si tiene alguna dificultad para reservar o necesita otro servicio, utilice nuestro <a href="contact.php" > Formulario de contacto </a> 

    
    Formas de pago:
    
        En efectivo (Euros o MAD) a la llegada
    
    
 </pre>                    
                                </div>
                                <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body3" role="tabpanel"
                                    aria-labelledby="pills-package3">
                                    <div class="row g-4">
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/excursion/essaouira1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/excursion/essaouira2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/excursion/essaouira3.jpg" alt="">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/excursion/essaouira4.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                                <div class="package-gallary-item">
                                                    <img  src="../assets/images/excursion/essaouira5.jpg" alt="">
                                                </div>
                                        </div>
                                        
                                        <div class="col-6">
                                            <div class="package-gallary-item">
                                                <img  src="../assets/images/excursion/essaouira6.jpg" alt="">
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
          var nbr_prive=120 ;
          $('#totalpriceprive').val(nbr_prive );

         $('#Guide').change(function() {
           /* */
            if($(this).is(':checked')){
                nbr_prive+=15;
            }
            else{
                nbr_prive-=15;
            }
            $('#totalpriceprive').val(nbr_prive );

         });
         $('#Lunch').change(function() {
            /* */            
                var lunch=15;

            if($(this).is(':checked')){
                    nbr_prive+=lunch;    
            }
            else{
                nbr_prive-=lunch;    
           }
            $('#totalpriceprive').val(nbr_prive );

        });

         $( '#truist-adult' ).change(function() {
            $( "#Lunch" ).prop( "checked", false );
            $( "#Guide" ).prop( "checked", false );
          nbr= $( '#truist-adult' ).val();
          nbr_prive=parseInt(120 / nbr);

         $('#totalpriceprive').val(nbr_prive );

         });
  </script>
  <script >
    var nbr_group=30 ;
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
        var lunchgroup=15;

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
    nbr_group=30 * nbr;

   $('#totalpricegroup').val(nbr_group );

   });
</script>
</body>

<!-- Mirrored from demo.egenslab.com/html/tourxpro/demo/package-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2022 11:46:30 GMT -->

</html>
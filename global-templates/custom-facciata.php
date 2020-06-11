<div class="container">
    <?php //the_content(); ?>

    <div class="home-carousel card p-5 mb-5">

        <!--Carosello | Intervallo 10 secondi (10000 millisecondi)-->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="10000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">

                        <div class="col-6 col-md-6">
                            <div class="row slide-row">
                                <div class="col-12 col-md-2">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="col-12 col-md-10">
                                    <h4>Prenota il tuo appuntamento</h4>
                                    <div><a href="#"><button type="button" class="btn btn-primary mt-3">Chiama lo studio</button></a></div>
                                    <div><a href="#"><button type="button" class="btn btn-danger mt-3">Chiama per urgenze</button></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="row slide-row">
                                <div class="col-12 col-md-2">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-12 col-md-10">
                                    <h4>Orari</h4>
                                    <p>
                                        In questo momento lo studio è 
                                        <span id="ora_esatta">...</span>
                                    </p>

                                    <script>
                                        let data = new Date();
                                        let Dd, Hh, Mm;
                                        Dd = data.getDay();
                                        Hh = data.getHours();
                                        Mm = data.getMinutes();
                                        Ss = data.getSeconds();

                                        //let settimana = ['Domenica', 'Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato'];
                                        //document.getElementById("ora_esatta").innerHTML = settimana[Dd] + ', ' + Hh + ':' + Mm + ':' + Ss;

                                        if(Dd >= 1 && Dd <= 5){
                                            //Dal Lun-Ven dalle 9.00 alle 19.00
                                            if(Hh >= 9 && Hh <= 18){
                                                document.getElementById("ora_esatta").innerHTML = " aperto";
                                                document.getElementById("ora_esatta").style.color = "rgb(100, 197, 184)";
                                            }else{
                                                document.getElementById("ora_esatta").innerHTML = " chiuso";
                                                document.getElementById("ora_esatta").style.color = "#dc3545";
                                            }
                                        }else if(Dd === 6){
                                            //Sabato dalle 9.00 alle 13.00
                                            if(Hh >= 9 && Hh <= 12){
                                                document.getElementById("ora_esatta").innerHTML = " aperto";
                                                document.getElementById("ora_esatta").style.color = "rgb(100, 197, 184)";
                                            }else{
                                                document.getElementById("ora_esatta").innerHTML = " chiuso";
                                                document.getElementById("ora_esatta").style.color = "#dc3545";
                                            }
                                        }else{
                                            document.getElementById("ora_esatta").innerHTML = " chiuso";
                                            document.getElementById("ora_esatta").style.color = "#dc3545";
                                        }

                                        console.log(Dd);
                                        console.log(Hh);
                                    </script>

                                    <hr>

                                    <ul>
                                        <div class="d-flex justify-content-between">
                                            <li>Lun - Ven</li>
                                            <li><b>9 - 19</b></li>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <li>Sab</li>
                                            <li><b>9 - 13</b></li>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <li>Urgenze</li>
                                            <li><b>h24</b></li>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">

                        <div class="col-6 col-md-6">
                            <div class="row slide-row">
                                <div class="col-12 col-md-2">
                                <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="col-12 col-md-10">
                                    <h4><?php the_field('titolo_bacheca_2'); ?></h4>
                                    <?php the_field('descrizione_contatti'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11902.818538417368!2d12.659116!3d41.7700256!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xce9c24cdd6f2334e!2sNI.CA.%20S.r.l.!5e0!3m2!1sit!2sit!4v1589982525245!5m2!1sit!2sit" class="w-100" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>

                    </div>
                </div>
            </div>
            
        </div> <!--carousel-->
        <a class="carousel-control-prev py-2" href="#carouselExampleControls" role="button" data-slide="prev">
            <div class="text-center">
                <span aria-hidden="true"><i class="carousel-arrow fas fa-caret-left"></i></span>
                <span class="sr-only">Previous</span>
            </div>
        </a>
        <a class="carousel-control-next pt-1" href="#carouselExampleControls" role="button" data-slide="next">
            <div class="text-center">
                <span aria-hidden="true"><i class="carousel-arrow fas fa-caret-right"></i></span>
                <span class="sr-only">Next</span>
            </div>
        </a>

    </div>
</div>
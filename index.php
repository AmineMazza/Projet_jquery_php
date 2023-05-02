<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morocco Travel</title>
    <link rel="shortcut icon" href="img\iconVg.png" type="image/x-icon">


    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="css/themes/my-custom-theme.css" />
    <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>


    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">  

    <link href="css/styleAdmin.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      
     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
      <!-- Libraries Stylesheet -->
      <link href="lib/animate/animate.min.css" rel="stylesheet">
      <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
      <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>

<body>

    <!-- Page 1 -->
    <div data-role="page" id="page1">

        <div data-role="header" style="background-color: cornflowerblue; color: white;">
            <h1 class=" h1 ">Morocco Travel</h1>

            <a href="#panel" class="ui-btn ui-corner-all ui-icon-bars ui-btn-icon-notext"
                style="background-color: cornflowerblue; color: white;"></a>
            <!-- <a href="#user" data-transition="pop"class="ui-btn ui-icon-user ui-btn-b ui-btn-icon-notext ui-btn-corner-all "></a> -->

            <div data-role="navbar">
                <ul>
                    <li><a href="#page3"
                            class="ui-btn ui-icon-carat-d ui-btn-a ui-btn-icon-left ui-btn-corner-all">Villes</a></li>
                    <li><a href="#Lieu" class="ui-btn ui-icon-carat-d ui-btn-a ui-btn-icon-left ui-btn-corner-all">Places
                            Populaires</a></li>
                    <li><a href="#page5" class="ui-btn ui-icon-carat-d ui-btn-a ui-btn-icon-left ui-btn-corner-all">
                            Sondage</a></li>
                    <li><a href="#page6"
                            class="ui-btn ui-icon-carat-d ui-btn-a ui-btn-icon-left ui-btn-corner-all">Voyage
                            Organisé</a></li>

                </ul>
            </div>
        </div>
        <!-- Panel dans header  -->
        <div data-role="panel" id="panel">
            <!-- Pour afficher le text et icon : il faut préciser l'endroit de l'icon (ui-btn-icon-left)-->
           
            <!-- <a href="/Admin_dashboard/index.html" class="ui-btn ui-icon-user ui-btn-active ui-btn-icon-left ui-btn-corner-all">Dashboard</a><br> -->
            <a href="#page1" class="ui-btn ui-icon-home ui-btn-active ui-btn-icon-left ui-btn-corner-all">Home</a><br>
            <a href="#page3" class="ui-btn ui-icon-location ui-btn-active ui-btn-icon-left ui-btn-corner-all">Villes</a><br>
            <a href="#marra" class="ui-btn ui-icon-home ui-btn-active ui-btn-icon-left ui-btn-corner-all">Hôtels</a><br>
            <a href="#restau" class="ui-btn ui-icon-home ui-btn-active ui-btn-icon-left ui-btn-corner-all">Restaurants</a><br>
            <a href="#Lieu" class="ui-btn ui-icon-location ui-btn-active ui-btn-icon-left ui-btn-corner-all">Monuments Historiques</a><br>
        </div>
        <div data-role="main" class="ui-content">
            <!-- Contenu -->

            <!-- <form class="ui-filterable">
                <input id="autocomplete-input" data-type="search" placeholder="Search ...">
            </form>
            <ul data-role="listview" data-filter="true" data-filter-reveal="true" data-input="#autocomplete-input"
                data-inset="true">
                <li><a href="#">Hotel</a></li>
                <li><a href="#">Restaurants</a></li>
                <li><a href="#">Villes</a></li>
                <li><a href="#">Monuments Historiques</a></li>
            </ul> -->
            <div class="wrapper">
                <!-- <h2>Places :</h2> -->
                <div class="carousel owl-carousel">
                    <div class="card card-1">
                        <img src="img/marrakech.jpg" alt=""><br>
                    </div>
                    <div class="card card-2">
                        <img src="img/casablanca.jpg" alt=""><br>
                    </div>
                    <div class="card card-3">
                        <img src="img/agadir.jpg" alt=""><br>
                    </div>
                    <div class="card card-4">
                        <img src="img/marrakech.jpg" alt=""><br>
                    </div>
                    <div class="card card-5">
                        <img src="img/casablanca.jpg" alt=""><br>
                    </div>
                    <div class="card card-6">
                        <img src="img/sahara.jpeg" alt=""><br>
                    </div>
                </div>
                
            </div>

            <h2>Catégories :</h2>
            <ul data-role="listview" data-inset="true">
                <li>
                    <a href="#page3">
                        <img src="img\hotel.jpg">
                        <h2>Hôtels</h2>
                        <p>Voir Plus</p>
                    </a>
                </li>
                <li>
                    <a href="#Lieu">
                        <img src="img\monuments.jpg">
                        <h2>Monuments Historiques</h2>
                        <p>Voir Plus</p>
                    </a>
                </li>
                <li>
                    <a href="#restau    ">
                        <img src="img\restaurant.jpg">
                        <h2>Restaurants</h2>
                        <p>Voir Plus</p>
                    </a>
                </li>
            </ul>


            <!-- <div>
                <h2>Voyages Organisé :</h2>
                <h3>Marrakech</h3>
                <img src="img\marrakech.jpg" alt="" style="height: 250px; width: 350px;"><br>
                <a href="#page4" data-transition="turn" class="ui-btn ui-btn-inline ui-btn-b">Réserver</a>

                <h3>Casablanca</h3>
                <img src="img\casablanca.jpg" alt="" style="height: 250px; width: 350px;"><br>
                <a href="#page4" data-transition="turn" class="ui-btn ui-btn-inline ui-btn-b">Réserver</a>

                <h3>Agadir</h3>
                <img src="img\agadir.jpg" alt="" style="height: 250px; width: 350px;"><br>
                <a href="#page4" data-transition="turn" class="ui-btn ui-btn-inline ui-btn-b">Réserver</a>

            </div> -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <h6 class="section-title text-center text-primary text-uppercase">Les Voyages Organisé</h6>
                        <h1 class="mb-5"><span class="text-primary text-uppercase"></span></h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="img/sahara.jpeg" alt="">
                                    <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">3000 DH</small>
                                </div>
                                <div class="p-4 mt-2">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0">Déstination : Sahara</h5>
                                    </div>
                                    <p class="text-body mb-3">Suspendisse congue sem quis eros accumsan eget mattis massa vulputate phasellus.</p>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-sm btn-light rounded py-2 px-4" href="">Voir Détails</a>
                                        <a class="btn btn-sm btn-dark rounded py-2 px-4" href="#page4">Réserver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="img/marrakech.jpg" alt="">
                                    <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">500 DH</small>
                                </div>
                                <div class="p-4 mt-2">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0">Déstination : Marrakech</h5>
                                    </div>
                                    <p class="text-body mb-3">Suspendisse congue sem quis eros accumsan eget mattis massa vulputate phasellus.</p>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-sm btn-light rounded py-2 px-4" href="">Voir Détails</a>
                                        <a class="btn btn-sm btn-dark rounded py-2 px-4" href="#page4">Réserver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="img/agadir.jpg" alt="">
                                    <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">1000 DH</small>
                                </div>
                                <div class="p-4 mt-2">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0">Déstination : Agadir</h5>
                                    </div>
                                    <p class="text-body mb-3">Suspendisse congue sem quis eros accumsan eget mattis massa vulputate phasellus.</p>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-sm btn-light rounded py-2 px-4" href="">Voir Détails</a>
                                        <a class="btn btn-sm btn-dark rounded py-2 px-4" href="#page4">Réserver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="img/casablanca.jpg" alt="">
                                    <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">1500 DH</small>
                                </div>
                                <div class="p-4 mt-2">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0">Déstination : Casablanca</h5>
                                    </div>
                                    <p class="text-body mb-3">Suspendisse congue sem quis eros accumsan eget mattis massa vulputate phasellus.</p>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-sm btn-light rounded py-2 px-4" href="">Voir Détails</a>
                                        <a class="btn btn-sm btn-dark rounded py-2 px-4" href="#page4">Réserver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Notre Equipe</h6>
                    <h1 class="mb-5">Découvrire<span class="text-primary text-uppercase"> L'équipe</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/teamA.jpg" alt="">
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Amine MAZZA</h5>
                                <small>Ingénieur en Informatique</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/teamJ.jpg" alt="">
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Jaouad HAIDASSE</h5>
                                <small>Ingénieur en Informatique</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/teamY.jpg" alt="">
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Yassine OABI</h5>
                                <small>Ingénieur en Informatique</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/teamE.jpg" alt="">
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Youness EZZAOU</h5>
                                <small>Ingénieur en Informatique</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
            <script>
                $(".carousel").owlCarousel({
                    margin: 20,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 2000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        600: {
                            items: 2,
                            nav: false
                        },
                        1000: {
                            items: 3,
                            nav: false
                        }
                    }
                });
            </script>
            <!-- /Contenu -->
        </div>
        <div data-role="footer" style="background-color: cornflowerblue;">
            <div class="container-fluid text-light footer wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                <div class="container pb-5">
                    <div class="row g-3">
                        <div class="col-md-6 col-lg-3">
                            <h6 class="section-title text-start text-uppercase mb-4">Contact</h6>
                            <p class="btn btn-link"><i class="fa fa-map-marker-alt me-3"></i>Université Privée de Marrakech</p>
                            <p class="btn btn-link"><i class="fa fa-envelope me-3"></i>Ticinfo2@upm.uca</p>
                            <!-- <p class="btn btn-link"><i class="fa fa-envelope me-3"></i>test</p> -->
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="row gy-5 g-4">
                                <div class="col-md-6">
                                    <h6 class="section-title text-start text-uppercase mb-4">Notre Projet</h6>
                                    <a class="btn btn-link" href="">Qui Somme Nous</a>
                                    <a class="btn btn-link" href="">Support</a>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="section-title text-start text-uppercase mb-4">Services</h6>
                                    <a class="btn btn-link" href="">Voyages Organisé</a>
                                    <a class="btn btn-link" href="">Voyages Pérsonalisé</a>
                                    <a class="btn btn-link" href="">Découvrir le Maroc</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>

    <!-- Page 2 -->
    <div data-role="page" id="page2" data-dialog="true">
        <div data-role="header" style="background-color: cornflowerblue; color: white;">
            <h1>Welcome to Page 2 'Cart'</h1>
            <a href="#page1" class="ui-btn ui-btn-right ui-corner-all ui-icon-home ui-btn-icon-notext">Home</a>


        </div>
        <div data-role="main" class="ui-content">
            <p>Afrique</p>
            <p>Maroc</p>
            <p>Marrakech</p>
            <a href="#page1" data-transition="pop">go back to page 1</a>


        </div>
        <div data-role="footer" style="background-color: cornflowerblue; color: white;">
            <h1>Footer 2</h1>
        </div>
    </div>

    <!-- Page 3 -->
    <div data-role="page" id="page3" data-dialog="true">
        <div data-role="header" style="background-color: cornflowerblue; color: white;">
            <h1>Welcome to Page 3:Villes</h1>
            <a href="#page1" class="ui-btn ui-btn-right ui-corner-all ui-icon-home ui-btn-icon-notext">Home</a>


        </div>
        <div data-role="main" class="ui-content">
            <ul>
                <p><a href="#marra"> Marrakech</a> </p>
                <p><a href="#casa"> Casablanca</a> </p>
                <p><a href="#agadir"> Agadir</a> </p>
                <p><a href="#Tanger"> Tanger</a> </p>
                <p><a href="#tetouane"> Tetouane</a> </p>
            </ul>
            <!-- <a href="#page1" data-transition="pop"> back to Home</a> -->

        </div>
        <div data-role="footer" style="background-color: cornflowerblue; color: white;">
            <h1>Footer 3</h1>
        </div>
    </div>
     <!-- Page des hotels-->
    
  
     <div data-role="page" id="marra">
        <div data-role="header" style="background-color: cornflowerblue; color: white;">
            <h1>Morroco Travel</h1>
            <a href="#page1" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-notext">Home</a>

        </div>
        <div data-role="main" class="ui-content">
             <!-- code des cartes  des hotels-->
            <?php
                require 'database.php';
                
                $req=$pdo->query("SELECT * FROM hotel where localisation='marrakech'")or die(print_r($pdo-> errorInfo()));
                $don=$req->execute();
                while($don=$req->fetch()){
                    echo'
                    <div class="feature-one">
                    <img src="img/' . $don['image'] . '">
                        <div class="feature-details">
                        
                        <h2 style=" top: 0; margin-bottom: 0;">'. $don["NomHotel"] .' </h2>
                        <div style="margin-bottom: 4px;" class="voyage-time" >
                            <i style="color: yellow;" class="bx bxs-star"></i>
                            <i style="color: yellow;" class="bx bxs-star"></i>
                            <i style="color: yellow;" class="bx bxs-star"></i>
                            <i style="color: yellow;" class="bx bxs-star"></i>
                        </div>
                        <div class="voyage-time">
                            <i class="bx bx-map"></i>
                            <span class="text">'. $don["localisation"] .'</span>
                        </div>
                        <div class="voyage-time">
                            <i class="bx bx-world"></i>
                            <span class="text">'. $don["Description"] .'</span>
                        </div>
                        <div style="margin-bottom: 0;" class="voyage-time">
                            <i class="bx bx-phone"></i>
                            <span class="text">'. $don["Telephone"] .'</span>
                        </div>
                        <div class="hotel-card_pricing text-center">
                            <a href="https://mamounia.com/fr/"> <button type="button" class="btn btn-black" style="margin-top: 20px;">Voir plus</button></a>
                        </div>
                    </div>
                    </div>';

                }
                    echo '</div>
            </section>'
            ?>
         <div data-role="footer" style="background-color: cornflowerblue;">
            <div class="container-fluid text-light footer wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                <div class="container pb-5">
                    <div class="row g-3">
                        <div class="col-md-6 col-lg-3">
                            <h6 class="section-title text-start text-uppercase mb-4">Contact</h6>
                            <p class="btn btn-link"><i class="fa fa-map-marker-alt me-3"></i>Université Privée de Marrakech</p>
                            <p class="btn btn-link"><i class="fa fa-envelope me-3"></i>Ticinfo2@upm.uca</p>
                            <!-- <p class="btn btn-link"><i class="fa fa-envelope me-3"></i>test</p> -->
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="row gy-5 g-4">
                                <div class="col-md-6">
                                    <h6 class="section-title text-start text-uppercase mb-4">Notre Projet</h6>
                                    <a class="btn btn-link" href="">Qui Somme Nous</a>
                                    <a class="btn btn-link" href="">Support</a>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="section-title text-start text-uppercase mb-4">Services</h6>
                                    <a class="btn btn-link" href="">Voyages Organisé</a>
                                    <a class="btn btn-link" href="">Voyages Pérsonalisé</a>
                                    <a class="btn btn-link" href="">Découvrir le Maroc</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <div data-role="page" id="casa">
        <div data-role="header" style="background-color: cornflowerblue; color: white;">
            <h1>Morroco Travel</h1>
            <a href="#page1" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-notext">Home</a>

        </div>
        <div data-role="main" class="ui-content">
             <!-- code des cartes  des hotels-->
            <?php
                require 'database.php';
                
                $req=$pdo->query("SELECT * FROM hotel where localisation='casablanca'")or die(print_r($pdo-> errorInfo()));
                $don=$req->execute();
                while($don=$req->fetch()){
                    echo'
                    <div class="feature-one">
                    <img src="img/' . $don['image'] . '">
                        <div class="feature-details">
                        
                        <h2 style=" top: 0; margin-bottom: 0;">'. $don["NomHotel"] .' </h2>
                        <div style="margin-bottom: 4px;" class="voyage-time" >
                            <i style="color: yellow;" class="bx bxs-star"></i>
                            <i style="color: yellow;" class="bx bxs-star"></i>
                            <i style="color: yellow;" class="bx bxs-star"></i>
                            <i style="color: yellow;" class="bx bxs-star"></i>
                        </div>
                        <div class="voyage-time">
                            <i class="bx bx-map"></i>
                            <span class="text">'. $don["localisation"] .'</span>
                        </div>
                        <div class="voyage-time">
                            <i class="bx bx-world"></i>
                            <span class="text">'. $don["Description"] .'</span>
                        </div>
                        <div style="margin-bottom: 0;" class="voyage-time">
                            <i class="bx bx-phone"></i>
                            <span class="text">'. $don["Telephone"] .'</span>
                        </div>
                        <div class="hotel-card_pricing text-center">
                            <a href="https://mamounia.com/fr/"> <button type="button" class="btn btn-black" style="margin-top: 20px;">Voir plus</button></a>
                        </div>
                    </div>
                    </div>';

                }
                    echo '</div>
            </section>'
            ?>
         <div data-role="footer" style="background-color: cornflowerblue;">
            <div class="container-fluid text-light footer wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                <div class="container pb-5">
                    <div class="row g-3">
                        <div class="col-md-6 col-lg-3">
                            <h6 class="section-title text-start text-uppercase mb-4">Contact</h6>
                            <p class="btn btn-link"><i class="fa fa-map-marker-alt me-3"></i>Université Privée de Marrakech</p>
                            <p class="btn btn-link"><i class="fa fa-envelope me-3"></i>Ticinfo2@upm.uca</p>
                            <!-- <p class="btn btn-link"><i class="fa fa-envelope me-3"></i>test</p> -->
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="row gy-5 g-4">
                                <div class="col-md-6">
                                    <h6 class="section-title text-start text-uppercase mb-4">Notre Projet</h6>
                                    <a class="btn btn-link" href="">Qui Somme Nous</a>
                                    <a class="btn btn-link" href="">Support</a>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="section-title text-start text-uppercase mb-4">Services</h6>
                                    <a class="btn btn-link" href="">Voyages Organisé</a>
                                    <a class="btn btn-link" href="">Voyages Pérsonalisé</a>
                                    <a class="btn btn-link" href="">Découvrir le Maroc</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-role="page" id="agadir">
        <div data-role="header" style="background-color: cornflowerblue; color: white;">
            <h1>Morroco Travel</h1>
            <a href="#page1" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-notext">Home</a>

        </div>
        <div data-role="main" class="ui-content">
             <!-- code des cartes  des hotels-->
            <?php
                require 'database.php';
                
                $req=$pdo->query("SELECT * FROM hotel where localisation='agadir'")or die(print_r($pdo-> errorInfo()));
                $don=$req->execute();
                while($don=$req->fetch()){
                    echo'
                    <div class="feature-one">
                    <img src="img/' . $don['image'] . '">
                        <div class="feature-details">
                        
                        <h2 style=" top: 0; margin-bottom: 0;">'. $don["NomHotel"] .' </h2>
                        <div style="margin-bottom: 4px;" class="voyage-time" >
                            <i style="color: yellow;" class="bx bxs-star"></i>
                            <i style="color: yellow;" class="bx bxs-star"></i>
                            <i style="color: yellow;" class="bx bxs-star"></i>
                            <i style="color: yellow;" class="bx bxs-star"></i>
                        </div>
                        <div class="voyage-time">
                            <i class="bx bx-map"></i>
                            <span class="text">'. $don["localisation"] .'</span>
                        </div>
                        <div class="voyage-time">
                            <i class="bx bx-world"></i>
                            <span class="text">'. $don["Description"] .'</span>
                        </div>
                        <div style="margin-bottom: 0;" class="voyage-time">
                            <i class="bx bx-phone"></i>
                            <span class="text">'. $don["Telephone"] .'</span>
                        </div>
                        <div class="hotel-card_pricing text-center">
                            <a href="https://mamounia.com/fr/"> <button type="button" class="btn btn-black" style="margin-top: 20px;">Voir plus</button></a>
                        </div>
                    </div>
                    </div>';

                }
                    echo '</div>
            </section>'
            ?>
         <div data-role="footer" style="background-color: cornflowerblue;">
            <div class="container-fluid text-light footer wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                <div class="container pb-5">
                    <div class="row g-3">
                        <div class="col-md-6 col-lg-3">
                            <h6 class="section-title text-start text-uppercase mb-4">Contact</h6>
                            <p class="btn btn-link"><i class="fa fa-map-marker-alt me-3"></i>Université Privée de Marrakech</p>
                            <p class="btn btn-link"><i class="fa fa-envelope me-3"></i>Ticinfo2@upm.uca</p>
                            <!-- <p class="btn btn-link"><i class="fa fa-envelope me-3"></i>test</p> -->
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="row gy-5 g-4">
                                <div class="col-md-6">
                                    <h6 class="section-title text-start text-uppercase mb-4">Notre Projet</h6>
                                    <a class="btn btn-link" href="">Qui Somme Nous</a>
                                    <a class="btn btn-link" href="">Support</a>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="section-title text-start text-uppercase mb-4">Services</h6>
                                    <a class="btn btn-link" href="">Voyages Organisé</a>
                                    <a class="btn btn-link" href="">Voyages Pérsonalisé</a>
                                    <a class="btn btn-link" href="">Découvrir le Maroc</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-role="page" id="Tanger">
        <div data-role="header" style="background-color: cornflowerblue; color: white;">
            <h1>Morroco Travel</h1>
            <a href="#page1" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-notext">Home</a>

        </div>
        <div data-role="main" class="ui-content">
             <!-- code des cartes  des hotels-->
            <?php
                require 'database.php';
                
                $req=$pdo->query("SELECT * FROM hotel where localisation='Tanger'")or die(print_r($pdo-> errorInfo()));
                $don=$req->execute();
                while($don=$req->fetch()){
                    echo'
                    <div class="feature-one">
                    <img src="img/' . $don['image'] . '">
                        <div class="feature-details">
                        
                        <h2 style=" top: 0; margin-bottom: 0;">'. $don["NomHotel"] .' </h2>
                        <div style="margin-bottom: 4px;" class="voyage-time" >
                            <i style="color: yellow;" class="bx bxs-star"></i>
                            <i style="color: yellow;" class="bx bxs-star"></i>
                            <i style="color: yellow;" class="bx bxs-star"></i>
                            <i style="color: yellow;" class="bx bxs-star"></i>
                        </div>
                        <div class="voyage-time">
                            <i class="bx bx-map"></i>
                            <span class="text">'. $don["localisation"] .'</span>
                        </div>
                        <div class="voyage-time">
                            <i class="bx bx-world"></i>
                            <span class="text">'. $don["Description"] .'</span>
                        </div>
                        <div style="margin-bottom: 0;" class="voyage-time">
                            <i class="bx bx-phone"></i>
                            <span class="text">'. $don["Telephone"] .'</span>
                        </div>
                        <div class="hotel-card_pricing text-center">
                            <a href="https://mamounia.com/fr/"> <button type="button" class="btn btn-black" style="margin-top: 20px;">Voir plus</button></a>
                        </div>
                    </div>
                    </div>';

                }
                    echo '</div>
            </section>'
            ?>
         <div data-role="footer" style="background-color: cornflowerblue;">
            <div class="container-fluid text-light footer wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                <div class="container pb-5">
                    <div class="row g-3">
                        <div class="col-md-6 col-lg-3">
                            <h6 class="section-title text-start text-uppercase mb-4">Contact</h6>
                            <p class="btn btn-link"><i class="fa fa-map-marker-alt me-3"></i>Université Privée de Marrakech</p>
                            <p class="btn btn-link"><i class="fa fa-envelope me-3"></i>Ticinfo2@upm.uca</p>
                            <!-- <p class="btn btn-link"><i class="fa fa-envelope me-3"></i>test</p> -->
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="row gy-5 g-4">
                                <div class="col-md-6">
                                    <h6 class="section-title text-start text-uppercase mb-4">Notre Projet</h6>
                                    <a class="btn btn-link" href="">Qui Somme Nous</a>
                                    <a class="btn btn-link" href="">Support</a>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="section-title text-start text-uppercase mb-4">Services</h6>
                                    <a class="btn btn-link" href="">Voyages Organisé</a>
                                    <a class="btn btn-link" href="">Voyages Pérsonalisé</a>
                                    <a class="btn btn-link" href="">Découvrir le Maroc</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-role="page" id="tetouane">
        <div data-role="header" style="background-color: cornflowerblue; color: white;">
            <h1>Morroco Travel</h1>
            <a href="#page1" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-notext">Home</a>

        </div>
        <div data-role="main" class="ui-content">
             <!-- code des cartes  des hotels-->
            <?php
                require 'database.php';
                
                $req=$pdo->query("SELECT * FROM hotel where localisation='tetouane'")or die(print_r($pdo-> errorInfo()));
                $don=$req->execute();
                while($don=$req->fetch()){
                    echo'
                    <div class="feature-one">
                    <img src="img/' . $don['image'] . '">
                        <div class="feature-details">
                        
                        <h2 style=" top: 0; margin-bottom: 0;">'. $don["NomHotel"] .' </h2>
                        <div style="margin-bottom: 4px;" class="voyage-time" >
                            <i style="color: yellow;" class="bx bxs-star"></i>
                            <i style="color: yellow;" class="bx bxs-star"></i>
                            <i style="color: yellow;" class="bx bxs-star"></i>
                            <i style="color: yellow;" class="bx bxs-star"></i>
                        </div>
                        <div class="voyage-time">
                            <i class="bx bx-map"></i>
                            <span class="text">'. $don["localisation"] .'</span>
                        </div>
                        <div class="voyage-time">
                            <i class="bx bx-world"></i>
                            <span class="text">'. $don["Description"] .'</span>
                        </div>
                        <div style="margin-bottom: 0;" class="voyage-time">
                            <i class="bx bx-phone"></i>
                            <span class="text">'. $don["Telephone"] .'</span>
                        </div>
                        <div class="hotel-card_pricing text-center">
                            <a href="https://mamounia.com/fr/"> <button type="button" class="btn btn-black" style="margin-top: 20px;">Voir plus</button></a>
                        </div>
                    </div>
                    </div>';

                }
                    echo '</div>
            </section>'
            ?>
         <div data-role="footer" style="background-color: cornflowerblue;">
            <div class="container-fluid text-light footer wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                <div class="container pb-5">
                    <div class="row g-3">
                        <div class="col-md-6 col-lg-3">
                            <h6 class="section-title text-start text-uppercase mb-4">Contact</h6>
                            <p class="btn btn-link"><i class="fa fa-map-marker-alt me-3"></i>Université Privée de Marrakech</p>
                            <p class="btn btn-link"><i class="fa fa-envelope me-3"></i>Ticinfo2@upm.uca</p>
                            <!-- <p class="btn btn-link"><i class="fa fa-envelope me-3"></i>test</p> -->
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="row gy-5 g-4">
                                <div class="col-md-6">
                                    <h6 class="section-title text-start text-uppercase mb-4">Notre Projet</h6>
                                    <a class="btn btn-link" href="">Qui Somme Nous</a>
                                    <a class="btn btn-link" href="">Support</a>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="section-title text-start text-uppercase mb-4">Services</h6>
                                    <a class="btn btn-link" href="">Voyages Organisé</a>
                                    <a class="btn btn-link" href="">Voyages Pérsonalisé</a>
                                    <a class="btn btn-link" href="">Découvrir le Maroc</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page 4 : reservation -->
    <div data-role="page" id="page4" data-dialog="true">
        <div data-role="header" style="background-color: cornflowerblue; color: white;">
            <h1>Reservation</h1>
            <a href="#page1" class="ui-btn ui-btn-right ui-corner-all ui-icon-home ui-btn-icon-notext">Home</a>
        </div>
        <div data-role="main" class="ui-content">
        <form method="post" action="insert.php" >
            
           
                <label for="nom">Votre Nom :</label>
                <input type="text" name="nom" id="nom" placeholder="Nom" value="">


                <label for="prenom">Votre Prénom :</label>
                <input type="text" name="prenom" id="prenom" placeholder="Prénom" value="">

               

                <label for="tel">Telephone:</label>
                <input type="tel" name="tel" id="tel" placeholder="+212693399476" value="">

                <label for="Email">Votre Email :</label>
                <input type="text" name="Email" id="Email" placeholder="amine@gmail.com" value="">

                 <label for="Email">Votre Nationalité :</label>
                 <input type="text" name="Nationalité" id="Nationalité" placeholder="Marocain" value="">

                <label for="personnes">Combien de perssones :</label>
                <input type="number" name="number" pattern="[1-9]* " id="personnes" placeholder="1" value="">


                <!-- <label for="propos">Proposition:</label>
                <input type="text" name="propos" id="propos" placeholder="Votre Proposition" value=""> -->


                <!-- <a href="#page4" data-transition="turn"  class="ui-btn ui-btn-inline ui-btn-b">Reserver</a> -->
                <input type="submit" name="Reserver" value="Reserver">
            </form>
                <a href="#page1" data-transition="turn" class="ui-btn ui-btn-inline ui-btn-b">Go back</a>
            
        </div>
        <div data-role="footer" style="background-color: cornflowerblue; color: white;">
            <h1>Footer 2</h1>
        </div>
    </div>

    <!-- Page 5 : Proposition voyages -->

    <div data-role="page" id="page5" data-dialog="true">
        <div data-role="header" style="background-color: cornflowerblue; color: white;">
            <h1>Welcome to Propositions</h1>
            <a href="#page1" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-notext">Home</a>

        </div>
        <div data-role="main" class="ui-content">
            <!--  content -->
            <div>
                <h2> Le Trajet : Toubkal Tour</h2>
                <img src="img\toubkal.jpg" alt="" style="height: 250px; width: 320px;"><br>
                <form>
                    <label>
                        <input type="radio" name="radio-choice-0" id="radio-choice-0a">J'aime
                    </label>
                
                    <label for="radio-choice-0b">J'aime pas</label>
                    <input type="radio" name="radio-choice-0" id="radio-choice-0b" class="custom">
                
                    <input type="submit" value="Submit">

            </form>
            </div>

        </div>
        <div data-role="footer" style="background-color: cornflowerblue; color: white;">
            <h1>Footer 2</h1>
        </div>
    </div>
    
    <!-- Lieux Historique -->
    <div data-role="page" id="Lieu">
        <div data-role="header" style="background-color: cornflowerblue; color: white;">
            <h1>Morroco Travel</h1>
            <a href="#page1" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-notext">Home</a>

        </div>
        <div data-role="main" class="ui-content">
             <!-- code des cartes  des hotels-->
            <?php
                require 'database.php';
                
                $req=$pdo->query("SELECT * FROM lieux_touristique ")or die(print_r($pdo-> errorInfo()));
                $don=$req->execute();
                while($don=$req->fetch()){
                    echo'
                    <div class="feature-one">
                    <img src="img/' . $don['image'] . '">
                        <div class="feature-details">
                        
                        <h2 style=" top: 0; margin-bottom: 0;">'. $don["titre"] .' </h2>
                        <div style="margin-bottom: 4px;" class="voyage-time" >
                            <i style="color: yellow;" class="bx bxs-star"></i>
                            <i style="color: yellow;" class="bx bxs-star"></i>
                            <i style="color: yellow;" class="bx bxs-star"></i>
                            <i style="color: yellow;" class="bx bxs-star"></i>
                        </div>
                        <div class="voyage-time">
                            <i class="bx bx-map"></i>
                            <span class="text">'. $don["localisation"] .'</span>
                        </div>
                        <div class="voyage-time">
                            <i class="bx bx-world"></i>
                            <span class="text">'. $don["description"] .'</span>
                        </div>
                        <div class="hotel-card_pricing text-center">
                            <a href="https://mamounia.com/fr/"> <button type="button" class="btn btn-black" style="margin-top: 20px;">Voir plus</button></a>
                        </div>
                    </div>
                    </div>';

                }
                    echo '</div>
            </section>'
            ?>
         <div data-role="footer" style="background-color: cornflowerblue;">
            <div class="container-fluid text-light footer wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                <div class="container pb-5">
                    <div class="row g-3">
                        <div class="col-md-6 col-lg-3">
                            <h6 class="section-title text-start text-uppercase mb-4">Contact</h6>
                            <p class="btn btn-link"><i class="fa fa-map-marker-alt me-3"></i>Université Privée de Marrakech</p>
                            <p class="btn btn-link"><i class="fa fa-envelope me-3"></i>Ticinfo2@upm.uca</p>
                            <!-- <p class="btn btn-link"><i class="fa fa-envelope me-3"></i>test</p> -->
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="row gy-5 g-4">
                                <div class="col-md-6">
                                    <h6 class="section-title text-start text-uppercase mb-4">Notre Projet</h6>
                                    <a class="btn btn-link" href="">Qui Somme Nous</a>
                                    <a class="btn btn-link" href="">Support</a>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="section-title text-start text-uppercase mb-4">Services</h6>
                                    <a class="btn btn-link" href="">Voyages Organisé</a>
                                    <a class="btn btn-link" href="">Voyages Pérsonalisé</a>
                                    <a class="btn btn-link" href="">Découvrir le Maroc</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // Lieux Historique -->

    <!-- restau -->
    <div data-role="page" id="restau">
        <div data-role="header" style="background-color: cornflowerblue; color: white;">
            <h1>Morroco Travel</h1>
            <a href="#page1" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-notext">Home</a>

        </div>
        <div data-role="main" class="ui-content">
             <!-- code des cartes  des hotels-->
            <?php
                require 'database.php';
                
                $req=$pdo->query("SELECT * FROM restaurant ")or die(print_r($pdo-> errorInfo()));
                $don=$req->execute();
                while($don=$req->fetch()){
                    echo'
                    <div class="feature-one">
                    <img src="img/' . $don['image'] . '">
                        <div class="feature-details">
                        
                        <h2 style=" top: 0; margin-bottom: 0;">'. $don["NomRestaurant"] .' </h2>
                        <div style="margin-bottom: 4px;" class="voyage-time" >
                            <i style="color: yellow;" class="bx bxs-star"></i>
                            <i style="color: yellow;" class="bx bxs-star"></i>
                            <i style="color: yellow;" class="bx bxs-star"></i>
                            <i style="color: yellow;" class="bx bxs-star"></i>
                        </div>
                        <div class="voyage-time">
                            <i class="bx bx-map"></i>
                            <span class="text">'. $don["localisation"] .'</span>
                        </div>
                        <div class="voyage-time">
                            <i class="bx bx-world"></i>
                            <span class="text">'. $don["Telephone"] .'</span>
                        </div>
                        <div class="hotel-card_pricing text-center">
                            <a href="https://mamounia.com/fr/"> <button type="button" class="btn btn-black" style="margin-top: 20px;">Voir plus</button></a>
                        </div>
                    </div>
                    </div>';

                }
                    echo '</div>
            </section>'
            ?>
         <div data-role="footer" style="background-color: cornflowerblue;">
            <div class="container-fluid text-light footer wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                <div class="container pb-5">
                    <div class="row g-3">
                        <div class="col-md-6 col-lg-3">
                            <h6 class="section-title text-start text-uppercase mb-4">Contact</h6>
                            <p class="btn btn-link"><i class="fa fa-map-marker-alt me-3"></i>Université Privée de Marrakech</p>
                            <p class="btn btn-link"><i class="fa fa-envelope me-3"></i>Ticinfo2@upm.uca</p>
                            <!-- <p class="btn btn-link"><i class="fa fa-envelope me-3"></i>test</p> -->
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="row gy-5 g-4">
                                <div class="col-md-6">
                                    <h6 class="section-title text-start text-uppercase mb-4">Notre Projet</h6>
                                    <a class="btn btn-link" href="">Qui Somme Nous</a>
                                    <a class="btn btn-link" href="">Support</a>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="section-title text-start text-uppercase mb-4">Services</h6>
                                    <a class="btn btn-link" href="">Voyages Organisé</a>
                                    <a class="btn btn-link" href="">Voyages Pérsonalisé</a>
                                    <a class="btn btn-link" href="">Découvrir le Maroc</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // restau -->
     <!-- Page 6 :  voyages Organisé-->

     <div data-role="page" id="page6">
        <div data-role="header" style="background-color: cornflowerblue; color: white;">
            <h1>Morroco Travel</h1>
            <a href="#page1" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-notext">Home</a>

        </div>
        <div data-role="main" class="ui-content">
            <!--  content -->
        <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h6 class="section-title text-center text-primary text-uppercase">Les Voyages Organisé</h6>
                <h1 class="mb-5"><span class="text-primary text-uppercase"></span></h1>
            </div>
<?php
    require 'database.php';
    
    $req=$pdo->query("SELECT * FROM voyage")or die(print_r($pdo-> errorInfo()));
    $don=$req->execute();
    while($don=$req->fetch()){
        echo'
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/' . $don['image'] . '" alt="">

                            <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">'. $don["prix"] .'</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Déstination : '. $don["destination"] .'</h5>
                            </div>
                            <p class="text-body mb-3">'. $don["Description"] .'</p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-light rounded py-2 px-4" href="">Voir Détails</a>
                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href="#page4">Réserver</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>';
            }
            echo '</div>
            </div>'
            ?>
            <div data-role="footer" style="background-color: cornflowerblue;">
                <div class="container-fluid text-light footer wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                    <div class="container pb-5">
                        <div class="row g-3">
                            <div class="col-md-6 col-lg-3">
                                <h6 class="section-title text-start text-uppercase mb-4">Contact</h6>
                                <p class="btn btn-link"><i class="fa fa-map-marker-alt me-3"></i>Université Privée de Marrakech</p>
                                <p class="btn btn-link"><i class="fa fa-envelope me-3"></i>Ticinfo2@upm.uca</p>
                                <!-- <p class="btn btn-link"><i class="fa fa-envelope me-3"></i>test</p> -->
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="row gy-5 g-4">
                                    <div class="col-md-6">
                                        <h6 class="section-title text-start text-uppercase mb-4">Notre Projet</h6>
                                        <a class="btn btn-link" href="">Qui Somme Nous</a>
                                        <a class="btn btn-link" href="">Support</a>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="section-title text-start text-uppercase mb-4">Services</h6>
                                        <a class="btn btn-link" href="">Voyages Organisé</a>
                                        <a class="btn btn-link" href="">Voyages Pérsonalisé</a>
                                        <a class="btn btn-link" href="">Découvrir le Maroc</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--User  -->
    <div data-role="page" id="user" data-dialog="true">
        <div data-role="header" style="background-color: cornflowerblue; color: white;">
            <h1>header</h1>
        </div>
        <div data-role="main" class="ui-content">
            <div>
                <h1 style="margin-top: 25px;">Welcome Amine</h1>
                <li>Role : User</li>
                <li>Email : Amine@gmail.com</li>
                <li>Tel : 0693399476</li>
            </div>
            <div class="img">
                <img src="/Amine-Portfolio/img/2022_08_13_20_14_IMG_1536.JPG" style="height: 150px; width: 150px;
                    margin-left: 240px; margin-top: -500px;
                    border-radius: 50%;" alt="profil">
            </div>
        </div>
        <div data-role="footer" style="background-color: cornflowerblue; color: white;">
            <!-- <h1>Footer</h1> -->
        </div>
    </div>



   <!-- JavaScript Libraries -->
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
   <script src="lib/wow/wow.min.js"></script>
   <script src="lib/easing/easing.min.js"></script>
   <script src="lib/waypoints/waypoints.min.js"></script>
   <script src="lib/counterup/counterup.min.js"></script>
   <script src="lib/owlcarousel/owl.carousel.min.js"></script>
   <script src="lib/tempusdominus/js/moment.min.js"></script>
   <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
   <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

   <!-- Template Javascript -->
   <script src="js/main.js"></script>
</body>

</html>
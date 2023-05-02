<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morocco Travel</title>

    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="css/themes/my-custom-theme.css" />
    <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>


    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">    
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
    <?php

    if(isset($_POST['Reserver'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['Email'];
        $nationaliter = $_POST['Nationalité'];
        $telephon = $_POST['tel'];
        $number= $_POST['number'];



        if(empty($nom) || empty($prenom) || empty($email)  || empty($nationaliter)  || empty($telephon)){
        echo "veuillez remplir tous les champs";
            }
    else{
    require_once 'database.php';
    
        $sql = "INSERT INTO `reservation` (`id`, `nom`, `prenom`, `email`, `nationalite`, `telephone`, `number`) VALUES (null ,'$nom', '$prenom', '$email', '$nationaliter', '$telephon', '$number')";
        
        $query=$pdo->prepare($sql);
        $query->execute();
        
        }

    }
    ?>
   <!-- Chek Out -->
    <div data-role="page" id="insert" data-dialog="true" style="margin-top:200px ;">
            <div data-role="header" style="background-color: cornflowerblue; color: white;">
                <h1>Check Out</h1>
            </div>
            <div data-role="main" class="ui-content">
        <?php  
                if (isset($query)) {
                    
                    echo "<h3>Votre reservation effectué avec succes</h3>";
                }else{
                    echo "<h3>Erreur lors de la réservation</h3>";
                }
            ?>
            </div>
            <div data-role="footer" style="background-color: cornflowerblue; color: white;">
                <h1></h1>
            </div>
        </div>
    <!-- Chek Out -->

</body>
</html>

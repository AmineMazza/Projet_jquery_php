<?php

    // 1-Ajouter Reservation

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
                
                    $requete = "INSERT INTO `reservation` (`id`, `nom`, `prenom`, `email`, `nationalite`, `telephone`, `number`) 
                                VALUES (null ,'$nom', '$prenom', '$email', '$nationaliter', '$telephon', '$number')";
                    $query=mysqli_query($con,$requete);
                    if(isset($query)){
                        header('Location: reservation.php');
                        exit; 

                    }else{
                        echo"<h1>Erreur de l'insertion</h1>";
                    }
            }
}


        // 2-Ajouter Ville :

        if(isset($_POST['AjouterVille'])){
            $nom_ville = $_POST['nom_ville'];
            $descreption = $_POST['descreption'];
            $image = $_POST['image'];
            
    
                if(empty($nom_ville) || empty($descreption) || empty($image)){
                    echo "veuillez remplir tous les champs";
                }
        else{
                 require_once 'database.php';
            
                $requete = "INSERT INTO `ville`(`id`, `nom_ville`, `descreption`, `image`) VALUES (null ,'$nom_ville', '$descreption', '$image')";
                
                $query=mysqli_query($con,$requete);
                if(isset($query)){
                    header('Location: ville.php');
                    exit; 
        
                }else{
                    echo"<h1>Erreur de l'insertion</h1>";
                }
        
                
            }               
        }


        // 3-Ajouter Hotel :
       
        if(isset($_POST['AjouterHotel'])){
            $NomHotel = $_POST['NomHotel'];
            $localisation = $_POST['localisation'];
            $Description = $_POST['Description'];
            $Telephone = $_POST['Telephone'];
            $image = $_POST['image'];
            
    
                if(empty($NomHotel) || empty($localisation) || empty($Description) || empty($Telephone) ||empty($image)){
                    echo "veuillez remplir tous les champs";
                }
        else{
                 require_once 'database.php';
            
                $requete = "INSERT INTO `hotel`(`id`, `NomHotel`, `localisation`,`Description`, `Telephone`, `image`) VALUES (null ,'$NomHotel','$localisation','$Description', '$Telephone','$image')";
                $query=mysqli_query($con,$requete);
                if(isset($query)){
                    header('Location: Hotel.php');
                    exit; 
        
                }else{
                    echo"<h1>Erreur de l'insertion</h1>";
                }
        
                
            }               
        }


        // 4-Ajouter Restaurant :
       
        if(isset($_POST['AjouterRestaurant'])){
            $NomRestaurant = $_POST['NomRestaurant'];
            $localisation = $_POST['localisation'];
            $Description = $_POST['Description'];
            $Telephone = $_POST['Telephone'];
            $image = $_POST['image'];
            
    
                if(empty($NomRestaurant)|| empty($localisation) || empty($Description) || empty($Telephone) ||empty($image)){
                    echo "veuillez remplir tous les champs";
                }
        else{
                 require_once 'database.php';
            
                $requete = "INSERT INTO `restaurant`(`id`, `NomRestaurant`, `localisation`, `Description`, `Telephone`, `image`) VALUES (null ,'$NomRestaurant', '$localisation','$Description', '$Telephone','$image')";
                $query=mysqli_query($con,$requete);
                if(isset($query)){
                    header('Location: Restaurant.php');
                    exit; 
        
                }else{
                    echo"<h1>Erreur de l'insertion</h1>";
                }
        
                
            }               
        }
        

        // 5-Ajouter lieux_touristique :
            
        if(isset($_POST['AjouterLieux'])){
            $titre = $_POST['titre'];
            $localisation = $_POST['localisation'];
            $description = $_POST['description'];
            $image = $_POST['image'];
            

                if(empty($titre) || empty($localisation)|| empty($description) ||empty($image)){
                    echo "veuillez remplir tous les champs";
                }
        else{
                require_once 'database.php';
            
                $requete = "INSERT INTO `lieux_touristique`(`id`, `titre`, `localisation`,`description`, `image`) VALUES (null ,'$titre', '$localisation','$description','$image')";
                $query=mysqli_query($con,$requete);
                if(isset($query)){
                    header('Location: Endroit.php');
                    exit; 

                }else{
                    echo"<h1>Erreur de l'insertion</h1>";
                }

                
            }               
        }


        // 6-Ajouter Voyage :
       
        if(isset($_POST['AjouterVoyage'])){
            $destination = $_POST['destination'];
            $Description = $_POST['Description'];
            $image = $_POST['image'];
            $prix = $_POST['prix'];
            $DateDepart = $_POST['DateDepart'];
           
            // $id_ville=$_POST['id_ville'];
            
    
                if(empty($destination)|| empty($Description) ||empty($image) || empty($prix) || empty($DateDepart) ){
                    echo "veuillez remplir tous les champs";
                }
        else{
                 require_once 'database.php';
            
                $requete = "INSERT INTO `voyage`(`id`, `destination`, `Description`, `image`, `prix`,`DateDepart`) VALUES  (null ,'$destination', '$Description','$image','$prix','$DateDepart')";
                $query=mysqli_query($con,$requete);
                if(isset($query)){
                    header('Location: Voyage_Organiser.php');
                    exit; 
        
                }else{
                    echo"<h1>Erreur de l'insertion</h1>";
                }
        
                
            }               
        }
?>
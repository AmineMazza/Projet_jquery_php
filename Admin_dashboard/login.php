<?php
                session_start ();
                $isSuccess = 0;
                if(isset($_POST['submit'])){
                    $login = $_POST['email'];
                    $password = $_POST['password'];
                    if(empty($login) || empty($password)){
                        echo "veuillez remplir tous les champs";
                    }else{  require_once('database.php');
                    
                    $sql = "SELECT * FROM `admin` WHERE `email`='$login' AND `password`= '$password'";
                    $stmt = $con->prepare($sql);
                    $stmt->execute();
                    
                    if($isSuccess = 0){
                                       
                        echo "login ou mot de passe incorrect";
                    }

                      
                    else{
                        session_start();
                        if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
                            
                            header('Location: index.php');
                            exit;
                    }
                }
                  
                    
                    
            }
        }
?>
<?php
try{// On se connecte à MySQL
                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                $bdd = new PDO('mysql:host=localhost;dbname=abonnement', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
                
                // On récupère tout le contenu de la table
                $reponse = $bdd->query('SELECT mail, psw FROM  inscription limit 1');

                while($data = $reponse->fetch()){
                    $data['mail'];
                    $data['psw'];

                    //on teste les champs de notre formulaire
                    if(isset($_POST['mail']) && isset($_POST['psw'])){
                        $login = $_POST['mail'];
                        $mdp = $_POST['psw'];

                        if(!$login || !$mdp){
                            echo "<p class=\"warning\">Vous avez oubliez votre mail ou password?</p>";
                        }
                        //on compare les login et mot de passe de la bdd
                        else if($login!=$data['mail'] && $mdp!=$data['psw']){
                            echo "<p class=\"warning\">Erreur login ou mot de passe?</p>";
                        }
                        else{
                            //on valide la connection
                            //print "<a href=\"connection.php\">Go!!!</a>";
                            $_SESSION['mail'] = $login;
                            echo "<p class=\"success\">Votre login est ".$_SESSION['mail']."
                            votre mot de passe est  ".md5($mdp);
                            header("Location: zebi.html");
                            exit;
                           
                        }

                        
                    }
                
                }
                $reponse->closeCursor();
            }
            catch(Exception $e){
                die("Erreur de connexion : ".$e->getMessage());
            }
 ?>
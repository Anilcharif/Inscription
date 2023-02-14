<?php
if(isset($_POST['mail']) || isset($_POST['psw'])){
                $_email = $_POST["mail"];

                //on test les chaines de caractère//
                if(!$_POST['mail'] || !$_POST['psw']){
                    echo "<p class=\"warning\">Vous avez obliez votre mail ou password?</p>";
                    }
                    else if(!filter_var($_email, FILTER_VALIDATE_EMAIL)){ //attention à ma fonction
                        echo "<p class=\"warning\">Mail invalide</p>";
                    }
                    else if(is_numeric($_email)){
                            echo "<p class=\"warning\">Vous devez saisir des caractères</p>";
                    }
                    else{

                    //password_hash($_POST['psw'],PASSWORD_DEFAULT);
                    
                    $req = $_bdd->prepare('INSERT INTO inscription ( mail, psw )VALUES(?,?)');
                    $req->execute(array($_POST['mail'], password_hash($_POST['psw'],PASSWORD_DEFAULT)));
                    
                    echo "<p class=\"success\">Merci votre contenu est ajouté : 
                            <a href=\"connection.php\" title=\"pub\">Connectez vous</a>
                            
                    </p>";
                    
                }                
                
            }

?>
<?php
require('controller/frontend.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    }
    elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post();
        }
        else {
            echo 'Erreur : aucun identifiant de post envoyé';
        }
    }
    elseif ($_GET['action'] == 'addComment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                addComment($_GET['id'], $_POST['author'], $_POST['comment']);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        else {
            echo 'Erreur : aucun identifiant de post envoyé';
        }
    }
    
    
    elseif ($_GET['action'] == 'modifComment') {
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				 if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                modifComment($_GET['id'], $_POST['author'], $_POST['comment']);
			}
			
		}
		elseif ($_GET['action'] == 'sendModifComment') {
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				if (! empty($_POST['author']) && ! empty($_POST['comment'])) {
					$frontend = new frontend();
					$frontend->sendModifComment($_POST['author'], $_POST['comment'], $_GET['id']);
				}
				else {
					throw new Exception('Les champs n\'ons pas était remplis');
				}
			}
			else {
				throw new Exception('l\'id du commentaire est invalide');
			}
		}
    
    
    
    }
   
}
else {
    listPosts();
   
}
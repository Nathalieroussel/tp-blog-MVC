<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
<?php require('header.php'); ?>

<!--Affichage du commentaire à modifier-->
    
    
<!--Affichage du formulaire d'ajout de commentaire-->
    <div class="container" id="add-comment">
        <div class="box">
            <div class="well well-lg color">
                <h2 class="color">Modifier</h2>
                <form action="index.php?action=modifComment&amp;id=<?= $post['id'] ?>" method="post">
                    <label for="author">Auteur</label><br />
                    <input type="text" id="author" name="author" />
                    <div><br/>
                        <label for="comment">Commentaire</label><br />
                        <textarea id="comment" name="comment"></textarea>
                    </div>
                    <div><br/>
                        <input type="submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>


 <?php $content = ob_get_clean(); ?>

    <?php require('template.php'); ?>
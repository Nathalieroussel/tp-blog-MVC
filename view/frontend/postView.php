<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
<?php require('header.php'); ?>

<!--Affichage d'un post-->
<div class="container">
    <div class="well">
        <div class="row">
            <div class="col-md-12">
                <div class="row hidden-md hidden-lg" class="text-center">
                    <?= htmlspecialchars($post['title'])?>
                </div>

                <div class="pull-left col-md-4 col-xs-12 thumb-contenido"><img class="center-block img-responsive" src='public/images/<?= htmlspecialchars($post['image']) ?>' /></div>
                <div class="">
                    <h1 class="hidden-xs hidden-sm">
                        <?= htmlspecialchars($post['title'])?>
                    </h1>
                    <hr>
                    <small><?= $post['creation_date_fr'] ?></small><br>
                    <small><strong>Nathalie.R</strong></small>
                    <hr>
                    <p class="text-justify">
                        <?= nl2br(htmlspecialchars($post['content'])) ?><br>
                            <a href="index.php" button type="comment" class="btn btn-md btn-success"> Retour à la liste des billets</a>
                            <br>
                </div>
            </div>
        </div>
    </div>
    
    
    
<!--Affichage des commentaires liés à ce post-->
   
    <h3>Commentaires</h3>

    <?php while ($comment = $comments->fetch())
			{ ?>

    <div class="container">
        <div class="well well-lg">
            <h4 class="media-heading text-uppercase reviews">
                <?= htmlspecialchars($comment['author'])?>
            </h4>
            <ul class="media-date text-uppercase reviews list-inline">
                <li>
                    <?= $comment['comment_date_fr'] ?>
                </li>
            </ul>
            <p class="media-comment">
                <?= nl2br(htmlspecialchars($comment['comment'])) ?>
            </p>
            <a class="btn btn-info btn-circle text-uppercase" href="index.php?action=modifComment&amp;id=<?= $post['id'] ?>" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Modifier</a>
        </div>
    </div>

    <?php } $comments ->closeCursor(); ?>



<!--Affichage du formulaire d'ajout de commentaire-->
    <div class="container" id="add-comment">
        <div class="box">
            <div class="well well-lg color">
                <h2 class="color">Ajouter un commentaire</h2>
                <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
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

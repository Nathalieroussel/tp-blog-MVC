<?php $title = 'Blog TP'; ?>

<?php ob_start(); ?>
<?php require('header.php'); ?>


<div class="container">
    <div class="row blog-row">
        <h1 class="text-center margin_bottom30">Les dernières news!</h1>

        <?php
while($data = $posts->fetch())
{
?>


            <div class="col-md-6 col-sm-6 col-xs-12 margin_bottom30">
                <a href="javascript::;">
				<img class="img-responsive center-block" src="public/images/<?= htmlspecialchars($data['image']) ?>" height="250">
				</a>
                <div class="blog-content bg-white">
                    <h3>
                        <?= htmlspecialchars($data['title']) ?>
                    </h3>
                    <p>
                        <?= nl2br(htmlspecialchars($data['content'])) ?>
                    </p>
                   
                    <a href="index.php?action=post&amp;id=<?= $data['id'] ?>" class="btn btn-md btn-warning"> Voir les commentaires</a>                                                                              
                    <hr>
                    <span class="pull-left">Le <strong><?= $data['creation_date_fr'] ?></strong></span>
                    <span class="pull-right">Par : <strong>Nathalie R</strong></span>

                </div>
            </div>


            <?php
}
$posts->closeCursor();
?>





            <?php $content = ob_get_clean(); ?>


            <?php require('template.php'); ?>

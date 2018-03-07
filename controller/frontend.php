<?php

require('model/frontend.php');

function listPosts()
{
    $posts = getPosts();

    require('view/frontend/listPostsView.php');
}

function post()
{
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);

    require('view/frontend/postView.php');
}

function addComment($postId, $author, $comment)
{
    $affectedLines = postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
       
}

function modifComment($postId, $author, $comment)
	{
		$frontend = new frontend();
		$modifComment = $frontend->modifComment($_GET['id']);
		require('view/frontend/modifComment.php');
	}
 function sendModifComment($postId, $author, $comment)
	{
		$frontend = new frontend();
		$modifComment = $frontend->sendModifComment($author, $comment, $_GET['id']);
		header('view/frontend/modifComment.php' . $postId);
	}
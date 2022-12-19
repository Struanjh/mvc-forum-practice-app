<?php

require 'model/commentManager.php';

$manager = new CommentManager();

//DELETE COMMENT ROUTE
if(isset($_GET['commentToDelete'])) {
    $post_id = $_GET['commentToDelete'];
    $manager->deleteComment($post_id);
    echo json_encode(['commentDelete' => true]);
    die();
}

//ADD COMMENT ROUTE
if(isset($_POST['content'])) {
    $commentContent = $_POST['content'];
    $post_id = $_GET['postid'];
    echo $commentContent;
    echo "<br>";
    echo $post_id;
    $addComment = $manager->addComment($commentContent, $post_id);
    $redirecturl = 'index.php?action=showpost&id=' . $post_id;
    header('Location:' . $redirecturl);
    die();
}






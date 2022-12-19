<?php
include 'model/postManager.php';


$id = $_GET['id'];
$manager = new PostManager();
$post = $manager->getPost($id);
$comments = $manager->getComments($post['id']);

include 'view/postView.php';
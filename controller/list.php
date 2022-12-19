<?php

    require 'model/postManager.php';

    $manager = new PostManager();
    $posts = $manager->getPosts();

    require 'view/listView.php';
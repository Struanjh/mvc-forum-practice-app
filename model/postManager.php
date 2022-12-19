<?php

class PostManager {

    private function connectDB () {
        return new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root', '');
    }

    public function getPosts () {
        $db = $this->connectDB();
        $posts = $db->query('SELECT * FROM posts');
        $posts = $posts->fetchAll();
        return $posts;
    }

    public function getPost($id) {
        $db = $this->connectDB();
        $posts= $db->prepare('SELECT * FROM posts WHERE id = ?');
        $posts->execute([$id]);
        $posts = $posts->fetch();
        return $posts;
    }

    public function getComments($post_id) {
        $db = $this->connectDB();
        $comments= $db->prepare('SELECT * FROM comments WHERE post_id = ?');
        $comments->execute([$post_id]);
        $comments = $comments->fetchAll();
        return $comments;
    }
 
}
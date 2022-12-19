<?php

class CommentManager {

    private function connectDB () {
        return new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root', '');
    }

    // public function getComments () {
    //     $db = $this->connectDB();
    //     $posts = $db->query('SELECT * FROM posts');
    //     $posts = $posts->fetchAll();
    //     return $posts;
    // }


    public function addComment($content, $post_id) {
        $db = $this->connectDB();
        $newComment = $db->prepare('INSERT INTO comments (content, post_id)
        VALUES (:content, :post_id)');
        $newComment->execute([
            'content' => $content,
            'post_id' => $post_id,
        ]);
    }

    public function deleteComment($post_id) {
        $db = $this->connectDB();
        $sql = "DELETE FROM comments WHERE id=?";
        $stmt= $db->prepare($sql);
        $stmt->execute([$post_id]);
    }
}
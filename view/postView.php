<?php 
    ob_start();
    $title = 'BLAH BLAH';
    $script = "/forum/public/script.js";
?>
<a href="index.php">Go to previous page</a>
<h1><?= $post['title'] ?></h1>
<div>
<?= $post['content'] ?>
</div>
<div class="comments">
<hr>
<h4>AVAILABLE COMMENTS FOR THIS BLOG POST</h4>
<?php
    foreach($comments as $comment) {
?>
    <div class="comment-container" data-comment-id=<?=$comment['id']?> style="border-style: dotted solid double dashed">
        <p><?=$comment['date_posted']?></p>
        <p><?=$comment['comment_author']?></p>
        <p><?=$comment['content']?></p>
        <button type="button" name="delete-comment">Delete comment</button>
    </div>
<?php
    }
?>
</div>
<form action="index.php?action=addcomment&postid=<?=$post['id']?>" method="POST">
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <input type="submit" name="submit">
</form>
<?php 
    $html = ob_get_clean(); 
    include 'template.php';
?>
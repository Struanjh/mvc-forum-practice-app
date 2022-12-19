<?php 
    ob_start();
    $title = 'Posts';
?>
<h1>Posts</h1>
<?php
    foreach($posts as $post) {
?>
    <div class="post">
        <div>
            <a href="index.php?action=showpost&id=<?=$post['id']?>">
                <?=nl2br($post['title'])?>
            </a>
        </div>
    </div>
<?php
    }
?>

<?php
    $html = ob_get_clean();
    include 'template.php';
?>
<?php include('partials/header.php'); ?>
        Home page
        <ul>
            <?php foreach($posts as $post): ?>
                <li><?=$post->ucTitle()?></li>
            <?php endforeach; ?>
        </ul>
<?php include('partials/footer.php'); ?>
<?php include('partials/header.php'); ?>
        Home page
        <h1 class="is-size-1">Hello <?=$name?></h1>
        <ul>
            <?php foreach($items as $item): ?>
                <li><?=$item?></li>
            <?php endforeach; ?>
        </ul>
<?php include('partials/footer.php'); ?>
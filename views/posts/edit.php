<?php include('views/partials/header.php'); ?>
    <form action="/posts/edit?id=<?=$post->id?>" method="POST">
        <div class="field">
            <label class="label">Title</label>
            <div class="control">
                <input value="<?=$post->title?>" class="input" type="text" name="title" placeholder="Title">
            </div>
        </div>
        <div class="field">
            <label class="label">Content</label>
            <div class="control">
                <textarea class="textarea" name="body" placeholder="Content"><?=$post->body?></textarea>
            </div>
        </div>
        <input class="button is-primary" type="submit" value="Edit">
    </form>
<?php include('views/partials/footer.php'); ?>
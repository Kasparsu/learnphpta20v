<?php include('views/partials/header.php'); ?>
<form action="/posts/new" method="POST" enctype="multipart/form-data">
    <div class="field">
        <label class="label">Title</label>
        <div class="control">
            <input class="input" type="text" name="title" placeholder="Title">
        </div>
    </div>
    <div class="field">
        <label class="label">Content</label>
        <div class="control">
            <textarea class="textarea" name="body" placeholder="Content"></textarea>
        </div>
    </div>
    <div class="field">
        <label class="label">Image</label>
        <div class="control">
            <input type="file" class="input" name="image" accept="image/*">
        </div>
    </div>
    <input class="button is-primary" type="submit" value="Create">
</form>
<?php include('views/partials/footer.php'); ?>
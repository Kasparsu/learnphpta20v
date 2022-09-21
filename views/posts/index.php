<?php include('views/partials/header.php'); ?>
<a href="/posts/new" class="button is-primary">Add Post</a>
<table class="table is-striped is-hoverable is-fullwidth">
    <thead>
        <th>Id</th>
        <th>Title</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Actions</th>
    </thead>
    <tbody>
        <?php foreach($posts as $post):?>
            <tr>
                <td><?=$post->id?></td>
                <td><?=$post->title?></td>
                <td><?=$post->created_at?></td>
                <td><?=$post->modified_at?></td>
                <td>
                    <div class="buttons has-addons">
                        <a class="button is-link">View</a>
                        <a class="button is-warning">Edit</a>
                        <a class="button is-danger">Delete</a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php include('views/partials/footer.php'); ?>
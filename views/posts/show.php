<?php include('views/partials/header.php'); ?>
    <table class="table is-striped is-hoverable is-fullwidth">
        <tbody>
            <tr>
                <th>Id</th>
                <td><?=$post->id?></td>
            </tr>
            <tr>
                <th>Title</th>
                <td><?=$post->title?></td>
            </tr>
            <tr>
                <th>Body</th>
                <td><?=$post->body?></td>
            </tr>
            <tr>
                <th>Created At</th>
                <td><?=$post->created_at?></td>
            </tr>
            <tr>
                <th>Modified At</th>
                <td><?=$post->modified_at?></td>
            </tr>
        </tbody>
    </table>
<?php include('views/partials/footer.php'); ?>
<?php include('views/partials/header.php'); ?>
    <form action="/register" method="POST">
        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input class="input" type="email" name="email">
            </div>
        </div>
        <div class="field">
            <label class="label">Password</label>
            <div class="control">
                <input type="password" class="input" name="password">
            </div>
        </div>
        <input class="button is-primary" type="submit" value="Register">
    </form>
<?php include('views/partials/footer.php'); ?>
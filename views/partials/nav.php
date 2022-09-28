<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a href="/" class="navbar-item">
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a href="/" class="navbar-item">
                Home
            </a>

            <a href="/posts" class="navbar-item">
                Posts
            </a>

        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <?php if(auth()): ?>
                    <strong><?=auth()->email?></strong>
                    <a href="/logout" class="button is-light">
                        Logout
                    </a>
                <?php else: ?>
                    <div class="buttons">
                        <a href="/register" class="button is-primary">
                            <strong>Sign up</strong>
                        </a>
                        <a href="/login" class="button is-light">
                            Log in
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar is-primary" >
    <div class="container">
        <div class="navbar-brand">
            <a href="/" class="navbar-item">
                <i class="fas fa-hat-wizard"></i>&nbsp;HogwartsAdmin
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">
                <a href="/"
                   class="navbar-item {{ Request::path() === '/' ? "is-active" : "" }}">
                    Home
                </a>
                <a href="/posts"
                   class="navbar-item {{ Request::path() === 'posts' ? "is-active" : "" }}">
                    Blog
                </a>
                <a href="/teachers"
                   class="navbar-item {{ Request::path() === 'teachers' ? "is-active" : "" }}">
                    Teachers
                </a>
                <a href="/owls"
                   class="navbar-item {{ Request::path() === 'owls' ? "is-active" : "" }}">
                    Owls
                </a>
            </div>
        </div>
    </div>
</nav>



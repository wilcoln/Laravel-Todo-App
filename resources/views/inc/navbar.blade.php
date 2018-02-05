<nav class="navbar navbar-dark navbar-expand-sm bg-primary">
    <div class="container">
        <a href="" class="navbar-brand">TodoList</a>
        <button class="navbar-toggler" data-target="#Nav" data-toggle="collapse"><i class="navbar-toggler-icon"></i></button>
        <div class="navbar-collapse collapse" id="Nav">
            <ul class="ml-5 navbar-nav">
                <li class="ml-3 nav-item"><a href="/" class="nav-link {{Request::is('/') ? 'active' : ''}}">Home</a></li>
                <li class="ml-3 nav-item"><a href="/todo/create" class="nav-link {{Request::is('todo/create') ? 'active' : ''}}">Create Todo</a></li>
            </ul>
        </div>
    </div>
</nav>
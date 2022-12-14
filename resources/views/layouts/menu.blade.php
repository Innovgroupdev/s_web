<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('categories.index') }}" class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Categories</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('publicites.index') }}" class="nav-link {{ Request::is('publicites*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Publicites</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('articles.index') }}" class="nav-link {{ Request::is('articles*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Articles</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('informers.index') }}" class="nav-link {{ Request::is('informers*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Informers</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('essayers.index') }}" class="nav-link {{ Request::is('essayers*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Essayers</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('news.index') }}" class="nav-link {{ Request::is('news*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>News</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('commentaires.index') }}" class="nav-link {{ Request::is('commentaires*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Commentaires</p>
    </a>
</li>


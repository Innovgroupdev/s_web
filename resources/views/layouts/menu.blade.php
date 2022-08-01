<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Tableau de bord</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('categories.index') }}" class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-clone"></i>
        <p>Categories</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('publicites.index') }}" class="nav-link {{ Request::is('publicites*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tv"></i>
        <p>Publicites</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('articles.index') }}" class="nav-link {{ Request::is('articles*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-newspaper"></i>
        <p>Articles</p>
    </a>
</li>


<html lang="en">

<head>
</head>

<body>
    <script>
        function setCookie(nom, valeur, jour) {
            if (jour) {
                var date = new Date()
                date.setTime(date.getTime() + (jour * 24 * 60 * 60 * 1000));
                var exp = '; expires=' + date.toGMTString;
            } else {
                var exp = '';
            }

            document.cookie = nom + '=' + valeur + exp + 'domain=/;path=/';

        }

        function getCookie(nom) {
            nomEtValeur = nom + "=";
            var allCookies = document.cookie.split(';');
            for (let i = 0; i < allCookies.length; i++) {
                var c = allCookies[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1, c.length)
                }
                if (c.indexOf(nomEtValeur) == 0) {
                    return c.substring(nomEtValeur, c.length);
                }
            }
            return null;
        }

        function removeCookie(nom) {
            setCookie(nom, '', -1)
        }

        function setCookieValueToInput(cookie, id) {

            if (getCookie(cookie)) {
                var nomEtValeur = getCookie(cookie).split('=')
                var cookieValue = nomEtValeur[1]
                document.getElementById(id).value = cookieValue

            }

        }
    </script>
    <header id="main-header" class="head default">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/" title="logo CIBLE">
                            <img class=" " style="width: clac(height*0,995666)!important;" src="{{ asset("images/logo.png")}}"  alt="cible-app logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ion-navicon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="menu-main-menu-container">
                                <div class="menu-top-menu-container">
                                    <ul id="top-menu" class="menu">
                                        <li id="menu-item-658" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-658">
                                            <a href="{{url('/')}}#home" title="page d'Accueil">Accueil</a>
                                        </li>
                                        <li id="menu-item-552" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-552">
                                            <a href="{{url('/')}}#about" title="A propos de l'équipe CIBLE">A propos</a>
                                        </li>
                                        <li id="menu-item-553" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-553">
                                            <a href="{{url('/')}}#features" title="Les fonctionnalité de l'application CIBLE">Fonctionnalités</a>
                                        </li>
                                        <li id="menu-item-554" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-554">
                                            <a href="{{url('/')}}#team" title="L'équipe CIBLE"> L’équipe </a>
                                        </li>
                                        <!-- <li id="menu-item-555"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-555">
                                        <a href="#screenshots">FAQ </a></li> -->
                                        <li id="menu-item-1041" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1041">
                                            <a href="{{url('/')}}#faq" title="Foire aux questions">FAQ</a>
                                        </li>
                                        <!-- <li id="menu-item-556"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-556">
                                        <a href="#pricing">Pricing</a></li> -->
                                        <!-- <li id="menu-item-1636"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1636">
                                        <a href="shop-2/index.html">Shop</a></li> -->
                                        <li id="menu-item-557" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-557">
                                            <a href="{{route('blog')}}" title="BLOG - CIBLE">Blog</a>
                                            <!-- <ul class="sub-menu">
                                            <li id="menu-item-571"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-571">
                                                <a href="blog/index.html">Blog</a></li>
                                            <li id="menu-item-1639"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1639">
                                                <a href="one-columns-blogs/index.html">One Columns Blogs</a>
                                            </li>
                                            <li id="menu-item-1638"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1638">
                                                <a href="two-columns-blogs/index.html">Two Columns Blogs</a>
                                            </li>
                                            <li id="menu-item-1637"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1637">
                                                <a href="three-columns-blogs/index.html">Three Columns Blogs</a>
                                            </li>
                                        </ul> -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

</body>

</html>
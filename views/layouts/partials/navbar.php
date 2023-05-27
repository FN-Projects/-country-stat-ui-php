<nav class="navbar navbar-expand-sm bg-white navbar-dark shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="/assets/img/favicon-32x32.png"  alt="logo">
            <span class="text-uppercase text-dark">CountryArticleStat</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link  <?php if ($_SERVER["REQUEST_URI"]=== "/tab" || $_SERVER["REQUEST_URI"] == "/") echo "active"; ?> text-dark" href="/tab"><i class="fa fa-table text-app" aria-hidden="true"></i> Vue Tableau</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_SERVER["REQUEST_URI"]=== "/map") echo "active"; ?> text-dark" href="/map"><i class="fa fa-map text-app" aria-hidden="true"></i> Vue Carte</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
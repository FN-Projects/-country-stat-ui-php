<div id="mapView" class="mapView bg-white">
    <div class="map_stat">
        <nav class="nav nav-pills flex-column flex-sm-row">
            <a class="flex-sm-fill text-sm-center nav-link text-muted tab-active" aria-current="page" href="#" id="all">Tous les pays</a>
            <a class="flex-sm-fill text-sm-center nav-link text-muted" href="#" id="le">Pays avec le</a>
            <a class="flex-sm-fill text-sm-center nav-link text-muted" href="#" id="la">Pays avec la</a>
            <a class="flex-sm-fill text-sm-center nav-link text-muted" href="#" id="l">Pays avec l</a>
            <a class="flex-sm-fill text-sm-center nav-link text-muted" href="#" id="les">Pays avec les</a>
            <a class="flex-sm-fill text-sm-center nav-link text-muted" href="#" id="undifined">Pays indefinis</a>
        </nav>
    </div>
    <div class="map__image img-fluid bg-light">
        <?php require_once("map.svg.php") ?>
    </div>
    <div class="map__legend d-flex justify-content-center p-3">
        <div class="legend-item d-flex me-3">
            <div class="legend-bar me-2 bg-success"></div>
            <span class="legend-text">Tous les pays</span>
        </div>
        <div class="legend-item d-flex me-3">
            <div class="legend-bar me-2 bg-danger"></div>
            <span class="legend-text">Pays avec le</span>
        </div>
        <div class="legend-item d-flex me-3">
            <div class="legend-bar me-2 bg-info"></div>
            <span class="legend-text">Pays avec la</span>
        </div>
        <div class="legend-item d-flex me-3">
            <div class="legend-bar me-2 bg-dark"></div>
            <span class="legend-text">Pays avec l</span>
        </div>
        <div class="legend-item d-flex me-3">
            <div class="legend-bar me-2 bg-secondary"></div>
            <span class="legend-text">Pays indefinis</span>
        </div>
    </div>
</div>
<script src="/assets/js/mapView.js"></script>
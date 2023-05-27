<div id="dashboard" class="normal-view">
    <!-- TopDashboardComponent -->
    <div class="d-flex justify-content-start topdashboard">
        <h4 class="fw-bolder text-dark"><i class="fa fa-home"></i> Tableau de bord</h4>
        <div class="d-flex justify-content-end ms-auto">
            <div class="dropdown"></div>
        </div>
    </div>

    <!-- CoutComponent -->
    <div class="count mt-3">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-sm-12 py-2 mb-3">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="d-flex justify-align-center">
                            <div class="p-3 w-50">
                                <h4 class="fw-bolder">Pays</h4>
                            </div>
                            <div class="flex-grow-1 bg-success p-3">
                                <h4 class="text-white text-center"><?= $totalCountry ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-12 py-2 mb-3">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="d-flex justify-align-center">
                            <div class="p-3 w-50">
                                <h4 class="fw-bolder">LE</h4>
                            </div>
                            <div class="flex-grow-1 bg-danger p-3">
                                <h4 class="text-white text-center"><?= $totalCountryWithArticleLe ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-12 py-2 mb-3">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="d-flex justify-align-center">
                            <div class="p-3 w-50">
                                <h4 class="fw-bolder">LA</h4>
                            </div>
                            <div class="flex-grow-1 bg-info p-3">
                                <h4 class="text-white text-center"><?= $totalCountryWithArticleLa ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-sm-12 py-2 mb-3">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="d-flex justify-align-center">
                            <div class="p-3 w-50">
                                <h4 class="fw-bolder">L</h4>
                            </div>
                            <div class="flex-grow-1 bg-dark p-3">
                                <h4 class="text-white text-center"><?= $totalCountryWithArticleL ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-12 py-2 mb-3">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="d-flex justify-align-center">
                            <div class="p-3 w-50">
                                <h4 class="fw-bolder">LES</h4>
                            </div>
                            <div class="flex-grow-1 bg-primary p-3">
                                <h4 class="text-white text-center"><?= $totalCountryWithArticleLes ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-12 py-2 mb-3">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="d-flex justify-align-center">
                            <div class="p-3 w-50">
                                <h4 class="fw-bolder text-uppercase">Indefini</h4>
                            </div>
                            <div class="flex-grow-1 bg-secondary p-3">
                                <h4 class="text-white text-center"><?= $totalCountryWithoutArticle ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CountryListComponent -->
    <div id="countryList" class="mt-3">
        <ul class="nav nav-tabs bg-white" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="all-tab" data-bs-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">Tous les pays</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="le-tab" data-bs-toggle="tab" href="#le" role="tab" aria-controls="le" aria-selected="false">Pays avec <strong>le</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="la-tab" data-bs-toggle="tab" href="#la" role="tab" aria-controls="la" aria-selected="false">Pays avec <strong>la</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="l-tab" data-bs-toggle="tab" href="#l" role="tab" aria-controls="l" aria-selected="false">Pays avec <strong>l</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="les-tab" data-bs-toggle="tab" href="#les" role="tab" aria-controls="les" aria-selected="false">Pays avec <strong>les</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="indefinis-tab" data-bs-toggle="tab" href="#indefinis" role="tab" aria-controls="indefinis" aria-selected="false">Pays indéfinis</a>
            </li>
        </ul>
        <div class="tab-content bg-white" id="myTabContent">
            <div class="tab-pane container fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                <!-- Contenu pour l'onglet "Tous les pays" -->
                <?php require_once('countries.php'); ?>
            </div>
            <div class="tab-pane container fade" id="le" role="tabpanel" aria-labelledby="le-tab">
                <!-- Contenu pour l'onglet "Pays avec 'le'" -->
                <?php require_once('countriesArticleLe.php'); ?>

            </div>
            <div class="tab-pane container fade" id="la" role="tabpanel" aria-labelledby="la-tab">
                <!-- Contenu pour l'onglet "Pays avec 'la'" -->
                <?php require_once('countriesArticleLa.php'); ?>

            </div>
            <div class="tab-pane container fade" id="l" role="tabpanel" aria-labelledby="l-tab">
                <!-- Contenu pour l'onglet "Pays avec 'l'" -->
                <?php require_once('countriesArticleL.php'); ?>

            </div>
            <div class="tab-pane container fade" id="les" role="tabpanel" aria-labelledby="les-tab">
                <!-- Contenu pour l'onglet "Pays avec 'les'" -->
                <?php require_once('countriesArticleLes.php'); ?>

            </div>
            <div class="tab-pane container fade" id="indefinis" role="tabpanel" aria-labelledby="indefinis-tab">
                <!-- Contenu pour l'onglet "Pays indéfinis" -->
                <?php require_once('countriesArticle.php'); ?>

            </div>
        </div>
    </div>
</div>
<script src="/assets/js/dataTable.js"></script>
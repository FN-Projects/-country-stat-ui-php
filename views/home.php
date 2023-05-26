<div id="dashboard">
    <div class="d-flex justify-content-start topdashboard">
        <h4 class="fw-bolder">Dashboard</h4>
        <div class="d-flex justify-content-end ms-auto">
            <div class="dropdown">
                <button type="button" class="btn btn-dark mr-2 dropdown-toggle" data-toggle="dropdown">
                    Filtrer par <i class="fa fa-filter classroom-color"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Tous</a>
                    <?php
                    // chercher les continents

use Core\Helper;

                    ?>
                </div>
            </div>
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
        <h4>Tous les pays</h4>
        <div class="countryTable">
            <div class="table-responsive shadow-sm bg-white rounded p-1 mt-3">
                <table id="countryData" class="table table-striped table-hover rounded-lg border border-table bg-white">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>Flag</th>
                            <th>Pays</th>
                            <th>Article</th>
                            <th>Continent</th>
                    </thead>
                    <tbody>
                       <?php foreach ($countries as $country ) : extract($country)?>
                        <tr>
                            <td><img class="border" src="https://www.countryflagicons.com/FLAT/32/<?= $flag ?>.png" alt="Drapeaux du <?= $name ?>" ></td> 
                            <td><?= $name ?></td>
                            <td><?= Helper::format_display_article($article) ?></td>
                            <td><?= $continent ?></td>
                        </tr>
                       <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="/assets/js/dataTable.js"></script>
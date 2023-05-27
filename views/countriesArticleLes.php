<div class="countryTable">
    <div class="table-responsive rounded p-1 mt-3">
        <table id="countryArticleLesData" class="table table-striped table-hover rounded-lg border border-table bg-white">
            <thead class="bg-app text-white">
                <tr>
                    <th>#</th>
                    <th>Flag</th>
                    <th>Pays</th>
                    <th>Continent</th>
            </thead>
            <tbody>
                <?php foreach ($countriesArticleLes as $country) : extract($country) ?>
                    <tr>
                        <td><?= $country_id ?></td>
                        <td><img class="border" src="https://www.countryflagicons.com/FLAT/32/<?= $flag ?>.png" alt="Drapeaux du <?= $name ?>"></td>
                        <td><?= $name ?></td>
                        <td><?= $continent ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
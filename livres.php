<?php ob_start() ?>

<table class="table text-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Nombre de pages</th>
        <th colspan="2">Actions</th>
    </tr>
    <tr>
        <td class="align-middle"><img src="public/images/france.png" width="60px" </td>
        <td class="align-middle">Histoire de france</td>
        <td class="align-middle">300</td>
        <td class="align-middle"><a href="" class="btn btn-outline-warning">Modifier</a></td>
        <td class="align-middle"><a href="" class="btn btn-outline-danger">Supprimer</a></td>

    </tr>

    <tr>
        <td class="align-middle"><img src="public/images/livre.png" width="70px" </td>
        <td class="align-middle">Le petit prince</td>
        <td class="align-middle">200</td>
        <td class="align-middle"><a href="" class="btn btn-outline-warning">Modifier</a></td>
        <td class="align-middle"><a href="" class="btn btn-outline-danger">Supprimer</a></td>
    </tr>
</table>
<a href="" class="btn btn-outline-success d-block">Ajouter</a>

<?php
$content = ob_get_clean();
$titre = "Les livres";
require "template.php";

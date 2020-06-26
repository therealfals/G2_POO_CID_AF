
<h1 class='text-center text-dark'>Liste des chambres</h1>

<table class="table table-striped table-responsive-md table-bordered table-hover table-dark">
<thead>
    <tr>
      <th scope="col">Numéro chambre</th>
      <th scope="col">Numéro batiment</th>
      <th scope="col">Type</th>
      <th scope="col">Modifier</th>
      <th scope="col">Suprimer</th>

    </tr>
  </thead>
<tbody  id='table'>
</tbody>
</table>
<button class='btn btn-primary float-left' onClick='precedent()'>Precedent</button>

<button class='btn btn-warning float-right' onClick='suivant()'>Suivant</button>



<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modifier Chambre</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=""id='myModif' method="post">
        <input type="hidden" id="id" name='id'class="form-control mb-2">

        <input type="text" id="numChambre" name='numChambre'class="form-control mb-2">
        <input type="text" id="numBatiment" name='numBatiment'class="form-control mb-2">
        <input type="text" id="type" name='type'class="form-control mb-2">
      


<button type="submit" class='btn btn-success'>Modifier</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <!-- <button type="button" class="btn btn-primary">Understood</button> -->
      </div>
    </div>
  </div>
</div>
<script src='../public/js/listeChambre.js'></script>

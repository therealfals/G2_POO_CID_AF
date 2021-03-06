<?=@$content_for_layout?>
<h1 class='text-center text-dark'>Liste des etudiants</h1>
<form action="" id='search'class='mx-auto mb-5' method="post">
<input type="text" name='search'class='rounded rounded-pill bg bg-dark border border-primary' placeholder='Rechercher etudiant'>
<button type='submit' value='chercher'class=' border border-primary rounded rounded-circle btn btn-success'>Chercher</button>
</form>
<div id="recherche">
<table class='table table-striped table-responsive-md table-bordered table-hover table-dark' id='serse'>

  
</table>
</div>
<div id="scrollZone" style='height:500px;width:'class="overflow-auto mx-auto col-md-12">
<table class="table table-striped table-responsive-md table-bordered table-hover table-dark">
<thead>
    <tr>
      <th scope="col">Matricule</th>
      <th scope="col">Prenom</th>
      <th scope="col">Nom</th>
      <th scope="col">Email</th>
      <th scope="col">Telephone</th>
      <th scope="col">Type</th>

      <th scope="col">Adresse</th>
      <th scope="col">Logement</th>
      <th scope="col"> Modifier</th>    
      <th scope="col">Supprimer</th>


    </tr>
  </thead>
<tbody  id='table'>
</tbody>
</table>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modifier Etudiant</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=""id='updateEtudiant' method="post">
        <input type="hidden" id="id" name='id'class="form-control mb-2">

        <input type="text" id="matricule" name='matricule'class="form-control mb-2">
        <input type="text" id="prenom" name='prenom'class="form-control mb-2">
        <input type="text" id="nom" name='nom'class="form-control mb-2">
        <input type="text" id="email" name='email'class="form-control mb-2">
        <input type="text" id="telephone" name='telephone'class="form-control mb-2">

        <input type="text" id="adresse" name='adresse'class="form-control mb-2">
        <input type="text" id="logement" name='logement'class="form-control mb-2">

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
<script src='../public/js/listeEtuds.js'></script>


<div class="content">
<h1 class="text-center mt-5">

Enregistrer chambre
</h1>


<div class="contenu">
<form class='form-group col-md-6 mx-auto mt-5'method='POST'action="<?=BASE_URL."/chambre/addChambre"?>">
<select name="choix" class="custom-select mb-5 form-control border border-primary bg bg-dark text-white rounded rounded-pill " id="inputGroupSelect01">
    <option selected>Numero etudiant</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select>
  <input type="text" name="nbr"  class='mb-5 form-control border border-primary bg bg-dark text-white rounded rounded-pill 'placeholder='Numero Batiment'>
  <select name="choisir" class="custom-select form-control mb-5 border border-primary bg bg-dark text-white rounded rounded-pill " id="inputGroupSelect01">
    <option selected>Type Chambre</option>
    <option value="1">Individuel</option>
    <option value="2">A deux</option>
 
  </select>
  <input type="submit" class="form-control bg-primary border-primary text-white">

</form>

</div>
</div>
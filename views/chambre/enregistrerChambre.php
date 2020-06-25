<div class="content">
<h1 class="text-center mt-5">

Enregistrer chambre
</h1>


<div class="contenu">
<form class='form-group col-md-6 mx-auto mt-5'method='POST'action="<?=BASE_URL."/chambre/addingChambre"?>">

  <input type="text" name="numBatiment"  class='mb-5 form-control border border-primary bg bg-dark text-white rounded rounded-pill 'placeholder='Numero Batiment'>
  <select name="type" class="custom-select form-control mb-5 border border-primary bg bg-dark text-white rounded rounded-pill " id="inputGroupSelect01">
    <option selected>Type Chambre</option>
    <option value="one">Individuel</option>
    <option value="two">A deux</option>
 
  </select>
  <input type="submit" name='btn_chamb' value='Enregistrer' class="form-control bg-primary border-primary text-white">

</form>

</div>
</div>
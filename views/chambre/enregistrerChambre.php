<div class="content">
<h1 class="text-center mt-5">

Enregistrer chambre
</h1>


<div class="contenu">
<form id='room'class='form-group col-md-6 mx-auto mt-5'method='POST'action="<?=BASE_URL."/chambre/addingChambre"?>">

  <input type="number"min='1'max='99' name="numBatiment"  id="numBatiment"  class='mt-5 form-control border border-primary bg bg-dark text-white rounded rounded-pill 'placeholder='Numero Batiment'>
  <span id='errnumBatiment' class='text-danger'></span>

  <select id='type'name="type" class="custom-select form-control mt-5 border border-primary bg bg-dark text-white rounded rounded-pill " id="inputGroupSelect01">
    <option selected value=''>Type Chambre</option>
    <option value="one">Individuel</option>
    <option value="two">A deux</option>
 
  </select>
  <span id='errType' class='text-danger'></span>

  <input type="submit" name='btn_chamb' value='Enregistrer' class="form-control bg-primary border-primary text-white mt-5">

</form>

</div>
</div>
<script src='../public/js/validRoom.js'></script>
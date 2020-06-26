<div class="etudiant mx-auto col-md-6 mt-5 ">
<!-- <div class="row rounded rounded-pill border border-primary bg bg-dark mb-5"> -->
<h1 style='text-align:center;'class="text-dark  justify-content-center">Enregistrer un etudiant</h1>
<!-- </div> -->
<form  method="POST"id='myForm' action='<?=BASE_URL."/etudiant/addEtudiant"?>'>
<div class="row  mb-5 mt-5">
<div class="col-md-6">
<input type="text"placeholder='Prenom'name='prenom' id='prenom' class="form-control border border-primary bg bg-dark text-white rounded rounded-pill ">
<span id='errPrenom' class='text-danger'></span>

</div>
<div class="col-md-6">
<input type="text"placeholder='Nom'name='nom' id='nom'   class="form-control border border-primary bg bg-dark text-white rounded rounded-pill ">
<span id='errNom' class='text-danger'></span>
</div>
</div>
<div class="row mb-5 mt-5">
<div class="col-md-6 ">
<input type="text"placeholder='Email' name='email' id='email'  class=" border border-primary bg bg-dark text-white rounded rounded-pill form-control">
<span id='errEmail' class='text-danger'></span>

</div>
<div class="col-md-6">
<input type="text" placeholder='Telephone'name='telephone' id='telephone'   class="form-control border border-primary bg bg-dark text-white rounded rounded-pill ">
<span id='errTelephone' class='text-danger'></span>

</div>
</div>


<div class="row mb-5 mt-5">
<div class="col-md-6">
<input type="date"name='date' id='date'  class="form-control border border-primary bg bg-dark text-white rounded rounded-pill ">
<span id='errDate' class='text-danger'></span>

</div>
<div class="col-md-6">
<select name='bourse'  id='bourse'class="custom-select form-control border border-primary bg bg-dark text-white rounded rounded-pill " id="inputGroupSelect01">
    <option selected value=''>Bourse</option>
    <option value="aucune">Aucune</option>
    <option value="20000">20000</option>
    <option value="40000">40000</option>
  </select>
  <span id='errBourse' class='text-danger'></span>

</div>
</div>
<div id="div"></div>
<div id="dive"></div>

<div class="row mb-5 mt-5 ">
<div class="col-md-6 mx-auto">
<input type="submit" name='btn_etud' value='Enregistrer'class="form-control bg-primary border-primary text-white">
</div>
 
</div>

</form>
<script src='../public/js/script.js'></script>
</div>
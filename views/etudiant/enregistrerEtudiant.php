<div class="etudiant mx-auto col-md-6 mt-5 ">
<div class="row rounded rounded-pill border border-primary bg bg-dark mb-5">
<h1 style='text-align:center;'class="text-white  justify-content-center">Enregistrer un etudiant</h1>
</div>
<form  method="POST" action='<?=BASE_URL."/etudiant/addEtudiant"?>'>
<div class="row  mb-5 mt-5">
<div class="col-md-6">
<input type="text"placeholder='Prenom'name='prenom' class="form-control border border-primary bg bg-dark text-white rounded rounded-pill ">
</div>
<div class="col-md-6">
<input type="text"placeholder='Nom'name='nom'   class="form-control border border-primary bg bg-dark text-white rounded rounded-pill ">
</div>
</div>
<div class="row mb-5 mt-5">
<div class="col-md-6 ">
<input type="text"placeholder='Email' name='email'  class=" border border-primary bg bg-dark text-white rounded rounded-pill form-control">
</div>
<div class="col-md-6">
<input type="text" placeholder='Telephone'name='telephone'   class="form-control border border-primary bg bg-dark text-white rounded rounded-pill ">
</div>
</div>


<div class="row mb-5 mt-5">
<div class="col-md-6">
<input type="date"name='date'  class="form-control border border-primary bg bg-dark text-white rounded rounded-pill ">
</div>
<div class="col-md-6">
<select name='bourse'  id='bourse'class="custom-select form-control border border-primary bg bg-dark text-white rounded rounded-pill " id="inputGroupSelect01">
    <option selected>Bourse</option>
    <option value="1">Aucun</option>
    <option value="2">20000</option>
    <option value="3">40000</option>
  </select>
</div>
</div>
<div id="div"></div>
<div class="row mb-5 mt-5 ">
<div class="col-md-6 mx-auto">
<input type="submit" name='btn_etud' value='Enregistrer'class="form-control bg-primary border-primary text-white">
</div>
 
</div>

</form>
<script src='../public/js/script.js'></script>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    
<div class="container bg bg-secondary"style=''>

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">UNIVERS CIDAF</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Etudiant
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?=BASE_URL."/etudiant/showEtudiant"?>">Enregistrer un etudiant</a>
          <a class="dropdown-item" href="<?=BASE_URL."/etudiant/showListEtudiant"?>">Liste etudiants</a>
 
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Chambre
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?=BASE_URL."/chambre/showChambre"?>">Enregistrer une chambre</a>
          <a class="dropdown-item" href="<?=BASE_URL."/chambre/showListChambre"?>">Liste chambres</a>
       
        </div>
      </li>
    </ul>
  </div>
</nav>
<div class="content">
<h1>
<?= @$login; ?>
</h1>
<?php echo  $content_for_layout;?>
<?=@$liste?>
</div>
</div>

</body>
</html>
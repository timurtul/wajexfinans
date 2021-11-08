 <?php
 $doviz = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');
 $usd_alis = $doviz ->Currency[0]->BanknoteBuying;
 $usd_satis = $doviz ->Currency[0]->BanknoteSelling;
 $euro_alis = $doviz ->Currency[3]->BanknoteBuying;
 $euro_satis = $doviz ->Currency[3]->BanknoteSelling;
 $sterlin_alis = $doviz ->Currency[4]->BanknoteBuying;
 $sterlin_satis = $doviz ->Currency[4]->BanknoteSelling;
 ?>
 <!DOCTYPE html>
 <html lang ="tr">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Döviz Denemesi</title>
     <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


 


 </head>
 <body>
      
<header>
<nav class="navbar navbar-dark bg-dark">
 <a class="navbar-brand" href="#">
    <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Wajex Finans
  </a>
</nav>
</header>


<div class="container" > 
  <div class="card-columns" "style="display:inline-block;">

  <div class="row">
<!-- Dolar -->
 <div class="col-sm">
   <div class="card text-white bg-success mb-3" style="">
  <div class="card-header">Dolar $</div>

  <div class="card-body">
    <h5 class="card-title"><?php echo 'USD Alış: '.$usd_alis.'<br>'?></h5>
    <h5 class="card-title"><?php echo 'USD Satış: '.$usd_satis.'<br>'?></h5>
 <!--   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  </div>
</div>
 <div class="col-sm">

      <div class="card text-white bg-success mb-3" style="">
  <div class="card-header">Euro €</div>

  <div class="card-body">
    <h5 class="card-title"><?php echo 'Euro Alış: '.$euro_alis.'<br>'?></h5>
    <h5 class="card-title"><?php echo 'Euro Satış: '.$euro_satis.'<br>'?></h5>
  </div>

</div>
 
 <div class="col-sm">

      <div class="card text-white bg-success mb-3" style=" ">
  <div class="card-header">Sterlin £</div>

  <div class="card-body">
    <h5 class="card-title"><?php echo 'Sterlin Alış: '.$sterlin_alis.'<br>'?></h5>
    <h5 class="card-title"><?php echo 'Sterlin Satış: '.$sterlin_satis.'<br>'?></h5>
  </div>

  
</div>
</div>
   
</div>
</div>
</div>
 </div>

</div> 

  
     <script src="./js/script.js"></script>
 </body>
 </html>



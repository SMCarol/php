<?php

  $n1 = $_GET['nota1'];
  $n2 = $_GET['nota2'];
  $n3 = $_GET['nota3'];

  // PROCESSAMENTO
  $resultado = ($n1 + $n2 + $n3)/3;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <form class="form-horizontal" action="dados.php" method="get" >
      <fieldset>
                
                <!-- Form Name -->
      <legend>Calcular Soma</legend>
                
                <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nota1">Nota 1</label>  
      <div class="col-md-4">
        <input id="nota1" name="nota1" type="text" placeholder="" class="form-control input-md" required="">
                    
      </div>
      </div>
                
                <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nota2">Nota 2</label>  
      <div class="col-md-4">
        <input id="nota2" name="nota2" type="text" placeholder="" class="form-control input-md" required="">
                    
      </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="nota3">Nota 3</label>  
      <div class="col-md-4">
        <input id="nota3" name="nota3" type="text" placeholder="" class="form-control input-md" required="">
                          
      </div>
      </div>
                
                <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="calcular"></label>
      <div class="col-md-4">
        <button id="calcular" name="calcular" class="btn btn-primary">Calcular</button>
      </div>
      </div>
                
      </fieldset>
        </form>
    
      <div>
        Resultado: <?php echo $resultado; ?>
      </div>
</body>
</html>
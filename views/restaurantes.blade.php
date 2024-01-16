<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="rest.css">
    <title>resturantes</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-1">
                <img onclick="window.location.href='myfood'" class="img-fluid" src="images/ifood.png" alt="" >
              </div>
              <div class="col-1 ms-4">
                 <h6>entregador</h6>
              </div>
               <div class="col-2 ms-2">
                  <h6>Restaurante e Mercado</h6>
              </div>
               <div class="col-1 ms- ">
                  <h6>Carreiras</h6>
              </div>
               <div class="col-1 ms-2 ">
                 <h6>Ifood Card</h6>
              </div>
              <div class="col-3 ms- ">
                  <div class="input-group mb-3 ms-5">
                  <span id="pesq" class="input-group-text"><img  class="imagi" src="images/23.jpg" alt="" ></span>
                  <input type="text" class="form-control" placeholder="Busque item ou loja" id="barra" >
              </div>
             
             </div>
             <div class="col-2 ms-5 ">
                <a id="login" class="btn btn--link btn--size-m btn--iconize responsive-header__button" role="link" aria-label="login" target="" rel="" tabindex="0" href="login"><span class="icon-marmita icon-marmita--sign-in btn__icon"><svg width="40px" height="48px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-528.000000, -528.000000)"><g id="Entrar" transform="translate(528.000000, 528.000000)"><path d="M9.5,23 L27.5,23 C28.3284271,23 29,23.6715729 29,24.5 C29,25.3284271 28.3284271,26 27.5,26 L9.5,26 C8.67157288,26 8,25.3284271 8,24.5 C8,23.6715729 8.67157288,23 9.5,23 Z M17.5,3 L19,3 C19.8284271,3 20.5,3.67157288 20.5,4.5 C20.5,5.32842712 19.8284271,6 19,6 L17.5,6 C16.6715729,6 16,5.32842712 16,4.5 C16,3.67157288 16.6715729,3 17.5,3 Z M17.5,42 L19,42 C19.8284271,42 20.5,42.6715729 20.5,43.5 C20.5,44.3284271 19.8284271,45 19,45 L17.5,45 C16.6715729,45 16,44.3284271 16,43.5 C16,42.6715729 16.6715729,42 17.5,42 Z" id="Shape" fill="#FF0000" fill-rule="nonzero"></path><path d="M18.5,43.5 L33.46,43.5 C37.0498509,43.5 39.96,40.5898509 39.96,37 L39.96,11 C39.96,9.27609282 39.2751805,7.62279238 38.0561941,6.40380592 C36.8372076,5.18481946 35.1839072,4.5 33.46,4.5 L18.4916467,4.5" id="Shape" stroke="#FF0000" stroke-width="3"></path><polyline id="Shape" stroke="#FF0000" stroke-width="3" stroke-linecap="round" points="22 16 29 24.5 22 33"></polyline></g></g></g></svg></span></a>
          </div>
        </div>
        <div class="row mt-5 ">
          
            <button id='btnlinha' class="rounded-pill">ordernar</button>
        
          
            <button id='btnlinha' class="rounded-pill">Entrega </button>

            <button id='btnlinha' class="rounded-pill">Refeição</button>
            
            <button id='btnlinha' class="rounded-pill">Contato</button>
          
          
            <button id='btnlinha' class="rounded-pill">Distancia</button>
         
          
            <button id='btnlinha' class="rounded-pill">Retirar</button>

            <button id='btnlinha' class="rounded-pill">Filtros</button>
         
          
            <button id='btnlinha' class="rounded-pill">Limpar</button>
          
        </div>
     <br>
     <br>
     <br>
     <h3 id="txt">Restaurantes próximos</h3>
     <div class="row row-cols-auto ">

          
          
            <?php
             $servidor='localhost';
            $usuario='root';
            $senha='';
            $banco='myfood';

            $mysqli= new mysqli($servidor,$usuario,$senha,$banco);

            if(mysqli_connect_errno()) trigger_error(mysqli_connect_error());
            $sql= 'SELECT cd_food, nm_food,desc_food,img_food,link  FROM tb_food';
            $query= $mysqli->query($sql);
            while ($food = $query->fetch_array()){
   
            echo " <div class='card mb-3 ms-4 ' style='max-width: 340px; ' >
  <div class='row g-0 ms'>
    <div class='col-md-4 ms-'>
      <img src='$food[img_food]' class='img-fluid rounded-start' alt='...'  onclick='window.location.href='$food[link]''  >
    </div>
    <div class='col-md-8'>
      <div class='card-body'>
        <h5 class='card-title'>$food[nm_food]</h5>
        <p class='card-text'>$food[desc_food]</p>
      </div>
    </div>
  </div>
</div>
<br>
 <br>

";

            }
        ?>
            
            
        </div>
        <br>
            <h3 color="#grey" id="txt">Explore cidades</h3>
            <div class="row row-cols-auto">
               <?php
                $servidor='localhost';
                $usuario='root';
               $senha='';
               $banco='myfood';

              $mysqli= new mysqli($servidor,$usuario,$senha,$banco);

               if(mysqli_connect_errno()) trigger_error(mysqli_connect_error());
              $sql= 'SELECT cd_food, nm_food,desc_food,img_food,nm_cidade  FROM tb_food';
               $query= $mysqli->query($sql);
               while ($food = $query->fetch_array()){
 
                echo "<h5 id='cidade'>$food[nm_cidade]</h5>";
            
               }
   
            
                ?>
            </div>
    </div>
</body>
</html>
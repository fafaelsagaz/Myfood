<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My food</title>
    <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="estilo.css">
</head>
<body>

  <div class="container">
     <div class="row mt-5">
         <div class="col-1">
             <img class="img-fluid" src="images/ifood.png" alt="">
           </div>
           <div class="col-1 ms-4">
              <h6>entregador</h6>
           </div>
            <div class="col-2 ms-2">
               <h6 onclick="window.location.href='restaurantes'">Restaurante e Mercado</h6>
           </div>
            <div class="col-1 ms- ">
               <h6>Carreiras</h6>
           </div>
            <div class="col-2 ms-2 ">
              <h6>Ifood Card</h6>
           </div>
           <div class="col-2 ms-1 ">
             <button type="button1" class="cria btn-m" onclick="location.href='cadastro'">criar conta</button>
          </div>
           <div class="col-2 ms-1 ">
              <button type="button" class="btn btn-danger btn-m" id="entrar" onclick="location.href='login'">Entrar</button>
           </div>
     </div>
       <div class="row">
         <div class="col-9">
              <h1 class="titulo">Tudo para facilitar seu dia dia</h1>
             <p class="desc">O que você precisa está aqui.Peça e receba onde estiver.</p>
         </div>
     </div>
         
       <br>




       <div class="row">
         <div class="col-10">
              <div class="input-group mb-3 ms-5">
              <span id="pesq" class="input-group-text"><img  class="imagi" src="images/23.jpg" alt="" ></span>
             <input type="text" class="form-control" placeholder="Endereço que está" id="barra" >
             <br>
             <button type="button" class="btn btn-danger btn-m ms-3" id="buscar">Buscar</button>
         </div>
     </div>
       
     <div class="row mt-5 ">
            <div class="col-6 ms-5">
              <div class="card" id="card1">
                 <h1 class="textcard">Restaurantes</h1>
                 <button id="btncard1" onclick="window.location.href='restaurantes'" class="rounded-pill">Ver opções</button>
              <img  id="imgcard1"src="https://static.ifood-static.com.br/image/upload/f_auto/webapp/landingV2/restaurant.png" class="card-img-top " alt="...">
              </div>
         </div>
         <div class="col-5">
              <div id="card2" class="card" >
              <h1 class="textcard">Mercado</h1>
                <button id="btncard2"  onclick="location.href='https://www.paodeacucar.com/'" class="rounded-pill">Ver opções</button>
                 <img id="imgcard2"src="https://static.ifood-static.com.br/image/upload/f_auto/webapp/landingV2/market.png" class="card-img-top" alt="...">
                 <div class="card-body">
                      
                 </div>
              </div>
         </div>
       </div>
       <div class="row mt-5">
              <div class="col-4">
                 <button onclick="location.href='https://br.thebar.com/johnnie-walker-blonde?gclid=EAIaIQobChMItIKP0I6o_gIV_yCtBh29VgaXEAAYASAAEgLM8vD_BwE'" id="bdrinks"class="mt-2 mx-5 ">
                   <div class="col-6 ms-5">
                      <img class="img-fluid" src="images/drinks ifood.png" alt="">
                      <p class="txt">Drinks </p>
                   </div>
                </button>
             </div>
              <div class=col-4>
                <button onclick="location.href='https://www.drogaraia.com.br/?gclid=EAIaIQobChMIo-u_5Y6o_gIVEAOtBh0w9QgvEAAYASAAEgIHDPD_BwE'" id="bfarmacia"class="mt-2 mx-5 ">
                    <div class="col-5 ms-5">
                      <img class="img-fluid" src="images/farmacia ifood.png" alt="">
                       <p class="txt">Famácia </p>
                    </div>
                  </button>
             </div>
              <div class="col-4">
                  <button  onclick="location.href='https://anipet.petlove.com.br/colecao/outlet?utm_source=admin&utm_medium=campanha&utm_campaign=outlet-pet&utm_content=discount&gclid=EAIaIQobChMIlqjc8Y6o_gIVSSdMCh1VzQmMEAAYASAAEgIL9_D_BwE'" id="bpetshop"class="mt-2 mx-5 ">
                    <div class="col-6 ms-5">
                       <img class="img-fluid" src="images/petshop ifood.png" alt="">
                      <p class="txt">Pet shop </p>
                    </div>
                </button>
             </div>
          </div>
      </div>
 </div>
    <script src="js/bootstrap.js"></script>

</body>
</html>
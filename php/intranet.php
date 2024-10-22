<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE.edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet"/>
    <link rel="icon" href="/WebHotel/imgs/logo1.png" type="image/icon">   
    <link rel="stylesheet" href="/WebHotel/css/style.css" />

    <title>Inciar Sesion / Registrarse</title>
</head>
<body>
  <div class="container" id="container">

    <div class="form-container register-container">
      <form action="#">
        <h1>Registrarse Ahora.</h1>
        <input type="text" placeholder="name">
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">
        <button>Registro</button>
        <span>O vincula tu cuenta con:</span>
        <div class="social-container">
          <a href="#" class="social"><i class="lni lni-facebook-fill"></i></a>
          <a href="#" class="social"><i class="lni lni-google"></i></a>
      </div>
      </form>
    </div>

  <div class="form-container login-container">
    <form action="#">
      <h1>INICIAR SESION</h1>
      <input type="email" placeholder="Email">
      <input type="password" placeholder="Passaword">
      <div class="content">
        <div class="checkbox">
          <input type="checkbox" name="checkbox" id="checkbox">
          <label>Rcuerdame</label>
        </div>
        <div class="pass-link">
          <a href="#">¿Olvidó su contaseña?</a>
        </div>
      </div>
      <button>Iniciar Sesion</button>
      <span>O accede con tu cuente de:</span>
      <div class="social-container">
          <a href="#" class="social"><i class="lni lni-facebook-fill"></i></a>
          <a href="#" class="social"><i class="lni lni-google"></i></a>
      </div>
    </form>
  </div>

  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h1 class="title">MUCHO <br> GUSTO</h1>
        <p>Si tienes una cuenta, inicia sesión aquí y diviértete</p>
        <button class="ghost" id="login">Iniciar Sesion
          <i class="lni lni-arrow-left login"></i>
        </button>
      </div>
      <div class="overlay-panel overlay-rigth">
        <h1 class="title">Empieza tus vacaciones <br> aquí</h1>
        <p>Si no tienes una cuenta de EMPIRE, ve a nosotros y da comienzo a tus vacaciones</p>
        <button class="ghost" id="register">Registro
          <i class="lni lni-arrow-rigth register"></i>
        </button>
      </div>
    </div>
  </div>

  </div> 
  <script src="/WebHotel/scripts/auth.js"></script>
</body>
</html>

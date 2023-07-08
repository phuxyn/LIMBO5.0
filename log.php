
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="assets/css/oi.css" />
    <title>Limbo cadastro</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="assets/php/login.php" class="sign-in-form" method="POST">
            <h2 class="title">Logar</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Usuario" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Senha" />
            </div>
            <input type="submit" value="Logar" class="btn solid" />
            <p class="social-text">Nos sigam tambem em nossas <br>
              redes sociais</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
           </form>
          </form>
          <form action="assets/php/cadastro.php" class="sign-up-form" method="POST">
    <h2 class="title">Cadastrar</h2>
    <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" name="username" placeholder="Usuario" />
    </div>
    <div class="input-field">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" placeholder="Email" />
    </div>
    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Senha" />
    </div>
            <input type="submit" class="btn" value="Cadastrar" />
            <p class="social-text">Nos sigam tambem em nossas <br>
              redes sociais</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
           </form>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Novo aqui ?</h3>
            <p>
            Cadastre-se agora e fique por dentro de tudo que se passa no mundo nerd!
            </p>
            <button class="btn transparent" id="sign-up-btn">
            Cadastre-se
            </button>
          </div>
          <img src="assets/img/cadastro/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Vamos logar ?</h3>
            <p>
            Entre agora e fique por dentro de tudo que se passa no mundo nerd!
            </p>
            <button class="btn transparent" id="sign-in-btn">
            Entrar
            </button>
          </div>
          <img src="assets/img/cadastro/img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="assets/js/app.js"></script>
  </body>
</html>

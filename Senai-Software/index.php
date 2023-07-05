<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <!-- Importante deixarmos a codificação dos caracteres e o título no início de <head> para otimização e procura da página -->
  
  <!-- meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="robots" content="index, nofollow">
  <meta name="googlebot" content="index, nofollow">
  <meta name="googlebot" content="notranslate">
  <meta name="theme-color" content="#FFFFFF">
  <meta name="description" content="Login biblioteca SENAI">
  <meta name="keywords" content="SENAI, Biblioteca, login">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="author" content="SENAI">

  <!-- link tags -->
  <link rel="stylesheet" href="config/assets/estilos/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&amp;family=Fira+Sans:ital,wght@1,200&amp;family=Montserrat:wght@200&amp;family=Source+Sans+Pro&amp;display=swap" rel="stylesheet">

  <!-- Adicione a biblioteca de ícones Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="./config/assets/img/senai.ico" type="image/x-icon">
  </head>

<body>

  <div id="app">

    <form id="forms" action="./conexaologin.php" method="post" onsubmit="exibirAlerta(event)">

      <div class="link-container">
        <a href="./cadastro.html" class="link-button1">CRIAR CADASTRO</a>
      </div>
      <img src="./config/assets/img/senailogo1.png" alt="logo SENAI" id="logosenai">

      <h1>LOGIN</h1>

      <label for="nome">Nome ou e-mail</label>
      <input type="text" maxlength="42" id="nome" name="usuario" placeholder="Digite aqui seu nome ou e-mail" required
        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite aqui seu nome ou e-mail'"
        style="text-align: left;" autocomplete="off"><br>

      <label for="senha">Senha</label>
      <div class="password-container">
        <input type="password" minlength="8" maxlength="62" id="senha" name="senha" placeholder="Digite aqui sua senha"
          required onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite sua senha'"
          style="text-align: left; " autocomplete="off">

        <span class="password-toggle-btn" onclick="togglePasswordVisibility('senha', 'password-toggle-icon')">
          <i id="password-toggle-icon" class="fas fa-eye"></i>
        </span>
      </div>

      <div class="link-container">
        <a href="./passwrecovery.html" class="link-button2">RECUPERAR SENHA</a>
      </div>

      <div class="button-container">
        <button type="submit" value="ACESSAR">ACESSAR</button>

        <button type="button" id="botao_limpar" onclick="limparFormulario()" class="limpar-button">LIMPAR
          FORMULÁRIO</button>

      </div>

    </form>
  </div><!--
  </div>
  <div class="captcha">
    <button class="g-recaptcha" data-sitekey="6LeIALEmAAAAALolDlVfyHC3zP3gdv4Rb2DRNJeC" data-callback='onSubmit' data-action='submit'>CAPTCHA</button>
  </div>
  <head>
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LeIALEmAAAAALolDlVfyHC3zP3gdv4Rb2DRNJeC"></script>
    ...
  </head>
  
  <script>
    function onClick(e) {
      e.preventDefault();
      grecaptcha.enterprise.ready(async () => {
        const token = await grecaptcha.enterprise.execute('6LeIALEmAAAAALolDlVfyHC3zP3gdv4Rb2DRNJeC', {action: 'LOGIN'});
        // IMPORTANT: The 'token' that results from execute is an encrypted response sent by
        // reCAPTCHA Enterprise to the end user's browser.
        // This token must be validated by creating an assessment.
        // See https://cloud.google.com/recaptcha-enterprise/docs/create-assessment
      });
    }
  </script>
  -->


    <div id="falseMsg" class="failed"></div>
    <div id="trueMsg" class="success"></div>
   <!--<script>
      
      
      // Verificar se a variável de sessão está definida
      if (sessionStorage.getItem('login_message')) {
        // Exibir a mensagem
        alert(sessionStorage.getItem('login_message'));
        // Limpar a variável de sessão
        sessionStorage.removeItem('login_message');
      }


      function limparFormulario() {
        document.getElementById("forms").reset();

        // Limpar manualmente os campos de texto
        var dados = document.querySelectorAll('#forms input[type="text"]');
        for (var i = 0; i < dados.length; i++) {
          dados[i].value = '';
        }
      }
      function togglePasswordVisibility() {
        var senhaInput = document.getElementById("senha");
        var toggleIcon = document.getElementById("password-toggle-icon");
        if (senhaInput.type === "password") {
          senhaInput.type = "text";
          toggleIcon.classList.remove("fa-eye");
          toggleIcon.classList.add("fa-eye-slash");
        } else {
          senhaInput.type = "password";
          toggleIcon.classList.remove("fa-eye-slash");
          toggleIcon.classList.add("fa-eye");
        }
      }
    </script>-->
  
  <!--<button onclick="history.go(-1)">Voltar</button>-->
  <script src="./config/assets/js/passw_eye.js"></script>
  <script src="./config/assets/js/destruirSessao.js"></script>
  <script src="./config/assets/js/default.js"></script>
    <footer>
      <div class="rodape">
        <p>&copy;2023 UAIBook. Todos os direitos reservados.<br>Curso de Desenvolvimento em Sistemas. Trilhas do Futuro
          II. <br>SENAI. Uberaba/MG.</p>
      </div>
    </footer>

</body>

</html>
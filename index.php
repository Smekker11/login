<!doctype html>
<html>
    <head>
        <title>mekke login</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://unpkg.com/vue@3"></script>
        <script type="module" src="app.js"></script>
        <?php
        session_start();
        $id = $_SESSION['id'];
        ?>
    </head>
    <body>
        <h1 align="center" class="y">mekke login</h1>
        <div class="login-box">
          <form action="/qu.php" method="post">
              <label id="l-mail" for="mail">EMAIL:</label>
              <input class="field" id="mail" name="email" type="email"><br><br>
              <label id="l-pass" for="pass">PASSWD:</label>
              <input class="field" id="pass" name="pass" type="password">
              <input id="submit" class="button" type="submit" value="Login">
          </form>
          <h3 style="color: red;"><?php
          if ($id == "nuc"){
            echo "{{ message }}";
          }
          ?></h3>
        </div>
    </body>
</html>
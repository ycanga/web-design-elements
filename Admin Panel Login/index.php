<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Paneli</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="../css/index.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="width: %100; height: %100; !important;">

  <div id="wrapper">
    <div id="table">
      <a class="active">Admin Panel</a>
    </div>
    <div id="frm">
      <form action="conn.php" action="admin-login.php" method="POST">
        <div class="form-group">
          <label for="username">Kullanıcı adı</label>
          <input type="text" id="username" autofocus name="name">
        </div>
        <div class="form-group">
          <label for="pass">Şifre</label>
          <input type="password" id="pass" name="pass">
          <span id="showpwd" class="fa fa-eye-slash"></span>
        </div>
        <div class="form-group">
          <label id="checkbox">
            <input type="checkbox" checked><span class="text">Beni Hatırla</span>
          </label>
        </div>
        <div class="form-group">
          <input type="submit" value="Giriş Yap" id="btn">
        </div>
      </form>
      <div class="hr"></div>
      <a href="https://www.4lphasoftware.com" id="froget-pass" style="color: #FFB601;">www.4lphasoftware.com</a>

    </div>

  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#showpwd").on("click", function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        $($(this).siblings()[1]).attr("type", function(index, attr) {
          return attr == "password" ? "text" : "password"
        });
      });
    })
  </script>
  
</body>

</html>
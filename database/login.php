<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }
  </style>
</head>
<body class="text-center">

<div class="container mt-3">
  <h2>Silahkan Login</h2>
  <form action="login_action.php" method="POST" class="form-signin">
    <div class="mb-3 mt-3">
      <input type="text" class="form-control" placeholder="Enter username" name="username">
    </div>
    <div class="mb-3">
      <input type="password" class="form-control" placeholder="Enter password" name="pswd">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <h1>DON'T SUFFERING</h1>
    <p>i'm just little kidss :)</p>
  </head>
  <body>
    <div class="contain">
    <form class="forum" method="post" action="/postreg">
      {{csrf_field()}}
      <input type="text" name="nama" placeholder="nama">
      <input type="text" name="no_pelajar" placeholder="no_pelajar">
      <input type="text" name="email" placeholder="email">
      <input type="text" name="alamat" placeholder="alamat">
      <input type="password" name="password" placeholder="password">
      <div class="submit">
        <input type="submit" name="submit" value="Register">
      </div>
    </form>
  </div>
  <footer>
  </footer>
  </div>
  </body>
</html>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TUGAS SEA</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <h1>DON'T SUFFERING</h1>
    <p>i'm just little kids :)</p>
  </head>
  <body>
    <div class="contain">
    <form class="forum" method="post" action="/postlgn">
      {{csrf_field()}}
      <input type="text" name="email" placeholder="email">
      <input type="password" name="password" placeholder="password">
      <div class="submit">
        <input type="submit" name="submit" value="submit woiiii">
      </div>
    </form>
  </div>
  <footer>
  Email : mfwj21@gmail.com<br>
  Pass  : anakbaik
  </footer>
  </div>
  </body>
</html>

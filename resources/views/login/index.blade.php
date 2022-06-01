<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <link rel="stylesheet" href="./assets/style/main.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="./assets/style/logreg.css" />
  </head>
  <body>
    <div class="container">
      <div class="form__container">
        <form action="/login" method="post" class="form">
          @csrf
          <h1 class="form__title">Masuk</h1>
          <input type="email" class="@error('email') input--error  @enderror" name="email" id="email" placeholder="Masukkan Email" autofocus required/>
          <input type="password" name="password" id="password" placeholder="Masukkan Password" required value="{{ old('email') }}"/>
          <button type="submit">Masuk</button>

          <p>Belum Punya Akun ? <a href="/register">Buat disini</a></p>

          <a class="form__back" href="/"
            ><i class="fa-solid fa-circle-arrow-left"></i
          ></a>
        </form>
      </div>
    </div>
  </body>
</html>

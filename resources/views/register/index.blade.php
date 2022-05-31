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
        <div class="form">
          <h1 class="form__title">Daftar</h1>
          <input type="email" placeholder="Masukkan Email" />
          <input type="password" placeholder="Masukkan Password" />
          <input
            type="text"
            name="address"
            id="address"
            placeholder="Masukkan Alamat"
          />
          <input
            type="text"
            name="phoneNumber"
            id="phoneNumber"
            placeholder="Masukkan No HP"
          />
          <button type="submit">Daftar</button>

          <p>Sudah Punya Akun ? <a href="">Masuk disini</a></p>

          <a class="form__back" href=""
            ><i class="fa-solid fa-circle-arrow-left"></i
          ></a>
        </div>
      </div>
    </div>
  </body>
</html>

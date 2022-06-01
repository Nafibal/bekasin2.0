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
        <form action="/register" method="post" class="form">
          @csrf
          <h1 class="form__title">Daftar</h1>
          <input
            required 
            value="{{ old('name') }}"
            name="name" 
            id="name" 
            type="text" 
            placeholder="Masukkan Nama" 
            class="@error('name') input--error @enderror"
          />
          <input
            required 
            value="{{ old('email') }}"
            name="email" 
            id="email" 
            type="email" 
            placeholder="Masukkan Email" 
            class="@error('email') input--error @enderror"
          />
          <input
            required 
            name="password" 
            id="password" 
            type="password" 
            placeholder="Masukkan Password" 
            class="@error('password') input--error @enderror"
          />
          <input
            required
            value="{{ old('address') }}"
            type="text"
            name="address"
            id="address"
            placeholder="Masukkan Alamat"
            class="@error('address') input--error @enderror"
          />
          <input
            required
            value="{{ old('phoneNumber') }}"
            type="text"
            name="phoneNumber"
            id="phoneNumber"
            placeholder="Masukkan No HP"
            class="@error('phoneNumber') input--error @enderror"
          />
          <button type="submit">Daftar</button>

          <p>Sudah Punya Akun ? <a href="/login">Masuk disini</a></p>

          <a class="form__back" href="/"
            ><i class="fa-solid fa-circle-arrow-left"></i
          ></a>
        </form>
      </div>
    </div>
  </body>
</html>

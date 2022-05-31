<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>profil</title>

    <link rel="stylesheet" href="./assets/style/main.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="./assets/style/profile.css" />
  </head>
  <body>
    <!-- NAVIGATION -->
    <nav class="navigation">
      <div class="container">
        <img class="navigation__logo" src="./assets/logo/logo.png" alt="logo" />
        <div class="navigation__list">
          <a href="" class="navigation__link"
            ><i class="fa-solid fa-cart-shopping"></i
          ></a>
          <a href="" class="navigation__link"
            ><i class="fa-solid fa-truck"></i
          ></a>
          <a href="" class="navigation__link"
            ><i class="fa-solid fa-circle-user"></i
          ></a>
          <a href="" class="navigation__link">
            <button class="navigation__button">logout</button>
          </a>
        </div>
      </div>
    </nav>

    <div class="container">
      <!-- USER BIODATA -->
      <div class="user__container">
        <h1 class="user__title">Nama User</h1>
        <div class="user__biodata">
          <h2 class="biodata__title">Biodata</h2>
          <div class="biodata__label">
            <p class="biodata__tag">Nama</p>
            <p>: Anya</p>
          </div>
          <div class="biodata__label">
            <p class="biodata__tag">Email</p>
            <p>: ahmadtoha@gmail.com</p>
          </div>
          <div class="biodata__label">
            <p class="biodata__tag">Nomor HP</p>
            <p>: 085710481115</p>
          </div>
          <div class="biodata__label">
            <p class="biodata__tag">Alamat</p>
            <p>: Jl. asmodeus</p>
          </div>
          <img src="./assets/images/user/Anya.jpg" alt="" class="user__image" />
        </div>
      </div>

      <!-- LIST BARANG -->
      <div class="product__container">
        <h1 class="product__title">List Barang</h1>
        <button class="product__button">Tambah Barang</button>
        <table class="product__table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Harga</th>
              <th>Kategori</th>
              <th>gambar</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1.</td>
              <td>Jaket</td>
              <td>Rp. 50.000</td>
              <td>Pakaian pria</td>
              <td>
                <img
                  class="table__image"
                  src="./assets/images/product/01.png"
                  alt=""
                />
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>

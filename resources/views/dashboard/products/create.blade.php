<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create</title>

    <link rel="stylesheet" href="./assets/style/main.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"

      />
      
      <link rel="stylesheet" href="/assets/style/logreg.css" />

      {{-- Trix --}}
      <link rel="stylesheet" type="text/css" href="/assets/style/trix.css">
      <script type="text/javascript" src="/assets/js/trix.js"></script>

      <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
          display: none;
        }
      </style>
    </head>
  <body>
    <div class="container">
      <div class="form__container">
        <form action="/dashboard/products" method="post" class="form form--wide">
          @csrf
          <h1 class="form__title">Tambahkan Barang</h1>
          <input type="text" class="@error('name') input--error  @enderror" name="name" id="name" placeholder="Masukkan Nama Barang" autofocus/>
          <input type="text" name="slug" id="slug" placeholder="Masukkan Slug Barang"  readonly/>
          <input type="number" min="0" step="0.1" class="@error('price') input--error  @enderror" name="price" id="price" placeholder="Masukkan Harga Barang"/>
          <select name="category_id" id="category" class="@error('price') input--error  @enderror">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>                
            @endforeach
          </select>
          <label for="description">Masukkan Deskripsi</label>
          <input id="description" type="hidden" name="description" class="@error('price') input--error  @enderror">
          <trix-editor input="description"></trix-editor>
          <button type="submit">Tambahkan</button>

          <a class="form__back form__back--wide" href="/dashboard/products"
            ><i class="fa-solid fa-circle-arrow-left"></i
          ></a>
        </form>
      </div>
    </div>



    <script>
      const name = document.querySelector('#name');
      const slug = document.querySelector('#slug');
      
      name.addEventListener('change', function() {
        fetch('/dashboard/products/checkSlug?name=' + name.value)
          .then(response => response.json())
          .then(data => slug.value = data.slug)
      });

      document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
      });
    </script>
  </body>
</html>

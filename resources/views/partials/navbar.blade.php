<nav class="navigation">
  <div class="container">
    <a href="/">
      <img class="navigation__logo" src="./assets/logo/logo.png" alt="logo" />
    </a>
    <div class="navigation__list">
      @auth
        <a href="" class="navigation__link"
        ><i class="fa-solid fa-cart-shopping"></i
        ></a>
        <a href="" class="navigation__link"
          ><i class="fa-solid fa-truck"></i
        ></a>
        <a href="/dashboard" class="navigation__link"
          ><i class="fa-solid fa-circle-user"></i
        ></a>
        <form class="navigation__link" action="/logout" method="post">
          @csrf
          <button class="navigation__button">logout</button>
        </form>
        @else
          <a href="/login" class="navigation__link ">
            <button class="navigation__button navigation__button--alt" type="submit">Masuk</button>
          </a>
          <a href="/register" class="navigation__link">
            <button class="navigation__button">Daftar</button>
          </a>
      @endauth
    </div>
  </div>
</nav>


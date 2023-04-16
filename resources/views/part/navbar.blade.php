<style>
   
    .navbar-collapse{
        flex-basis: 0;
        flex-grow: 0;
    }

    nav{
        z-index: 99;
        background-color: white;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
</style>
<nav class="navbar navbar-expand-lg bg-light position-fixed w-100">
    <div class="container">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="nav_logo">
                <a class="navbar-brand" href="/home"><img src="{{asset('../img/logo-sivali.png')}}" width="100px" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link fs-5 active" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fs-5" href="/katalog">Katalog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fs-5" href="/artikel">Artikel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fs-5" href="#">Kontak</a>
                </li>
              </ul>
            </div>  
            <div class="nav_notif">
                <span class="navbar-text d-flex gap-4">
                    <i class="fa-lg fa-solid fa-magnifying-glass w-75"></i>
                    <i class="fa-lg fa-regular fa-user w-75"></i>
                    <i class="fa-lg fa-solid fa-cart-shopping w-75"></i>
                </span>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
        </div>
    </div>
</nav>
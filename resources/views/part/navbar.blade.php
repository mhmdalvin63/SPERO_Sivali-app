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

    .nav-item .nav-link:focus{
      font-weight: bolder;
    }

    #navbarText ul li a{
      color: #134B6E;
    }

    #navbarText ul li a:hover{
      /* font-weight: bold; */
      border-bottom: 1px solid #134B6E;
    }

    .nav_logo{grid-area: logo;}
    #navbarText{grid-area: menu;}
    .nav_notif{grid-area: notifikasi;}
    .navbar-toggler{grid-area: btnNav;}

    .navactive{
      font-weight: bold;
      color: #134B6E;
      border-bottom: 1px solid #134B6E;
    }
    
    @media only screen and (max-width: 650px){
      #nav-large{
        display: none;
      }
      #nav-small{
        display: inherit;
      }
      #nav-small .nav_notif{
        border: 5px 5px 0 5px solid grey;
      }
    }
    @media only screen and (min-width: 651px){
      #nav-large{
        display: inherit;
      }
      #nav-small{
        display: none;
      }
    }
    /* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
  #navbarText{
    display: flex;
    justify-content: center;
  }
  .navbar .container .container-fluid{
      display: grid;
      grid-template-columns: 1fr 5fr 1fr;
      grid-template-areas: 'logo menu notifikasi';
      align-items: center;
    }
}
@media only screen and (max-width: 992px) {
  .navbar .container .container-fluid{
      display: grid;
      grid-template-columns: 1fr 2fr 1fr;
      grid-template-areas: 
      'logo notifikasi btnNav'
      'menu menu menu';
      align-items: center;
    }
    #navbarText{
      text-align: center;
    }
}
.search-box{
  position: relative;
}
.input-search{
  height: 50px;
  width: 50px;
  border-style: none;
  padding: 10px;
  font-size: 18px;
  letter-spacing: 2px;
  outline: none;
  border-radius: 100%;
  transition: all .5s ease-in-out;
  /* background-color: #22a6b3; */
  padding-right: 40px;
  /* color:#fff; */
}
.input-search::placeholder{
  color:rgba(17, 1, 243, 0.5);
  font-size: 18px;
  letter-spacing: 2px;
  font-weight: 500;
}
.btn-search{
  width: 47px;
  height: 53px;
  border-style: none;
  font-size: 20px;
  font-weight: bold;
  outline: none;
  cursor: pointer;
  border-radius: 50%;
  position: absolute;
  right: 0px;
  color:grey ;
  background-color:transparent;
  pointer-events: painted;  
}
.btn-search:focus ~ .input-search{
  color:rgba(17, 1, 243, 0.5);
  font-size: 18px;
  letter-spacing: 2px;
  font-weight: 500;
  width: 250px;
  border-radius: 0px;
  background-color: transparent;
  border-bottom:1px solid #134B6E;
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
.input-search:focus{
  color: grey;
  width: 250px;
  border-radius: 0px;
  background-color: transparent;
  border-bottom:1px solid #134B6E;
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
</style>
<nav class="navbar navbar-expand-lg bg-light position-fixed w-100" id="nav-large">
    <div class="container">
        <div class="container-fluid">
            <div class="nav_logo">
                <a class="navbar-brand" href="/home"><img src="{{asset('../img/logo-sivali.png')}}" width="100px" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item {{ Request::segment(1) === 'home' ? 'navactive' : null }}">
                  <a class="nav-link fs-5" aria-current="page" href="{{ url('home' )}}">Home</a>
                </li>
                <li class="nav-item {{ Request::segment(1) === 'katalog' ? 'navactive' : null }}">
                  <a class="nav-link fs-5" aria-current="page" href="{{ url('katalog' )}}">Katalog</a>
                </li>
                <li class="nav-item {{ Request::segment(1) === 'artikel' ? 'navactive' : null }}">
                  <a class="nav-link fs-5" aria-current="page" href="{{ url('artikel' )}}">Artikel</a>
                </li>
                <li class="nav-item {{ Request::segment(1) === 'kontak' ? 'navactive' : null }}">
                  <a class="nav-link fs-5" aria-current="page" href="{{ url('kontak' )}}">Kontak</a>
                </li>
              </ul>
            </div>  
            <div class="nav_notif">
                <span class="navbar-text d-flex align-items-center justify-content-center gap-3">
                  <div class="search-box">
                    <button class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                    <input type="text" id="myInput" onkeyup="myFunction()" class="input-search" placeholder="Type to Search...">
                  </div>
                    <a href="">
                      <div class="profil me-2">
                        <i class="fa-lg fa-regular fa-user w-75"></i>
                      </div>
                    </a>
                    <a href="{{ url('wishlist') }}">
                      <div class="wishlist">
                        {{-- <i class="fa-lg fa-solid fa-cart-shopping w-75"></i> --}}
                        <i class="fa-lg fa-regular fa-heart"></i>
                        </div>
                    </a>
                </span>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg bg-light position-fixed w-100" id="nav-small">
    <div class="container">
        <div class="container-fluid">
            <div class="nav_logo">
                <a class="navbar-brand" href="/home"><img src="{{asset('../img/logo-sivali.png')}}" width="100px" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item {{ Request::segment(1) === 'home' ? 'navactive' : null }}">
                  <a class="nav-link fs-5" aria-current="page" href="{{ url('home' )}}">Home</a>
                </li>
                <li class="nav-item {{ Request::segment(1) === 'katalog' ? 'navactive' : null }}">
                  <a class="nav-link fs-5" aria-current="page" href="{{ url('katalog' )}}">Katalog</a>
                </li>
                <li class="nav-item {{ Request::segment(1) === 'artikel' ? 'navactive' : null }}">
                  <a class="nav-link fs-5" aria-current="page" href="{{ url('artikel' )}}">Artikel</a>
                </li>
                <li class="nav-item {{ Request::segment(1) === 'kontak' ? 'navactive' : null }}">
                  <a class="nav-link fs-5" aria-current="page" href="{{ url('kontak' )}}">Kontak</a>
                </li>
              </ul>
              <div class="nav_notif">
                  <span class="navbar-text d-flex align-items-center justify-content-center gap-3">
                    <div class="search-box">
                      <button class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                      <input type="text" id="myInput" onkeyup="myFunction()" class="input-search" placeholder="Type to Search...">
                    </div>
                      <div class="profil me-2">
                        <i class="fa-lg fa-regular fa-user w-75"></i>
                      </div>
                      <div class="keranjang">
                      <i class="fa-lg fa-solid fa-cart-shopping w-75"></i>
                      </div>
                  </span>
              </div>
            </div>  
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</nav>

{{-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    document.querySelectorAll(".nav-item").forEach((ele) =>
  ele.addEventListener("click", function (event) {
    event.preventDefault();
    document
      .querySelectorAll(".nav-item")
      .forEach((ele) => ele.classList.remove("active"));
    this.classList.add("active")
  })
);
</script> --}}
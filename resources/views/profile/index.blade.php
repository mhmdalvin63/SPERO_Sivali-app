<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo-sivali.png') }}">
    <title>Sivali</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('../fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/regular.min.css" integrity="sha512-WidMaWaNmZqjk3gDE6KBFCoDpBz9stTsTZZTeocfq/eDNkLfpakEd7qR0bPejvy/x0iT0dvzIq4IirnBtVer5A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Poppins&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- SHARE SOCIAL MEDIA --}}

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/share.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


    <style>
      
      :root {
      --blue-color: #134B6E; 
    }
    body{
      font-family: 'Quicksand', sans-serif;
    }

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
.search {
  width: 100%;
  position: relative;
  display: flex;
}

.wrap{
  width: 100%;
  margin-bottom: 0!important;
  /* position: absolute; */
  /* top: 50%; */
  /* right: -10%; */
  transform: translate(0 50%);
}
/* @media only screen and (max-width: 651px) {
  .searchTerm {
    width: 2.5rem !important;
  }
} */
@media only screen and (max-width: 460px) {
  .wrap{
    width: 15% !important;
    transform: translateX(-2rem)
  }
}
@media only screen and (min-width: 460px) and (max-width: 650px) {
  .wrap{
    width: 17.5% !important;
  }
}
@media only screen and (min-width: 650px) and (max-width: 768px) {
  .wrap{
    width: 35% !important;
  }
}
@media only screen and (min-width: 768px) and (max-width: 992px) {
  .wrap{
    width: 100% !important;
  }
  .searchTerm {
    width: 15rem !important;
  }
}
.searchTerm {
  width: 10rem;
  transition: all .5s ease-in;
  border: .5px solid #00B4CC;
  border-right: none;
  padding: 5px;
  height: 2.25rem;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

/* .searchTerm:focus{
  color: #888b8b;
  width: 15rem;
  transition: all .5s ease-in;
} */
.dropdown {
  display: inline-block;
  position: relative;
}

.dd-button {
  display: inline-block;
  border-radius: 4px;
  padding: 10px 30px 10px 5px;
  cursor: pointer;
  white-space: nowrap;
}

.dd-button:after {
  content: '';
  position: absolute;
  top: 50%;
  right: 15px;
  transform: translateY(-50%);
  width: 0; 
  height: 0; 
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid black;
}

/* .dd-button:hover {
  background-color: #eeeeee;
} */


.dd-input {
  display: none;
}

.dd-menu {
  position: absolute;
  top: 100%;
  border: 1px solid #ccc;
  border-radius: 4px;
  padding: 0;
  margin: 2px 0 0 0;
  box-shadow: 0 0 6px 0 rgba(0,0,0,0.1);
  background-color: #ffffff;
  list-style-type: none;
}

.dd-input + .dd-menu {
  display: none;
} 

.dd-input:checked + .dd-menu {
  display: block;
} 

.dd-menu li {
  padding: 10px 20px;
  cursor: pointer;
  white-space: nowrap;
}

.dd-menu li:hover {
  background-color: #f6f6f6;
}

.dd-menu li a {
  display: block;
  text-decoration: none;
  margin: -10px -20px;
  padding: 10px 20px;
}

.dd-menu li.divider{
  padding: 0;
  border-bottom: 1px solid #cccccc;
}

.searchButton {
  width: 2.5rem;
  height: 36px;
  border: .5px solid #00B4CC;
  border-left: none;
  outline: none;
  background: white;
  text-align: center;
  color: #8b8b8b;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}
.d-none {
      display: none;
    }
    </style>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg bg-light position-sticky top-0 w-100" id="nav-large">
    <div class="container">
        <div class="container-fluid">
            <div class="nav_logo">
                <a class="navbar-brand" href="/"><img src="{{asset('../img/logo-sivali.png')}}" width="100px" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item {{ Request::segment(1) === '' ? 'navactive' : null }}">
                  <a class="nav-link fs-5" aria-current="page" href="{{ url('/' )}}">Home</a>
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
                  @if(Auth::user() == NULL)
                  <a href="/login" class="btn btn-primary fs-bold text-white px-3 py-2">Login</a>
                  @elseif(Auth::user()->level == 'admin')
                  <a href="/login" class="btn btn-primary fs-bold text-white px-3 py-2">Login</a>
                  @elseif(Auth::user()->level == 'user')
                    <!-- <form action="{{ url('search') }}" method="GET" role="search" class="wrap">
                    <div class="search">
                      <input type="search" name="search" value="" class="searchTerm" placeholder="Search Barang">
                      <button type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                     </button>
                    </div>
                  </form> -->
                  <!-- <a href="{{url('logout')}}">
                    <div class="profil me-2">
                      <i class="fa-lg fa-regular fa-user w-75"></i>
                    </div>
                  </a> -->
                  <a href="{{ url('wishlist') }}">
                    <div class="wishlist">
                      {{-- <i class="fa-lg fa-solid fa-cart-shopping w-75"></i> --}}
                      <i class="fa-lg fa-regular fa-heart"></i>
                    </div>
                  </a>
                  <a href="{{ url('chart') }}">
                    <div class="chart">
                      <i class="fa-lg fa-solid fa-cart-shopping"></i>
                    </div>
                  </a>
                  <label class="dropdown">

                  <div class="dd-button">
                  <i class="fa-lg fa-regular text-dark fa-user"></i>
                  </div>

                  <input type="checkbox" class="dd-input" id="test">

                  <ul class="dd-menu text-dark">
                    <li>
                      <a href="/profil"><i class="fa-regular text-dark fa-user me-2"></i>Profile</a>
                    </li>
                    <li>
                      <a href="/logout"><i class="fa-solid fa-right-from-bracket me-2"></i>Logout</a>
                    </li>
                  </ul>
                  
                </label>
                    @endif
                </span>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg bg-light position-sticky top-0 w-100" id="nav-small">
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
                  <a class="nav-link fs-5" aria-current="page" href="{{ url('katalog' )}}">Katalog gw</a>
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
                    <form action="{{ url('search') }}" method="GET" role="search" class="wrap">
                      <div class="search">
                        <input type="search" name="search" value="" class="searchTerm" placeholder="Cari Barangmu...">
                        <button type="submit" class="searchButton">
                          <i class="fa fa-search"></i>
                       </button>
                      </div>
                    </form>
                    
            
                      <a href="/logout">
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
            </div>  
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</nav>
<div class="container mt-4">
  <div class="row g-2">
    <div class="col-4">
      <div class="ms-5 text-center">
        <img src="{{asset('../img/mozaik.jpg')}}" width="250px" height="250px" class="rounded-circle border border-2 border-dark" alt="">
        <h3 class="opacity-90 mt-3">{{Auth::user()->name}}</h3>
        <button class="btn btn-outline-primary" style="padding: 2px 3.7rem">Edit Profile</button>
    </div>
    </div>
    <div class="col-8">
      <div class="p-3 border bg-light">Custom column padding</div>
    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script src="{{asset('../js/coba.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>
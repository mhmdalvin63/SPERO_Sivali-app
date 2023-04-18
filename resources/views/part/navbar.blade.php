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

    .active{
      /* background-color:#d35400; */
      color: #134B6E;
      font-weight: bolder;
    }

    #navbarText ul li a{
      color: #134B6E;
    }

    #navbarText ul li a:focus,
    #navbarText ul li a:hover{
      font-weight: bold;
    }

    .nav_logo{grid-area: logo;}
    #navbarText{grid-area: menu;}
    .nav_notif{grid-area: notifikasi;}
    .navbar-toggler{grid-area: btnNav;}
    
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
</style>
<nav class="navbar navbar-expand-lg bg-light position-fixed w-100">
    <div class="container">
        <div class="container-fluid">
            <div class="nav_logo">
                <a class="navbar-brand" href="/home"><img src="{{asset('../img/logo-sivali.png')}}" width="100px" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link fs-5" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fs-5" href="/katalog">Katalog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fs-5" href="/artikel">Artikel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fs-5" href="/kontak">Kontak</a>
                </li>
              </ul>
            </div>  
            <div class="nav_notif">
                <span class="navbar-text d-flex gap-1">
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

{{-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
          $('ul li a').click(function(){
            $('li a').removeClass("active");
            $(this).addClass("active");
        });
    });
</script> --}}
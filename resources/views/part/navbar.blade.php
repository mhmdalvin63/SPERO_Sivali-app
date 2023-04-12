<style>
    *.icon-blue {
        color: #0088cc;
        }

        *.icon-grey {
        color: grey;
        }

        i {
        width: 100px;
        text-align: center;
        vertical-align: middle;
        position: relative;
        }

        .badge:after {
        content: attr(data-count);
        position: absolute;
        background: #ff6600;
        height: 2rem;
        top: 1rem;
        right: 1.5rem;
        width: 2rem;
        text-align: center;
        line-height: 2rem;
        font-size: 1rem;
        border-radius: 50%;
        color: white;
        border: 1px solid #ff6600;
        font-family: sans-serif;
        font-weight: bold;
    }

    .badge {
        padding-left: 9px;
        padding-right: 9px;
        -webkit-border-radius: 9px;
        -moz-border-radius: 9px;
        border-radius: 9px;
        }

        .label-warning[href],
        .badge-warning[href] {
        background-color: #c67605;
    }

    .navbar-collapse{
        flex-basis: 0;
        flex-grow: 0;
    }
</style>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <div class="container-fluid d-flex justify-content-around align-items-center">
            <div class="nav_logo">
                <a class="navbar-brand" href="#"><img src="{{asset('../img/logorpl.jfif')}}" width="75px" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarText">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link fs-5 active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fs-5" href="#">Katalog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fs-5" href="#">Artikel</a>
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
                    {{-- <i href="#" class="fa-solid fa-cart-shopping w-75"><asp:Label ID="lblCartCount" runat="server" CssClass="badge badge-warning"  ForeColor="White"/></i> --}}
                </span>
            </div>
        </div>
    </div>
  </nav>
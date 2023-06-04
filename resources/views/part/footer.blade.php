<style>
    footer{
        margin-top: 2.5rem;
        background-color: #19376D;
        padding: 3rem 0 2rem 0;
    }
    .text-justify{
        text-align: justify;
    }
    i{
        width: max-content;
    }
    hr {
        margin: 1rem 0 1rem 0;
        color: inherit;
        border: 0;
        border-top: 1px solid;
        opacity: .25;
    }
    h2{
        font-size: calc(20px + (26 - 14) * ((100vw - 300px) / (1600 - 300)));
    }
    p{
        font-size: calc(6px + (26 - 14) * ((100vw - 300px) / (1600 - 300)));
    }
    @media (max-width: 768px) {
        .par-img img{
            width: 50%;
        }
        p{
            font-size: calc(12px + (26 - 14) * ((100vw - 300px) / (1600 - 300)));
        }
    }
</style>
<footer class="text-white">
    <div class="container">
        <div class="row">
            <div class="par-img col-md-2 d-flex justify-content-center align-items-center">
                <img src="{{asset('../img/logo-sivali-putih.png')}}" width="100%" alt="">
            </div>
            <div class="col-md-4 mt-3">
                <h2>SIVALI FURNITURE</h2>
                <p class="text-justify">Sivali Fitur adalah sebuah wadah untuk anda yang sedang mencari furniture terbaik.</p>
                <div class="sosmed d-flex gap-4 mt-3 mt-lg-4 mb-4 mb-lg-0 flex-wrap">
                    <i class="fa-brands fa-facebook-f fa-lg"></i>
                    <i class="fa-brands fa-twitter fa-lg"></i>
                    <i class="fa-brands fa-instagram fa-lg"></i>
                    <i class="fa-brands fa-youtube fa-lg"></i>
                    <i class="fa-brands fa-tiktok fa-lg"></i>
                    <i class="fa-solid fa-circle-play fa-lg"></i>
                </div>
            </div>
            <div class="col-md-2 mt-3">
                <h2>MENU</h2>
                <p class="mb-1">Home</p>
                <p class="mb-1">Artikel</p>
                <p class="mb-1">Katalog</p>
                <p class="mb-1">Kontak Kami</p>
            </div>
            <div class="col-md-4 mt-3">
                <h2>ALAMAT</h2>
                <p class="text-justify">Jalan bukit sikumbang, no.103, rangkapan jaya baru, pancoran mas, depok.</p>
            </div>
        </div>
        <hr class="bg-white border-2 border-top border-white">
        <div class="bottom_footer d-flex justify-content-between">
            <p>@2020 Sivalin Furniture Jepara, All Rights Reserved</p>
            <p><a class="text-white" href="#">Terms & Condition</a> - <a class="text-white" href="#">Privacy</a> - <a class="text-white" href="#">Cookies</a></p>
        </div>
    </div>
</footer>
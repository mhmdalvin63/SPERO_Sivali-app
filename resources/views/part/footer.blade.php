<style>
    footer{
        margin-top: 2.5rem;
        background-color: #F0F0F0;
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
<footer class="text-dark">
    <div class="container">
        <div class="row">
            <div class="par-img col-md-2 d-flex justify-content-center align-items-center">
                <img src="{{asset('../img/ELEGAN_PNG.png')}}" width="100%" alt="">
            </div>
            <div class="col-md-4 mt-3">
                <h2>ELEGAN FASHION STORE</h2>
                <p class="text-justify" style="font-size: 15px">Elegan Fashion Store menyediakan berbagai koleksi sepatu seperti sneakers, sandal, dan aksesoris fashion pendukung lainnya yang berkualitas tinggi, sangat populer dikalangan para remaja dengan harga terjangkau.
            </div>
            <div class="col-md-2 mt-3">
                <h2>MENU</h2>
                <a style="text-decoration: none;" class="text-dark" href="/home"><p class="mb-1">Home</p></a>
                <a style="text-decoration: none;" class="text-dark" href="/artikel">
                <p class="mb-1">Artikel</p></a>
                <a style="text-decoration: none;" class="text-dark" href="/katalog">
                <p class="mb-1">Katalog</p></a>
                <a style="text-decoration: none;" class="text-dark" href="/kontak">
                <p class="mb-1">Kontak Kami</p></a>
            </div>
            <div class="col-md-4 mt-3">
                <h2>SOCIAL MEDIA</h2>
                <p class="text-justify"><i class="fa-brands fa-instagram fa-lg"></i> : <a href="https://www.instagram.com/elegan_fashion_store/" target="_blank" rel="noopener noreferrer"  style="text-decoration: none;" class="text-dark">elegan_fashion_store</a></p>
                <p class="text-justify"><i class="fa-brands fa-tiktok fa-lg"></></i> : <a href="https://www.tiktok.com/@eleganfashionstore" target="_blank" rel="noopener noreferrer"  style="text-decoration: none;" class="text-dark">eleganfashionstore</a></p><br>
                    <h2>MARKETPLACE</h2>
                <p class="text-justify"><i class="fa-brands fa-shopify fa-lg"></i> : <a href="https://shopee.co.id/eleganfashion" target="_blank" rel="noopener noreferrer"  style="text-decoration: none;" class="text-dark">EleganFashion.Store</a></p>
        </div>
        <hr class="bg-dark border-2 border-top border-dark">
        <div class="bottom_footer d-flex justify-content-between">
            <p>@2023 Elegan Fashion Store, All Rights Reserved</p>
            <p><a class="text-dark" href="#">Terms & Condition</a> - <a class="text-dark" href="#">Privacy</a> - <a class="text-dark" href="#">Cookies</a></p>
        </div>
    </div>
</footer>
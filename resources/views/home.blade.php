@extends('layout.main')
<style>
    #top{
        height: 100vh;
    }
    .circle{
        top: -5rem
    }
    .circle1{
        z-index: 1;
        width: 20rem;
        height: 20rem;
        border-radius: 200px;
        background: #19376D;
    }
    .circle2{
        z-index: 1;
        width: 5rem;
        height: 5rem;
        border-radius: 200px;
        background: #19376D;
    }
    #ab_lemari{
        /* margin-top: 1%; */
        margin-left: 2%;
        position: absolute;
        z-index: 2;
        width: 30%;
    }
    @media only screen and (max-width: 600px) {
        #ab_lemari{
        width: 100%;
        }
    }

    .menu .menu_btn{
        border: 1px solid rgb(187, 186, 186);
        border-radius: 20px;
    }
    .menu .menu_btn:hover{
        border: 1px solid rgb(187, 186, 186);
        border-radius: 20px;
        background: #19376D;
        color: white;
    }

    .top_product{
        /* background: red; */
        width: 100%;
        padding: 2.5rem;
        height: 15rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .top_product img{
        width: 100%;
    }
    .rating .checked{
        color: #ffc800;
    }
</style>
@section('content')
    <div class="container d-flex align-items-center"  id="top">
       <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <div class="desc">
                    <h1>Sofa terbaru dengan kualitas terbaik</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet quis modi eius at quae fugit?</p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{asset('../img/sofa.png')}}" width="110%" alt="">
            </div>
        </div>
       </div>
    </div>

    <div class="container-fluid mb-5">
        <div class="row d-flex justify-content-center text-center">
            <h3 class="mb-5">Kategori Barang</h3>
            <div class="col-md-1 col-2">
                <i class="fa-solid fa-coffee fa-2xl"></i>
                <p class="mt-3">Kopi Hitam</p>
            </div>
            <div class="col-md-1 col-2">
                <i class="fa-solid fa-coffee fa-2xl"></i>
                <p class="mt-3">Kopi Hitam</p>
            </div>
            <div class="col-md-1 col-2">
                <i class="fa-solid fa-coffee fa-2xl"></i>
                <p class="mt-3">Kopi Hitam</p>
            </div>
            <div class="col-md-1 col-2">
                <i class="fa-solid fa-coffee fa-2xl"></i>
                <p class="mt-3">Kopi Hitam</p>
            </div>
            <div class="col-md-1 col-2">
                <i class="fa-solid fa-coffee fa-2xl"></i>
                <p class="mt-3">Kopi Hitam</p>
            </div>
        </div>
    </div>

    <div class="d-flex align-items-center mb-4 pb-4" style="background: #E7E6E1; height: max-content; margin-top: 10rem;">
        <div class="container">
            <div class="row gap-5">
                <div class="col-md-5">
                    <img id="ab_lemari" src="{{asset('../img/lemarireal.png')}}" alt="">
                    <div class="circle position-relative">
                        <div class="circle1"></div>
                        <div class="circle2"></div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="cont_3">
                        <h1>Tentang Furniture Kita</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat delectus facere blanditiis voluptatum labore aliquam fuga dicta voluptas vero porro!</p>
                        <a class="btn btn-primary" href="#" role="button">Selengkapnya >></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 10rem;">
        <h1 class="text-center">Katalog Kami</h1>
        <div class="menu d-flex gap-2 flex-wrap justify-content-center mt-3">
            <a class="btn menu_btn" href="#" role="button">Semua</a>
            <a class="btn menu_btn" href="#" role="button">Terbaru</a>
            <a class="btn menu_btn" href="#" role="button">Terlaris</a>
            <a class="btn menu_btn" href="#" role="button">Termurah</a>
            <a class="btn menu_btn" href="#" role="button">Termahal</a>
            <a class="btn menu_btn" href="#" role="button">Promo</a>
        </div>
        <div class="row mt-5">
            <div class="col-md-3 mt-4"> 
                <div class="card" id="product">
                    <div class="top_product">
                        <img src="{{asset('../img/lemarireal.png')}}" alt="">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Micke</h5>
                        <p class="card-text">Rp.555.000</p>
                        <div class="rating">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-4"> 
                <div class="card" id="product">
                    <div class="top_product">
                        <img src="{{asset('../img/sofa.png')}}" alt="">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Lisabo</h5>
                        <p class="card-text">Rp.399.000</p>
                        <div class="rating">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-4"> 
                <div class="card" id="product">
                    <div class="top_product">
                        <img src="{{asset('../img/lemarireal.png')}}" alt="">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Micke</h5>
                        <p class="card-text">Rp.555.000</p>
                        <div class="rating">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-4"> 
                <div class="card" id="product">
                    <div class="top_product">
                        <img src="{{asset('../img/sofa.png')}}" alt="">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Lisabo</h5>
                        <p class="card-text">Rp.399.000</p>
                        <div class="rating">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                </div>
            </div>
        </div>
        <a class="d-block fs-5 mt-3 text-end" href="#" role="button">Selengkapnya >></a>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-8" style="background-color: #19376D">1</div>
                    <div class="col-md-4" style="background-color: #E7E6E1">2</div>
                    <div class="col-md-4" style="background-color: #ffc800">3</div>
                    <div class="col-md-8" style="background-color: chocolate">4</div>
                </div>
            </div>
            <div class="col-md-3" style="background-color: bisque">
                <div class="col-md-3" style="background-color: blue">5</div>
            </div>

            
        </div>
    </div>
    {{-- <div class="container d-flex align-items-center" id="top">
        <div class="circle position-relative">
            <div class="circle1"></div>
            <div class="circle2"></div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <img id="ab_lemari" src="{{asset('../img/sofa.png')}}" alt="">
                </div>
                <div class="col-md-6">
                    <h1>Tentang Furniture Kita</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat delectus facere blanditiis voluptatum labore aliquam fuga dicta voluptas vero porro!</p>
                    <a class="btn btn-primary" href="#" role="button">Selengkapnya >></a>
                </div>
            </div>
        </div>
    </div> --}}

    
@endsection
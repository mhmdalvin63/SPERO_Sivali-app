@extends('layout.main')
<link rel="stylesheet" href="{{asset('../css/kontak.css')}}">
<script src="{{asset('../js/coba.js')}}"></script>


@section('content')

<div class="container">
    <div class="header d-flex">
        <div class="content">
            <p class="fs-4 fw-bold" style="color:
            #7E1717">HUBUNGI KAMI</p>
            <img class="img-fluid" src="{{asset('../img/kontak.png')}}" alt="">
        </div>
    </div>

    <div class="middle__artikel">
        <p class="fs-4 fw-bold" style="color:
            #7E1717" id="sec_content">ELEGAN FASHION STORE CALL CENTER</p>
        <p class="desc__scc">Jika terdapat pertanyaan, kami siap membantu. Hubungi layanan pelanggan
        ELEGAN FASHION STORE atau temukan jawabannya di bawah ini.</p>
    </div>

    <div class="bottom__artikel d-flex justify-content-between mt-5">
        <div class="row">
            <div class="col-md-5 col-12" style="height: max-content;">
                <div class="ba__left">
                    <p class="fs-5 fw-bold mb-0" style="color:
                    #7E1717">call center atau customer service atau whatsapp admin :<a href="https://wa.me/6282229901779" target="_blank" style="text-decoration: none;">Disini</a>
</p>
                    <p class="paragraf mb-0 mt-4">jam operasional admin : <br>Senin - Jumat pukul 09:00 - 18:00 WIB
                           Sabtu - Minggu Pukul 10:00 - 15:00 WIB</p>
                </div>
            </div>
            <div class="col-md-2 d-flex justify-content-center">
                <div class="vr"></div>
            </div>
            <div class="col-md-5 col-12 mt-3 mt-md-0 text-center d-flex justify-content-center" style="height: max-content; flex-wrap: wrap;align-item: center; gap: 2rem;">
                <div class="ba__right mt-4 p-1">
                    <p class="fs-5 fw-bold mb-0" style="color:
                    #7E1717">E-MAIL</p>
                    <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJZWPbtmgxBpmkdgbMVhcrFcFwdmjNcLBzwgnqXFfZSDptSVJcghCkRTLKblNhVrnZPdpsB" target="_blank" rel="noopener noreferrer"><img class="" src="{{asset('../img/gmail.png')}}" width="100" alt=""></a>
                    <p class="paragraf mb-0"><span class="fw-bold">eleganfashionstore@gmail.com</span></p>
                </div>
                <div class="ba__right mt-4 p-1">
                    <p class="fs-5 fw-bold mb-0" style="color:
                    #7E1717">INSTAGRAM</p>
                    <a href="https://ig.me/m/elegan_fashion_store" target="_blank" rel="noopener noreferrer"><img class="" src="{{asset('../img/instagram.png')}}" width="100" alt=""></a>
                    <p class="paragraf mb-0"><span class="fw-bold">@elegan_fashion_store</span></p>
                </div>
            </div>
        </div>
    </div>

</div>



@endsection
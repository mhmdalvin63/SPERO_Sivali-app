@extends('layout.main')
<link rel="stylesheet" href="{{asset('../css/kontak.css')}}">

@section('content')

<div class="container">
    <div class="header d-flex">
        <div class="content">
            <p class="fs-4 fw-bold" style="color:
            #134B6E">HUBUNGI KAMI</p>
            <img class="img-fluid" src="{{asset('../img/kontak.png')}}" alt="">
        </div>
    </div>

        <p class="fs-4 fw-bold mt-5" style="color:
            #134B6E">SIVALI CALL CENTER</p>
        <p class="desc__scc">Jika terdapat pertanyaan, kami siap membantu. Hubungi layanan pelanggan
            SIVALI atau temukan jawabannya di bawah ini.</p>

    <div class="bottom__artikel d-flex justify-content-between mt-5">
        <div class="row">
            <div class="col-md-5 col-12" style="height: max-content;">
                <div class="ba__left">
                    <p class="fs-5 fw-bold mb-0" style="color:
                    #134B6E">Layanan Pelanggan SIVALI Telepon +6221-2985-3900 Whatsapp +62811-1300-2242</p>
                    <p class="mb-0 mt-4">Anda dapat menghubungi kami Senin - Minggu: 10:00 – 21:00</p>
                </div>
            </div>
            <div class="col-md-2 d-flex justify-content-center">
                <div class="vr" style="width: 2.5px; color: #000"></div>
            </div>
            <div class="col-md-5 col-12" style="height: max-content;">
                <div class="ba__right">
                    <p class="fs-5 fw-bold mb-0" style="color:
                    #134B6E">E-MAIL</p>
                    <p class="mb-0">E-mail kami kapan pun dan kami akan membalasnya dalam
                        24 jam.</p>
        
                    <p class="mb-0 mt-5">Kirim email ke <span class="fw-bold">sivalifurtniture@gmail.co.id</span></p>
                </div>
            </div>
        </div>
    </div>

</div>



@endsection
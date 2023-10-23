@extends('layouts.main')

@section('title', 'Antigane')

@section('content')

    <div class="container my-5 d-flex text-light">
        <div class="col-md-4">
            <img src="https://i.seadn.io/s/raw/files/474dc0082f48c485f4002dc95732e641.png" alt=""
                class="w-100 rounded-4">
        </div>
        <div class="col-md-8 ps-5">
            {{-- Name  --}}
            <h2>Ranaufal Muha</h2>
            {{-- desc  --}}
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur fugiat, quo asperiores rem ex aut
                reprehenderit fugit dolorum, saepe, cum unde neque porro non beatae error minima? Ducimus eligendi nihil
                similique ab repudiandae sit molestiae cum atque eaque, iure laudantium enim, suscipit facere magnam nobis
                sunt facilis. Magnam, atque reiciendis iste explicabo possimus ea quod architecto qui beatae ipsum.
                Accusantium sit corporis deleniti suscipit doloribus natus incidunt aliquid molestias ratione, totam, atque,
                repudiandae laboriosam odit. Dolor odit iusto sapiente ducimus, rerum facere quia minus! Quaerat accusamus
                aut fugit eaque doloribus magnam excepturi, commodi sit odit consequuntur. Earum, quibusdam voluptatum!
                Fuga, excepturi consequatur similique incidunt maiores reiciendis dolore, rem </p>

            <div class="row mb-5"></div>

            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                <label class="btn btn-outline-light" for="btnradio1">collections</label>
                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-light" for="btnradio2">offers made</label>
            </div>

            <div class="row">
                @for ($j = 1; $j <= 10; $j++)
                    <div class="col-md-3 py-3">
                        {{-- ========================================  --}}
                        <a href="/product-detail" class="text-decoration-none">
                            <div class="card bg-dark text-light">
                                <img src="https://drive.google.com/uc?id=1p-gOJLkQWMY6yvq7-S8fPTwjq6D0zF4O"
                                    class="card-img-top" alt="..." style="aspect-ratio: 1; object-fit: cover">
                                <div class="card-body mx-3">


                                    <label class="row card-text my-1 fw-light">Indonesia #C1</label>
                                    <label class="row card-text fw-bold">IDR 150,000</label>
                                    <label class="row text-light py-1 rounded-2" style="font-size: 10px;">ON
                                        SALE
                                    </label>



                                </div>
                            </div>
                        </a>
                        {{-- ========================================  --}}
                    </div>
                @endfor
            </div>

        </div>
    </div>




@endsection

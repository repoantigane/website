@extends('layouts.main')

@section('title', 'Antigane')

@section('content')
    <main class="pb-5">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Example headline.</h1>
                            <p>Some representative placeholder content for the first slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>One more for good measure.</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        {{-- Top Holder =================================================== --}}
        <div class="container text-light fw-lighter">
            <h2 class="text-light">TOP HOLDERS 🏆</h2><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="row" style="">
                        <div class="col-md-1 text-center">Rank</div>
                        <div class="col-md-8 ">Users</div>
                        <div class="col-md-3 text-center">Holding Points</div>
                    </div>
                    <hr>
                    @for ($i = 1; $i <= 5; $i++)
                        <div class="row my-3 fw-bold">
                            <div class="col-md-1 text-center">#{{ $i }}</div>
                            <div class="col-md-8">
                                <div class="row">
                                    <img class="col-md-2 rounded" src="https://static-content.azuki.com/assets/bobu1.png"
                                        alt="">
                                    <label class="col-md-8 text-nowrap">Ranaufal Muha</label>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">3000</div>
                        </div>
                    @endfor
                </div>

                <div class="col-md-6">
                    <div class="row" style="">
                        <div class="col-md-1 text-center">Rank</div>
                        <div class="col-md-8 ">Users</div>
                        <div class="col-md-3 text-center">Holding Points</div>
                    </div>
                    <hr>
                    @for ($i = 6; $i <= 10; $i++)
                        <div class="row my-3 fw-bold">
                            <div class="col-md-1 text-center">#{{ $i }}</div>
                            <div class="col-md-8">
                                <div class="row">
                                    <img class="col-md-2 rounded" src="https://static-content.azuki.com/assets/bobu1.png"
                                        alt="">
                                    <label class="col-md-8 text-nowrap">Ranaufal Muha</label>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">3000</div>
                        </div>
                    @endfor
                </div>
            </div>

        </div>

        {{-- OUR PRODUCT ================================================== --}}
        <div class="container">
            <div class="row mb-5"></div>
            <h2 class="text-light">OUR PRODUCT</h2>
            <div class="row mb-2"></div>

            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                <label class="btn btn-outline-light" for="btnradio1">All</label>
                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-light" for="btnradio2">Cummon</label>
                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                <label class="btn btn-outline-light" for="btnradio3">Rare</label>
                <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                <label class="btn btn-outline-light" for="btnradio4">Legend</label>
            </div>

            <div class="row mb-3"></div>
            @for ($i = 0; $i < 5; $i++)
                <div class="row mb-4">
                    @for ($j = 0; $j < 4; $j++)
                        <div class="col-md-3">
                            <a href="/limited-product">
                                <div class="card text-bg-dark image-product">
                                    <img src="https://img.staticdj.com/d1f65eddde55c13fced3ee1b96e62e9b.jpeg"
                                        class="card-img" alt="..." style="aspect-ratio: 1; object-fit: cover">
                                    <div class="card-img-overlay overlay-text">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural
                                            lead-in
                                            to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endfor

                </div>
            @endfor


        </div>

    </main>






@endsection

@extends('layouts.main')

@section('title', 'Antigane')

@section('content')

    <div class="container text-light mt-4">
        {{-- title  --}}
        <div class="row mb-4">
            <h1 class="fs-1">Indonesia #C1</h1>
            <label class="text-secondary">owned by <a href="profile" class="text-decoration-none">Ranaufal Muha</a></label>
        </div>


        <div class="row mb-5">
            {{-- left side  --}}
            <div class="col-md-5">
                <img src="https://i.seadn.io/s/raw/files/474dc0082f48c485f4002dc95732e641.png" alt=""
                    class="w-100 rounded-4">
                <div class="row mb-4"></div>


            </div>

            {{-- Right side  --}}
            <div class="col-md-7 px-4">

                <div class="bg-dark p-4 rounded-3 mb-4">
                    <div class="row mb-2">
                        <label class="text-secondary">current price</label>
                        <h3>IDR 150,000</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary w-100">buy</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-outline-secondary w-100">make offer</button>
                        </div>
                    </div>
                </div>

                {{-- graphics  --}}
                <div class="row mb-4">
                    <h3>graphics</h3>
                    <canvas class="my-4 w-100" id="myChart"></canvas>
                </div>

                {{-- offers  --}}
                <h3>offers</h3>
                <div class="table-responsive small table-wrapper-scroll-y my-custom-scrollbar">
                    <table class="table border-secondary" style="height: 10px">
                        <thead class="text-secondary ">
                            <tr>
                                <th scope="col">price</th>
                                <th scope="col">floor difference</th>
                                <th scope="col">expiration</th>
                                <th scope="col">from</th>
                            </tr>
                        </thead>
                        <tbody class="text-light">
                            @for ($i = 1; $i <= 20; $i++)
                                <tr>
                                    <td class="py-3">IDR 150,000</td>
                                    <td class="py-3">13% below</td>
                                    <td class="py-3">in 7 days</td>
                                    <td class="py-3">@ranaufal</td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <div class="row mb-4">
            <h3>more collections</h3>
            <div class="mb-3"></div>
            @for ($j = 1; $j <= 6; $j++)
                <div class="col-md-2 fs-6">
                    {{-- ========================================  --}}
                    <a href="/product-detail" class="text-decoration-none">
                        <div class="card bg-dark text-light">
                            <img src="https://drive.google.com/uc?id=1p-gOJLkQWMY6yvq7-S8fPTwjq6D0zF4O" class="card-img-top"
                                alt="..." style="aspect-ratio: 1; object-fit: cover">
                            <div class="card-body">
                                <p class="card-text">Indonesia #1</p>
                            </div>
                        </div>
                    </a>
                    {{-- ========================================  --}}
                </div>
            @endfor

        </div>


    </div>



@endsection

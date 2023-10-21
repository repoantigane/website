@extends('layouts.main')

@section('title', 'Antigane')

@section('content')

    {{-- Profile and background  --}}
    <div class="rounded-top text-white d-flex flex-row"
        style="background: url('https://drive.google.com/uc?id=1TqYZr78u3w63G0lc7bC2FyCEyDkus7u4') no-repeat; height:300px; background-color: black;background-size: contain">
        <div class="container d-flex ">

            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                <div class="row mb-5"></div>
                <div class="row mb-5"></div>
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                    alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                    style="width: 150px; z-index: 1">
                <button type="button" class="btn btn-outline-light" data-mdb-ripple-color="dark" style="z-index: 1;">
                    Follow
                </button>
            </div>
            <div class="ms-3" style="margin-top: 130px;">
                <div class="row mb-5"></div>
                <div class="row mb-5"></div>
                <h5>Country Series</h5>
                <p>Padang</p>
            </div>
        </div>
    </div>



    {{-- Content  --}}
    <div class="container">
        <div class="p-4 text-light">
            <div class="d-flex justify-content-end text-center py-1 ">
                <div>
                    <p class="mb-1 h5">253</p>
                    <p class="small text-muted mb-0">Photos</p>
                </div>
                <div class="px-3">
                    <p class="mb-1 h5">1026</p>
                    <p class="small text-muted mb-0">Followers</p>
                </div>
                <div>
                    <p class="mb-1 h5">478</p>
                    <p class="small text-muted mb-0">Following</p>
                </div>
            </div>
        </div>
        <div class="card-body p-4 text-light">
            <div class="mb-3">
                <p class="lead fw-normal mb-1">About</p>
                <div class="p-4">
                    <p class="font-italic mb-1">Cotton Combed 20s</p>
                    <p class="font-italic mb-1">Sablon DTF</p>
                    <p class="font-italic mb-0">Limited Edition</p>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-4">
                <p class="lead fw-normal mb-0">Collections</p>
                <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
            </div>
            @php
                $counter = 1;
                $totalcloth = 195;
            @endphp
            @for ($i = 1; $i <= $totalcloth / 4 + 1; $i++)
                <div class="row mb-4">
                    @for ($j = 1; $j <= 4; $j++)
                        <?php
                            if($counter <= $totalcloth){
                        ?>
                        <div class="col-md-3">
                            {{-- ========================================  --}}
                            <div class="card" style="width: 18rem;">
                                <img src="https://drive.google.com/uc?id=1p-gOJLkQWMY6yvq7-S8fPTwjq6D0zF4O"
                                    class="card-img-top" alt="..." style="aspect-ratio: 1; object-fit: cover">
                                <div class="card-body">
                                    <p class="card-text text-dark">Indonesia #{{ $counter }}</p>
                                    <label class="card-text text-dark ">Rp. 120k</label>
                                    <p class="card-text text-muted">Last sale : Rp.120k</p>
                                </div>
                            </div>
                            {{-- ========================================  --}}
                        </div>
                        <?php
                            }
                            $counter++;
                        ?>
                    @endfor

                </div>
            @endfor
        </div>
    </div>





@endsection

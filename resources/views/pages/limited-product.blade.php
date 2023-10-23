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
                    alt="Generic placeholder image" class="img-fluid img-thumbnail mt-5 mb-2"
                    style="width: 150px; z-index: 1; background-color:#212121">
            </div>
        </div>
    </div>



    {{-- Content  --}}
    <div class="container">
        <div class="d-flex justify-content-between align-items-center text-light mt-5 p-4 ">
            <h2 class="mb-0">Countries Series</h2>
        </div>

        <div class="px-4 text-light mb-3">
            <div class="d-flex py-1 gap-3">
                <div>
                    <p class="small text-muted mb-1">total volume</p>
                    <p class="mb-1 bg-dark py-2 px-3 rounded-3">IDR 29,250,000</p>
                </div>
                <div>
                    <p class="small text-muted mb-1">best over</p>
                    <p class="mb-1 bg-dark py-2 px-3 rounded-3">IDR 1,250,000</p>
                </div>
                <div>
                    <p class="small text-muted mb-1">stock</p>
                    <p class="mb-1 bg-dark py-2 px-3 rounded-3">195</p>
                </div>
                <div>
                    <p class="small text-muted mb-1 ">unique owners</p>
                    <p class="mb-1 bg-dark py-2 px-3  rounded-3">70%</p>
                </div>
            </div>
        </div>

        <div class="row px-4 text-light">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum suscipit vero quae ut aut, molestiae eos
                voluptates eaque modi eum laboriosam, adipisci veritatis quo sint, minima tempore fugiat quidem quas atque
                deleniti doloremque. Eaque laudantium explicabo fuga fugiat molestiae, labore exercitationem aspernatur
                illo, consequuntur similique ipsam id minima inventore ipsa enim veniam tempore placeat suscipit soluta.
                Nisi tenetur minus veritatis ea blanditiis quas esse inventore dolore repellendus maiores libero magni
                debitis expedita autem velit nihil, obcaecati at a, temporibus est omnis officiis corrupti. Maiores, eum
                non. Perferendis blanditiis, quaerat odio sunt voluptas tenetur architecto aliquid laborum dolor minima
                recusandae doloremque illo nam a autem similique nihil eum et iste accusantium ab iusto alias temporibus ea!
                Consequuntur, enim ex delectus excepturi id quaerat voluptas qui sit quo beatae doloribus libero atque
                maiores suscipit recusandae. Placeat laboriosam enim architecto harum quod cumque omnis ipsa, officia
                voluptates nostrum numquam officiis tenetur excepturi laudantium, reiciendis porro, nihil quis. Incidunt
                cumque sed delectus mollitia voluptatum beatae nisi esse porro similique praesentium assumenda quas maiores
                laborum explicabo quidem, sapiente qui quo rerum ea et pariatur itaque. Autem modi corporis laboriosam nobis
                labore voluptatem. Sapiente hic magni dolorem beatae ratione, eius numquam natus, vel, et in repellat?</p>
        </div>

        <div class="card-body p-4 text-light">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <p class="lead fw-normal mb-0">Collections</p>
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
                            <a href="/product-detail" class="text-decoration-none">
                                <div class="card bg-dark text-light">
                                    <img src="https://drive.google.com/uc?id=1p-gOJLkQWMY6yvq7-S8fPTwjq6D0zF4O"
                                        class="card-img-top" alt="..." style="aspect-ratio: 1; object-fit: cover">
                                    <div class="card-body mx-3">


                                        <label class="row card-text my-1 fw-light">Indonesia #{{ $counter }}</label>
                                        <label class="row card-text fw-bold fs-4">IDR 150,000</label>
                                        <label class="row text-light py-1 rounded-2" style="font-size: 10px;">ON
                                            SALE
                                        </label>



                                    </div>
                                </div>
                            </a>
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

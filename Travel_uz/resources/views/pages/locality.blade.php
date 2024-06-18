<x-layouts.main>
    <x-slot:title>
        Locality
    </x-slot:title>
    <x-navbar>

    </x-navbar>
    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">{{$category->name}}</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Bosh sahifa</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3">{{$category->name}}</i>
                    <p class="m-0 text-uppercase">Blog</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!-- Destination Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">{{$category->description}}</h6>
                <h1>Shaxarning diqqatga sazovor joylari</h1>
            </div>
            <div class="row">
                @foreach($localities as $locality)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="{{asset('storage/'.$locality->photo)}}" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="{{route('locality.show', ['locality'=>$locality->id])}}">
                            <h5 class="text-white">{{$locality->name}}</h5>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Destination Start -->
</x-layouts.main>

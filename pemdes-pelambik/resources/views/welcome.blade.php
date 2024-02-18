@extends('layouts.app')

@section('content')
    <main>
        <section class="text-center container">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <img src="{{ asset('assets/img/apple-touch-icon.png') }}" alt="">
                    <h1 class="fw-light">Delta News</h1>
                    <hr>
                    <p class="lead text-muted">Independent, Akurat dan Terpercaya.</p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('assets/img/apple-touch-icon.png') }}" alt="">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('assets/img/apple-touch-icon.png') }}" alt="">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                    to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('assets/img/apple-touch-icon.png') }}" alt="">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                    to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- hero --}}
                <hr class="featurette-divider">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow
                                your mind.</span></h2>
                        <p class="lead">Some great placeholder content for the first featurette here. Imagine some
                            exciting prose here.</p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/gambar1.png') }}" alt="">
                    </div>
                </div>
                <hr class="featurette-divider">
            </div>
        </div>

    </main>
    @include('layouts/partials/footer')
@endsection

@include('layouts/partials/navbar')

@include('layouts/partials/heading-admin')

<body>
    <div class="container mt-2">
        <div id="content">
            @yield('content')
        </div>
    </div>
</body>

{{-- @include('layouts/partials/script') --}}

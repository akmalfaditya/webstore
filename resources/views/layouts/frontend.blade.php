<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Webcare Store</title>
    {{-- <link rel="icon" type="image/x-icon" href="{{ url('/images/logo.png') }}"> --}}

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="{{ url('/style/main.css') }}" rel="stylesheet" />
</head>

<body>
    @include('components.frontend.navbar')

    @yield('content')

    @include('components.frontend.footer')





    <!-- Bootstrap core JavaScript -->
    <script src="{{ url('/vendor/jquery/jquery.slim.min.js') }}"></script>
    <script src="{{ url('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ url('/vendor/vue/vue.js') }}"></script>
    <script>
        var gallery = new Vue({
            el: "#gallery",
            mounted() {
                AOS.init();
            },
            data: {
                activePhoto: 3,
                photos: [
                    {
                        id: 1,
                        url: "/images/product-details-1.jpg",
                    },
                    {
                        id: 2,
                        url: "/images/product-details-2.jpg",
                    },
                    {
                        id: 3,
                        url: "/images/product-details-3.jpg",
                    },
                    {
                        id: 4,
                        url: "/images/product-details-4.jpg",
                    },
                ],
            },
            methods: {
                changeActive(id) {
                    this.activePhoto = id;
                },
            },
        });
    </script>
    <script src="{{ url('/script/navbar-scroll.js') }}"></script>
</body>

</html>

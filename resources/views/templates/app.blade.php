@yield('header')
<body class="u-body">
    {{-- this is the header and menu --}}
    @include('templates.menu')

    @yield('content')

    {{-- this is footer  --}}
    @include('templates.footer')
</body>
</html>

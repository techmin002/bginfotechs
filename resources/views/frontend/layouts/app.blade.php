@include('frontend.layouts.header')
@include('frontend.layouts.navbar')

    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

@include('frontend.layouts.footer')

<!DOCTYPE html>
<html>
    @include('sections.header')
    <body>
        <div class="responsive stretched">
            @yield('content')
            @include('sections.footer')
        </div>
    </body>
</html>
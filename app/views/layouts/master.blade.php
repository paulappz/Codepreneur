<!DOCTYPE html>
<html ng-app="WakaOndo">
    @include('sections.header')
    <body>
        <div class="responsive stretched" ng-controller="IndexController as index">
            @yield('content')
            @include('sections.footer')
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
@include('html.head')
<body >
<div class="super_container">
@include('html.header')

    @yield('content')


    @includeIf("html.footer")

</div>



@include("html.js")
</body>
</html>

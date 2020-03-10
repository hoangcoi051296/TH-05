<!DOCTYPE html>
<html lang="en">
@include('html.head')
<body >
<div class="super_container">
@include('html.header')
    <section>
        @yield('content')
    </section>

    @includeIf("html.footer")

</div>



@include("html.js")
</body>
</html>

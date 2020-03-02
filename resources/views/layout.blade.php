<!DOCTYPE html>
<html lang="en">
@include('html.head')
<body id="body" data-spy="scroll" data-target=".header">
<div class="wrap">
    @includeIf('html.header')
    <section>
        @yield('content')
    </section>
</div>

@includeIf("html.footer")



@include("html.js")
</body>
</html>

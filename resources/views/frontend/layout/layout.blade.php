<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Head --}}
    @include("frontend.layout.head")
    {{-- SEO --}}
    @include("frontend.layout.SEO")
</head>

<body>
    {{-- Header --}}
    @include("frontend.layout.header")
    <main>
        {{-- Content --}}
        @yield("content")
    </main>
    {{-- Footer --}}
    @include("frontend.layout.footer")
    {{-- Popup --}}
    @include("frontend.layout.popup")
    {{-- Script --}}
    @include("frontend.layout.scripts")
</body>

</html>

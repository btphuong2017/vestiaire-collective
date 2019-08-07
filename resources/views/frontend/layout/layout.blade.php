<!DOCTYPE html>
<html lang="en">
    <head>
        @include("frontend.layout.head")
        @include("frontend.layout.SEO")
    </head>
    <body>
        @include("frontend.layout.header")
        @yield("content")
        @include("frontend.layout.footer")
        @include("frontend.layout.popup")
        @include("frontend.layout.scripts")
    </body>
</html>
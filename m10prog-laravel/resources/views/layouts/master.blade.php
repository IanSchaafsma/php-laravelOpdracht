<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
</head>
<body>
    <header>
        @include('layouts.partials.header')
    </header>
    <main>
        @yield( 'content' )
        <h1>Ik werk soortvan</h1>
    </main>
    <footer>
        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </footer>
</body>
</html>
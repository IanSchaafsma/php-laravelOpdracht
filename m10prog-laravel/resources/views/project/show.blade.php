@extends( 'layouts.master' );

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecten</title>
</head>
<body>
<h2>{{$project->title}}</h2>
@section('content')
@endsection
</body>
</html>
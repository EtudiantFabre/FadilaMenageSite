@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test PDF</title>
</head>
<body>
    <h1>Page 1</h1>
    <div class="page-break"></div>
    <h1>Page 2</h1>
    <label for="">Test de pdf par toyi</label>
</body>
</html>

<style>
    .page-break {
        page-break-after: always;
    }
</style>
    
@endsection
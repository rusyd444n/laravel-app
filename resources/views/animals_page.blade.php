<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Raja Hutan: {{ $king}}<br>
    daftar hewan :
    @foreach ($hewan as $data)
    <li>{{$data}}</li>
    @endforeach

    <hr>
    Raja Hutan: {{ $king}}<br>
    daftar hewan :
    @foreach ($hewan as $data)
    @if ($data == 'crocodile')
      <li>{{$data}} - dia seperti hasbi</li>
      @else
      <li>{{$data}}</li>
      @endif
    @endforeach
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Homepage</title>
</head>
<body>
  <h1>Hello. This is a blade template.</h1>

  <a href="/about">About page</a>
  <p>A great number is {{ 2+3 }}</p>
  <p>This year is {{date('Y')}}</p>

  <h3>{{ $name }}</h3>
  <h2>{{ $catname }}</h2>

  <ul>
    @foreach ($allAnimals as $animal)
      <li>{{$animal}}</li>      
    @endforeach
  </ul>

</body>
</html>
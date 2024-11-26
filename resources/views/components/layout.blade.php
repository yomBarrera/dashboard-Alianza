<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $metaTitle ?? "Test Alianza" }}</title>
  <meta name="description" content="{{ $metaDescription ?? "description web test alianza" }}">
  <meta name="keywords" content="{{ $metaKEywords ?? "HTML, CSS, JavaScript" }}">
  <meta name="author" content="Yomar Barrera">

  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=lato:300,400,700,900" rel="stylesheet" />


  <!-- Styles / Scripts -->
  @if (file_exists(public_path("build/manifest.json")) || file_exists(public_path("hot")))
    @vite(["resources/css/app.css", "resources/js/app.js"])
  @else
    <script src="https://cdn.tailwindcss.com"></script>
  @endif
</head>

<body class="font-header antialiased">

  {{ $slot }}

</body>

</html>

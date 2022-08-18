<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
  <script src="{{ mix('/js/app.js') }}" defer></script>
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  @routes
</head>

<body class="font-sans antialiased leading-none text-gray-800">
  @inertia
</body>

</html>
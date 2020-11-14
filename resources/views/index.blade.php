@php $config = [ 'app_name' => config('app.name'),'locale' => $locale =
app()->getLocale(), 'locales' => config('app.locales'), ]; @endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Laravel Vue Boilerplate" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Laravel Vue SPA</title>

    <script>
      window.__init__ = @json($config);
    </script>

    <script src="{{ mix('js/manifest.js') }}" defer></script>
    <script src="{{ mix('js/vendor.js') }}" defer></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
  </head>
  <body>
    <div id="app"></div>
  </body>
</html>

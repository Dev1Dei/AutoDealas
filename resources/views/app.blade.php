<!DOCTYPE html>
<html>
  <head>
    <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
    <meta charset="utf-8" />
    @vite('resources/css/app.css')
    @vite('resources/css/main.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite('resources/js/app.js')
    
    @inertiaHead
  </head>
  <body class='bg-white'>
    <section class="">
    @inertia
    </section>
  </body>
</html>
<!-- sourced from https://raw.githubusercontent.com/reactjs/reactjs.org/master/static/html/single-file-example.html -->
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Reavel</title>
</head>

<body>
  <div id="root"></div>
  <noscript>
    You need to enable JavaScript to run this app.
  </noscript>
  @if(env('APP_ENV') === 'local')
  <script src="http://localhost:3000/js/app.js"></script>
  @else
  <script src="/js/app.js"></script>
  @endif
</body>

</html>
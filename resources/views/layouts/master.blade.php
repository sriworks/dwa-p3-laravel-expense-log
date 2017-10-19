<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title', 'Expense Logger')
    </title>

    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    @stack('head')

</head>
<body>
    
    <h2 class="text-center">@yield('title', 'Expense Logger')</h2>
    
    <div class="container">
        @yield('content')
    </div>

    @stack('body')
</body>
</html>
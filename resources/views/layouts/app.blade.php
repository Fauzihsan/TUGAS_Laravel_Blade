<!DOCTYPE html>
<html lang="en">
<head>
    <title> @yield('title') </title>
    @include('includes.head')  
</head>
<body>
    
    <header>
        @include('includes.header')
    </header>

    @include('includes.sidebar')
    
    <div class="main">
        <div class="container-sm">
            @yield('content')
        </div>
    </div>
        <footer>
            @include('includes.footer')
        </footer>
</body>
</html>
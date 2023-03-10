<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite(['resources/sass/app.scss', 'node_modules/bootstrap/dist/css/bootstrap.css'])
</head>
<body>

<div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="navbar-brand mt-2 mt-lg-0" href="#">Customers - Factotry</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <router-link :to="{name:'login'}" class="nav-link">Login</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{name:'register'}"class="nav-link" >Register</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{name:'customers'}" class="nav-link">Customers</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{name:'new customer'}" class="nav-link">New Customers</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <router-view></router-view>
</div>

@vite(['resources/js/app.js'])
</body>
</html>

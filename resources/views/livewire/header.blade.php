<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--Boots trap add -->
    <link href ="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @livewireStyles
</head>
<body>
    @livewireScripts
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <li class="nav-item " style="list-style-type: none;">
            <a class="navbar-brand" href="/">Project +</a>
          </li>
          
          
          <li class="nav-item " style="list-style-type: none;">
            @auth
            <div class="d-flex">
                <p>Hello {{$name}}</p>
            </div>
            @else
            <button wire:click="$emit('showLogin')">Login</button>
            @endauth
          </li>        
            @auth
            <li class="nav-item" style="list-style-type: none;">
            <form action="/logout" method="post">
              @csrf
          <button> Logout</button>
          </form>
            @else
            @endauth
          </li>
        </div>
      </nav>

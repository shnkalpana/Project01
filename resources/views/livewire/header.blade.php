<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project +</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body class=" bg-gray-200">
    @livewireScripts
      <div class=" bg-gray-400">
        <!-- loged users -->
        @auth
        <div class=" px-2 py-2 flex justify-between text-xl text-zinc-800 space-x-12">
            <p class=" justify-start">Hello {{$user->name}}!</p>  
            <a href="/logout" class=" justify-end"> Logout </a>
        </div>
        @else
          <div class=" px-2 py-2 flex justify-between text-xl text-zinc-800 space-x-12">
              <a href="/" class=" ">Project +</a>
              <button wire:click="$emit('showLogin')" class="">Login</button>
          </div>
        @endauth
      </div>
    </div>
    

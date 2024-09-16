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
<body class=" bg-gray-200 dark:bg-gray-600">
    @livewireScripts
      <div class=" bg-gray-400 dark:bg-gray-800">
        <!-- loged users -->
        @auth
        <div class=" px-2 py-2 flex justify-between text-xl text-zinc-800 space-x-12">
          @if($user->user_roll == 'admin')  
          <a href="/admin" class=" justify-start text-xl font-medium text-gray-900 dark:text-white space-x-12">Hello {{$user->name}}!</p>  
          @elseif($user->user_roll == 'projectmanager')
          <a href="/project_manager" class=" justify-start text-xl font-medium text-gray-900 dark:text-white space-x-12">Hello {{$user->name}}!</p>
          @else
          <a href="/" class=" justify-start text-xl font-medium text-gray-900 dark:text-white space-x-12">Hello {{$user->name}}!</p>
          @endif
            <a href="/logout" class=" justify-end text-xl font-medium text-gray-900 dark:text-white space-x-12"> Logout </a>
        </div>
        @else
          <div class=" px-2 py-2 flex justify-between text-xl font-medium text-gray-900 dark:text-white space-x-12">
              <a href="/" class=" ">Project +</a>
              <button wire:click.prevent="$emit('showLogin')" >Create account</button>
          </div>
        @endauth
      </div>
    </div>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project +</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class=" bg-gray-200 dark:bg-gray-600 relative">
    @livewireScripts
<div>
    <nav class="fixed top-0 z-50 h-16 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
      <div class=" bg-gray-400 dark:bg-gray-800 pt-2 space-x-6">
        <!-- loged users -->
        @auth
        <div class=" px-2 py-2 flex justify-between text-xl text-zinc-800 space-x-12">
          @if($user->user_roll == 'admin')
          <a href="/admin" class=" justify-start text-xl font-medium text-gray-900 dark:text-white space-x-12">Hello {{$user->name}}!</a>
          @elseif($user->user_roll == 'projectmanager')
          <a href="/project_manager" class=" justify-start text-xl font-medium text-gray-900 dark:text-white space-x-12">Hello {{$user->name}}!</a>
          @else
          <a href="/designer" class=" justify-start text-xl font-medium text-gray-900 dark:text-white space-x-12">Hello {{$user->name}}!</a>
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
    </nav>
</div>

{{--Below code commented for check side bar use in inside profiles --}}

        @auth
        @if($user->user_roll == 'admin')
            <div class="hidden md:block">
                 <div class="md:fixed left-0 z-40 w-64 h-screen top-16 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700">
                        <x-sidebar_admin/>
                 </div>
            </div>
        <div class="relative flex justify-items-center top-20 p-2  md:left-64 ">
        @elseif($user->user_roll == 'projectmanager')
                <div class="hidden md:block">
                    <div class="md:fixed left-0 z-40 w-64 h-screen top-16 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700">
                        <x-sidebar_pm/>
                    </div>
                </div>

        <div class="relative flex justify-items-center top-20 p-2  md:left-64 ">
        @elseif($user->user_roll == 'user')
            <div class="hidden md:block">
                    <div class="md:fixed left-0 z-40 w-64 h-screen top-16 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700">
                        <x-sidebar_user/>
                    </div>
            </div>
                <div class="relative flex justify-items-center top-20 p-2  md:left-64 ">
        @else
        <div>
        @endif
        @endauth



<livewire:header/>
<div class=" flex justify justify-center pt-20">
    <div  class="w-full max-w-sm sm:max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h2 class="text-xl font-medium text-gray-900 dark:text-white"> Edit user {{$user->name}}</h2>
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('Patch')
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> name </label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" type="text" name="name" value="{{ $user->name }}">
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> email </label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" type="email" name="email" value="{{ $user->email }}">
            </div>
            {{-- To change user roll & hourly rate if only you are a admin   --}}
            @if($user->user_roll == "admin")
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> hourly rate </label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" type="numeric" name="hourly_rate" value="{{ $user->hourly_rate }}">
            </div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
            <select name="user_roll" value={{$user->user_roll}} class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="user">user</option>
                <option value="projectmanager">project manager</option>
                <option value="admin">admin</option>
            </select>
            @else
                <div>

                </div>
            @endif
{{--        To-do : change password   --}}
            <div class=" mt-4 md:mt-6">

                <button type="submit" class=" inline-flex justify justify-center items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
            </div>
            @if ($errors->any())
                 <div class="alert alert-danger">
                     <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                     </ul>
                </div>
            @endif
        </form>
    </div>
</div>
<x-footer/>

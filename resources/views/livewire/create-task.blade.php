<div>
    <div>
        <button class=" inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" wire:click="createBtn"> 
            Create new task
        </button> 
    </div>
    @if($show)
    <div class="flex justify justify-center mt-5">
        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form action="{{url('tasks')}}" method="POST">
            @csrf
            <h5 class="text-xl font-medium text-gray-900 dark:text-white">Create a new task</h5>
                 
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Task name </label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" type="text" name="name" placeholder="Task name"/>
            </div>
            <input type="hidden" name="sub_project_id" value="{{$subprojectid}}"/>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Description </label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" type="text" name="description" placeholder="Description"/>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Description </label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"type="date" name="deadline"/>
            </div>
            <div class=" mt-2 inline-block">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Responsibility </label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="assigned_user_id" aria-label="Select responsible person">
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach    
                </select>
            </div>
            <input class=" mt-2 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit" title="Submit"/>
        </form>
    </div>
    </div>
    @endif
</div>
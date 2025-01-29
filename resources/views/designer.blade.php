<livewire:header/>

<div class="">
    <div class="  w-fit bg-white border border-gray-200 rounded-lg shadow sm:p-2 md:p-2 dark:bg-gray-800 dark:border-gray-700">
        <div class=" px-1 ">
            <table class=" text-sm sm:text-lg text-left rtl:text-right text-gray-500 dark:text-gray-400  ">
                <thead class=" text-xs sm:text-sm  text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-3 py-3">Task</th>
                    <th scope="col" class="px-3 py-3">description</th>
                    <th scope="col" class="px-3 py-3">created at</th>
                    <th scope="col" class="px-3 py-3">Deadline</th>
                    <th scope="col" class="px-3 py-3">Status</th>
                    <th scope="col" class="px-3 py-3">Update</th>
                    <th scope="col" class="px-3 py-3">files</th>
                </tr>
                </thead>
                <tbody class=" text-xs sm:text-sm  text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                @foreach($tasks as $task)
                    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                        @csrf
                        @method('Patch')
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-3 py-3">{{$task->name}}</td>
                        <td class="px-3 py-3">{{$task->description}}</td>
                        <td class="px-3 py-3">{{$task->created_at}}</td>
                        <td class="px-3 py-3">{{$task->deadline}}</td>
                        <td class="px-3 py-3">
                            <select name="done">
                                <option value="0" {{ $task->done == 0 ? 'selected' : '' }}>on going</option>
                                <option value="1" {{ $task->done == 1 ? 'selected' : '' }}>Done</option>
                            </select>
                        </td>
                        <td class="px-3 py-3">
                            <div>
                                <button type="submit" class=" inline-flex justify justify-center items-center px-2 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                            </div>
                        </td>
                        <td class="px-3 py-3">
                            <a href="{{route('tasks.show',$task->id)}}">{{$task->count()}}</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<x-footer/>

<livewire:header/>

<div class=" mt-2 left-64 top-20 relative shadow-md rounded-xl w-fit ">
    <div class=" px-1 ">
    <table class=" text-sm sm:text-lg text-left rtl:text-right text-gray-500 dark:text-gray-400  ">
        <thead class=" text-xs sm:text-sm  text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-3 py-3">Task</th>
            <th scope="col" class="px-3 py-3">description</th>
            <th scope="col" class="px-3 py-3">created at</th>
            <th scope="col" class="px-3 py-3">Deadline</th>
            <th scope="col" class="px-3 py-3">Status</th>
        </tr>
        </thead>
        <tbody>

        @foreach($tasks as $task)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-3 py-3">{{$task->name}}</td>
                <td class="px-3 py-3">{{$task->description}}</td>
                <td class="px-3 py-3">{{$task->created_at}}</td>
                <td class="px-3 py-3">{{$task->deadline}}</td>
                <td class="px-3 py-3">
                    @if($task->done>0)
                        <span>done</span>
                    @else
                        <span>On going</span>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</div>


<x-footer/>

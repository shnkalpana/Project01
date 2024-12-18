<livewire:header/>
<div class=" ">
  <div class=" ">
    @livewire('create-task',['subprojectid'=>$subproject->id])
  </div>


    @if($subproject->tasks->isEmpty())
      <div class=" mt-2">
        <p class="block mb-2 text-lg font-medium text-brown-900 dark:text-white">Not any tasks created yet!</p>
      </div>
    @else
    <div class=" mt-2 relative overflow-x-auto shadow-md rounded-xl">
      <table class="w-full text-xs sm:text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
          <thead class=" text-xs  text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                <th scope="col" class="px-6 py-3">Task</th>
                <th scope="col" class="px-6 py-3">description</th>
                <th scope="col" class="px-6 py-3">created at</th>
                <th scope="col" class="px-6 py-3">Responsible</th>
                <th scope="col" class="px-6 py-3">Deadline</th>
                <th scope="col" class="px-6 py-3">Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach($subproject->tasks as $task)
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <td class="px-6 py-4">{{$task->name}}</td>
                  <td class="px-6 py-4">{{$task->description}}</td>
                  <td class="px-6 py-4">{{$task->created_at}}</td>
                  <td class="px-6 py-4">{{$task->assignedUser->name}}</td>
                  <td class="px-6 py-4">{{$task->deadline}}</td>
                  <td class="px-6 py-4">
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
    @endif
</div>
<x-footer/>

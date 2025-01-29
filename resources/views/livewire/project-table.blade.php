<div>
    <h1 class=" text-2xl sm:text-sm  text-gray-700 uppercase dark:text-white" > Projects </h1>
    <div class="mt-2 relative overflow-x-auto shadow-md rounded-xl">
        <table class="w-full text-sm sm:text-lg text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class=" text-xs sm:text-sm  text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                  <th scope="col" class="px-6 py-3">Name</th>
                  <th scope="col" class="px-6 py-3">Created at</th>
                  <th scope="col" class="px-6 py-3">Subprojects</th>
                  <th scope="col" class="px-6 py-3">Task</th>
                    <th scope="col" class="px-6 py-3">Assigned to</th>
                    <th scope="col" class="px-6 py-3">status</th>
                    <th scope="col" class="px-6 py-3">files</th>
                </tr>
              </thead>
              <tbody>
                @auth
                @if(auth()->user()->user_roll == 'admin')
                    @foreach($projects as $item)
                        @foreach($item->subprojects as $subproject)
                            @foreach($subproject->tasks as $task)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">{{$item->projectname}}</td>
                                    <td class="px-6 py-4">{{$item->created_at}}</td>
                                    <td class="px-6 py-4">{{$subproject->sub_project_name}}</td>
                                    <td class="px-6 py-4">{{$task->name}}</td>
                                    <td class="px-6 py-4">{{\App\Models\User::find($task->assigned_user_id)->name}}</td>
                                    @if($task->done == 0)
                                        <td class="px-6 py-4">on going</td>
                                    @else
                                        <td class="px-6 py-4">done</td>
                                    @endif
                                    <td class="px-6 py-4">
                                        <a href="{{route('tasks.show',$task->id)}}">{{$task->files->count()}}</a></td>
                                </tr>
                            @endforeach
                        @endforeach
                    @endforeach
                @endif
                @if(auth()->user()->user_roll == 'projectmanager')
                @foreach($userProjects as $item)
                    @foreach($item->subprojects as $subproject)
                        @foreach($subproject->tasks as $task)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">{{$item->projectname}}</td>
                                <td class="px-6 py-4">{{$item->created_at}}</td>
                                <td class="px-6 py-4">{{$subproject->sub_project_name}}</td>
                                <td class="px-6 py-4">{{$task->name}}</td>
                                <td class="px-6 py-4">{{\App\Models\User::find($task->assigned_user_id)->name}}</td>
                                @if($task->done == 0)
                                    <td class="px-6 py-4">on going</td>
                                @else
                                    <td class="px-6 py-4">done</td>
                                @endif
                                <td class="px-6 py-4">
                                    <a href="{{route('tasks.show',$task->id)}}">{{$task->files->count()}}</a></td>
                            </tr>
                        @endforeach
                    @endforeach
                @endforeach
                @endif
                @endauth

            </tbody>
          </table>
      </div>
</div>

<livewire:header/>
<div class="">
        <div class=" relative overflow-x-auto shadow-md rounded-lg">         
            <table class="w-full text-sm sm:text-lg text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class=" text-xs sm:text-sm  text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">task</th>
                      <th scope="col">sub project name</th>
                      <th scope="col">created at</th>
                      <th scope="col">updated at</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($tasks as $task)
                    <tr>
                      <th scope="row">{{$task->id}}</th>                      
                        <td>{{$task->subprojects->name}}</td>
                        <td>{{$task->name}}</td>
                        <td>{{$task->created_at}}</td>
                        <td>{{$task->updated_at}}</td>                    
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
</div>
<x-footer/>
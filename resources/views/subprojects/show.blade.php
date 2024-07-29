<livewire:header/>
<div class="container">
   @livewire('create-task',['subprojectid'=>$subproject->id])

    @if($subproject->tasks->isEmpty())
      <div>
        <p>Not any tasks created yet!</p>
      </div>   
    @else
    <div class="mt-2">         
      <table class="table table-bordered">
          <thead>
              <tr>
                <th scope="col">Task</th>
                <th scope="col">description</th>
                <th scope="col">created at</th>
                <th scope="col">Deadline</th>
                <th scope="col">Responsible</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach($subproject->tasks as $task)
              <tr>
                  <td>{{$task->name}}</td>
                  <td>{{$task->description}}</td>subproject
                  <td>{{$task->created_at}}</td>
                  <td>{{$task->assignedUser->name}}</td>
                  <td>{{$task->deadline}}</td>
                  <td>
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
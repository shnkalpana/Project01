<livewire:header/>
<div class="card">
    @include('tasks.create',$subprojectid)
</div>
<div class="container">
        <div class="mt-10 p-5">         
            <table class="table table-bordered">
                <thead>
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
<livewire:header/>
<div class="container">
        <div class="mt-10 p-5">         
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">project</th>
                      <th scope="col">sub project name</th>
                      <th scope="col">created at</th>
                      <th scope="col">updated at</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($subprojects as $subproject)
                    <tr>
                      <th scope="row">{{$subproject->id}}</th>                      
                        <td>{{$subproject->projects->id}}</td>
                        <td>{{$subproject->sub_project_name}}</td>
                        <td>{{$subproject->created_at}}</td>
                        <td>{{$subproject->updated_at}}</td>                    
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
</div>
<x-footer/>
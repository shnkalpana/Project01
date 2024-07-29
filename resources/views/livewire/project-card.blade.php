<div class="container m-4">    
            @foreach ($projects as $item)
            <div class="card m-2">
                <div class="card-header">
                    <span class="fw-bold">
                        {{$item->projectname}}
                    </span>
                    <span class="fw-bold">
                        Created at: {{$item->created_at}}
                    </span>
                </div>
                <div class="card-body">
                    <div class="col-8">
                        @if($item->subprojects->count() > 0)
                        <div class="container-fluid">
                            <div class="mt-10">         
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>                                          
                                          <th scope="col">sub project name</th>
                                          <th scope="col">created at</th>
                                          <th scope="col">tasks</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($item->subprojects as $subproject)
                                        <tr>                                                              
                                            <td>
                                                <a href="{{route('subprojects.show',$subproject->id)}}">
                                                    {{$subproject->sub_project_name}}
                                                </a>
                                                </td>
                                            <td>{{$subproject->created_at}}</td>
                                            <td>{{$subproject->tasks->count()}}</td>                    
                                        </tr>
                                        @endforeach
                                    </tbody>
                                  </table>
                            </div>
                    </div>                       
                        @else                            
                            <p>No any subprojects</p>
                        @endif
                        <button class="btn btn-primary" wire:click="createSubProject">Add sub project</button>
                            @if($CreateSubProjects)
                                @include('subprojects.create',['projectid'=>$item['id']])
                            @endif
                    </div>
                </div>
            </div>
            @endforeach   
</div>

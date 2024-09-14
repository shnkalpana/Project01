<div class=" mx-2 max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">    
            @foreach ($projects as $item)
            <div class="">
                <div class=" mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"">
                    <span class="fw-bold">
                        {{$item->projectname}}
                    </span>
                    <span class="fw-bold">
                        Created at: {{$item->created_at}}
                    </span>
                </div>
                <div class="">
                    <div class="">
                        @if($item->subprojects->count() > 0)
                        
                            <div class=" relative overflow-x-auto shadow-md rounded-lg">         
                                <table class="w-full text-sm sm:text-lg text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead class=" text-xs sm:text-sm  text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>                                          
                                          <th scope="col" class="px-6 py-3">sub project name</th>
                                          <th scope="col" class="px-6 py-3">created at</th>
                                          <th scope="col" class="px-6 py-3">tasks</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($item->subprojects as $subproject)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">                                                              
                                            <td class="px-6 py-4">
                                                <a href="{{route('subprojects.show',$subproject->id)}}">
                                                    {{$subproject->sub_project_name}}
                                                </a>
                                                </td>
                                            <td class="px-6 py-4">{{$subproject->created_at}}</td>
                                            <td class="px-6 py-4">{{$subproject->tasks->count()}}</td>                    
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

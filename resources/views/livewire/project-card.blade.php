<div class="container m-4">    
            @foreach ($projects as $item)
            <div class="card m-2">
                <div class="card-header">
                    {{$item['projectname']}}
                </div>
                <div class="card-body">
                    <div class="col-2">
                        <button class="btn btn-primary" wire:click="createSubProject">Add sub project</button>
                            @if($CreateSubProjects)
                                @include('subprojects.create',['projectid'=>$item['id']])
                            @endif
                    </div>
                </div>
            </div>
            @endforeach   
</div>

<div>
    <div>
        <button type="button" wire:click="createBtn"> 
            Create new task
        </button> 
    </div>
    @if($show)
    <div class="container-fluid">
        <div class="col-10">
        <form action="{{url('tasks')}}" method="POST">
            @csrf
            <label for="name" title="Task Name:"/>
            <input type="text" name="name" placeholder="Task name"/>
            <input type="hidden" name="sub_project_id" value="{{$subprojectid}}"/>
            <label for="description" title="Descrition:"/>
            <input type="text" name="description" placeholder="Description"/>
            <label for="deadline" title="Deadline:"/>
            <input type="date" name="deadline"/>
            <span>
                <label for="assigned_user_id" title="Responsible:"/>
                <select class="form-select" name="assigned_user_id" aria-label="Select responsible person">
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach    
                  </select>
            </span>
            <input type="submit" title="Submit"/>
        </form>
    </div>
    </div>
    @endif
</div>
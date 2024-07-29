<div class="container">
    <form action="{{url('tasks')}}" method="POST">
        @csrf
        <label for="name" title="Task Name:"/>
        <input type="text" name="name" placeholder="Task name"/>
        <input type="hidden" name="project_id" value="{{$subprojectid}}"/>
        <label for="description" title="Descrition:"/>
        <input type="text" name="description" placeholder="Description"/>
        <label for="deadline" title="Deadline:"/>
        <input type="date" name="deadline"/>
        <input type="submit" title="Submit"/>
    </form>
</div>
<div class=" flex justify justify-center mt-5">
    <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700" >           
    <form action="{{url('tasks')}}" method="POST">
        @csrf
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Create new task</h5>
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
</div>
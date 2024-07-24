<div class="container">
    <form action="{{url('subprojects')}}" method="POST">
        @csrf
        <label for="sub_project_name" title="Sub Project Name:"/>
        <input type="text" name="sub_project_name" placeholder="Sub Project name"/>
        <input type="hidden" name="project_id" value="{{$projectid}}"/>
        <input type="submit" title="Submit"/>
    </form>
</div>
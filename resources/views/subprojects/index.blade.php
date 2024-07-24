<div class="container">
    @foreach ($subprojects as $subproject)
        <div>
            {{$subproject->sub_project_name}}
        </div>
    @endforeach
</div>
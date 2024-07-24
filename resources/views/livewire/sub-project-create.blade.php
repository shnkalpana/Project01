<div>
    <div>
        <form action="{{ url('subprojects') }}" method="POST">
            @csrf
            <input type="text" name="name">
            <input type="text" name="projectid" value="{{$projectid}}">
            <button type="submit">Create</button>
        </form>
    </div>
</div>

<div>
    <div>
        <form action="{{ url('subprojects') }}" method="POST">
            @csrf
            <input type="text" name="name" class=" outline-1 rounded-lg py-1.5 ml-2 shadow-sm">
            <input hidden type="text" name="projectid" value="{{$projectid}}">
            <button class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit">Create</button>
        </form>
    </div>
</div>

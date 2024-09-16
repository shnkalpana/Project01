<div class=" flex justify justify-center mt-2">
    <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class=" space-y-2" action="{{url('subprojects')}}" method="POST">
            @csrf
            <h5 class="text-xl font-medium text-gray-900 dark:text-white">Create subproject</h5>

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" title="Sub Project Name:"/>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"type="text" name="sub_project_name" placeholder="Sub Project name" class=" outline-1 rounded-lg py-1.5 ml-2 shadow-sm text-center"/>
            <input type="hidden" name="project_id" value="{{$projectid}}"/>
            <input type="submit" title="Submit" class=" mt-2 inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"/>
        </form>
    </div>
</div>

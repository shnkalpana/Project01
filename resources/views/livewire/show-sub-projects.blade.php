<div>
    <h1 class=" mt-4 pl-4 text-2xl sm:text-sm  text-gray-700 uppercase dark:text-white" > Suppliers </h1>
    <div class=" mt-2 relative overflow-x-auto shadow-md rounded-xl">
        <table class="w-full text-sm sm:text-lg text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class=" text-xs sm:text-sm  text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                  <th scope="col" class="px-6 py-3">Project name</th>
                  <th scope="col" class="px-6 py-3">Sub project name</th>
                  <th scope="col" class="px-6 py-3">Task count</th>
                  <th scope="col" class="px-6 py-3">Edit</th>
                </tr>
              </thead>
        <tbody>
          @foreach ($userProjects->subprojects as $item)
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td class="px-6 py-4">{{$userProjects->projectname}}</td>
            <td class="px-6 py-4">{{$item->sub_project_name}}</td>
            <td class="px-6 py-4">{{$item->tasks->count()}}</td>
            <td class="px-6 py-4">To do</td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
</div>

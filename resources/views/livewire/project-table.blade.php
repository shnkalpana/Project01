<div>
    <h1 class=" mt-4 pl-4 text-2xl sm:text-sm  text-gray-700 uppercase dark:text-white" > Projects </h1>
    <div class=" mt-2 relative overflow-x-auto shadow-md rounded-xl">       
        <table class="w-full text-sm sm:text-lg text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class=" text-xs sm:text-sm  text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                  <th scope="col" class="px-6 py-3">Name</th>
                  <th scope="col" class="px-6 py-3">Created at</th>
                  <th scope="col" class="px-6 py-3">Subprojects</th>
                  <th scope="col" class="px-6 py-3">Own by</th>
                </tr>
              </thead>
              <tbody>
                @auth
                @if(auth()->user()->user_roll == 'admin')
                @foreach($projects as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">{{$item->projectname}}</td>
                    <td class="px-6 py-4">{{$item->created_at}}</td>
                    <td class="px-6 py-4">{{$item->subprojects->count()}}</td>
                    <td class="px-6 py-4">{{$item->user->name}}</td>
                  </td>
                </tr>
                @endforeach
                @endif
                @if(auth()->user()->user_roll == 'projectmanager')
                @foreach($userProjects as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">{{$item->projectname}}</td>
                    <td class="px-6 py-4">{{$item->created_at}}</td>
                    <td class="px-6 py-4">{{$item->subprojects->count()}}</td>
                    <td class="px-6 py-4">{{$item->user->name}}</td>
                  </td>
                </tr>
                @endforeach
                @endif
                @endauth
                
            </tbody>
          </table>
      </div> 
</div>
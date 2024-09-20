<div>
  <h1 class=" mt-4 pl-4 text-2xl sm:text-sm  text-gray-700 uppercase dark:text-white" > Users  </h1>
  <div class=" mt-2 relative overflow-x-auto shadow-md rounded-xl">        
      <table class="w-full text-sm sm:text-lg text-left rtl:text-right text-gray-500 dark:text-gray-400">
          <thead class=" text-xs sm:text-sm  text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">email</th>
                <th scope="col" class="px-6 py-3">User roll</th>
                <th scope="col" class="px-6 py-3">dob</th>
                <th scope="col" class="px-6 py-3">Joined date</th>
                <th scope="col" class="px-6 py-3">Hourly rate</th>
                <th scope="col" class="px-6 py-3">Edit</th>
                <th scope="col" class="px-6 py-3">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $item)
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <td class="px-6 py-4">{{$item->name}}</td>
                  <td class="px-6 py-4">{{$item->email}}</td>
                  <td class="px-6 py-4">{{$item->user_roll}}</td>
                  <td class="px-6 py-4">{{$item->dob}}</td>
                  <td class="px-6 py-4">{{$item->joined_date}}</td>
                  <td class="px-6 py-4">{{$item->hourly_rate}}</td>
                  <td class="px-6 py-4">
                    <a href="{{ route('user.edit', $item['id']) }}" class=" inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
                  </td>
                  <td class="px-6 py-4">
                    @if($item->user_roll == 'admin')
                      @else
                      <form action="{{ route('user.destroy', $item['id']) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class=" py-2 px-4 ms-2 text-sm font-medium focus:outline-none text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:z-10 focus:ring-4 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Delete 
                        </button>
                      </form>
                      @endif
                  </td>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
    </div> 
</div>
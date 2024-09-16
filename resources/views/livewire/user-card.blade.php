<div class=" flex justify justify-center pt-2">
    @foreach ($users as $item)
    <div class="w-full max-w-sm sm:max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <div>
          <h5 class="text-xl font-medium text-gray-900 dark:text-white">{{$item['name']}} </h5>
          <h6 class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Roll : {{$item['user_roll']}} </h6>
          <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DOB: {{$item['dob']}} </br> Joined date:{{$item['joined_date']}} <br> Hourly rate:{{$item['hourly_rate']}}  </p>
          <div class=" flex mt-4 md:mt-6">
            <!--form action=" method="post">
              @csrf
              <button type="submit" class=" inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" >
                  Edit
              </button>
            </form-->
            <a href="{{ route('user.edit', $item['id']) }}" class=" inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
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
          </div>
        </div>
      </div>
    @endforeach
</div>
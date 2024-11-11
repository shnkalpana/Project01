<div>
    <h1 class=" mt-4 pl-4 text-2xl sm:text-sm  text-gray-700 uppercase dark:text-white" > Suppliers </h1>
    <div class=" mt-2 relative overflow-x-auto shadow-md rounded-xl">
        <table class="w-full text-sm sm:text-lg text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class=" text-xs sm:text-sm  text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                  <th scope="col" class="px-6 py-3">Name</th>
                  <th scope="col" class="px-6 py-3">web link</th>
                  <th scope="col" class="px-6 py-3">email 01</th>
                  <th scope="col" class="px-6 py-3">email 02</th>
                  <th scope="col" class="px-6 py-3">Contact</th>
                  <th scope="col" class="px-6 py-3">Country</th>
                  <th scope="col" class="px-6 py-3">City</th>
                </tr>
              </thead>
              <tbody>
                @foreach($supliers as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">{{$item->name}}</td>
                    <td class="px-6 py-4">{{$item->weblink}}</td>
                    <td class="px-6 py-4">{{$item->email1}}</td>
                    <td class="px-6 py-4">{{$item->email2}}</td>
                    <td class="px-6 py-4">{{$item->contact}}</td>
                    <td class="px-6 py-4">{{$item->country}}</td>
                    <td class="px-6 py-4">{{$item->location}}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
      </div>
</div>

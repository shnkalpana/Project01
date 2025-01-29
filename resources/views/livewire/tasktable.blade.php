<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="">
        <div class=" relative overflow-x-auto shadow-md rounded-lg">
            <table class="w-full text-sm sm:text-lg text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class=" text-xs sm:text-sm  text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col">task</th>
                    <th scope="col">assigned</th>
                    <th scope="col">description</th>
                    <th scope="col">status</th>
                    <th scope="col">file name</th>
                    <th scope="col">link</th>
                </tr>
                </thead>
                <tbody>
                @foreach($userProjects as $item)
                    <tr>
                        <th scope="row">{{$item->name}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->name}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

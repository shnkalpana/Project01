<livewire:header/>
<div class=" w-fit flex justify-items-center align-middle">
    <div class=" w-fit bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700" >
        <form class=" space-y-2" action="{{url('suppliers')}}" method="post">
            @csrf
            <h5 class=" text-center text-xl font-medium text-gray-900 dark:text-white">Create new supplier </h5>

                    <div class=" flex justify-items-center w-fit ">
                        <label class=" w-32 text-sm font-medium text-gray-900 dark:text-white"> name </label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" type="text" name="name" placeholder="name" required />
                    </div>
                    <div class=" flex justify-items-center w-fit">
                        <label class=" w-32 block mb-2 text-sm font-medium text-gray-900 dark:text-white"> weblink </label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" type="text" name="website" placeholder="web link" />
                    </div>
                    <div class="flex justify-items-center w-fit">
                        <label class=" w-32 block mb-2 text-sm font-medium text-gray-900 dark:text-white"> email 1 </label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" type="email" name="email1" placeholder="email 1" />
                    </div>
                    <div class="flex justify-items-center w-fit">
                        <label class=" w-32 block mb-2 text-sm font-medium text-gray-900 dark:text-white"> email 2 </label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" type="email" name="email2" placeholder="email 2"/>
                    </div>
                    <div class=" flex justify-items-center w-fit">
                        <label class=" w-32 block mb-2 text-sm font-medium text-gray-900 dark:text-white"> contact number </label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" type="text" name="contact" placeholder="contact number"/>
                    </div>
                    <div class=" flex justify-items-center w-fit">
                        <label class=" w-32 block mb-2 text-sm font-medium text-gray-900 dark:text-white"> country </label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" type="text" name="country">

                    </div>
                    <div class=" flex justify-items-center w-fit">
                        <label class=" w-32 block mb-2 text-sm font-medium text-gray-900 dark:text-white"> city </label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" type="text" name="location" placeholder="city">
                    </div>
                    <div>
                        <div class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <button >Create</button>
                        </div>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                       @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                       @endforeach
                        </ul>
                   </div>
                @endif
            </form>
    </div>
</div>
<x-footer/>

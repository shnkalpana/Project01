<livewire:header/>
<div class=" mt-2 flex justify-items-center md:mt-0">
    <div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700" >
        <form class=" " action="{{url('parts')}}" method="post">
            @csrf
            <h5 class=" text-center text-xl font-medium text-gray-900 dark:text-white mb-2">Add part from supplier </h5>
            <div class=" space-y-2">
                    <div class=" flex justify-start space-x-2">
                        <label class=" w-1/3 p-1 text-sm font-medium text-gray-900 dark:text-white">part name </label>
                        <input class=" w-2/3 p-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" type="text" name="name" placeholder="name" required />
                    </div>
                    <div class=" flex justify-start space-x-2">
                        <label class="w-1/3 p-1 text-sm font-medium text-gray-900 dark:text-white"> part id/code </label>
                        <input class="w-2/3 p-1 bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" type="text" name="partcode" placeholder="part id" />
                    </div>
                    <div class=" flex justify-start space-x-2">
                        <label class="w-1/3 p-1 block text-sm font-medium text-gray-900 dark:text-white"> unit </label>
                        <input class="w-2/3 p-1 bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" type="text" name="unit" placeholder="unit" />
                    </div>
                    <div class=" flex justify-start space-x-2">
                        <label class="w-1/3 p-1 text-sm font-medium text-gray-900 dark:text-white"> unit price </label>
                        <input class="w-2/3 p-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" type="text" name="unitprice" placeholder="price in LKR"/>
                    </div>
                    <div class=" flex justify-start space-x-2">
                        <label class="w-1/3 p-1 font-medium text-gray-900 dark:text-white"> weight </label>
                        <input class="w-2/3 p-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" type="text" name="weight" placeholder="weight in kg"/>
                    </div>
                    <div class=" flex justify-start space-x-2">
                        <label class="w-1/3 p-1 text-sm font-medium text-gray-900 dark:text-white"> Supplier </label>
                        <select class="w-2/3 p-1  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="supplierid" aria-label="Select supplier">
                            @foreach($suppliers as $supplier)
                                <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                            @endforeach
                        </select>
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
            </div>
            </form>
    </div>
</div>
<x-footer/>

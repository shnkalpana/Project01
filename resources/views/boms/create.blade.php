<livewire:header/>
<div class=" ">
    <div class=" mt-2 relative overflow-x-auto shadow-md rounded-xl">
    <table class="w-full text-sm sm:text-lg text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class=" text-xs sm:text-sm  text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">#</th>
                <th scope="col" class="px-6 py-3">task name</th>
                <th scope="col" class="px-6 py-3">part</th>
                <th scope="col" class="px-6 py-3">supplier</th>
                <th scope="col" class="px-6 py-3">qty</th>
                <th scope="col" class="px-6 py-3">unit weight</th>
                <th scope="col" class="px-6 py-3">unit price</th>
                <th scope="col" class="px-6 py-3">weight</th>
                <th scope="col" class="px-6 py-3">price</th>
            </tr>
            </thead>
            <tbody>
            @foreach($boms as $bom)
             <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-3">{{ $bom->id }}</td>
                            <td class="px-6 py-3">{{ $bom->tasks->name ?? 'N/A' }}</td>
                            <td class="px-6 py-3">{{ $bom->parts->name ?? 'N/A'}}</td>
                            <td class="px-6 py-3">{{ $bom->parts->supplier->name ?? 'N/A'}}</td>
                            <td class="px-6 py-3">{{ $bom->qty}}</td>
                            <td class="px-6 py-3">{{ $bom->parts->weight}}</td>
                            <td class="px-6 py-3">{{ $bom->parts->unitprice}}</td>
                            <td class="px-6 py-3">{{ $bom->weight}}</td>
                            <td class="px-6 py-3">{{ $bom->price}}</td>
            </tr>
            @endforeach
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <form action="{{ url('boms') }}" method="POST">
                @csrf
                <td class="px-6 py-3">New</td>
                <td class="px-6 py-3">
                    <select name="taskid" required>
                        @foreach($tasks as $task)
                            <option value="{{ $task->id }}">{{ $task->name }}</option>
                        @endforeach
                    </select>
                </td>
                <div>
                <td class="px-6 py-3">
                    <select id="part_id" name="partid" required>
                        @foreach($parts as $part)
                            <option value="{{ $part->id }}">{{ $part->name }}</option>
                        @endforeach
                    </select>
                </td>
                    <td class="px-6 py-3" id="supplier" ></td>
                    <td class="px-6 py-3"><input type="number" name="qty" id="qty" required></td>
                    <td class="px-6 py-3" id="unitWeight"></td>
                    <td class="px-6 py-3" id="unitPrice"></td>
                    <td class="px-6 py-3"><input name="weight" id="totalWeight" vlaue="" required/></td>
                    <td class="px-6 py-3"><input name="price" id="totalPrice" value="" required/></td>
                    <td class="px-6 py-3"><button type="submit">Add Item</button></td>

                    <script>
                        const suppliersId = @json($parts->pluck('supplierid', 'id'));
                        const partWeight = @json($parts->pluck('weight', 'id'));
                        const partPrice = @json($parts->pluck('unitprice', 'id'));
                        const suppliers = @json($suppliers->pluck('name', 'id'));

                        function updateValues(){
                            const selectedPart = document.getElementById('part_id').value;
                            const supId = suppliersId[selectedPart];
                            const supplierName = suppliers[supId] || 'Supplier not found';
                            const weight = partWeight[selectedPart] || 'Weight not found';
                            const price = partPrice[selectedPart] || 'Price not found';
                            const qty = document.getElementById('qty').value || 0;

                            document.getElementById('supplier').innerText = supplierName;
                            document.getElementById('unitWeight').innerText = weight;
                            document.getElementById('unitPrice').innerText = price;
                            document.getElementById('totalWeight').value = (weight !== 'Weight not found') ? weight * qty : 'N/A';
                            document.getElementById('totalPrice').value = (price !== 'Price not found') ? price * qty : 'N/A';
                        }

                        //Event listner for part id to change supplier name,unit weight and unit price
                        document.getElementById('part_id').addEventListener("change" , function (){
                           updateValues();
                        });

                        //Event listner for qty to calculate total weight and price when change qty
                        document.getElementById("qty").addEventListener("change", function (){
                           updateValues();
                        })

                    </script>
                </div>
            </form>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<x-footer/>


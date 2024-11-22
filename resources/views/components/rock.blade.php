<div class="">

    <form class='contianer' action="/myrock" method="post">

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                @csrf
                <div class="mt-12">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-base/7 font-semibold text-gray-900">Form</h3>
                        <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">Personal Invoice</p>
                    </div>
                    <label class='grid'>title</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input  name='title'
                                    type="text"
                                    autocomplete="title"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                    placeholder='title'>
                        </div>
                    </div>
                    <label class='grid'>invoice number</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input  name='invoices_number'
                                    type="text"
                                    autocomplete="invoices"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                    placeholder='invoices'>
                        </div>
                    </div>

                    <label class='grid'>Product Name</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input  name='product_name'
                                    type="text"
                                    autocomplete="Product Name"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                    placeholder='Product Name'>
                        </div>
                    </div>
                    <label class='grid'>Product Price</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input  name='product_price'
                                    type="text"
                                    autocomplete="Product Price"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                    placeholder='Product Name'>
                        </div>
                    </div>
                    <label class='grid'>Transaction</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input  name='transaction_number'
                                    type="text"
                                    autocomplete="Transaction"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                    placeholder='Transaction'>
                        </div>
                    </div>

                    <label class='grid'>Item Price</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input  name='item_price'
                                    type="text"
                                    autocomplete="Price"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                    placeholder='Price'>
                        </div>
                    </div>
                    <label class='grid'>Currency</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input  name='currency'
                                    type="text"
                                    autocomplete="Price"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                    placeholder='Price'>
                        </div>
                    </div>
                    <label class='grid'>Amount</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input  name='amount'
                                    type="text"
                                    autocomplete="Price"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                    placeholder='Price'>
                        </div>
                    </div>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Submit
                </button>

            </div>
        </div>

    </form>
</div>

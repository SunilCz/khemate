<x-admin.app title="Orders |  Details">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
        <div class="max-w-xl">
            <p class="mt-2 text-4xl font-bold tracking-tight sm:text-5xl">Order details</p>
            <p class="mt-2 text-base text-gray-500">Order id #{{ $order->number }}</p>

            <dl class="mt-4 text-sm font-medium">
                <a href="{{ route('admin.orders.index') }}" class="inline-flex item-center text-sm font-semibold leading-6 text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                    </svg>
                    Go back
                </a>
            </dl>

            <div class="mt-2 sm:col-span-4">
                <label for="status" class="block text-sm font-medium leading-6 text-gray-900">Order Status</label>
                <select name="" autocomplete="status" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-gray-500 sm:max-w-xs sm:text-sm sm:leading-6">
                    <option value="" >Shipped</option>
                    <option value="" >Delivered</option>
                </select>
            </div>

            <dl class="mt-12 text-sm font-medium">
                <dt class="text-gray-900">Tracking number</dt>
                <dd class="mt-2 text-gray-600">51547878755545848512</dd>
            </dl>
        </div>

        <div class="mt-10 border-t border-gray-200">
            <h2 class="sr-only">Your order</h2>

            <h3 class="sr-only">Items</h3>

            <div class="flex space-x-6 border-b border-gray-200 py-10">
                <img src="https://tailwindui.com/img/ecommerce-images/confirmation-page-05-product-01.jpg" alt="Glass bottle with black plastic pour top and mesh insert." class="h-20 w-20 flex-none rounded-lg bg-gray-100 object-cover object-center sm:h-40 sm:w-40">
                <div class="flex flex-auto flex-col">
                    <div>
                        <h4 class="font-medium text-gray-900">
                            <a href="#">Cold Brew Bottle</a>
                        </h4>
                        <p class="mt-2 text-sm text-gray-600">This glass bottle comes with a mesh insert for steeping tea or cold-brewing coffee. Pour from any angle and remove the top for easy cleaning.</p>
                    </div>
                    <div class="mt-6 flex flex-1 items-end">
                        <dl class="flex space-x-4 divide-x divide-gray-200 text-sm sm:space-x-6">
                            <div class="flex">
                                <dt class="font-medium text-gray-900">Quantity</dt>
                                <dd class="ml-2 text-gray-700">1</dd>
                            </div>
                            <div class="flex pl-4 sm:pl-6">
                                <dt class="font-medium text-gray-900">Price</dt>
                                <dd class="ml-2 text-gray-700">$32.00</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>

            <div class="sm:ml-40 sm:pl-6">
                <h3 class="sr-only">Your information</h3>

                <h4 class="sr-only">Addresses</h4>
                <dl class="grid grid-cols-3 gap-x-6 py-10 text-sm">
                    <div>
                        <dt class="font-medium text-gray-900">Customer Details</dt>
                        <dd class="mt-2 text-gray-700">
                            <address class="not-italic">
                                <span class="block">{{ $order->user->name }}</span>
                                <span class="block">{{ $order->user->email }}</span>
                                <span class="block">9876543210</span>
                            </address>
                        </dd>
                    </div>
                    <div>
                        <dt class="font-medium text-gray-900">Shipping address</dt>
                        <dd class="mt-2 text-gray-700">
                            <address class="not-italic">
                                <span class="block">Kristin Watson</span>
                                <span class="block">7363 Cynthia Pass</span>
                                <span class="block">Toronto, ON N3Y 4H8</span>
                            </address>
                        </dd>
                    </div>
                    <div>
                        <dt class="font-medium text-gray-900">Billing address</dt>
                        <dd class="mt-2 text-gray-700">
                            <address class="not-italic">
                                <span class="block">Kristin Watson</span>
                                <span class="block">7363 Cynthia Pass</span>
                                <span class="block">Toronto, ON N3Y 4H8</span>
                            </address>
                        </dd>
                    </div>
                </dl>

                <h4 class="sr-only">Payment</h4>
                <dl class="grid grid-cols-2 gap-x-6 border-t border-gray-200 py-10 text-sm">
                    <div>
                        <dt class="font-medium text-gray-900">Payment method</dt>
                        <dd class="mt-2 text-gray-700">
                            <p>Apple Pay</p>
                            <p>Mastercard</p>
                            <p><span aria-hidden="true">••••</span><span class="sr-only">Ending in </span>1545</p>
                        </dd>
                    </div>
                    <div>
                        <dt class="font-medium text-gray-900">Shipping method</dt>
                        <dd class="mt-2 text-gray-700">
                            <p>DHL</p>
                            <p>Takes up to 3 working days</p>
                        </dd>
                    </div>
                </dl>

                <h3 class="sr-only">Summary</h3>

                <dl class="space-y-6 border-t border-gray-200 pt-10 text-sm">
                    <div class="flex justify-between">
                        <dt class="font-medium text-gray-900">Subtotal</dt>
                        <dd class="text-gray-700">${{ $order->total_price }}</dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="flex font-medium text-gray-900">
                            Discount
                            <span class="ml-2 rounded-full bg-gray-200 px-2 py-0.5 text-xs text-gray-600">STUDENT50</span>
                        </dt>
                        <dd class="text-gray-700">-$18.00 (50%)</dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="font-medium text-gray-900">Shipping</dt>
                        <dd class="text-gray-700">$5.00</dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="font-medium text-gray-900">Total</dt>
                        <dd class="text-gray-900">$23.00</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</x-admin.app>

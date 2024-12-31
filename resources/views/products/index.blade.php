<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <!-- Table displaying paginated songs -->
                  <table class="table-auto w-full">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Title</th>
                        <th>Regular Price</th>
                        <th>Sale Price</th>
                        <th>Unit Quantity</th>
                        <th>Is Featured</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($products as $product)
                        <tr>
                            <td><img src=" {{ $product->image }}" width="40px"></td>  
                          <td>{{ $product->name }}</td>
                          <td>{{ $product->regular_price }}</td>
                          <td>{{ $product->sale_price }}</td>
                          <td>{{ $product->unit_quantity }}</td>
                          <td>
                            @if($product->is_featured == true)
                            Yes
                            @else
                            No
                            @endif
                            </td>
                          <td>
                            @if($product->status == true)
                            Published
                            @else
                            Draft
                            @endif
                           </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>

                <!-- Pagination links -->
                <div class="mt-4">
                    {{ $products->links() }}
                </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

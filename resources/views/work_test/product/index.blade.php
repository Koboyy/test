@extends('layouts.app')

@section('title', 'products')

@section('active', 'products')

@push('css')

@endpush

@push('js')

@endpush

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('work_test.products.index') }}">Home</a></li>
        <li class="breadcrumb-item active">@yield('title')</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
    <div class="card-header with-border">
        <h3 class="card-title">
            @component('work_test.component.scaff.btn_create', [
                'route' => 'work_test.products.create',
                'title' => 'create'
            ])
            @endcomponent
        </h3>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Stock</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $no => $product)
                <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>
                        @if (!empty($product->photo))
                            <img src="{{ asset('uploads/product/' . $product->photo) }}" 
                                alt="{{ $product->name }}" width="50px" height="50px">
                        @else
                            <img src="http://via.placeholder.com/50x50" alt="{{ $product->name }}">
                        @endif
                    </td>
                    <td>{{ $product->code }} - {{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>Rp {{ number_format($product->price) }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td class="text-center">
                        @component('work_test.component.scaff.btn_icon_edit', [
                            'route' => 'work_test.products.edit', 
                            'params' => $product->id
                        ])
                        @endcomponent
                        @component('work_test.component.scaff.btn_icon_delete', [
                            'route' => 'work_test.products.destroy',
                            'params' => $product->id
                        ])
                        @endcomponent
                    </td>
                </tr>
                @empty
                    @component('admin.component.block.no_data', ['cols' => '8']) @endcomponent
                @endforelse
            </tbody>
        </table>
         {{ $products->links() }}
    </div>
@endsection
@extends('layouts.app')

@section('title', 'customers')

@section('active', 'customers')

@push('css')

@endpush

@push('js')

@endpush

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('work_test.customers.index') }}">Home</a></li>
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
                'route' => 'work_test.customers.create',
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($customers as $no => $customer)
                <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td class="text-center">
                        @component('work_test.component.scaff.btn_icon_edit', [
                            'route' => 'work_test.customers.edit', 
                            'params' => $customer->id
                        ])
                        @endcomponent
                        @component('work_test.component.scaff.btn_icon_delete', [
                            'route' => 'work_test.customers.destroy',
                            'params' => $customer->id
                        ])
                        @endcomponent
                    </td>
                </tr>
                @empty
                    @component('admin.component.block.no_data', ['cols' => '6']) @endcomponent
                @endforelse
            </tbody>
        </table>
         {{ $customers->links() }}
    </div>
@endsection
@extends('layouts.app')

@section('title', 'Categories')

@section('active', 'Categories')

@push('css')

@endpush

@push('js')

@endpush

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('work_test.categories.index') }}">Home</a></li>
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
                'route' => 'work_test.categories.create',
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
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $no => $category)
                <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td class="text-center">
                        @component('work_test.component.scaff.btn_icon_edit', [
                            'route' => 'work_test.categories.edit', 
                            'params' => $category->id
                        ])
                        @endcomponent
                        @component('work_test.component.scaff.btn_icon_delete', [
                            'route' => 'work_test.categories.destroy',
                            'params' => $category->id
                        ])
                        @endcomponent
                    </td>
                </tr>
                @empty
                    @component('admin.component.block.no_data', ['cols' => '4']) @endcomponent
                @endforelse
            </tbody>
        </table>
        {{ $categories->links() }}
    </div>
@endsection
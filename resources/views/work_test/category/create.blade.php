@extends('layouts.app')

@section('title', 'customers')

@section('active', 'customers')

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
            <div class="card-body">
                <form action="{{ route('work_test.categories.store') }}" method="POST">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" id="description" 
                            cols="5" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        {{ csrf_field() }}
                        @component('work_test.component.scaff.btn_submit_store') @endcomponent
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
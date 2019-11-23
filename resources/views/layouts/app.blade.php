<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        @include('work_test.component.block.title')
    </title>
    
    @include('work_test.component.block.meta')

    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
    
    @include('work_test.component.block.font')

    @include('work_test.component.block.css')

    @stack('css')
</head>
<body class="hold-transition sidebar-mini">
	<div class="wrapper">
        @include('work_test.component.block.header')

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                     @include('work_test.component.block.breadcrumb')
                </div>
            </div>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">Test Pos </span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex"></div>
                    @include('work_test.component.block.sidebar')        
            </div>
        </aside>
        
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section></div>
        
        @include('work_test.component.block.footer')
    </div>

    @include('work_test.component.block.js')

    @stack('js')
</body>
</html>

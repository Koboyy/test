<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview menu-open">
            <a href="{{ route('work_test.dashboard.index') }}" class="nav-link active">
                <i class="nav-icon fa fa-user"></i>
                <p>
                    Dashboards
                </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="{{ route('work_test.customers.index') }}" class="nav-link">
                <i class="nav-icon fa fa-user"></i>
                <p>
                    Customers
                </p>
            </a>
        </li>

        {{-- @if (auth()->user()->can('show products') || auth()->user()->can('delete products') || auth()->user()->can('create products')) --}}
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-server"></i>
                    <p>
                        Master Produk
                        <i class="right fa fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('work_test.categories.index') }}" class="nav-link">
                            <i class="fa fa-circle-o nav-icon"></i>
                            <p>Categories</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('work_test.products.index') }}" class="nav-link">
                            <i class="fa fa-circle-o nav-icon"></i>
                            <p>Products</p>
                        </a>
                    </li>
                </ul>
            </li>
        {{-- @endif --}}

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-shopping-bag"></i>
                <p>
                    Master Transaction
                    <i class="right fa fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Data Transaction</p>
                    </a>
                </li>
                {{-- @role('kasir') --}}
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon fa fa-shopping-cart"></i>
                            <p>
                                Transaksi
                            </p>
                        </a>
                    </li>
                {{-- @endrole --}}
            </ul>
        </li>
        
        {{-- @role('admin') --}}
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-users"></i>
                    <p>
                        Setting
                        <i class="right fa fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fa fa-circle-o nav-icon"></i>
                            <p>Role</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fa fa-circle-o nav-icon"></i>
                            <p>Role Permission</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fa fa-circle-o nav-icon"></i>
                            <p>Users</p>
                        </a>
                    </li>
                </ul>
            </li>
        {{-- @endrole --}}

        <li class="nav-item has-treeview">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="nav-icon fa fa-sign-out"></i>
                <p>
                    {{ __('Logout') }}
                </p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <span class="menu-title">Dashboard</span>
                <span class="menu-sub-title">( 2 new updates )</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Book</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('all_book') }}">Book Stat.</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('show_add_book') }}">Add Book</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('all_sh') }}">
                <span class="menu-title">Service Holder</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="menu-title">API Holder</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="menu-title">Chart</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('show_transaction_list') }}">
                <span class="menu-title">Complete Transition</span>
                <i class="mdi mdi-table-large menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">Pending</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-lock menu-icon"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('show_book_request_list') }}">Pending Books</a></li>
                <!--    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html">Pending Holders </a></li> -->
                    <li class="nav-item"> <a class="nav-link" href="{{ route('show_trx_request_list') }}"> Pending Trx Request </a></li>
                </ul>
            </div>
        </li>
    </ul>
    <div class="sidebar-progress">
        <p>Total Sales</p>
        <div class="progress progress-sm">
            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <p>50 Items sold</p>
    </div>
    <div class="sidebar-progress">
        <p>Customer Target</p>
        <div class="progress progress-sm">
            <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <p>200 Items sold</p>
    </div>
</nav>

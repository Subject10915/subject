<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('admin.dashboard.index') }}">後台管理</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="font-size: large;">
                        <a class="btn btn-secondary dropdown-toggle" style="width:200px;;font-size:large" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                            @csrf
                        </form>
                    </div>
                </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="{{ route('admin.dashboard.index') }}"><i class="fa fa-fw fa-dashboard"></i> 後台管理</a>
            </li>
            <li>
                <a href="{{ route('admin.status.detect') }}"><i class="fa fa-fw fa-edit"></i> 偵測進入教室名單</a>
            </li>
            <li>
                <a href="{{ route('admin.status.index') }}"><i class="fa fa-fw fa-edit"></i> 進出教室名單</a>
            </li>
            <li>
                <a href="{{ route('admin.status.search') }}"><i class="fa fa-fw fa-edit"></i> 預約教室查詢</a>
            </li>
            <li>
                <a href="{{ route('admin.book.index') }}"><i class="fa fa-fw fa-edit"></i> 預約教室</a>
            </li>
            <li>
                <a href="{{ route('admin.change.index') }}"><i class="fa fa-fw fa-edit"></i> 調課管理</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>

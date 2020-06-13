<!-- Navigation -->
<style>
    .wrapper{
        display:flex;
        position:relative;
    }
    .wrapper .sidebar{
        position:fixed;
        width: 100px;
        height:100%;
        background:#e3f2fd;
        padding:12px 0;
    }
    .wrapper .sidebar ul li a{
        background:#e3f2fd;
        color: black;
    }
    .wrapper .sidebar ul li:hover a{
        color:#a6e1ec;
    }
</style>
<nav class="navbar navbar-light navbar-fixed-top" style="background-color: #e3f2fd;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="color: black" href="{{ route('admin.dashboard.index') }}">後台管理</a>
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
    <div class="wrapper">
        <div class="sidebar">
            <ul class="nav navbar-nav side-nav" style="background-color: #e3f2fd;">
                <li>
                    <a href="{{ route('admin.status.detect') }}">偵測進入教室名單</a>
                </li>
                <li>
                    <a href="{{ route('admin.status.index') }}">進出教室名單</a>
                </li>
                <li>
                    <a href="{{ route('admin.status.search') }}">預約教室查詢</a>
                </li>
                <li>
                    <a href="{{ route('admin.book.index') }}">預約教室</a>
                </li>
                <li>
                    <a href="{{ route('admin.change.index') }}">調課管理</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.navbar-collapse -->
</nav>

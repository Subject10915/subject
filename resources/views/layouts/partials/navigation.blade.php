<!-- Navigation -->
<style>
    ul {
        margin:0px;
        padding:0px;
    }
    ul li {
        list-style-type:none;
        height:30px;
        width:100px;
        float:left;
        font-size:16px;
        display:inline;
    }
    ul li a {
        text-decoration:none;
        font-weight: bold;
        color:#1f648b;
        display:block;
        line-height:29px;
        padding-left:10px;
    }
    ul li a:hover {

    }
    ul li ul li a:hover {

    }
    ul li ul {
        visibility:hidden;
    }
    ul li:hover ul {
        visibility:visible;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="color: #8eb4cb">
    <div class="container">
        <a class="navbar-brand" href="{{ route('student.index') }}" style="color: #1d68a7">NCUT</a>
        <ul>
            @if (Route::has('login'))
                @auth
                    <li class="nav-item dropdown"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>查詢</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <ul>
                            <li><a class="dropdown-item" href="{{ route('student.timetable') }}">課表查詢</a></li>
                            <li><a class="dropdown-item" href="{{ route('room') }}">教室課表查詢</a></li>
                            <li><a class="dropdown-item" href="#">教室資訊查詢</a></li>
                            <li><a class="dropdown-item" href="{{ route('session') }}">節次時段對照</a></li>
                        </ul>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>預約作業</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <ul>
                            <li><a class="dropdown-item" href="{{ route('book') }}">預約教室</a></li>
                            <li><a class="dropdown-item" href="{{ route('room.sta') }}">教室使用狀態</a></li>
                            <li><a class="dropdown-item" href="{{ route('book.search') }}">教室預約查詢</a></li>
                            <li><a class="dropdown-item" href="{{ route('book.transfer') }}">調課</a></li>
                        </ul>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @else
                    <li class="nav-item dropdown"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>查詢</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <ul>
                                <li><a class="dropdown-item" href="{{ route('login') }}">登入</a></li>
                                <li><a class="dropdown-item" href="{{ route('room') }}">教室課表查詢</a></li>
                                <li><a class="dropdown-item" href="#">教室資訊查詢</a></li>
                                <li><a class="dropdown-item" href="{{ route('session') }}">節次時段對照</a></li>
                            </ul>
                        </div>
                    </li>
                @endauth
            @endif
        </ul>
    </div>
</nav>

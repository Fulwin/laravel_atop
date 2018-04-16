<div class="header clearfix">

    <div class="float-left tools">
        @yield('breadcrumb')
    </div>

    <!-- 右侧工具[消息中心、待办事项、个人快速操作] -->
    <div class="float-right tools">
        <ul class="nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="material-icons">email</i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="material-icons">assignment</i>
                </a>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">游客请登录</a>
                </li>
            @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <img src="https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1200720799,1078363825&fm=27&gp=0.jpg"
                         class="rounded-circle mr-2" width="30" alt="">
                    <span>{{ Auth::user()->name }} </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">个人中心</a>
                    <a class="dropdown-item" href="#">修改资料</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item logout" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">退出登录</a>
                    <form action="{{ route('logout') }}" method="POST" id="logout-form" class="sr-only">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>

</div>

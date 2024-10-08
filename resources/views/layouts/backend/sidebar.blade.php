<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ asset('assets/backend/images/user.png') }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}</div>
            <div class="email">{{ Auth::user()->email }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ route('logout') }}"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            @if (Request::is('admin*'))
                <li class="{{ Request::is('admin/dashboard') ? "active" : "" }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/tag*') ? "active" : "" }}">
                    <a href="{{ route('admin.tag.index') }}">
                        <i class="material-icons">tag</i>
                        <span>Tag</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/category*') ? "active" : "" }}">
                    <a href="{{ route('admin.category.index') }}">
                        <i class="material-icons">category</i>
                        <span>Category</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/post*') ? "active" : "" }}">
                    <a href="{{ route('admin.post.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Post</span>
                    </a>
                </li>
                <li class="header">System</li>
                <li>
                    <a href="{{ route('logout') }}">
                        <i class="material-icons">logout</i>
                        <span>Log Out</span>
                    </a>
                </li>
            @endif

            @if (Request::is('author*'))
                <li class="{{ Request::is('author/dashboard') ? 'active' : "" }}">
                    <a href="{{ route('author.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="header">System</li>
                <li>
                    <a href="{{ route('logout') }}">
                        <i class="material-icons">logout</i>
                        <span>Log Out</span>
                    </a>
                </li>

            @endif


        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2016 - {{ date('Y') }} <a href="javascript:void(0);">AdminBSB - Material Design</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.5
        </div>
    </div>
    <!-- #Footer -->
</aside>

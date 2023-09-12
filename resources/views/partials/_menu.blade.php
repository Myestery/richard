<div class="sidebar__menu-group">
    <ul class="sidebar_nav">
        <li> Logged in as {{ Auth::user()->name }}</li>
   
        {{-- <ul> --}}
        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a>
        </li>
        <li class="{{ Request::is('/blogs/create') ? 'active' : '' }}"><a href="/blogs/create">Create Post</a>
        </li>
        @if(auth()->user()->is_admin)
        <li class="{{ Request::is('/blogs/reports') ? 'active' : '' }}"><a href="/blogs/reports">View Reports</a>
        </li>
        @endif
        {{-- logout --}}
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
            <li>
                {{-- <button type="submit" class="btn btn-danger">Logout</button> --}}
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </li>
        </form>

    </ul>
</div>

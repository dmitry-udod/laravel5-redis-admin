<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">L5-Redis-Admin</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    @if ($isConnected)
                        <div class="led-green"></div>
                    @else
                        <div class="led-red"></div>
                    @endif
                </li>
                <li>
                    <a href="{{ route('server-info') }}">Server info</a>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <input type="text" class="form-control" placeholder="Search key...">
            </form>
        </div>
    </div>
</nav>

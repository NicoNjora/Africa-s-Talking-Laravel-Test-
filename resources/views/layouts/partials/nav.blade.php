<nav class="navbar navbar-light navbar-expand-md navigation-clean">
    <div class="container"><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">About the project</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link {{ Request::is('sms') ? 'active' : '' }}" href="sms">Bulk Messages</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link {{ Request::is('money') ? 'active' : '' }}" href="money">Money Transfer</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link {{ Request::is('airtime') ? 'active' : '' }}" href="airtime">Airtime</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link {{ Request::is('voice') ? 'active' : '' }}" href="voice">Voice</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link {{ Request::is('ussd') ? 'active' : '' }}" href="ussd">USSD</a></li>
            </ul>
        </div>
    </div>
</nav>
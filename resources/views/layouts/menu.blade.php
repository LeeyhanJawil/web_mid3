<li class="nav-item">
    <a href="{{ route('registrations.index') }}"
       class="nav-link {{ Request::is('registrations*') ? 'active' : '' }}">
        <p>Registrations</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>



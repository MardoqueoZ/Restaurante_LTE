<li class="nav-item">
    <a href="{{ route('mesas.index') }}"
       class="nav-link {{ Request::is('mesas*') ? 'active' : '' }}">
        <p>Mesas</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('menus.index') }}"
       class="nav-link {{ Request::is('menus*') ? 'active' : '' }}">
        <p>Menus</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('pedidos.index') }}"
       class="nav-link {{ Request::is('pedidos*') ? 'active' : '' }}">
        <p>Pedidos</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('reservas.index') }}"
       class="nav-link {{ Request::is('reservas*') ? 'active' : '' }}">
        <p>Reservas</p>
    </a>
</li>



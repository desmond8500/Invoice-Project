
<li class="nav-item {{ Request::is('clients*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('clients.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Clients</span>
    </a>
</li>
<li class="nav-item {{ Request::is('projets*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('projets.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Projets</span>
    </a>
</li>
<li class="nav-item {{ Request::is('devis*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('devis.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Devis</span>
    </a>
</li>
<li class="nav-item {{ Request::is('contacts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('contacts.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Contacts</span>
    </a>
</li>

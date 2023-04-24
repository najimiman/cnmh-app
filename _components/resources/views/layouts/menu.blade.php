
<li class="nav-item">
    <a href="{{ route('projects.index') }}" class="nav-link {{ Request::is('projects*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/projects.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('couvertureMedicals.index') }}" class="nav-link {{ Request::is('couvertureMedicals*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/couvertureMedicals.plural')</p>
    </a>
</li>

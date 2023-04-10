<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('projects.index') }}" class="nav-link {{ Request::is('projects*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/projects.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('tasks.index') }}" class="nav-link {{ Request::is('tasks*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/tasks.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('members.index') }}" class="nav-link {{ Request::is('members*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/members.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('couvertureMedicals.index') }}" class="nav-link {{ Request::is('couvertureMedicals*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/couvertureMedicals.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('typeHandicaps.index') }}" class="nav-link {{ Request::is('typeHandicaps*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/typeHandicaps.plural')</p>
    </a>
</li>

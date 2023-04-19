@foreach (app('App\Models\MenuItem')::all() as $menuItem)
    <li class="nav-item">
        <a href="{{ Route::has($menuItem->url) ? route($menuItem->url) : $menuItem->url }}"
            class="nav-link {{ Route::is($menuItem->url . '*') ? 'active' : '' }}">
            {!! $menuItem->icon !!}
            <p> {{ $menuItem->nom }} </p>
        </a>
    </li>
@endforeach
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

<li class="nav-item">
    <a href="{{ route('services.index') }}" class="nav-link {{ Request::is('services*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/service.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('niveauScolaires.index') }}" class="nav-link {{ Request::is('niveauScolaires*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/niveauScolaires.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('etatCivils.index') }}" class="nav-link {{ Request::is('etatCivils*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/etatCivils.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('employes.index') }}" class="nav-link {{ Request::is('employes*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/employes.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('members.index') }}" class="nav-link {{ Request::is('members*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/members.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('reclamations.index') }}" class="nav-link {{ Request::is('reclamations*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/reclamations.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('fonctions.index') }}" class="nav-link {{ Request::is('fonctions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/fonctions.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('patients.index') }}" class="nav-link {{ Request::is('patients*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/patients.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dossier-patients.index') }}" class="nav-link {{ Request::is('dossierPatients*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/dossierPatients.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('orientation-externes.index') }}" class="nav-link {{ Request::is('orientationExternes*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/orientationExternes.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('consultations.index') }}" class="nav-link {{ Request::is('consultations*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/consultations.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('rendez-vouses.index') }}" class="nav-link {{ Request::is('rendezVouses*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/rendezVouses.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('tuteurs.index') }}" class="nav-link {{ Request::is('tuteurs*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/tuteurs.plural')</p>
    </a>
</li>

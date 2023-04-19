@foreach (app('App\Models\MenuItem')::all() as $menuItem)
    <li class="nav-item">
        <a href="{{ Route::has($menuItem->url) ? route($menuItem->url) : $menuItem->url }}"
            class="nav-link {{ Route::is($menuItem->url . '*') ? 'active' : '' }}">
            {!! $menuItem->icon !!}
            <p> {{ $menuItem->nom }} </p>
        </a>
    </li>
@endforeach

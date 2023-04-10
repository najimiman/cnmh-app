
## Afficher le nom du model
{{ $config->modelNames->camelPlural }}
@@extends('layouts.app') -> @extends('layouts.app')

## Variable config
$config->modelNames->humanPlural
$config->modelNames->camelPlural
$config->prefixes->getRoutePrefixWith('.')


@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.create') }}

{{ route('projects.create') }}



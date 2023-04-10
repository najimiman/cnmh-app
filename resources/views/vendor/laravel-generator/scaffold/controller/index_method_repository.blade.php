    public function index(Request $request)
    {
        
        $query = $request->input('query');
        ${{ $config->modelNames->camelPlural }} = $this->{{ $config->modelNames->camel }}Repository->paginate($query);
       
        if ($request->ajax()) {
            return view('{{ $config->modelNames->snakePlural }}.table')
                ->with('{{ $config->modelNames->camelPlural }}', ${{ $config->modelNames->camelPlural }});
        }

        return view('couverture_medicals.index')
            ->with('couvertureMedicals', $couvertureMedicals);
    }
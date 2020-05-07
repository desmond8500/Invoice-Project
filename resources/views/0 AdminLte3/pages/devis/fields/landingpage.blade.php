@php
    $contents = json_decode('[
        { "status": "false", "name": "landing_design",       "fonction": "Theme",          "prix": "1000", "description": "Thème qui sera appliqué à la page"},
        { "status": "false", "name": "landing_form",         "fonction": "Formulaires",    "prix": "1000", "description": "Les formulaires de commentaire, de newletter etc"},
        { "status": "false", "name": "landing_hebergement",  "fonction": "Hébergement",    "prix": "1000", "description": "Serveur en ligne"},
        { "status": "false", "name": "landing_domaine",      "fonction": "Nom de domaine", "prix": "1000", "description": "L\'adresse en ligne"},
        { "status": "false", "name": "landing_seo",          "fonction": "Référencement",  "prix": "1000", "description": "Permet mettre en avant la page sur internet"},
        { "status": "false", "name": "landing_https",        "fonction": "Sécutité",       "prix": "1000", "description": "L\'adresse en ligne"}
    ]');
    $total = 0;
@endphp

<h3>Technologies</h3>
<ul>
    <li>Wordpress</li>
    <li>Wix</li>
    <li>Bitrix 24</li>
</ul>


<table class="table table-sm bg-white bg-white mt-2">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Case</th>
            <th scope="col">Fonction</th>
            <th scope="col">Description</th>
            <th scope="col">Tarif</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($contents as $key => $content)
        <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td class="text-center">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{ json_encode($content)}}" name="{{ $content->name}}">
            </td>
            <td>{{ $content->fonction }}</td>
            <td>{{ $content->description }}</td>
            <td class="text-right">{{ $content->prix }} F CFA</td>
        </tr>
        @php
            $total += $content->prix;
        @endphp
    @endforeach
    <tr>
        <th colspan="4">Total</th>
        <td class="text-right">{{$total}} F CFA</td>
    </tr>
    </tbody>
</table>

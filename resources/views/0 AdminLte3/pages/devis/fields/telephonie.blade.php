@php
    $contents = json_decode('[
        { "status": "false", "name": "tel_asterisk",   "fonction": "Asterisk",     "prix": "1000", "description": "Serveur de téléphonie IP"},
        { "status": "false", "name": "tel_serveur",    "fonction": "Serveur",      "prix": "1000", "description": "PC physique"},
        { "status": "false", "name": "tel_telephones", "fonction": "Téléphones IP","prix": "1000", "description": "Téléphones IP"},
        { "status": "false", "name": "tel_switch",     "fonction": "Switchs",      "prix": "1000", "description": "Des switchs pour l\'interconnexion"},
        { "status": "false", "name": "tel_cablage",    "fonction": "Cablage",      "prix": "1000", "description": "Cablage"},
        { "status": "false", "name": "tel_accessoires","fonction": "Accessoires",  "prix": "1000", "description": "Accessoires"}
    ]');
    $total = 0;
@endphp

<h3>Technologies</h3>
<ul>
    <li>Astérisk</li>
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

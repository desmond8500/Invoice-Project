@php
    $contents = json_decode('[
        { "name": "erp_design",         "fonction": "Theme",            "prix": "1 000"},
        { "name": "erp_form",           "fonction": "Formulaires",      "prix": "1 000"},
        { "name": "erp_hebergement",    "fonction": "Hébergement",      "prix": "1 000"},
        { "name": "erp_domaine",        "fonction": "Nom de domaine",   "prix": "1 000"}
    ]');
@endphp

<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">1</label>
</div>


<table class="table table-sm bg-white bg-white mt-2">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Case</th>
            <th scope="col">Fonction</th>
            <th scope="col">Tarif</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($contents as $key => $content)
        <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td class="text-center">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{ $content->name}}" name="{{ $content->name}}">
            </td>
            <td>{{ $content->fonction }}</td>
            <td>{{ $content->prix }} F CFA</td>

        </tr>
    @endforeach
    </tbody>
</table>

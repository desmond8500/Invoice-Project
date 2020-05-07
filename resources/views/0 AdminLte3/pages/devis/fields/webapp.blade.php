@php
    $contents = json_decode('[
        { "name": "webapp_design",       "fonction": "Theme",          "prix": "1000", "description": "Thème qui sera appliqué à la page"},
        { "name": "webapp_form",         "fonction": "Formulaires",    "prix": "1000", "description": "Les formulaires de commentaire, de newletter etc"},
        { "name": "webapp_hebergement",  "fonction": "Hébergement",    "prix": "1000", "description": "Serveur en ligne"},
        { "name": "webapp_domaine",      "fonction": "Nom de domaine", "prix": "1000", "description": "L\'adresse en ligne"},
        { "name": "webapp_seo",          "fonction": "Référencement",  "prix": "1000", "description": "Permet mettre en avant la page sur internet"},
        { "name": "webapp_https",        "fonction": "Sécutité",       "prix": "1000", "description": "L\'adresse en ligne"},

        { "name": "webapp_auth",       "fonction": "Authentification", "prix": "1000", "description": "Inscription,  connexion, mot de passe oublié, etc"},
        { "name": "webapp_geoloc",     "fonction": "Géolocalisation",  "prix": "1000", "description": "Géolocalisation"},
        { "name": "webapp_langue",     "fonction": "Langues",          "prix": "1000", "description": "Changer la langue de l\'application selon la localisation"},
        { "name": "webapp_api",        "fonction": "API",              "prix": "1000", "description": "Apis"},
        { "name": "webapp_blog",       "fonction": "Blog",             "prix": "1000", "description": "Interface de blogging lié à la page"},
        { "name": "webapp_gallerie",   "fonction": "Gallerie",         "prix": "1000", "description": "Gallérie d\'images, de vidéos, etc"},
        { "name": "webapp_tchatbot",   "fonction": "Tchatbot",         "prix": "1000", "description": "Tchat automatique"},
        { "name": "webapp_tchat",      "fonction": "Tchat",            "prix": "1000", "description": "Tchat en ligne"},
        { "name": "webapp_mail",       "fonction": "Mailing",          "prix": "1000", "description": "Envoi de mails"}
    ]');
    $total = 0;
@endphp

<h3>Technologies</h3>
<ul>
    <li>Wordpress</li>
    <li>Laravel</li>
    <li>Anguler</li>
    <li>Vue JS</li>
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

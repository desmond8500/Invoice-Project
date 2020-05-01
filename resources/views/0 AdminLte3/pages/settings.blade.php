@extends('0.AdminLte.index.layout')

@section('page')
    Configurations
@endsection

@section('link')
    <link rel="stylesheet" href="{{ asset('0/config/settings.css') }}">
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active">Configurations</li>
@endsection

@php
    $smenu[] = array('route'=>'Interface', 'name'=>'Interface');
    $smenu[] = array('route'=>'Logiciels', 'name'=>'Logiciels');
    $smenu[] = array('route'=>'Tutoriels', 'name'=>'Tutoriels');
    $smenu[] = array('route'=>'Ecommerce', 'name'=>'Ecommerce');
    $smenu[] = array('route'=>'Users',     'name'=>'Users');
    $smenu[] = array('route'=>'Modules',   'name'=>'Modules');
@endphp

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                @isset($func)
                    <div class="card-header">
                        <h3 class="card-title">{{ $func}}</h3>
                        <div class="card-tools">
                            @isset($dir)
                                <a href="{!! route('settings',['func'=>$func,'action'=>'delete']) !!}" class="btn btn-dark btn-sm">Supprimer</a>
                                @else
                                <a href="{!! route('settings',['func'=>$func,'action'=>'create']) !!}" class="btn btn-dark btn-sm">Ajouter</a>
                            @endisset
                        </div>
                    </div>
                @endisset
                <div class="card-body">
                    @switch($func)
                        @case('Ecommerce')
                            <a href="{!! route('init',['init'=>'categories']) !!} " class="btn btn-dark">Init Catégories</a> <hr>
                            @include('0.AdminLte.settings.ecommerce')
                        @break
                        @case('Users')
                            @include('0.AdminLte.settings.users')
                        @break
                        @case('Modules')
                            @include('0.AdminLte.settings.modules')
                        @break
                        @case('Logiciels')
                            <a href="{!! route('init',['init'=>'logiciels']) !!} " class="btn btn-dark">Init Software folder</a> <hr>
                        @break
                        @case('Interface')
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Création des fichiers de base</h3>
                                        <ul>
                                            <li>
                                                <a href="">Dossier de configuration</a>
                                            </li>
                                            <li>
                                                <a href=""></a>
                                            </li>
                                            <li>
                                                <a href=""></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12">
                                        <h3>Personnalisation de l'interface</h3>
                                        <hr>
                                    </div>
                                    {{-- <div class="col-md-12">
                                        @include('0.AdminLte.settings.logo')
                                    </div> --}}
                                    <div class="col-md-4">
                                        @include('0.AdminLte.settings.page')
                                    </div>
                                    <div class="col-md-4">
                                        @include('0.AdminLte.settings.color')
                                    </div>


                                </div>

                            @break
                        @default

                    @endswitch

                </div>
            </div>
        </div>
        <div class="col-md-3">
            @foreach ($smenu as $item)
                <a href="{!! route('settings',['func'=>$item['route']]) !!}" class="btn btn-block btn-dark"> {{ $item['name']}} </a>
            @endforeach
        </div>
    </div>
@endsection

@section('admin')

@endsection

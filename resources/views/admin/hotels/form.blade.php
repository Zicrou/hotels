@extends('admin.admin')

@section('title', $hotel->exists ? 'Éditer l\'hotel' : 'Ajouter un hotel')

@section('content')

    <h1>@yield('title')</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="vstack gap-2" action="{{ $hotel->exists ? route('admin.hotel.update', $hotel->id) : route('admin.hotel.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method($hotel->exists ? 'put' : 'post')
        <div class="row">
            @include('shared.input', [
                'name' => 'name',
                'label' => 'Titre',
                'value' => $hotel->name,
                'class' => 'col'
            ])

            <div class="col">
                @include('shared.input', [
                    'name' => 'city',
                    'label' => 'Ville',
                    'value' => $hotel->city,
                    'class' => 'col'
                ])
            </div>
        </div>
        <div class="row">
                @include('shared.input', [
                    'name' => 'phone',
                    'label' => 'Téléphone',
                    'value' => $hotel->phone,
                    'class' => 'col'
                ])
                @include('shared.input', [
                    'name' => 'address',
                    'label' => 'Adresse',
                    'value' => $hotel->address,
                    'class' => 'col'
                ])
            
        </div>

        
        <div class="row">

            @include('shared.input', [
                'name' => 'description',
                'label' => 'Description',
                'type' => 'textarea',
                'value' => $hotel->description,
            ])
        </div>


        @include('shared.input', [
            'name' => 'main_image',
            'label' => 'Image Principale',
            'type' => 'file',
            'class' => 'col',
        ])

        @if ($hotel->exists)
            <button type="submit" class="btn btn-success">Modifier</button>
        @else
            <button type="submit" class="btn btn-success">Enregistrer</button>
        @endif
    </form>
@endsection
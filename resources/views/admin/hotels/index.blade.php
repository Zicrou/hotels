@extends('admin.admin')

@section('title', 'Tous les hotels')

@section('content')

    {{-- @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
     --}}
    
     <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.hotel.create') }}" class="btn btn-primary">Ajouter un hotel</a>
     </div>

     <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Ville</th>
                <th>Adresse</th>
                <th>Téléphone</th>
                <th>Image Principale</th>
                <th class="text-end">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hotels as $hotel)
                <tr>
                    <td>{{ $hotel->name }}</td>
                    <td>{{ $hotel->city }}</td>
                    <td>{{ $hotel->address }}</td>
                    <td>{{ $hotel->phone }}</td>
                    <td>
                        @if($hotel->main_image)
                            <img src="{{ asset('storage/' . $hotel->main_image) }}" alt="{{ $hotel->name }}" width="100">
                        @else
                            N/A
                        @endif
                    </td>
                    <td class="text-end">
                        <a href="{{ route('admin.hotel.edit', $hotel->id) }}" class="btn btn-primary btn-sm">Éditer</a>
                        <form action="{{ route('admin.hotel.destroy', $hotel->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet hôtel ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
     </table>


     {{ $hotels->links() }}

@endsection
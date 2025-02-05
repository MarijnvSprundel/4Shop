@extends('layouts.admin')

@section('content')

    <div class="d-flex justify-content-between align-items-center my-4">
        <h4>Categorieen</h4>
        <div>
            <a href="{{ route('admin.categories.create') }}">Nieuw categorie toevoegen</a>
        </div>
    </div>

    <table class="table table-striped table-hover">
        <tr>
            <th>Naam</th>
            <th>Zichtbaar</th>
            <th colspan="4">&nbsp;</th>
        </tr>
        @foreach($categories as $category)
            <tr>
                <td><a href="/admin/products/{{$category->id}}">{{ $category->name }}</a></td>
                <td>
                    @if($category->active)
                        <span class="badge badge-success">Zichtbaar</span>
                    @else
                        <span class="badge badge-light">Onzichtbaar</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.categories.edit', $category->id) }}">Aanpassen</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

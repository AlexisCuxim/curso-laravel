@extends('layout/master')

@section('content')

    @include('fragment/subview') 
    
    @forelse ($posts as $a)
        <div class="box item">
            <p>*{{ $a }}</p>
        </div>
    @empty
        No hay nada
    @endforelse 

@endsection
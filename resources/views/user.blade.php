@extends('layouts.app')

@section('conteudo')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Users
    </h2>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach 
    </ul>


@endsection


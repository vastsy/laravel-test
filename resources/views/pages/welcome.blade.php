@extends('main')

@section('content')

    <h1>Hello World!</h1>
    <p>On my new laravel website!</p>
    <p>Especially this guy: {{ $firstName }} {{ $lastName }}</p>
    
    <!-- If condition -->
    @if ($lastName == 'Black')
        <p>Hey Black!</p>
    @else
        </p>Not Black...</p>
    @endif
    
   
    @if (count ($otherPeople) > 0)
        <ul>
        @foreach($otherPeople as $ppl)
            <li>{{ $ppl }}</li>
        @endforeach
        </ul>
    @endif
    
    
@stop

@section('additional_scripts')

    @include('js.welcome')

@stop
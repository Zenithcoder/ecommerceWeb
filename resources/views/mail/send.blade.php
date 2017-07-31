@extends('layout.master')

@section('content')
    You received a message from Deliziafds.com:

<p>
Name: {{ $name }}
</p>

<p>
{{ $email }}
</p>

<p>
{{ $user_message }}
</p>
           
@endsection
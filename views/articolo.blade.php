@extends('layouts.layout')

@section('title')
  @if($articolo)
  {{$articolo->titolo}}
  @endif
@endsection

@section('metadescription')
@if($articolo)
  {{$articolo->sottotitolo}}
  @endif
@endsection

@section('contenuto')
<div class="card">
@if($articolo)
<h5 class="card-title">{{$articolo->titolo}}</h5>
<h6 class="card-title">{{$articolo->sottotitolo}}</h6>
<p>Autore: <strong>{{$articolo->autore}}</strong></p>
<p class="card-text">{{$articolo->testo}}</p>
@else
<p>articolo con questo id non trovato</p>
@endif
</div>
@endsection
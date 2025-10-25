@extends('layouts.layout')

@section('title')
  Aggiungi articoli
@endsection

@section('metadescription')
 Aggiungi articoli al tuo blog
@endsection

@section('contenuto')
 <h1>Aggiungi articoli</h1>
 <a href="/logout" class=" btn btn-danger">Fai logout<a><br>
 @if(count ($errors->all())>0)
 <div class="alert alert-danger">
 <h5>Errore:</h5>
 <ul>
 @foreach($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 <a href="/homepage2">Visualizza tutti gli articoli già presenti e resta loggato</a>
 <form action="" method="POST" enctype="multipath/form-data">
 <div class="row">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 <div class="col-md-6">
 <label for="titolo">Titolo</label>
 <input id="titolo" name="titolo" type="text" class="form-control">
 <label for="sottotitolo">Sottotitolo</label>
 <input id="sottotitolo" name="sottotitolo" type="text" class="form-control">
 <label for="autore">Autore</label>
 <input id="autore" name="autore" type="text" class="form-control">
 <label for="foto">Upload foto</label>
 <input id="foto" name="foto" type="file" class="form-control">
 <label for="testo">Testo</label>
 <textarea id="testo" name="testo" type="text" class="form-control">Scrivi</textarea>
 <button type="submit" class="btn btn-success">Salva </button>
 </div>
 
 </div>

</form>
@endsection
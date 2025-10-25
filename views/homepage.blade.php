@extends('layouts.layout')

@section('title')
  Homepage blog
@endsection

@section('metadescription')
 Questo è il blog più bello del mondo!
@endsection

@section('contenuto')
 <h1>Blog di Maria Scetta</h1> 
 <a href="/articoli/add" class="btn-success btn">Aggiungi articolo</a>
 <table class="table">
   <thead>
   </thead>
   <tbody>
   @foreach($articoli as $articolo) 
    <div class="articolo">
    <tr><td><strong> <p><a href="/articolo/{{$articolo->id}}" class="butt">{{ $articolo->titolo }} </a></p></strong></td>
    <td><p>{{ $articolo->sottotitolo }}</p></td></tr>
    </div>
   @endforeach
   </tbody>
   <tfoot>
   </tfoot>
 </table>
 <div class="pagine"><div>{{ $articoli->links() }}</div></div>


@endsection
@extends('layouts.app')

@section('title-block')Сообщения @endsection 

@section('content')
 	<h1>Сообщения</h1>
 	@foreach($data as $el)
 		<div class="alert alert-info">
 			<h3>{{ $el->name}}</h3> 
 			<a href="{{ route('contact-data-one', $el->id)}}"><button class="btn btn-warning" title="Детальнее">Детальнее</button></a>		
 		</div>
 	
 	@endforeach
   
        
@endsection

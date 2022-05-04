@extends('layouts.app')

@section('title-block'){{ $data->name }} @endsection 

@section('content')
                	<h1>{{ $data->name }}</h1>

        	
        	 		<div class="alert alert-info">
 			<h3>{{ $data->name}}</h3> 
 			<a href="{{ route('contact-update', $data->id)}}"><button class="btn btn-primary" title="Детальнее">Редактирование</button></a>	 				<a href="{{ route('contact-delete', $data->id)}}"><button class="btn btn-danger" title="Детальнее">Удалить</button></a>	
 		</div>
@endsection


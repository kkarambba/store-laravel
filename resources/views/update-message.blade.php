@extends('layouts.app')

@section('title-block')Обновление записи @endsection 

@section('content')
 	               	<h1>Обновление записи </h1>
        	
     	
        	<p>Asside block</p>
        	<form action="{{ route('contact-update-submit', $data->id) }}" method="POST">
        	
        	{!! csrf_field() !!}
        		
        		<div class="form-group">
        			<label for="name">Введите имя</label>
        			<input type="text" name="name" placeholder="Введите имя" value="{{ $data->name }}" id="name" class="form-control"  />
        			
        		</div>
        		<button type="submit" class="btn btn-success">Обновить</button>
        		
        		
        	</form>
@endsection


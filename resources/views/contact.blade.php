@extends('layouts.app')

@section('title-block')Contacts @endsection 

@section('content')
 	               	<h1>Контакты</h1>
        	
     	
        	<p>Asside block</p>
        	<form action="{{ route('contact-form') }}" method="POST">
        	
        	{!! csrf_field() !!}
        		
        		<div class="form-group">
        			<label for="name">Введите имя</label>
        			<input type="text" name="name" placeholder="Введите имя" id="name" class="form-control" />
        			
        		</div>
        		<button type="submit" class="btn btn-success">Отправить</button>
        		
        	</form>
@endsection


@if($errors->any())

<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		
		@endforeach
	</ul>
</div>
@endif

@if(session()->has('success'))
<section>		
		<div class="container">
			<div class="row">
				<p class="alert alert-success">{{ session()->get('success')}}</p>
			</div>
			
		</div>   		
</section>
@endif
@if(session()->has('warning'))
<section>		
		<div class="container">
			<div class="row">
				<p class="alert alert-warning">{{ session()->get('warning')}}</p>
			</div>
			
		</div>   		
</section>
@endif 
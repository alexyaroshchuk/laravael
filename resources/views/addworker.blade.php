@extends('layouts.start')

@section('content')

    <hr>
     @if(count($errors) > 0)    
    <div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
    </div>
    @endif
    
    @if (session('message'))
			<div class="alert alert-success">
				{{ session('message') }}	
			</div>
    @endif
    
    <div class="container">
      <!-- Example row of columns -->
  	<div class="row">
			<div class="form">
				<form method="POST" action="{{route('storeWorker')}}">
				 <div class="form-group">
				    <label for="title">ФИО</label>
				    <input type="text" class="form-control" id="title" name="fullname" placeholder="Введите отчество">
				  </div>

				  <div class="form-group">
				    <label for="title">Дата рождения</label>
				    <input type="text" class="form-control" id="title" name="date_of_birth" placeholder="В формате 1990-01-30">
				  </div>

				  <div class="form-group">
				    <label for="alias">ИД должности</label>
				    <input type="text" class="form-control" id="alias" name="id_poistion" placeholder="Введите ИД должности">
				  </div>	 

				  <button type="submit" class="btn btn-default">Добавить</button>
				  
				   {{ csrf_field() }}
				    
				</form>   
	        </div>
      </div>
	     <hr>    
      <footer>
        <p>&copy; 2018 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->

@endsection
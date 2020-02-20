@extends('layouts.app')
@section('content')

	@if(Session::has('success'))
		<div class="alert alert-info">
			{{Session::get('success')}}
		</div>
	@endif

	<div style="width: 100%; height: 100%; text-align: center;">
		<h3>Restaurantes en {{$location}}</h3><br>
		<h5>Selecciona un restaurante de tu localidad:</h5>
		<form method="GET" action="{{ route('simulator')}}" role="form" style="width: 50%;align-content: center;margin: 0 auto;">
			<select name="business" class="form-control"  style="margin-right: 5px;">
			@foreach($business as $busines)
				<option value="{{$busines->idBusiness}}">{{$busines->name}}
		   		</option>
			@endforeach
			</select>
			<div class="row" style="margin-top: 10px;">
				<div class="col-xs-12 col-sm-12 col-md-12">
                  <button class="btn btn-block btn-info" type="submit">Siguiente</button>
					<a href="{{  route('simulator') }}" class="btn btn-info btn-block" >Atrás</a>
				</div>
			</div>
		</form>
	</div>

@endsection
</body>
@extends('layouts.master')
@section('browsertitle')previewstatement @stop
@section('content')

	<div class="wrapper">
	    <h1 id="register-label">Artisan's Statement</h1>
		<hr>

		<form id="register" action="/previewstatement/{!! $id !!}/" method="POST">
		    <div>
			<label>Preview Statement:</label>
			<br/>
			<div>
			<textarea cols="10" rows="15" name="statement">{!! $staty->statement !!}</textarea>
			</div>
			</div>

			<input type="submit" name="pbl" value="PUBLISH">
			<input type="hidden" value="{{ Session::token() }}" name="_token">
		</form>
	</div>
	
@stop

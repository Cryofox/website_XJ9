@extends('layout')



@section('content')
	<h1> Creating Users </h1>


	<form>
		<div class="form-group">
			<label for="street"> Street:</label>
			<input type="text" name="street" id="street" class="form-control" value="{{ old('street') }} ">
		</diV>

		<div class="form-group">
			<label for="city"> city:</label>
			<input type="text" name="city" id="city" class="form-control" value="{{ old('city') }}">
		</diV>

		<div class="form-group">
			<label for="province"> city:</label>
			<input type="text" name="province" id="province" class="form-control" value="{{ old('province') }} ">
		</diV>	

		<div class="form-group">
			<label for="zip"> Zip:</label>
			<input type="text" name="zip" id="zip" class="form-control" value="{{ old('zip') }}">
		</diV>
		<div class="form-group">
			<label for="Country"> Country:</label>
			<select id= "country", name="country" class="form-control"></select>

		</diV>


	</form>

@stop
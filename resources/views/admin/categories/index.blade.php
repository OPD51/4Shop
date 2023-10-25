@extends('layouts.admin')

@section('content')
	
	<div class="d-flex justify-content-between align-items-center my-4">
		<h4>Producten</h4>
		<div>
			<a href="{{ route('admin.categories.create') }}">Nieuw product toevoegen</a>
		</div>
	</div>

	<table class="table table-striped table-hover">
		<tr>
			<th>Titel</th>
			<th>Prijs</th>
			<th colspan="4">&nbsp;</th>
		</tr>
    @foreach($categories as $category)
			<tr>
				<td>{{ $category->title }}</td>
				<td>&euro;{{ $category->price }}</td>
				<td>
					@if($category->active)
						<span class="badge badge-success">Zichtbaar</span>
					@else
						<span class="badge badge-light">Onzichtbaar</span>
					@endif
				</td>
				<td>
					@if($category->leiding)
						<span class="badge badge-info">Leiding</span>
					@else
						<span class="badge badge-primary">Leden</span>
					@endif
				</td>
				<td>
					<a href="{{ route('admin.categories.edit', $category->id) }}">Aanpassen</a>
				</td>
			</tr>
		@endforeach
	</table>
@endsection

@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
	@component('admin.components.breadcrump')
		@slot('title') Список категорий @endslot
		@slot('parent') Главная @endslot
		@slot('active') Категории @endslot
	@endcomponent

	<hr />

	<a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i>Создать категорию</a>

	<table class="table table-stripped">
		<thead>
			<th>Наименование</th>
			<th>Публикация</th>
			<th class="text-right">Действие</th>
		</thead>
		<tbody>
		@forelse ($categories as $category)
			<tr>
				<td>{{$category->title}}</td>
				<td>{{$category->published}}</td>
				<td>
					<a href="{{roure('admin.category.edit', ['id' => $category->id])}}"><i class="fa fa-edit"></i></a>
				</td>
			</tr>
		@empty
			<tr>
				<td colspan="3" class="text-center"><h2>Данных нет</h2></td>
			</tr>
		@endforelse
		</tbody>
		<tfoot>
			<ul class="paginator pull-right">
				{{$categories->links()}}
			</ul>
		</tfoot>
	</table>
</div>

@endsection
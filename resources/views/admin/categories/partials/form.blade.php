<label for="">Статус</label>
<select class="form-control" name="published">
	@if(isset($category->id))
		<option value="0" @if($category->published == 0) selected="" @endif>не опубликовано</option>
		<option value="0" @if($category->published == 1) selected="" @endif>Опубликовано</option>
	@else
		<option value="0">не опубликовано</option>
		<option value="1">Опубликовано</option>
	@endif
</select>

<label for="">Наименование</label>
<input type="text" class="form-control" name="title" value="{{$category->title or ""}}" placeholder="Заголовок категории" required />
<input type="text" name="slug" class="form-control" placeholder="Автоматическая генерация" value="{{$category->slug or ""}}" readonly="" />

<label for="">Родительская категория</label>
<select class="form-control" name="parent_id">
	<option value="0">-- без родителя --</option>
	@include('admin.categories.partials.categories', ['categories' => $categories])
</select>
<hr />
<input class="btn btn-primary" type="submit" value="Сохранить">
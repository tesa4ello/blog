<label for="">Статус</label>
<select class="form-control" name="published">
	@if(isset($article->id))
		<option value="0" @if($article->published == 0) selected="" @endif>не опубликовано</option>
		<option value="0" @if($article->published == 1) selected="" @endif>Опубликовано</option>
	@else
		<option value="0">не опубликовано</option>
		<option value="1">Опубликовано</option>
	@endif
</select>

<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" value="{{$article->title or ""}}" placeholder="Заголовок категории" required />
<label for="">Уникальный идентификатор</label>
<input type="text" name="slug" class="form-control" placeholder="Автоматическая генерация" value="{{$article->slug or ""}}" readonly="" />

<label for="">Родительская категория</label>
<select class="form-control" name="categories[]" multiple="">
	<option value="0">-- без родителя --</option>
	@include('admin.articles.partials.categories', ['categories' => $categories])
</select>
<label for="">Краткое описание</label>
<textarea class="form-control" id="description_short" name="description_short">{{$article->description_short or ""}}</textarea>
<label for="">Текст новости</label>
<textarea class="form-control" id="description" name="description">{{$article->description or ""}}</textarea>
<label for="">Мета-заголовок</label>
<input type="text" class="form-control" name="meta_title" value="{{$article->meta_title or ""}}" placeholder="Мета-заголовок"/>
<label for="">Мета-описание</label>
<input type="text" class="form-control" name="meta_description" value="{{$article->meta_description or ""}}" placeholder="Мета-описание"/>
<label for="">Теги</label>
<input type="text" class="form-control" name="meta_keyword" value="{{$article->meta_keyword or ""}}" placeholder="Теги"/>
<hr />
<input class="btn btn-primary" type="submit" value="Сохранить">
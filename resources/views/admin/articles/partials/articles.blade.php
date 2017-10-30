@foreach ($articles as $article_list)

  <option value="{{$article_list->id or ""}}"

    @isset($article->id)

      @if ($article->parent_id == $article_list->id)
        selected=""
      @endif

      @if ($article->id == $article_list->id)
        hidden=""
      @endif

    @endisset

    >
    {!! $delimiter or "" !!}{{$article_list->title or ""}}
  </option>

  @if (count($article_list->children) > 0)

    @include('admin.articles.partials.articles', [
      'articles' => $article_list->children,
      'delimiter'  => ' - ' . $delimiter
    ])

  @endif
@endforeach
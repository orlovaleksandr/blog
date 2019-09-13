<label for="">Статус</label>
<select name="published" class="form-control">

    @if (isset($category->id))
        <option value="0" @if($category->published == 0) selected="" @endif>Не опубликованно</option>
        <option value="1" @if($category->published == 1) selected="" @endif>Опубликованно</option>
    @else
        <option value="0">Не опубликованно</option>
        <option value="1">Опубликованно</option>
    @endif

</select>

<label for="">Наименование</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок категории"
       value="{{$category->title ?? ""}}" required>

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Автоматическая генерация"
       value="{{$category->slug ?? ""}}" readonly="">

<label for="">Родительская категория</label>
<select name="parent_id" class="form-control">
    <option value="0">-- без родительской категории</option>
    @include('admin.categories.partials.categories', ['categories' => $categories])
</select>

<hr>

<input type="submit" class="btn btn-primary" value="Сохранить">
<a href="{{route('admin.category.index')}}" class="btn btn-primary">Отмена</a>

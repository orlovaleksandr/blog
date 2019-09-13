@foreach ($categories as $category)
    @if ($category->children->where('published', 1)->count())
        <li class="dropdown nav-item">
            <a href="{{url("/blog/category/$category->slug")}}" class="dropdown-toggle nav-link"
               data-toggle="dropdown" role="button" aria-expanded="false">
                {{$category->title}}<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                @include('layouts.top_menu', ['categories' => $category->children])
            </ul>
    @else
        <li class="nav-item">
            <a href="{{url("/blog/category/$category->slug")}}" class="nav-link">{{$category->title}}</a>
        </li>
    @endif
        </li>
@endforeach

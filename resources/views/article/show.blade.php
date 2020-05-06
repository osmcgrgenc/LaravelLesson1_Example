@extends('layout')
@section('content')
<div id="content">

        <div id="wrapper">
            <div class="title">
            <h2>{{$article->title}}</h2>
                </div>
            <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
            <p>{{$article->body}}</p>
        </div>

</div>

<div id="sidebar">
    <ul class="style1">
        @foreach ($articles as $item)
        @if ($item->id != $article->id)
        <li >
        <h3>{{$item->title}}</h3>
        <p><a href="/articles/{{$item->id}}">{{$item->body}}</a></p>
        </li>
        @endif

        @endforeach


    </ul>

</div>

@endsection

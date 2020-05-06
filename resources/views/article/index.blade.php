@extends('layout')

@section('content')
<div id="content">
    @foreach ($articles as $article)
        <div id="wrapper">
            <div class="title">
            <h2>{{$article->title}}</h2>
                </div>
            <p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>
            <p>{{$article->body}}</p>
        </div>
    @endforeach
</div>

<div id="sidebar">
    <ul class="style1">
        <li class="first">
            <h3>Amet sed volutpat mauris</h3>
            <p><a href="#">In posuere eleifend odio. Quisque semper augue mattis wisi. Pellentesque viverra vulputate enim. Aliquam erat volutpat.</a></p>
        </li>
        <li>
            <h3>Sagittis diam dolor sit amet</h3>
            <p><a href="#">In posuere eleifend odio. Quisque semper augue mattis wisi. Pellentesque viverra vulputate enim. Aliquam erat volutpat.</a></p>
        </li>
        <li>
            <h3>Maecenas ac quam risus</h3>
            <p><a href="#">In posuere eleifend odio. Quisque semper augue mattis wisi. Pellentesque viverra vulputate enim. Aliquam erat volutpat.</a></p>
        </li>
    </ul>

</div>

@endsection

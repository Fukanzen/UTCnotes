@extends('master')
@section('title', 'Post/{{$post->id}}')

@section('content')
    <div>
        <h1>{{$post->title}}</h1>
        <h4>{{$post->desc}}</h4>
        <h4> by {{$detail->author}} | {{$detail->date}}</h4>

        <div>
            <a href="https://twitter.com/home">https://png.pngtree.com/png-vector/20221018/ourmid/pngtree-twitter-social-media-round-icon-png-image_6315985.png</a>
            <a href="https://www.facebook.com/home">https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/2048px-Facebook_f_logo_%282019%29.svg.png</a>
            <a href="https://www.instagram.com">https://img.freepik.com/premium-vector/instagram-social-media-icon-gradient-social-media-logo_197792-4682.jpg</a>
        </div>

        <h4>{{$detail->body}}</h4>

    </div>

@endsection

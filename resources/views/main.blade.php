@extends('layouts.default')

@section("content")
    <div class="label">current series</div>
        <ul>
            @foreach ($data as $value)
                <li>
                    <a href="{{ route('details' , ['id' => $loop->index]) }}">
                        <div class="picture">
                            <img src="{{$value['thumb']}}" alt="">
                        </div>
                        <div class="name-series">{{$value['series']}}</div>
                    </a>
                </li> 
            @endforeach
        </ul>
    <div class="load-more"><a href="{{url('')}}">load more</a></div>
@endsection
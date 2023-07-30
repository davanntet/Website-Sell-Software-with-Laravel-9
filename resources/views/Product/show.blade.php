@extends('layout')
@section('content')
<br>
    <div style="display: flex;background-color: orange;width: 95%;height: 150px;padding: 15px;border-radius: 10px;margin-left: 2.5%">
        <img src="{{asset('img/'.$product->image)}}" alt="sometthing went wrong" width="auto">
        <div>
            <div class="text-red-600" style="font-size:30px;font-weight: bold;margin-left: 5%;width: 100%">{{$product->name}}&nbsp;&nbsp;&nbsp;<span style="color:brown">{{$product->price}}$</span></h1></div>
            <hr style="margin-left: 5%;">
            <div style="color: rgb(43, 0, 255);margin-left: 5%">{{$product->description}}</div>
        </div>

            

    </div>
@endsection
@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/formcreate.css')}}">

 <div class="flex justify-center items-center h-screen">
        <div class="w-96 p-6 shadow-lg bg-white rounded-md">
            <h1 class="text-3xl block text-center font-semibold"><i class="fa fa-list-alt" aria-hidden="true"></i> Create Category</h1>
            <hr class="mt-3">
            @if(Session::has('category_create'))
            <div class="alert alert-primary alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Primary!</strong> {!! session('category_create') !!}
            </div>
            @endif
            @if (count($errors) > 0)
            <!-- Form Error List -->
            <div class="alert alert-danger">
                <strong>Something is Wrong</strong>
                <br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            {!! Form::open(['url' => 'category']) !!}
 
            <div class="mt-3">
                <label for="name" class="block text-base mb-2">Category name</label>
                {!! Form::text('name', '',array('class'=>'border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600')) !!}
            </div>
            <div class="mt-3">
           <label for="password" class="block text-base mb-2">Description about category</label>
			{!! Form::textarea('description', '',array('class'=>'dh-area border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="please decription about category')) !!}		
            </div>
            <div class="mt-3">
                {!! Form::submit('Create',array('class'=> 'border-2 border-indigo-700 bg-indigo-700 text-white py-1 w-full rounded-md hover:bg-transparent hover:text-indigo-700 font-semibold')) !!}
                {!! Form::close() !!}                
            </div>
        </div>
</div>
@endsection
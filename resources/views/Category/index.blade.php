@extends('layout')
@section('content')
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
     <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
     <style>
        .table {
  border-spacing: 0 5px;
}

i {
  font-size: 1rem !important;
}

.table tr {
  border-radius: 20px;
}

tr td:nth-child(n+3),
tr th:nth-child(n+3) {
  border-radius: 0 .625rem .625rem 0;
}

tr td:nth-child(1),
tr th:nth-child(1) {
  border-radius: .625rem 0 0 .625rem;
}
     </style>
     <br>
<div class="flex justify-center flex-1 lg:mr-32" style="margin: auto">
        
              <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
                <form action="{{url('category')}}" method="get">
                    <div class="absolute inset-y-0 flex items-center pl-2">
                        <button type="submit"">
                            <svg
                                class="w-4 h-4"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"
                                ></path>
                            </svg>

                        </button>

                    </div>
                    <input
                    class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                    type="text"
                    name="search"
                    placeholder="Search for projects"
                    aria-label="Search"
                    />
                </form>
              </div>
            </div>
            <br>
<div class="flex items-left justify-center min-h-screen">
<div class="flex items-left justify-center min-h-screen">
    <div class="col-span-12">
        <div class="overflow-auto lg:overflow-visible ">
                    @if(Session::has('category_delete'))
                    <div class="alert alert-primary alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>Primary!</strong> {!! session('category_delete') !!}
                    </div>
                    @endif
            <table class="table text-gray-400 border-separate space-y-6 text-sm">
                <thead class="bg-blue-200 text-gray-800">
                <tr class="">
                    <th class="p-3 w-56 text-left">ID</th>
                    <th class="p-3 text-left w-56">Name</th>
                    <th class="p-3 text-left w-56">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                        <tr class="bg-blue-200">
                        <td class="p-3 text-red-600">
                            {{$category->id}}
                        </td>
                        <td class="p-3 text-blue-600 font-bold">
                            {{$category->name}}
                        </td>
                        <td class="p-3 ">

                            {!! Form::open(array('url'=>'/category/'. $category->id, 'method'=>'DELETE')) !!}
                            <a href="{{ url('/category/'.$category->id)}}" class="text-gray-500 hover:text-gray-100 mr-2">
                                <i class="material-icons-outlined text-base ">visibility</i>
                            </a>
                            <a href="{{ url('/category/'.$category->id.'/edit') }}" class="text-gray-500 hover:text-gray-100  mx-2">
                                <i class="material-icons-outlined text-base text-purple-600">edit</i>
                            </a>
                            {!! csrf_field() !!}
                            {!! method_field('DELETE') !!}
                                <button class="text-gray-500 hover:text-gray-100  ml-2"><i class="material-icons-round text-base text-red-600">delete_outline</i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                
                
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')

    <div class="container">

        @if (count($errors)>0)

            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        <form action="{{url('/productos')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{ csrf_field() }}

            @include('productos.form', ['Modo' => 'alta'])

        </form>
    </div>

@endsection

@extends('layouts.admin')



@section('title') Create News Blog @endsection









@section('content')



    <div class="row justify-content-center">

        <div class="col-lg-12 mt-12">



            <h1>Ավելացնել նորություն (BLOG) </h1>



            {!! Form::open(['method'=>'POST', 'action' => 'Admin\AdminNewsController@create','files'=>true]) !!}

            <div class= "form-group" >

                {!! Form::label('name', 'name *') !!}

                {!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('name'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>

                @endif

            </div>

            <div class= "form-group" >

                {!! Form::label('name_ru', 'name RU*') !!}

                {!! Form::text('name_ru', null, ['class' => $errors->has('name_ru') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('name_ru'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('name_ru') }}</div>

                @endif

            </div>

            <div class= "form-group" >

                {!! Form::label('name_en', 'name En*') !!}

                {!! Form::text('name_en', null, ['class' => $errors->has('name_en') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('name_en'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('name_en') }}</div>

                @endif

            </div>
            <div class= "form-group" >

                {!! Form::label('url', 'Url Hy*') !!}

                {!! Form::text('url', null, ['class' => $errors->has('name_en') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('url'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('url') }}</div>

                @endif

            </div>
            <div class= "form-group" >

                {!! Form::label('url_ru', 'Url Ru*') !!}

                {!! Form::text('url_ru', null, ['class' => $errors->has('name_en') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('url_ru'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('url_ru') }}</div>

                @endif

            </div>
            <div class= "form-group" >

                {!! Form::label('url_en', 'Url En*') !!}

                {!! Form::text('url_en', null, ['class' => $errors->has('url_en') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('url_en'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('url_en') }}</div>

                @endif

            </div>




            <div class= "form-group" >

                {!! Form::label('description', 'Description *') !!}

                {!! Form::textarea('description', null, ['rows'=>3, 'id'=>'editor', 'class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('description'))

                    <div class="invalid-feedback">{{ $errors->first('description') }}</div>

                @endif

            </div>

            <div class= "form-group" >

                {!! Form::label('description_ru', 'Description (RU) *') !!}

                {!! Form::textarea('description_ru', null, ['rows'=>3, 'id'=>'editor1', 'class' => $errors->has('description_ru') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('description_ru'))

                    <div class="invalid-feedback">{{ $errors->first('description_ru') }}</div>

                @endif

            </div>
            <div class= "form-group" >

                {!! Form::label('description_en', 'Description (En) *') !!}

                {!! Form::textarea('description_en', null, ['rows'=>3, 'id'=>'editor2', 'class' => $errors->has('description_en') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('description_en'))

                    <div class="invalid-feedback">{{ $errors->first('description_en') }}</div>

                @endif

            </div>





            <div class= "form-group" >

                {!! Form::label('image', 'Image *') !!}

                {!! Form::file('image', null, ['class' => $errors->has('image') ? 'form-control is-invalid' : 'form-control']) !!}

                @if ($errors->has('image'))

                    {{--{{ dd($errors->all()) }}--}}

                    <div class="invalid-feedback">{{ $errors->first('image') }}</div>

                @endif

            </div>

            <div class="form-group">


                {!! Form::submit('Create News', ['class'=>'btn brn-primary btn-block']) !!}

            </div>





            {!! Form::close() !!}



        </div>


    </div>



@endsection



@section('modal')

    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>

    <script>

        CKEDITOR.replace('editor');
        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor2');
    </script>
@endsection

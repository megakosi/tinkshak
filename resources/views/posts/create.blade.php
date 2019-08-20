@extends('layouts.forum')
@php
$max_post_title_length = config('constants.max_post_title_length');
$min_post_title_length = config('constants.min_post_title_length');
$min_post_body_length = config('constants.min_post_body_length');
@endphp

@section('content')
    <h4>Create New Post</h4>
    <div class="row">
    {!! Form::open(['action' => 'PostsController@store' , 'method' => 'POST' , 'class' => 'col s12'] ) !!}

        <div class="row">

            <div class="input-field col s12">

            {!! Form::label('title' , 'Title') !!}
            {!! Form::text('title' , '',
            [
            'class' => 'validate',
             'data-length' => $max_post_title_length,
             'maxlength' => $max_post_title_length,
             'minlength' => $min_post_title_length,
             'id' => 'post-title'
             ]) !!}
        </div>
        </div>

        <div class="row">

            <div class="input-field col s12">

                {!! Form::textarea('body' , '',
                [
                'class' => 'validate materialize-textarea',
                 'minlength' => $min_post_body_length,
                 'id' => 'post-body'
                 ]) !!}

            </div>
        </div>

        <div class = "row">

            <div class="input-field col s12">
                <select id="post-category">

                    @if(count(config('categories')))
                        @php
                            $categories = config('categories.all');
                        @endphp

                        @foreach($categories as $category => $subcategories)

                            <optgroup label="{{ucfirst($category)}}">
                                @foreach($subcategories as $subcategory => $value)
                                    <option value="{{$category}}">{{ucfirst($subcategory)}}</option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    @endif
                </select>
                <label>Category</label>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <div class="chips chips-autocomplete" id = 'tag-chips'>
                            <input class="custom-class validate" name="tags" id="tags" />

                    </div>
                </div>
            </div>

            <input type="hidden" data-tag-added = "0" id="tag-added" value="0" />
            <input type="hidden" value="" id = "category" name="category" />
            <input type="hidden" value="" id = "subcategory" name="subcategory" />
        </div>


    {!! Form::close() !!}
    </div>
@endsection
@section('javascript')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('post-body');
    </script>
    <script type='text/javascript' language='JavaScript' src="{{asset('/js/posts.create.js')}}"></script>
@endsection

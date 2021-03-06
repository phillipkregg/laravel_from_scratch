@extends('layout') 

@section('head')
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css"
    />

@endsection 

@section('content')

<div id="wrapper">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4 mb-5">New Article</h1>

        <form method="POST" action="/articles/store">
            @csrf


            <div class="field">
                <label for="title" class="label">Title</label>

                <div class="control">
                    <input value="{{ old('title') }}" type="text" name="title" class="input @error('title') is-danger @enderror" id="title" />
                    @error('title')
                        <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @enderror
                        
                </div>
            </div>

            <div class="field">
                <label for="excerpt" class="label @error('excerpt') is-danger @enderror">Excerpt</label>

                <div class="control">
                    <textarea
                        name="excerpt"
                        id="excerpt"
                        cols="30"
                        rows="10"
                        class="textarea"                        
                    >{{ old('exerpt') }}</textarea>
                    @error('excerpt')
                        <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="body" class="label @error('body') is-danger @enderror">Body</label>

                <div class="control">
                    <textarea
                        name="body"
                        id="body"
                        cols="30"
                        rows="10"
                        class="textarea"                        
                    >{{ old('body') }}</textarea>
                    @error('body')
                        <p class="help is-danger">{{ $errors->first('body') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="tags" class="label @error('body') is-danger @enderror">Tags</label>

                <div class="select is-multiple control">

                    <select name="tags[]" id="" multiple>
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                    
                    @error('tags')
                        <p class="help is-danger">{{ $errors->first('tags') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

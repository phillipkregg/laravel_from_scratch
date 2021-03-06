@extends('layout')

@section('content')

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
        <h1 class="heading has-text-weight-bold is-size-4 mb-5">Edit Article</h1>

        <form method="POST" action="/articles/{{ $article->id }}/update">
            @csrf
            @method('put')

            <div class="field">
                <label for="title" class="label">Title</label>

                <div class="control">
                    <input type="text" name="title" class="input @error('title') is-danger @enderror" id="title" value="{{ $article->title }}" />
                    @error('title')
                        <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="excerpt" class="label">Excerpt</label>

                <div class="control">
                    <textarea
                        name="excerpt"
                        id="excerpt"
                        cols="30"
                        rows="10"
                        class="textarea"
                    >{{ $article->excerpt }}
                    </textarea>
                    @error('excerpt')
                        <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label for="body" class="label">Body</label>

                <div class="control">
                    <textarea
                        name="body"
                        id="body"
                        cols="30"
                        rows="10"
                        class="textarea"
                    >{{ $article->body }}
                    </textarea>
                    @error('body')
                        <p class="help is-danger">{{ $errors->first('body') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection


@endsection
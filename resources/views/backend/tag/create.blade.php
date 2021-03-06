@extends('canvas::backend.layout')

@section('title')
    <title>{{ Settings::blogTitle() }} | New Tag</title>
@stop

@section('content')
    <section id="main">
        @include('canvas::backend.partials.sidebar-navigation')
        <section id="content">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('admin') }}">Home</a></li>
                            <li><a href="{{ url('admin/tag') }}">Tags</a></li>
                            <li class="active">New Tag</li>
                        </ol>
                        @include('canvas::shared.errors')
                        @include('canvas::shared.success')
                        <h2>Create a New Tag</h2>
                    </div>
                    <div class="card-body card-padding">
                        <form class="keyboard-save" role="form" method="POST" id="tagUpdate" action="{{ url('admin/tag') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            @include('canvas::backend.tag.partials.form')

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-icon-text"><i class="zmdi zmdi-floppy"></i> Save</button>
                                &nbsp;
                                <a href="{{ url('admin/tag') }}"><button type="button" class="btn btn-link">Cancel</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
@stop

@section('unique-js')
    {!! JsValidator::formRequest('Canvas\Http\Requests\TagCreateRequest', '#tagUpdate'); !!}

    @include('canvas::backend.shared.notifications.protip')
@stop
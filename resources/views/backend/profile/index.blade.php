@extends('canvas::backend.profile.layout')

@section('title')
    <title>{{ Settings::blogTitle() }} | Profile</title>
@stop

@section('profile-content')
    @parent

    <form class="keyboard-save" role="form" method="POST" id="profileUpdate" action="{{ route('admin.profile.update', Auth::user()->id) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">

        <div class="pmb-block">
            <div class="pmbb-header">
                <h2><i class="zmdi zmdi-equalizer m-r-10"></i> Edit Summary</h2>
            </div>
            <div class="pmbb-body p-l-30">
                @include('canvas::backend.profile.partials.form.summary')
            </div>
        </div>

        <div class="pmb-block">
            <div class="pmbb-header">
                <h2><i class="zmdi zmdi-account m-r-10"></i> Edit Basic Information</h2>
            </div>
            <div class="pmbb-body p-l-30">
                @include('canvas::backend.profile.partials.form.basic-information')
            </div>
        </div>

        <div class="pmb-block">
            <div class="pmbb-header">
                <h2><i class="zmdi zmdi-phone m-r-10"></i> Edit Contact Information</h2>
            </div>
            <div class="pmbb-body p-l-30">
                @include('canvas::backend.profile.partials.form.contact-information')
            </div>
        </div>

        <div class="pmb-block">
            <div class="pmbb-header">
                <h2><i class="zmdi zmdi-accounts m-r-10"></i> Edit Social Networks</h2>
            </div>
            <div class="pmbb-body p-l-30">
                @include('canvas::backend.profile.partials.form.social-networks')
            </div>
            <div class="form-group m-l-30">
                <button type="submit" class="btn btn-primary btn-icon-text"><i class="zmdi zmdi-floppy"></i> Save</button>
                <a href="{{ url('/admin/user') }}" class="btn btn-link btn-default">Cancel</a>
            </div>
        </div>
    </form>
@stop

@section('unique-js')
    {!! JsValidator::formRequest('Canvas\Http\Requests\ProfileUpdateRequest', '#profileUpdate') !!}
    @include('canvas::backend.shared.components.profile-datetime-picker', ['format' => 'YYYY-MM-DD'])

    @if(Session::get('_profile'))
        @include('canvas::backend.partials.notify', ['section' => '_profile'])
        {{ \Session::forget('_profile') }}
    @endif
@stop

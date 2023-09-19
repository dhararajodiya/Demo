@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ Form::open(['route' => 'store', 'method' => 'post']) }}
                            <div class="row">
                                <div class="col-md-4">

@foreach (Module::all() as $key=>$value)


                                    <div class="form-group">
                                        {{ Form::label('status', __("    $key "), ['class' => 'form-label']) }}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    {{ Form::label('status', __('On/Off'), ['class' => 'form-label']) }}
                                    <div class="form-check form-switch mt-2">

                                        <input type="checkbox" class="form-check-input"value="{{ $key }}" id="cust-darklayout" name="status[]" {{ \Module::isEnabled( $key ) ? 'checked' : '' }}/>

                                    </div>
                                    </div>
                                </div>
                                @endforeach
                                        <div class="form-group col-md-6 text-end">
                                            <input class="btn btn-primary" type="submit" value="{{__('Save Changes')}}">
                                        </div>
                                    </div>
                                </div>
                        {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

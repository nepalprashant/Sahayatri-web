@extends('layouts.app', ['activePage' => 'update-driver', 'titlePage' => __('Update Driver')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="col-12 text-left">
                <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Back</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('driver.update') }}" autocomplete="off" class="form-horizontal"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Update Driver') }}</h4>
                                <p class="card-category">{{ __('Update driver information') }}</p>
                            </div>
                            <div class="card-body ">
                                @if (session('status'))
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                                <span>{{ session('status') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                name="name" id="input-name" type="text" placeholder="{{ __('Name') }}"
                                                value="{{ old('name', $data->name) }}" required="true"
                                                aria-required="true" />
                                            @if ($errors->has('name'))
                                                <span id="name-error" class="error text-danger"
                                                    for="input-name">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <input name="user_id" id="id" type="hidden" value="{{ $data->id }}" required="true" />
                                <input name="driver_id" id="id" type="hidden" value="{{ $data->driver->id }}"
                                    required="true" />
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                name="email" id="input-email" type="email"
                                                placeholder="{{ __('Email') }}"
                                                value="{{ old('email', $data->email) }}" required />
                                            @if ($errors->has('email'))
                                                <span id="email-error" class="error text-danger"
                                                    for="input-email">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Phone') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('phone_no') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('phone_no') ? ' is-invalid' : '' }}"
                                                name="phone_no" id="phone_no" type="phone_no"
                                                placeholder="{{ __('+977') }}"
                                                value="{{ old('phone_no', $data->phone_no) }}" required />
                                            @if ($errors->has('phone_no'))
                                                <span id="email-error" class="error text-danger"
                                                    for="input-email">{{ $errors->first('phone_no') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('License No') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('license_no') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('license_no') ? ' is-invalid' : '' }}"
                                                name="license_no" id="license_no" type="license_no"
                                                placeholder="{{ __('XXXXXXXXXXXX') }}"
                                                value="{{ old('license_no', $data->driver->license_no) }}" required />
                                            @if ($errors->has('license_no'))
                                                <span id="email-error" class="error text-danger"
                                                    for="input-email">{{ $errors->first('license_no') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="{{ asset('storage/licenses/' . $data->driver->license) }}"
                                            alt="{{ $data->name }}'s License">
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('License') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('license') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('license') ? ' is-invalid' : '' }}"
                                                name="license" id="license" type="file"
                                                placeholder="{{ __('Choose File') }}" />
                                            @if ($errors->has('license'))
                                                <span id="email-error" class="error text-danger"
                                                    for="input-email">{{ $errors->first('license') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Continue') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

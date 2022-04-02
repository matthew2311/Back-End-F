@extends('layouts.app')

@section('content')
@if (Auth::user()->role == 'admin')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Create Book') }}</div>

                        <div class="card-body">
                            <a href="{{ route ('create') }} ">Click Here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 25px">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('View Books') }}</div>

                        <div class="card-body">
                            <a href="{{ route ('ViewAll') }} ">Click Here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 25px">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('View My Books') }}</div>

                        <div class="card-body">
                            <a href="{{ route ('ViewMyBook') }} ">Click Here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@else
        <div class="container" style="margin-top: 25px">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('View Books') }}</div>

                        <div class="card-body">
                            <a href="{{ route ('ViewAll') }} ">Click Here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 25px">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header">{{ __('Send Mail') }}</div>

                        <div class="card-body">
                            <a href="{{ route ('SendMail') }} ">Click Here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endif
@endsection

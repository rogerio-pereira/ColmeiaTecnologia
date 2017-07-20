@extends('sistema.layouts.layout')

@section('content')
    @if(Auth::guard('system')->user()->is_client)
        @include('sistema.layouts.index-client')
    @else
        @include('sistema.layouts.index-technician')
    @endif

    {{--<div class='col-md-3'>
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                {{ Auth::guard('system')->user()->name }}
            </div>
            <div class="panel-body text-center">
                <a href="#">
                    Alterar Senha
                </a></br>
                <a href="{{ route('logout') }}">
                    Logout

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </a>
            </div>
        </div>
    </div>--}}
@endsection

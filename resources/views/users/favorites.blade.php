@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            @include('users.card', ['user' => $user])
        </aside>
        <div class="col-sm-8">
            @include('users.navtabs', ['user' => $user])

            @if(count($favorites) > 0)
                <ul class="list-unstyled">
                    @foreach($favorites as $value)
                        <li class="media">
                            <div class="media-body">
                                <div>
                                    {{ $user->name }}
                                </div>
                                <div>
                                    <p class="md-0">{!! nl2br(e($user->favorite_users)) !!}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
            

        </div>
    </div>
@endsection
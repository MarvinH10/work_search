@extends("layouts.app")

@section("content")
    <div class="container">
        <span>
            {{ Auth::user()->nombres }}
            {{ Auth::user()->apellidos }}
        </span>
    </div>
@endsection


@section('modals')

@endsection

@section('scripts')

@endsection

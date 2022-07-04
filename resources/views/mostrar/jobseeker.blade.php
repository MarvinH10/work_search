@extends("layouts.app")

@section("content")
    <div class="container">
        <div>
            <span>
                {{ Auth::user()->nombres }}
                {{ Auth::user()->apellidos }}
            </span>

            <a href="curriculumvitae" class="btn btn-success" role="button" tabindex="-1">
                <span>Completar mi CV</span>
            </a>
        </div>
        <br><br>
        <div>
            <h2>Buscar Ofertas</h2>

            <div class="row">
                <div class="">
                    <div class="">
                        <div class="ui input">
                            <input name="que" placeholder="Cargo o área profesional" type="text" value="">
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="">
                        <div class="ui input">
                            <input name="donde" placeholder="Ciudad" type="text" value="">
                        </div>
                    </div>
                </div>
                <div class="">
                    <button class="btn btn-info" role="button" tabindex="-1">
                        <span>Buscar</span>
                    </button>
                </div>
            </div>
        </div>

        <div>
            <h2>Ofertas Recomendadas</h2>
        </div>
@endsection


@section('modals')

@endsection

@section('scripts')

@endsection

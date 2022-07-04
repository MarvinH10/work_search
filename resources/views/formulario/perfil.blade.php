@extends("layouts.app")

@section("content")
    <div class="container">
        <h4>Mi Cuenta</h4>
            <div>
                <h6>Datos de Ingreso</h6>
                <h6><label for="producto"><span class="badge rounded-pill text-bg-primary">Cambiar Contraseña</span></label></h6>
                @if (Session::has('message'))
                    <div class="text-danger">
                        {{Session::get('message')}}
                    </div>
                @endif
                <form method="post" action="{{url('/actualizar/perfil')}}">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">
                        <label for="mypassword">Contraseña Vieja</label>
                    </span>
                    <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="mypassword" placeholder="Escribe la contraseña que usas actualmente">
                    <div class="text-danger">&nbsp{{$errors->first('mypassword')}}</div>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">
                        <label for="password">Contraseña Nueva</label>
                    </span>
                    <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="password" placeholder="Escribe tu nueva contraseña">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">
                        <label for="mypassword">Confirma Tu Nueva Contraseña</label>
                    </span>
                    <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="password_confirmation" placeholder="Escribe nuevamente tu nueva contraseña">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
    </div>
@stop

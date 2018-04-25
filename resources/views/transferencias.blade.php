@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
    <div class="">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Transferencias</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('admin_create') }}">
                        {{ csrf_field() }}
                        <label for="email" class="col-md-8 control-label">Cuenta de retiro</label>
                        <select>
                              <option value="volvo">Selecciona una opcion</option>
                              <option value="saab">45454545</option>
                              <option value="opel">5555555</option>
                              <option value="audi">666666</option>
                        </select>
                        <div></div>
                        <label for="email" class="col-md-8 control-label">Cuenta de deposito</label>
                        <select>
                              <option value="volvo">Selecciona una opcion</option>
                              <option value="saab">45454545</option>
                              <option value="opel">5555555</option>
                              <option value="audi">666666</option>
                        </select>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Importe MXN</label>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-w-m btn-warning" style="width: 30%">
                                    Confirmar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
@endsection

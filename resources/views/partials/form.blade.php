<form action="{{ route('consult') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="placa">N° de Placa</label>
        <input type="text" class="form-control" name="license_plate" placeholder="Ej: PAA4276">
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="form-group">
                <label for="placa">Fecha (Día):</label>
                <input type="text" class="form-control" name="day" placeholder="Ej: Lunes">
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="form-group">
                <label for="placa">Hora:</label>
                <input type="time" class="form-control" name="time">
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="form-group">
                <div class="">
                    <label for="placa">Tipo de matrícula:</label><br>
                    <label>
                      <input type="radio" name="type" value="public"> Pública
                    </label>
                    <label>
                      <input type="radio" name="type" value="private"> Particular
                    </label>
              </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-6 col-md-offset-1">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Generar Consulta</button>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-4 col-md-offset-1">
            <div class="form-group">
                <button type="submit" class="btn btn-danger">Nueva Consulta</button>
            </div>
        </div>
    </div>
</form>
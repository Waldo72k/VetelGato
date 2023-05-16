@extends('admin.profile')

@section('content')

<div class="container">
    <form action="{{route('citas.update', $cita->id)}}" method="post">
        <fieldset>
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="mascota">Nombre de la mascota</label>
                <input type="text" name="mascota" id="mascota" value="{{$cita->mascota}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="date">Dia</label>
                <input type="date" class="form-control" name="date" id="date" value="{{$cita->date}}" required>
            </div>
            <div class="form-group">
                <label for="hora">Hora</label>
                <input type="time" class="form-control" name="hora" id="hora" value="{{$cita->hora}}">
            </div>
            <button type="submit" class="btn btn-primary">Crear cita</button>
        </fieldset>
    </form>
</div>

    
@endsection


    
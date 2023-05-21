@extends('admin.profile')

@section('content')

<div class="container">
    <form action="{{route('citas.store')}}" method="post">
        <fieldset>
            @csrf
            <div class="form-group">
                <label for="mascota">Nombre de la mascota</label>
                <input type="text" name="mascota" id="mascota" class="form-control">
            </div>
            <div class="form-group">
                <label for="date">Dia</label>
                <input type="date" name="date" id="date" required>
            </div>
            <div class="form-group">
                <label for="hora">Hora</label>
                <input type="time" name="hora" id="hora">
            </div>
            <div class="form-group">
            <label for="seleccion">Seleccione si su cita es con el veterinario o con el estilista</label>
            <select name="seleccion" id="seleccion" class="form-control">
                <option value="veterinario">Veterinario</option>
                <option value="estilista">Estilista</option>
              </select>
             </div> 
            <button type="submit" class="btn btn-primary">Crear cita</button>
        </fieldset>
    </form>
</div>

    
@endsection


    
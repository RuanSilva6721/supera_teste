@extends('layouts.app')

@section('content')
<div class="col-md-6 offset-md-3">
    <h1>Adicionar Manutenção ao Carro</h1>
    <form action="{{ route('carMaintenance.store', $id) }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="modelCar">Modelo</label>
        <input type="text" class="form-control" id="modelCar" name="modelCar" placeholder="Modelo do Carro" required>
    </div>
    <div class="form-group">
        <label for="date">Data da Manutenção</label>
        <input type="date" class="form-control" id="date" name="date"  required>
    </div>
    <div class="form-group">
        <label for="version">Versão</label>
        <input type="number" class="form-control" id="version" name="version" placeholder="Versão do Carro" required>
    </div>
    <div class="form-group">
        <label for="description">descrição</label>
        <textarea name="description" id="description" class="form-control" placeholder="Descrição do carro" rows="10"></textarea>
    </div>

    <input type="submit" class="btn btn-primary" value="Adicionar Carro">
    </form>
</div>
@endsection

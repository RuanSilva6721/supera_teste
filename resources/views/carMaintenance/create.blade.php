@extends('layouts.app')

@section('content')
<div class="col-md-6 offset-md-3">
    <h1>Adicionar Manutenção ao Carro</h1>
    <form action="{{ route('carMaintenance.store', $id) }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="maintenance">Manutenção</label>
        <input type="text" class="form-control" id="maintenance" name="maintenance" placeholder="Digite a sua Manutenção" required>
    </div>
    <div class="form-group">
        <label for="date">Data da Manutenção</label>
        <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <input type="submit" class="btn btn-primary" value="Adicionar Manutenção">
    </form>
</div>
@endsection

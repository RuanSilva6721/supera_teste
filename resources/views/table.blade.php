<hr />
<div style="overflow-x:auto;">
<table id="tab-principal" class="table-responsive table table-bordered table-striped" >
    <thead>
    <tr>
        <th class="text-center">Modelo</th>
        <th class="text-center">Marca</th>
        <th class="text-center">Versão</th>
        <th class="text-center">Itens do Carro</th>
        <th class="text-center">Adicionar Manutenção</th>
        <th class="text-center">Editar</th>
        <th class="text-center">Deletar</th>
    </tr>
    </thead>
    <tbody data-conteudo-tabela class='results'>

     @if( (isset($cars)) AND ($cars->count()) > 0)
        @foreach($cars as $car)

        @include('line')



        @endforeach
    @endif
    </tbody>
</table>

{{-- </div>

<div class=" table-responsive table table-bordered table-striped col-md-10 offset-md-1 dashboard-events-container">
@php
//dd($cars);
@endphp
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Participantes</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach($cars as $event)
                    <tr>
                        <th scope="row"> {{$loop->index + 1}}</th>
                        <td><a href="/cars/{{$event->id}}">{{$event->title}}</a></td>
                        <td>{{count($event->users)}}</td>
                        <td>
                            <a href="/cars/edit/{{$event->id}}" class="btn btn-info edit-btn"> <ion-icons name="create-ouyline"></ion-icons> Editar</a>
                            <form action="/cars/{{$car->id}}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger delete-btn"> <ion-icons name="trash-outline"></ion-icons> Deletar</button>


                            </form>
                        </td>
                    </tr>

                @endforeach --}}
            {{-- </tbody>
        </table> --}}

        {{-- <p>Você ainda não possui carros cadastros, <a href="{{ route('car.create') }}">adiconar carros</a></p>
     --}}

</div>

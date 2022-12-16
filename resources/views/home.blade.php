@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus eventos</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">

    {{-- @if(count($events) > 0)
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
                @foreach($events as $event)
                    <tr>
                        <th scope="row"> {{$loop->index + 1}}</th>
                        <td><a href="/events/{{$event->id}}">{{$event->title}}</a></td>
                        <td>{{count($event->users)}}</td>
                        <td>
                            <a href="/events/edit/{{$event->id}}" class="btn btn-info edit-btn"> <ion-icons name="create-ouyline"></ion-icons> Editar</a>
                            <form action="/events/{{$event->id}}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger delete-btn"> <ion-icons name="trash-outline"></ion-icons> Deletar</button>


                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    @else
        <p>Você ainda não possui eventos, <a href="/events/create">Criar Evento</a></p>
    @endif

</div>

<div class="col-md-10 offset-md-1 dashboard-title-container">
<h1>Eventos que estou participando</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($eventsAsParticipant) >0)
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
            @foreach($eventsAsParticipant as $event)
                <tr>
                    <th scope="row"> {{$loop->index + 1}}</th>
                    <td><a href="/events/{{$event->id}}">{{$event->title}}</a></td>
                    <td>{{count($event->users)}}</td>
                    <td>
                        <form action="/events/leave/{{$event->id}}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger delete-btn"> <ion-icons name="trash-outline"></ion-icons> Sair do Evento</button>


                        </form>
                    </td>
                </tr> --}}

            {{-- @endforeach --}}
        {{-- </tbody>
    </table>

    @else
    <p>Você ainda não está participando de nunhum evento, <a href="/">Veja todos os eventos</a></p>
    @endif


</div> --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
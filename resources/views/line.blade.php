<tr>
    <td class="text-center">{{$car->modelCar}}</td>
    <td class="text-center">{{ $car->brandCar }}</td>
    <td class="text-center">{{$car->version}}</td>
    {{-- <td class="text-center">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <ul>
            <li class="dropdown-item"><p>sosahusahiouahjkhasdoa</p></li>
            <li class="dropdown-item"><p>sosahusahiouahjkhasdoa</p></li>
            <li class="dropdown-item"><p>sosahusahiouahjkhasdoa</p></li>
            <li class="dropdown-item"><p>sosahusahiouahjkhasdoa</p></li>
            <li class="dropdown-item"><p>sosahusahiouahjkhasdoa</p></li>
            <li class="dropdown-item"><p>sosahusahiouahjkhasdoa</p></li>
            <li class="dropdown-item"><p>sosahusahiouahjkhasdoa</p></li>
            <li class="dropdown-item"><p>sosahusahiouahjkhasdoa</p></li>
            
            
        </ul>
        </div>
      </div>
    </td> --}}
    <td class="text-center"><a href="#" class="btn btn-info edit-btn"> <ion-icons name="create-ouyline"></ion-icons> Editar</a></td>
    {{-- {{ route('car.edit', $event->id) }} /car/delete{{$event->id}}--}}
    <td class="text-center"><form action="#" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger delete-btn"> <ion-icons name="trash-outline"></ion-icons> Deletar</button>


    </form></td>
    <td class="text-center">

    </td>

    </tr>



<tr>
    <td class="text-center">{{$car->modelCar}}</td>
    <td class="text-center">{{ $car->brandCar }}</td>
    <td class="text-center">{{$car->version}}</td>
    <td class="text-center"><a href="{{ route('car.edit', $car->id) }}" class="btn edit-btn" id="btnEdit"><i class="fa-solid fa-pen-to-square"></i></a></td>
    <td class="text-center"><form action="{{ route('car.destroy', $car->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn delete-btn bg-danger">  <i class="fa-solid fa-trash "></i></button>
    </form></td>
    </tr>

    <td class="text-center">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown button
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <p class="dropdown-item">{{$car->description}}</p>
                <p class="dropdown-item">{{$car->description}}</p>
                <p class="dropdown-item">{{$car->description}}</p>
                <p class="dropdown-item">{{$car->description}}</p>

            </div>
          </div>
        </td>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superheroes Table</title>
</head>
<body>
    <h1>Superheroes<h1>
        <hr>
        <a  href="{{ route('superheroes.create')}}">Create Superhero</a>
        <hr>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Real_Name</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($uperheroes as $item)
              <tr>
                <td>{{ $item-> id }}</td>
                <td>{{ $item-> name }}</td>
                <td>{{ $item-> real_name }}</td>
              </tr>
              <a hrf= "{{ route('superheroes.show',$item->id) }}" >Show </a>
              <a hrf= "{{ route('superheroes.edit',$item->id)}}" > Edit</a>

                        <from action="{{ route ('superheroes.destroy}}" method="posrt">
                            @csrf
                            @method('delete')
                        <input type="submit" value="Delete" onclick="return cofirm('Are you pretty sure? there in no way')>
            
                        </from>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
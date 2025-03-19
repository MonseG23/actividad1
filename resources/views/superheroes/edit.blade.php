<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit superhero</title>
</head>
<body>
    <h1>Edit Superhero</h1>

    <form action="{{ route('superheroes.update', $superhero->id) }}" method="post">
        @csrf
        @method('patch')
        


        <label for="">Gender</label>
        <select name="gender_id">

            @foreach ($genders as $gender)
                <option value= "{{ $gender->id }}">{{ $gender->name}}</option>

                @if ($gender-> == $superhero->gender_id)
                selected
                @endif

            @endForeach

        </select>

        <br><br>
        
        <label for="">Real Name</label>
        <input type="text" name="real_name" value="{{ $superhero->real_name}}">

        <br><br>
        
        <label for="">Real Name</label>
        <input type="text" name="real_name" value="{ {$superhero->name}}">

        <br><br>
        
        <label for="">Real Name</label>
        <input type="text" name="real_name" value="{{ $superhero->picture }}">

        <br><br>


        <input type="submit" value="Edit">
    </form>
    
</body>
</html>
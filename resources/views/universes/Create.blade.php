<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create universes </title>
</head>
<body>
    <h1> Create universes<h1>

    <from action= "{{ route ('universes.store') }}" method="post">
        @csrf
        
        <label for ="" >Name</label>
        <select type= "text"name="name">

            <input type ="submit" value="create Universes">


    </from>
</body>
</html>
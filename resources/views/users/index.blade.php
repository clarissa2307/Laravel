<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      
    </head>
    <body>
        <div class"container">
            <div class="row">
                <div class="col-sm-8 mx-auto">
                    <tabla class="tabla">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $user)
                            <tr>
                                <td>{{ $user->id }}</td> 
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>Eliinar</td>
                            </tr>
                            @endforeach()
                        </tbody>
                    </tabla>
                </div>

            </div>
        </div>
    </body>
</html>
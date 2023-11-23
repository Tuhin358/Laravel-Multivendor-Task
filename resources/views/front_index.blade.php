<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Regular User</title>
</head>
<body>

    <table class="table table-dark">
        <thead>
          <tr>

            <th scope="col">All Post</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $data)
          <tr>
            <td>{{ $data->post }}</td>
          </tr>
          @endforeach

        </tbody>
      </table>


</body>
</html>

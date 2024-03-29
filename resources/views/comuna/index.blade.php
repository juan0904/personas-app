<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
    <div class="container">
      <h1>Listado de Comunas</h1>
      <a href="{{route('comunas.create')}}" class="btn btn-success">Add</a>
      <table class="table">
        <thead>
            <tr>
              <th scope="col">Code</th>
              <th scope="col">Commune</th>
              <th scope="col">Municipality</th>
              <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($comunas as $comuna)
            <tr>
              <th scope="row">{{ $comuna->comu_codi }}</th>
              <td>{{ $comuna->comu_nomb }}</td>
              <td>{{ $comuna->muni_nomb }}</td>
              <td>
                <a href="{{route('comunas.edit', ['comuna'=> $comuna->comu_codi])}}" class="btn btn-info">Edit</a>
                  <form action="{{route('comunas.destroy' , ['comuna' => $comuna->comu_codi])}}"
                  method="POST" style="display: inline-block">
                  @method('delete')
                  @csrf
                  <input type="submit" value="Delete" class="btn btn-danger">
                  </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>
</html>

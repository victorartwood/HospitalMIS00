<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container-fluid p-5 shaddow">
        <div class="table-responsive">
            <table class="table table-striped
            table-hover
            table-borderless
            table-primary
            align-middle">
                <thead class="table-light">
                    <caption>Patient Datails</caption>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($patients as $patient)
                        <tr class="table-primary">
                            <td scope="row">{{$patient->name}}</td>
                            <td>{{$patient->address}}</td>
                            <td>{{$patient->status}}</td>
                        </tr>
                        @endforeach

                        </tbody>
                    <tfoot>

                    </tfoot>
            </table>
        </div>




    </div>  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>

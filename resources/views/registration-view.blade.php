<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" style="text-align:center";>View Users</h3>
        <div class="my-2 ml-auto" style="width: 200px ">
        <a href="{{route('add.new')}}">
            <button class="btn btn-primary col text-center" style="text-align:center"> Add New User</button>
        </a>
    </div>

    <form action="" class="col-9" style="margin-top:-61px">
        <div class="form-group">
            <input type="search" name="search" id="search" placeholder="Search By Name or Email" value="{{$search}}">
            <span><button class="btn btn-primary">Search</button></span>
            <a href="{{url('/registration-view')}}">
                <button class="btn btn-primary" type="button">Reset</button>
            </a>
        </div>
    </form>

    <div class="w-100">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Created Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row_value)
                <tr>
                    <td>{{$row_value['name']}}</td>
                    <td>{{$row_value['email']}}</td>
                    <td>{{$row_value['dob']}}</td>
                    <td>
                        @if ($row_value['gender'] == 'F')Female
                        @elseif($row_value['gender'] == 'M')Male
                        @else Other
                        @endif
                    </td>
                    <td>{{$row_value['address']}}</td>
                    <td>{{$row_value['country']}}</td>
                    <td>{{$row_value['state']}}</td>
                    <td>{{$row_value['city']}}</td>
                    <td>{{$row_value['created_at']}}</td>
                    <td>
                        @if ($row_value['status'] == 1)Active
                        @else Inactive
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-secondary" href="{{route('edit.user',['id'=>$row_value->id])}}" data-toggle="tooltip" data-placement="top" title="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16"><path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/></svg>
                        </a>
                        <a class="btn btn-info" href="{{route('delete.user',['id'=>$row_value->id])}}" data-toggle="tooltip" data-placement="top" title="Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg>
                        </a>
                        {{-- <a href="">
                            <button class="btn btn-danger">Delete</button>
                        </a> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- <div class="row">
        {{$data->links()}}
    </div> --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
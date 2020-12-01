<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/user.css">
    <style>
        .btn{
            display: block;
            margin: auto;
        }

    </style>
</head>
<body>
    <div>
        <button class="btn" style="width:400px;">
			<a href="{{route('add')}}">Add Information</a>
		</button>
    </div>



    <table id="example" class="display" style="width:100%;text-align: center">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Gender</th>
            <th>Blood</th>
            <th>Image</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($addresses as $address)
            <tr>
                <td>{{$address->id}}</td>
                <td>{{$address->name}}</td>
                <td>{{$address->email}}</td>
                <td>{{$address->number}}</td>
                <td>{{$address->gender}}</td>
                <td>{{$address->blood}}</td>
                <td><img src="{{$address->image}}" width="120px" alt="No available images"></td>
                <td>{{$address->created_at->diffForHumans()}}</td>
                <td>{{$address->updated_at->diffForHumans()}}</td>
                <td>
                    <a href="{{route('address.edit',$address->id)}}">
                        <button class="btn btn-success">Update</button>
                    </a>
                </td>
                <td>
                    <form action="{{route('address.delete',$address->id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Gender</th>
            <th>Blood</th>
            <th>Image</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </tfoot>
    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>

    <div>
        <button class="btn btn-success"><a href="{{route('logout.route')}}">Logout</a></button>
    </div>
</body>
</html>

@extends('layouts.main')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-margin btn-success" href="{{ route('users.create') }}"> Create New User</a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
       <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
       <a class="btn btn-margin btn-success" href="{{ route('users.edit',$user->id) }}">Edit</a>
            <form action="{{ route('users.destroy', $user->id) }}" type="submit" method='post' >
                  @csrf
                  @method('delete')
                <button  type="submit" class="btn btn-margin btn-danger ">Delete</button>
              </form>

    </td>
  </tr>
 @endforeach
</table>


{!! $data->render() !!}

@endsection

@extends('layouts.app')

@section('title', '| Users')

@section('content')
<div class="container">

    
<div class="col-lg-12  ">
    
    @hasrole('SuperAdmin')
    <h1><i class="fa fa-users"></i> User Administration <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>
    <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a></h1>
    @endrole
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date/Time Added</th>
                    <th>User Roles</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->firstName.' '.$user->middleName.' '.$user->lastName }}</td>
                    <td>{{ $user->email }}</td>
                      <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                        <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                         <td>
                            {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                @hasrole('SuperAdmin|Admin')
                                <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                @endrole
                                @hasrole('SuperAdmin')
                                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                @endrole
                            </div>
                            {!! Form::close() !!}
                        </td>
                  </tr>
                 @endforeach
             </tbody>
           </table>
          {!! $users->links()  !!}
     
      </div> 

    <a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>

</div>

</div>
 
<br><br><br><br><br><br> 
@endsection

@extends('layouts.app')

@section('content')
@include('admin.sidebar')
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header">Users</div>
                            <div class="card-body">
                                <a href="http://127.0.0.1:8000/admin/users/create" class="btn btn-success btn-sm" title="Add New User">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                </a>

                                <form method="GET" action="http://127.0.0.1:8000/admin/users" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="Search...">
                                    <span class="input-group-append">
                                        <button class="btn btn-secondary" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                </form>

                                <br/>
                                <br/>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th><th>Name</th><th>Email</th><th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                            <tr>
                                                <td>1</td>
                                                <td><a href="http://127.0.0.1:8000/admin/users/1">danil</a></td><td>danil.rafiqi@gmail.com</td>
                                                <td>
                                                    <a href="http://127.0.0.1:8000/admin/users/1" title="View User"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                    <a href="http://127.0.0.1:8000/admin/users/1/edit" title="Edit User"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                    <form method="POST" action="http://127.0.0.1:8000/admin/users/1" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="d6GrOZ7E8KW1ck3eZvbaCcBUrdFAD6weRvbh1ncb">
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete User" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                                                        </tbody>
                                    </table>
                                    <div class="pagination">  </div>
                                </div>

                            </div>
                        </div>
                    </div>
@endsection                    
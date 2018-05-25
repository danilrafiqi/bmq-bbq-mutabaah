@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts.includes.sidebar')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Permissions</div>
                <div class="card-body"><a href="http://127.0.0.1:8000/admin/permissions/create" title="Add New Permission" class="btn btn-success btn-sm"><i aria-hidden="true" class="fa fa-plus"></i> Add New
                            </a>
                    <form method="GET" action="http://127.0.0.1:8000/admin/permissions" accept-charset="UTF-8" role="search" class="form-inline my-2 my-lg-0 float-right">
                        <div class="input-group">
                            <input type="text" name="search" placeholder="Search..." class="form-control"> <span class="input-group-append"><button type="submit" class="btn btn-secondary"><i class="fa fa-search"></i></button></span></div>
                    </form>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Label</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                        <div class="pagination"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
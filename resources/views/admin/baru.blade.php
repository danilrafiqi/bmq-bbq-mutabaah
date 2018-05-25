
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="d6GrOZ7E8KW1ck3eZvbaCcBUrdFAD6weRvbh1ncb">

    <title>Laravel</title>

    <!-- Styles -->
    <link href="http://127.0.0.1:8000/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="http://127.0.0.1:8000">
                    Laravel
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li><a href="http://127.0.0.1:8000/admin">Dashboard <span class="sr-only">(current)</span></a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                                                    <li><a class="nav-link" href="http://127.0.0.1:8000/login">Login</a></li>
                            <li><a class="nav-link" href="http://127.0.0.1:8000/register">Register</a></li>
                                            </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            
                <div class="container">
        <div class="row">
            <div class="col-md-3">
                        <div class="card">
                <div class="card-header">
                    User Manager
                </div>

                <div class="card-body">
                    <ul class="nav flex-column" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                <a class="nav-link" href="http://127.0.0.1:8000/admin/users">
                                    Users
                                </a>
                            </li>
                                                    <li class="nav-item" role="presentation">
                                <a class="nav-link" href="http://127.0.0.1:8000/admin/roles">
                                    Roles
                                </a>
                            </li>
                                                    <li class="nav-item" role="presentation">
                                <a class="nav-link" href="http://127.0.0.1:8000/admin/permissions">
                                    Permissions
                                </a>
                            </li>
                                            </ul>
                </div>
            </div>
            <br/>
                                <div class="card">
                <div class="card-header">
                    Tools
                </div>

                <div class="card-body">
                    <ul class="nav flex-column" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                <a class="nav-link" href="http://127.0.0.1:8000/admin/generator">
                                    Generator
                                </a>
                            </li>
                                            </ul>
                </div>
            </div>
            <br/>
                        </div>

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
        </div>
    </div>
        </main>

        <hr/>

        <div class="container">
            &copy; 2018. Created by <a href="http://www.appzcoder.com">AppzCoder</a>
            <br/>
        </div>

    </div>

    <!-- Scripts -->
    <script src="http://127.0.0.1:8000/js/app.js"></script>

    <script type="text/javascript">
        $(function () {
            // Navigation active
            $('ul.navbar-nav a[href="http://127.0.0.1:8000/admin/users"]').closest('li').addClass('active');
        });
    </script>

    </body>
</html>

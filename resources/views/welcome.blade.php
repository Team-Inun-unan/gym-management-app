@extends('layouts.user-layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>All Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Projects</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects" id="proj">
                    <thead>
                        <tr>
                            <th> #</th>
                            <th> Project Name</th>
                            <th>Team Members</th>
                            <th>Gender</th>
                            <th>Project Progress</th>
                            <th class="text-center">Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> #</td>
                            <td>
                                <a> AdminLTE v3 </a>
                                <br />
                                <small>Created 01.01.2019 </small>
                            </td>
                            <td>
                                <img alt="Avatar" class="table-avatar" src="imgs/avatar.png">
                            </td>
                            <td>
                                <p>Fmail</p>
                            </td>
                            <td class="">
                                <small>47% Complete</small>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a class="btn btn-warning btn-sm text-white" href="#">
                                    <i class="fas fa-pencil-alt"></i></a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash"> </i> </a>
                            </td>
                        </tr>
                        <tr>
                            <td>#</td>
                            <td>
                                <a> AdminLTE v3</a>
                                <br />
                                <small> Created 01.01.2019</small>
                            </td>
                            <td>
                                <img alt="Avatar" class="table-avatar" src="imgs/avatar.png">
                            </td>
                            <td><p>Mail</p></td>
                            <td class="">
                                <small>47% Complete</small>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a class="btn btn-warning btn-sm text-white" href="#">
                                    <i class="fas fa-pencil-alt"></i></a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash"> </i> </a>
                            </td>
                        </tr>
                        <tr>
                            <td> #</td>
                            <td>
                                <a> AdminLTE v3 </a>
                                <br />
                                <small>Created 01.01.2019 </small>
                            </td>
                            <td>
                                <img alt="Avatar" class="table-avatar" src="imgs/avatar.png">
                            </td>
                            <td>
                                <p>Fmail</p>
                            </td>
                            <td class="">
                                <small>47% Complete</small>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a class="btn btn-warning btn-sm text-white" href="#">
                                    <i class="fas fa-pencil-alt"></i></a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash"> </i> </a>
                            </td>
                        </tr>
                        <tr>
                            <td> #</td>
                            <td>
                                <a> ffffAdminL </a>
                                <br />
                                <small>Created 01.01.2019 </small>
                            </td>
                            <td>
                                <img alt="Avatar" class="table-avatar" src="imgs/avatar.png">
                            </td>
                            <td>
                                <p>Fmail</p>
                            </td>
                            <td class="">
                                <small>47% Complete</small>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a class="btn btn-warning btn-sm text-white" href="#">
                                    <i class="fas fa-pencil-alt"></i></a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash"> </i> </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </section>
</div>
<!-- /.content-wrapper -->
@endsection

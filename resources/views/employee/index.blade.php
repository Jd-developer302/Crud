@extends('masterlayout.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="h-50 py-2">
                <div class="d-flex justify-content-between">
                    <div class="mx-4 mb-5 mt-2">
                        <h3 class="text-dark text-uppercase fw-bold">View Employee</h3>
                    </div>
                    <div class="mx-4 mb-5 mt-1">
                        <a href="{{ route('employees.create') }}" class="btn btn-primary">+new employee</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Employees</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">First Name</th>
                                  <th scope="col">Last Name</th>
                                  <th scope="col">Employee Email</th>
                                  <th scope="col">Employee Phone</th>
                                  <th scope="col">Actions</th>
                                </tr>
                              </thead>
                            <tbody>
                                @foreach ($employees as $key => $employee)
                                    <tr>
                                        <th scope="row">{{ $key+1 }}</th>
                                        <td>{{ $employee->first_name }}</td>
                                        <td>{{ $employee->last_name }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->phone }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('employees.edit', $employee->id ) }}">
                                                    <i class='bx bx-edit-alt'></i>
                                                </a>
                                                <a href="{{ route('employees.destroy', $employee->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $employee->id }}').submit();">
                                                    <i class='bx bx-trash-alt'></i>
                                                </a>
                                                
                                                <form id="delete-form-{{ $employee->id }}" action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Employee Email</th>
                                    <th scope="col">Employee Phone</th>
                                    <th scope="col">Actions</th>
                                  </tr>
                            </tfoot>
                        </table>
                        {{ $employees->links() }}
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->     
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection
@extends('masterlayout.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="h-50 py-2">
                <div class="d-flex justify-content-between">
                    <div class="mx-4 mb-5 mt-2">
                        <h3 class="text-dark text-uppercase fw-bold">View Company</h3>
                    </div>
                    <div class="mx-4 mb-5 mt-1">
                        <a href="{{ route('companies.create') }}" class="btn btn-primary">+new company</a>
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
                    <h3 class="box-title">Companies</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Company Logo</th>
                                  <th scope="col">Campany Name</th>
                                  <th scope="col">Company Email</th>
                                  <th scope="col">Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($companies as $key => $company)
                                    <tr>
                                        <th scope="row">{{ $key+1 }}</th>
                                        <td>
                                            @if($company->image)
                                                <img src="{{ asset('storage/'. $company->logo) }}" alt="{{ $company->name }}" style="max-width: 50px;">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        
                                        <td>{{ $company->name }}</td>
                                        <td>{{ $company->email }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('companies.edit', $company->id ) }}">
                                                    <i class='bx bx-edit-alt'></i>
                                                </a>
                                                <a href="{{ route('companies.destroy', $company->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $company->id }}').submit();">
                                                    <i class='bx bx-trash-alt'></i>
                                                </a>
                                                
                                                <form id="delete-form-{{ $company->id }}" action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display: none;">
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
                                    <th scope="col">Company Logo</th>
                                    <th scope="col">Campany Name</th>
                                    <th scope="col">Company Email</th>
                                    <th scope="col">Actions</th>
                                  </tr>
                            </tfoot>
                        </table>
                        {{ $companies->links() }}
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
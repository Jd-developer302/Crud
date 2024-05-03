@extends('masterlayout.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="h-50 py-2">
                <div class="d-flex justify-content-between">
                    <div class="mx-4 mb-5 mt-2">
                        <h3 class="text-dark text-uppercase fw-bold">Edit Company</h3>
                    </div>
                    <div class="mx-4 mb-5 mt-1">
                        <a href="{{ route('companies.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12 col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Edit Company</h4>
                </div>
                <!-- /.box-header -->
                <form class="row g-3" action="{{ route('companies.update', $company->id ) }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
                    <div class="row mx-1">
                        <div class="col-md-6 mt-4">
                            <x-form.text-input type="text"  label="Company Name" inputName="name" inputId="company-name" :value="$company->name" :error="$errors->get('name')" placeholder="Enter Name" />
                        </div>
                        <div class="col-md-6 mt-4">
                            <x-form.text-input type="text"  label="Company Email" inputName="email" inputId="company-email" :value="$company->email" :error="$errors->get('email')"  placeholder="Enter email address" />
                        </div>
    
                        <div class="col-md-12 mt-3">
                            <label for="description" class="form-label">Company Description</label>
                            <textarea class="form-control" name="description" id="description" rows="4" > {{ $company->description }} </textarea>
                        </div>
    
                        <div class="col-md-6 mt-3">
                            <label for="formFile" class="form-label">Company Logo</label>
                            <input @class(['form-control', 'is-invalid' => count($errors->get('logo')) > 0 ]) name="logo" type="file" id="formFile">
                            @if (count($errors->get('logo')) > 0)
                                <div class="invalid-feedback">
                                    {{ json_encode($errors->get('logo')) }}
                                </div>
                            @endif
                        </div>
                        <div class="col-12 mt-3 mb-3">
                            <button type="submit" class="btn btn-primary">
                                <i class='bx bx-save'></i> Update
                            </button>
                        </div>
                    </div>
                </form>
                
                
            </div>
            
        </div>

    </div>
    

</section>

@endsection




{{-- <x-admin-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <h3>Add New Employee</h3>
            <a class="btn btn-primary" href="{{ route('employees.index') }}">View All</a>
        </div>
    </x-slot>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Employee Form</h3>
            </div>
            <div class="card-body">
                <form class="row g-3" action="{{ route('employees.store') }}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="e-company" class="form-label">Select Employee Company</label>
                        <select class="form-select" aria-label="Default select example" name="company_id" id="e-company">
                            <option selected>Choose One</option>
                            @foreach ($companies as $key=>$value)
                                <option value="{{$key}}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <x-form.text-input type="text" label="Employee First Name" inputName="first_name"
                            inputId="Employee-name" value="" :error="$errors->get('name')" placeholder="Enter Name" />
                    </div>
                    <div class="col-md-6">
                        <x-form.text-input type="text" label="Employee Last Name" inputName="last_name"
                            inputId="Employee-name" value="" :error="$errors->get('name')" placeholder="Enter Name" />
                    </div>
                    <div class="col-md-6">
                        <x-form.text-input type="text" label="Employee Email" inputName="email"
                            inputId="Employee-email" value="" :error="$errors->get('email')"
                            placeholder="Enter email address" />
                    </div>

                    <div class="col-md-6">
                        <x-form.text-input type="tel" label="Employee Phone" inputName="phone"
                            inputId="Employee-email" value="" :error="$errors->get('email')"
                            placeholder="Enter email address" />
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary float-end" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout> --}}
@extends('masterlayout.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="h-50 py-2">
                <div class="d-flex justify-content-between">
                    <div class="mx-4 mb-5 mt-2">
                        <h3 class="text-dark text-uppercase fw-bold">Create Employee</h3>
                    </div>
                    <div class="mx-4 mb-5 mt-1">
                        <a href="{{ route('employees.index') }}" class="btn btn-primary">Back</a>
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
                    <h4 class="box-title">Create Employee</h4>
                </div>
                <!-- /.box-header -->
                <form class="row g-3" action="{{ route('employees.store') }}" method="POST">
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <label for="e-company" class="form-label">Select Employee Company</label>
                                <select class="form-select" aria-label="Default select example" name="company_id" id="e-company">
                                    <option selected>Choose One</option>
                                    @foreach ($companies as $key=>$value)
                                        <option value="{{$key}}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
        
                            <div class="col-md-6 mt-3">
                                <x-form.text-input type="text" label="Employee First Name" inputName="first_name"
                                    inputId="Employee-name" value="" :error="$errors->get('name')" placeholder="Enter Name" />
                            </div>
                            <div class="col-md-6 mt-3">
                                <x-form.text-input type="text" label="Employee Last Name" inputName="last_name"
                                    inputId="Employee-name" value="" :error="$errors->get('name')" placeholder="Enter Name" />
                            </div>
                            <div class="col-md-6 mt-3">
                                <x-form.text-input type="text" label="Employee Email" inputName="email"
                                    inputId="Employee-email" value="" :error="$errors->get('email')"
                                    placeholder="Enter email address" />
                            </div>
        
                            <div class="col-md-6 mt-3">
                                <x-form.text-input type="tel" label="Employee Phone" inputName="phone"
                                    inputId="Employee-email" value="" :error="$errors->get('email')"
                                    placeholder="Enter email address" />
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class='bx bx-save'></i> Save
                                </button>
                            </div>
                        </div>
                       
                    </div>                    
                </form>
                
                
            </div>
            
        </div>

    </div>
    

</section>

@endsection
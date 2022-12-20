@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Change password</h4>

                            @if (count($errors))
                                @foreach ($errors->all() as $error)
                                    <p class="alert alert-danger alert-dismissible fade show">{{ $error }}</p>
                                @endforeach
                            @endif

                            <form class="mt-4" action="{{ route('update.password') }}" method="POST">
                                @csrf
                                
                                <div class="row mb-3">
                                    <label for="old_password" class="col-sm-2 col-form-label">Old password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="password" id="old_password" name="old_password">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="new_password" class="col-sm-2 col-form-label">New password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="password" id="new_password" name="new_password">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="confirm_password" class="col-sm-2 col-form-label">Confirm password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="password" id="confirm_password"
                                            name="confirm_password">
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light"
                                    value="Change Password" />
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection

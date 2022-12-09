@extends('admin.master');

@section('content')
   <section class="py-5">
        <div class="container">
            <div class="card">
                <div class="card-header bg-primary text-white">Create New Role </div>
                <div class="card-body">
                        <form action="{{ route('role.store') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-3">Role Name </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-3">Permissions</div>
                                <div class="col-md-9">----</div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-3">All Permissions</div>
                                <div class="col-md-9">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkPermissionAll" value="1"/>
                                        <label class="custom-control-label" for="checkPermissionAll">All Select </label>
                                        <hr>
                                    </div>
                                </div>
                            </div>

                            @foreach ($permissions as $permission)
                            <div class="row mb-2">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkPermission{{ $permission->id }}" value="{{ $permission->name }}" name="permissions[]">
                                        <label class="custom-control-label" for="checkPermission{{ $permission->id }}">{{ $permission->name }}</label>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                            <div class="row">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-primary my-3 w-100">
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
   </section>
    <script>
        $("#checkPermissionAll").click(function(){
        if($(this).is(':checked)){
        $('input[type=checkbox]').prop('checked', true);
        } else {
            $('input[type=checkbox]').prop('checked', false)
        }
    </script>
@endsection



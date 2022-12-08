@extends('admin.master');

@section('content')
   <section class="py-5">
        <div class="container">
            <div class="card">
                <div class="card-header bg-primary text-white">All Role List  </div>
                <div class="card-body">
                   <table class="table table-bordered shadow">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th> Sl </th>
                                    <th> Name </th>
                                    <th> Action </th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach($roles as $role)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <a href="" class="btn btn-primary btn-sm"> Edit </a>
                                        <a href="" class="btn btn-danger btn-sm"> Delete </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                   </table>
                </div>
            </div>
        </div>
   </section>
@endsection

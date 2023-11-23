@extends('layouts.app')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between">
        <div>
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Post /</span> list</h4>
        </div>
    </div>
    <!-- Basic Bootstrap Table -->
    <div class="card">

        <div class="card-header">
            <a href="{{ route('admin') }}" class="text-white bg-success btn btn-sm"><i
                class="bx bx-plus"></i>Add Post
            </a>
        </div>

        <div class="table-responsive text-nowrap p-4">
            <table class="table" id="DataTable">
                <thead class="table-dark">
                    <tr>
                        <th class="text-white">SL</th>
                        <th class="text-white">Post</th>
                        <th class="text-white">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">


                    @foreach ($posts as $key=> $data)
                    <tr>
                        <td>{{ $key+1 }} </td>

                        <td>{{ $data->post }}</td>
                        <td>
                              <a href="{{route('admin.edit',$data->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>

                            <a href="{{route('admin.destroy',$data->id) }}" type="button" class="btn-danger btn onconfirmDelete"onclick="return confirm('Are you sure?')" ><i class="fa fa-trash"></i></a>

                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->



</div>

@endsection




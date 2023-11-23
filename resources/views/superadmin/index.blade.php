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
                        <th class="text-white">Status</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">

                    @foreach ($posts as $key=> $data)
                    <tr>
                        <td>{{ $key+1 }} </td>
                        <td>{{ $data->post }}</td>
                        <td>
                            @if($data->status==1)
                            <a href="{{route('change.status',$data->id) }}" class="btn btn-sm btn-success">Active</a>
                            @else
                            <a href="{{route('change.status',$data->id) }}" class="btn btn-sm btn-danger">Inactive</a>

                            @endif
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



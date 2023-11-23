@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard from create') }}</div>
                <div class="card-header">
                    <a href="{{ route('admin.index') }}" class="text-white bg-success btn btn-sm"><i
                        class="bx bx-plus"></i>All Post
                    </a>
                </div>

                <div class="card-body">
                    <form action="{{route('admin.update',$post->id)}} " method="post">
                        {{--  {{ route('admin.update') }}  --}}
                        @csrf
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="name"> Post<span class="text-danger">*</span></label>

                            <div class="row mb-3">

                                <div class="col-sm-10">
                                    <textarea class="form-control" maxlength="115" id="basic-default-quote" rows="3" name="post" >{{ $post->post }}</textarea>

                                </div>
                            </div>



                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>


                {{--  <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}  --}}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

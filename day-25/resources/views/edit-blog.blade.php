@extends('master')

@section('title')
    Edit Blog Page
@endsection

@section('body')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-warning font-weight-bolder  text-center">
                            Edit Blog Form
                        </div>
                        <div class="card-body shadow-lg">
                            <h4 class="text-success text-center">{{ Session::get('message') }}</h4>
                            <form action="{{ route('update-blog',['id' => $blog->id]) }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Blog Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{ $blog->title }}" name="title" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Author Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{ $blog->author }}" name="author" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Blog Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" id="" cols="" rows="" class="form-control">{{ $blog->description }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-block btn-outline-success" name="" value="Update Blog" />
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

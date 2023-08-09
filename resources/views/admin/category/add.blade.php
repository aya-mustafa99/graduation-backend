@extends('admin.layout.master')
@section('title')
    add Category page
@endsection
@section('title_page')
    add post page
@endsection


@section('content')

    <section class="content">

        <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
       @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">New category</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Category Title</label>
                            <input type="text" id="inputName" class="form-control" name="title">
                        </div>
                      
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Create New Category" class="btn btn-success float-right">
            </div>
        </div>
        </form>
    </section>
@endsection


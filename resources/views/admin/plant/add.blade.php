@extends('admin.layout.master')
@section('title')
   add post page
@endsection
@section('title_page')
    add post page
@endsection

@section('content')
    <section class="content">
        <form method="Post" action="{{route('plant.store')}}" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName"> Name</label>
                            <input type="text" id="title"  name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription"> body</label>
                            <textarea id="inputDescription"   name="body"class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">category</label>
                            <select id="inputStatus" class="form-control custom-select" name="category_id">
                                <option selected disabled>Select one</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="post_image">
                            <label class="custom-file-label" for="customFile">Choose image</label>
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
                <input type="submit" value="Create new Post" class="btn btn-success float-right">
            </div>
        </div>
        </form>
    </section>

@endsection


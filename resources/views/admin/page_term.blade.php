@extends('admin.layout.app')

@section('heading', 'Term Page Content')

@section('main_content')

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_term_page_update') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="form-group mb-3">
                                <label>Heading *</label>
                                <input type="text" class="form-control" name="heading"
                                    value="{{ $page_term_data->heading }}">
                            </div>
                            <div class="form-group mb-3">
                                <label>Content *</label>
                                <textarea name="content" class="form-control editor" cols="30" rows="10">
                                    {{ $page_term_data->content }}
                                </textarea>
                            </div>
                            <h4>SEO Section</h4>
                            <div class="form-group mb-3">
                                <label>Title </label>
                                <input type="text" class="form-control" name="title"
                                    value="{{ $page_term_data->title }}">
                            </div>
                            <div class="form-group mb-3">
                                <label>Meta Description </label>
                                <textarea name="meta_description" class="form-control h_100" cols="30" rows="10">
                                    {{ $page_term_data->meta_description }}
                                </textarea>
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

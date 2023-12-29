@extends('admin.layout.app')

@section('heading', 'Posts')

@section('main_content')

@section('button')
    <div class="ml-auto">
        <a href="{{ route('admin_post_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Novo</a>
    </div>
@endsection

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Photo</th>
                                    <th>Title</th>

                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset('uploads/' . $item->photo) }}" alt=""
                                                class="w_150">
                                        </td>
                                        <td>{{ $item->title }}</td>

                                        <td class="pt_10 pb_10">
                                            <a href="{{ route('admin_post_edit', $item->id) }}"
                                                class="btn btn-primary btn-sm">Editar</a>
                                            <a href="{{ route('admin_post_delete', $item->id) }}"
                                                class="btn btn-danger btn-sm"
                                                onClick="return confirm('Tem certeza?');">Remover</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection

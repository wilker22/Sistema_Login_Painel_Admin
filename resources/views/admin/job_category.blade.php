@extends('admin.layout.app')

@section('heading', 'Vagas - Categorias')

@section('main_content')

@section('button')
    <div class="ml-auto">
        <a href="{{ route('admin_job_category_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Novo</a>
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
                                        <th>Título</th>
                                        <th>Ícone</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($job_categories as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->icon }}</td>
                                            <td class="pt_10 pb_10">
                                                <a href="" class="btn btn-primary btn-sm"
                                                    onClick="return confirm('Are you sure?');">Editar</a>
                                                <a href="" class="btn btn-danger btn-sm"
                                                    onClick="return confirm('Are you sure?');">Remover</a>
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

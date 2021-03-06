@extends('layouts.app')

@section('title')
    Manage Project | Portfolio9
@endsection

@section('main-content')
    <h1 class="mt-4">Project</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a> </li>
        <li class="breadcrumb-item active"><a href="{{route('service.manage')}}">Project</a> </li>
        <li class="breadcrumb-item active">Manage project info </li>
    </ol>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Manage project info</h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Project Name</th>
                            <th>Project Image</th>
                            <th>Project Description</th>
                            <th>Project Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($projects as $key=>$project)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$project->project_name}}</td>
                                <td>
                                    <img src="{{asset($project->project_image)}}" alt="{{$project->project_name}}" height="100" width="100">
                                </td>
                                <td>{{Str::limit($project->project_description, 30)}}</td>
                                <td>
                                    @if($project->status==1)
                                        <span class="badge badge-success">
                                            <strong>Published</strong>
                                        </span>
                                    @else
                                        <span class="badge badge-danger">
                                        <strong>Unpublished</strong>
                                    </span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('project.edit',['id'=>$project->id])}}" class="btn btn-sm btn-info mb-1"><i class="fa fa-edit"></i> </a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="deleteProject({{$project->id}});"><i class="fa fa-trash"></i> </a>
                                    <form id="delete-project-{{$project->id}}" action="{{route('project.delete',['id'=>$project->id])}}" method="post" style="display: none;">
                                        @csrf

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <nav>
                        <ul class="pagination justify-content-center">
                            {{$projects->links()}}
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>

        <script type="text/javascript">
            function deleteProject(id) {
                Swal.fire({
                    title:'Are you sure?',
                    text: "This will be deleted permanently!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#27ae60',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Delete'
                }).then((result)=>{
                    if(result.value){
                        event.preventDefault();
                        document.getElementById('delete-project-'+id).submit();
                    }
                })
            }

        </script>

@endsection


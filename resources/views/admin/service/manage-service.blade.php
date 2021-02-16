@extends('layouts.app')

@section('title')
    Manage Service | Portfolio9
@endsection



@section('main-content')
    <h1 class="mt-4">Service</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a> </li>
        <li class="breadcrumb-item active"><a href="{{route('service.manage')}}">Service</a> </li>
        <li class="breadcrumb-item active">Manage service info </li>
    </ol>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Manage service info</h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Service Name</th>
                            <th>Service Image</th>
                            <th>Service Description</th>
                            <th>Service Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $key=>$service)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$service->service_name}}</td>
                                <td>
                                    <img src="{{asset($service->service_image)}}" alt="{{$service->service_name}}" height="100" width="100">
                                </td>
                                <td>{{Str::limit($service->service_description, 30)}}</td>
                                <td>
                                    @if($service->status==1)
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
                                    <a href="{{route('service.edit',['id'=>$service->id])}}" class="btn btn-sm btn-info mb-1"><i class="fa fa-edit"></i> </a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="deleteService({{$service->id}});"><i class="fa fa-trash"></i> </a>
                                    <form id="delete-service-{{$service->id}}" action="{{route('service.delete',['id'=>$service->id])}}" method="post" style="display: none;">
                                        @csrf

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <nav>
                        <ul class="pagination justify-content-center">
                            {{$services->links()}}
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function deleteService(id) {
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
                    document.getElementById('delete-service-'+id).submit();
                }
            })
        }

    </script>

@endsection

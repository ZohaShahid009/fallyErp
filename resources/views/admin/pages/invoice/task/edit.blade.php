@extends('admin.layout.adminLayout')
@section('content')
    <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        <div class="container mb-5">
            <div class="card card-custom example example-compact">
                <div class="container mt-4">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{--  <form class="form" action="{{ url('updateclient', $clients->id) }}" method="POST"  --}}
                        <form method="POST" action="{{ url('updatetask', $task->id) }}" class="form" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="separator separator-solid my-10"></div>
                                <div class="my-5">
                                    <h3 class=" text-dark font-weight-bold mb-10"> Task Update:</h3>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Task Name:</label>
                                        <input name="task_name" id="task_name" type="text" class="form-control"
                                        value="{{ $task->task_name}}"/>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Assign To:</label>
                                        <input name="assign_to" id="assign_to" type="text" class="form-control"
                                        value="{{ $task->assign_to}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                           <div class="col-lg-6">
                                                    <label>Status</label>
                                                    @if($task->status == "1")
                                                    <input type="checkbox" checked name="status" value="1">
                                                    @else
                                                    {{--  <input type="hidden" name="status" value="0">  --}}
                                                    <input type="checkbox" name="status" onChange="$(this).val(this.checked? '1': '0');">
                                                    @endif
                                                </div>
                                            </div>
                                <div class="form-group row">
                                    <label>Description</label>
                                    <div class="col-lg-12">
      <textarea class="form-control"  name="description"id="textAreaExample1" rows="8">{{ $task->description}}</textarea>
                                    </div>
                                    </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">
                                            <input type="submit" value="Update" class="btn btn-success mt-2">
                                            <button type="reset" class="btn btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- rff end --}}
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

@endsection

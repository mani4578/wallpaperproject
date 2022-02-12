@extends('index')

@section('css')
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <link href="{{asset('js/plugins/datatables/dataTables.bootstrap4.css')}} "rel="stylesheet">
  <link href="{{asset('js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css')}} "rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
@endsection

@section('content')
        <div class="container">
             <!-- Dynamic Table Full -->
             <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Categories</h3>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-success"  data-toggle="modal" data-target="#add-modal">
                            <i class="fa fa-fw fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 20%;">ID</th>
                                <th class="d-none d-sm-table-cell" style="width: 30%;">Name</th>
                                <th class="d-none d-sm-table-cell" style="width: 40%;">Description</th>
                                <th class="d-none d-sm-table-cell" style="width: 10%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center font-size-sm">1</td>
                                <td class="font-w600 font-size-sm">
                                    <a href="be_pages_generic_blank.html">Megan Fuller</a>
                                </td>
                                <td class="d-none d-sm-table-cell font-size-sm">
                                    client1<em class="text-muted">@example.com</em>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-success"  data-toggle="modal" data-target="#edit-modal">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#delete-modal" >
                                            <i class="fa fa-fw fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Dynamic Table Full -->

                 <!-- Edit Modal -->
    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="one-inbox-new-message" aria-hidden="true">
        <div class="modal-dialog modal-dialog-top" role="document">
            <div class="modal-content">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-success">
                            <h3 class="block-title">
                                <i class="fa fa-pencil-alt mr-1"></i> Edit Category
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group">
                                <label>Category Name</label>
                                <select class="custom-select" id="example-select-custom" name="api_name">
                                    <option value="business">BUSSINESS</option>
                                    <option value="sports">SPORTS</option>
                                    <option value="entertainment">ENTERTAINMENT</option>
                                    <option value="health">HEALTH</option>
                                    <option value="science">SCI</option>
                                    <option value="general">GENERAL</option>
                                    <option value="technology">TECHNOLOGY</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="" id="" cols="30" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="block-content block-content-full text-right border-top">
                            <button type="button" class="btn btn-sm btn-ouline-success mr-2" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-sm btn-success">
                                <i class="fa fa-pencil-alt mr-1"></i> Edit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END Edit Modal -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="one-inbox-new-message" aria-hidden="true">
        <div class="modal-dialog modal-dialog-top" role="document">
            <div class="modal-content">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-danger">
                            <h3 class="block-title">
                                <i class="fa fa-trash mr-1"></i> Delete Category
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>Do you want to delete this category</p>
                        </div>
                        <input class="form-control" type="hidden" id="message-id" name="id" value="">

                        <div class="block-content block-content-full text-right border-top">
                            <button type="button" class="btn btn-sm btn-ouline-danger mr-2" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fa fa-trash mr-1"></i> Delete
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END Delte Modal -->
        </div>

     <!-- add Modal -->
     <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="one-inbox-new-message" aria-hidden="true">
        <div class="modal-dialog modal-dialog-top" role="document">
            <div class="modal-content">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-success">
                            <h3 class="block-title">
                                <i class="fa fa-plus mr-1"></i> Add Category
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group">
                                <label for="message-email">Name</label>
                                <input class="form-control" type="text" id="message-email" value="" name="name" placeholder="Category Name">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="" id="" cols="30" rows="4"></textarea>

                            </div>
                        </div>
                        <div class="block-content block-content-full text-right border-top">
                            <button type="button" class="btn btn-sm btn-outline-success mr-2" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-sm btn-success">
                                <i class="fa fa-plus mr-1"></i> Add
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END add Modal -->
@endsection
@section('js')
    <script src="{{asset('js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/plugins/datatables/buttons/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('js/plugins/datatables/buttons/buttons.print.min.js')}}"></script>
    <script src="{{asset('js/plugins/datatables/buttons/buttons.html5.min.js')}}"></script>
    <script src="{{asset('js/plugins/datatables/buttons/buttons.flash.min.js')}}"></script>
    <script src="{{asset('js/plugins/datatables/buttons/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('js/pages/be_tables_datatables.min.js')}}"></script>
@endsection

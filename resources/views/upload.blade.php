@extends('index')

@section('css')
    <link rel="stylesheet" href="{{asset('js/plugins/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/simplemde/simplemde.min.css')}}">
@endsection

@section('content')

    <!--Create Upload Post Start-->
    <div class="container">
        <form method="post" action="{{ route('upload_wall') }}" id="upload_form" enctype="multipart/form-data">
            @csrf
            <div class="content block">
                <div class="block">
                    <div class="block-content">
                        <h1>Upload New Wallpaper</h1>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Title" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="category">Select Category</label>
                            <select class="form-control" id="category" name="category_id" required>
                              @php
                                  $cat = DB::table('categories')->get();
                              @endphp
                               <option value="0" selected hidden>Please select</option>
                               @foreach ($cat as $single_cat)
                                   <option value="{{ $single_cat->id }}">{{ $single_cat->cat_name }}</option>
                               @endforeach
                                {{-- <option value="A(id)">A(name)</option> --}}

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="summernote"><b>Description</b></label>
                        <textarea id="summernote" class="smrnote" name="description" style="height: 150px;" required></textarea>
                    </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" data-toggle="custom-file-input" id="main_image" name="img"  onchange="validateImage()" required>
                                <label class="custom-file-label" for="main_image">Choose file</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-11">
                            </div>
                            <div class="col-sm-1">
                                <input type="submit" class="btn btn-success" value="Publish">
                                {{-- <input type="submit" name="submit" class="btn btn-outline-success" value="Save as Draft"> --}}
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
     <!--Create Upload Post End-->
@endsection



@section('js')
    {{-- <script src="{{asset('js/plugins/summernote/summernote-bs4.min.js')}}"></script> --}}
    {{-- <script src="{{asset('js/plugins/ckeditor/ckeditor.js')}}"></script> --}}
    <script src="{{asset('js/plugins/simplemde/simplemde.min.js')}}"></script>
    {{-- <script>jQuery(function(){ One.helpers(['summernote', 'ckeditor', 'simplemde']); });</script> --}}
    <script src="{{asset('js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });


            // For Choose File
            $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
</script>
<script>
     function validateImage() {
        var formData = new FormData();
        var file = document.getElementById("main_image").files[0];
        // console.log(file);
        formData.append("Filedata", file);
        var t = file.type.split('/').pop().toLowerCase();
        if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
            alert('Please select a valid image file');
            document.getElementById("main_image").value = '';
            return false;
        }
        return true;
     }
</script>

    @endsection

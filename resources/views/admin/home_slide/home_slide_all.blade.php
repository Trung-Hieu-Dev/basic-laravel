@extends('admin.admin_master')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Home Slide Page</h4>

                            <form action="{{ route('update.slider') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $homeSlide->id }}">

                                <div class="row mb-3">
                                    <label for="title" class="col-sm-2 col-form-label">Tile</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="title" name="title"
                                            value="{{ $homeSlide->title }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="short_title" class="col-sm-2 col-form-label">Short Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="short_title" name="short_title"
                                            value="{{ $homeSlide->short_title }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="video_url" class="col-sm-2 col-form-label">Video</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="video_url" name="video_url"
                                            value="{{ $homeSlide->video_url }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="home_slide" class="col-sm-2 col-form-label">Slider Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" id="home_slide" name="home_slide"
                                            value="{{ $homeSlide->home_slide }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img class="rounded-circle avatar-xl"
                                            src="{{ !empty($homeSlide->home_slide) ? url('upload/home_slide/' . $homeSlide->home_slide) : url('upload/no_image.jpg') }}"
                                            alt="Card image cap" id="showImage">
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light"
                                    value="Update Slide" />
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection

@extends('admin.layout.app')

@section('heading','Home Page Content')

@section('main_content')
<div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="" method="post" encytype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Heading *</label>
                                                    <input type="text" class="form-control" name="heading" value="">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Text *</label>
                                                    <textarea name="" class="form-control h_100" cols="30" rows="10"></textarea>                                               
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Existing Background *</label>
                                                    <div>
                                                        <img alt="image" src="{{ asset('uploads/banner5.jpg') }}" alt="" class="w_300">
                                                    </div>
                                               </div>
                                               <div class="mb-4">
                                                    <label class="form-label">Change Background *</label>
                                                    <div>
                                                        <input type="file" class="form-control mt_10" name="photo">
                                                    </div>

                                               </div>
                                                <div class="mb-4">
                                                    <label class="form-label"></label>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
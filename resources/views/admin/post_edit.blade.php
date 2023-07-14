@extends('admin.layout.app')

@section('heading','Edit Post')

@section('button')
<div>

<a href="{{route('admin_post')}}" class="btn btn-primary"><i class="fas fa-plus"></i> View All</a>
</div>
@endsection 

@section('main_content')
    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{route('admin_post_update',$post_single->id)}}" method="post">
                                            @csrf
                                            <div class="form-group mb-3">
                                            <label> Existing Photo</label>
                                            <img src="{{asset('uploads/*.post',$post_single->name)}}" alt="" class="w_150">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Icon Preview</label>
                                                <div>
                                                    <i class="{{$post_single->icon}}"></i>
                                                </div>                                       
                                         </div>
                                         <div class="form-group mb-3">
                                            <label>Change Photo</label>
                                            <input type="file" name="photo">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Title</label>
                                            <input type="text" class="form-control " name="title" value="{{$post_single->title}}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Slug</label>
                                            <input type="text" class="form-control " name="slug" value="{{$post_single->slug}}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Short Description</label>
                                            <input type="text" class="form-control " name="short_description" value="{{$post_single->short_description}}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Description</label>
                                            <input type="text" class="form-control " name="description" value="{{$post_single->description}}">
                                        </div>

                                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>  

                                           
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
@endsection






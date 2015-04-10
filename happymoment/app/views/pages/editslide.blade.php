@extends('layout.default')
@section('content')
<script src="https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>
 <div class="example-box-wrapper">
 	@if(Session::has('sucess'))
 		<div class="alert alert-success col-md-12" >
   <a href="#" class="close" data-dismiss="alert">
      &times;
   </a>
  {{Session::get('sucess')}}
</div>
 	@endif
 	 {{ Form::open(array('url' => 'admin/edit-slide','class'=>'form-horizontal bordered-row','files'=>true)) }}
         
                <div class="form-group">
                    <label class="col-sm-3 control-label">Slider Title</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control popover-button-default" placeholder="Title" data-content="Write your Slider Title here!" title="Edit Slider Title" data-trigger="focus" data-placement="top" name="title" value="{{$slide->title}}">
                        <input type="hidden" value="{{Auth::user()->id}}" name="userid">
                        <input type="hidden" value="{{$slide->id}}" name="sliderid">
                        
                    </div>
                   
                </div>
                 <div class="form-group">
                    <label class="col-sm-3 control-label">Slider Image</label>
                    <div class="col-sm-6">
                      
                      {{ HTML::image('/uploads_slide_pic/'.$slide->slider_image, 'a picture', array('height' => '70','weight' => '70')) }}
                  
                        <input type="file" class="form-control" name="image">
                    </div>
                    
                </div>
                 <input type="submit" class="btn btn-default" value="Save">
            </form>
    </div>
 @stop


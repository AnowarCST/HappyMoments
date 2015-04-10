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
 	 {{ Form::open(array('url' => 'admin/edit-category','class'=>'form-horizontal bordered-row')) }}
         
                <div class="form-group">
                    <label class="col-sm-3 control-label">Category Title</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control popover-button-default" placeholder="Title" data-content="Write your category title here!" title="Edit Categorys" data-trigger="focus" data-placement="top" name="title" value="{{$category->title}}">
                        <input type="hidden" value="{{Auth::user()->id}}" name="userid">
                        <input type="hidden" value="{{$category->id}}" name="categoryid">
                        
                    </div>
                    <input type="submit" class="btn btn-default" value="Save">
                </div>
            </form>
    </div>
 @stop


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
 	 {{ Form::open(array('url' => 'admin/edit-product','class'=>'form-horizontal bordered-row','files'=>true)) }}
         
         <div class="form-group">
                    <label class="col-sm-3 control-label">Select Category</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="category_id">
                        	{{print_r($product)}}
                            {{$categorys = Category::all()}}
                           @foreach($categorys as $item)
                           <option value='{{$item->id}}' <?php if ($item->id == $product->category_id) {echo 'selected';
                           }?>>{{$item->title}}</option>
                           @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Product Title</label>
                    <div class="col-sm-6">
                        <input type="text" value='{{$product->title}}' class="form-control popover-button-default" placeholder="Title" data-content="Write your Product title here!" title="Add Product" data-trigger="focus" data-placement="top" name="title">
                       
                    </div>
                   
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Pack Size</label>
                    <div class="col-sm-6">
                        <input type="text" value='{{$product->pack_size}}' class="form-control popover-button-default" name="pack_size">
                        
                    </div>
                   
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Servings</label>
                    <div class="col-sm-6">
                        <input type="text" value='{{$product->servings}}' class="form-control popover-button-default" name="servings">
                        
                    </div>
                   
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Product Image</label>
                    <div class="col-sm-6">
                    	
                    	{{ HTML::image('/uploads_products_pic/'.$product->image, 'a picture', array('height' => '70','weight' => '70')) }}
                    	<!-- {{ HTML::image('uploads_products_pic/snapshot1.jpg') }} -->
                    	<!-- <img src="../uploads_products_pic/ {{$product->image}}"/> -->
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Short Description</label>
                    <div class="col-sm-6">
                        <textarea name="short_description" rows="3" class="form-control textarea-no-resize">
                   {{$product->short_description}}
                    </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Details</label>
                    <div class="col-sm-6">
                        <textarea name="full_description" rows="3" class="form-control textarea-autosize" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 78px;">
                         {{$product->short_description}}
                     </textarea>
                    </div>
                     <input type="hidden" value="{{Auth::user()->id}}" name="userid">
                     <input type="hidden" value="{{$product->id}}" name="productid">
                    <input type="submit" class="btn btn-default" value="Save">
                </div>

            </form>
    </div>

 @stop


@extends('layout.default')
@section('content')
<!-- Data tables -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/datatable/datatable.css">-->
{{ HTML::script('assets/widgets/datatable/datatable.js'),
HTML::script('assets/widgets/datatable/datatable-bootstrap.js') ,
HTML::script('/assets/widgets/datatable/datatable-responsive.js') 
 }}


<script type="text/javascript">

    /* Datatables responsive */

    $(document).ready(function() {
        $('#datatable-responsive').DataTable( {
            responsive: true
        } );
    } );

    $(document).ready(function() {
        $('.dataTables_filter input').attr("placeholder", "Search...");
    });

</script>
 <div class="example-box-wrapper">
    @if(Session::has('sucess'))
        <div class="alert alert-success col-md-12" >
   <a href="#" class="close" data-dismiss="alert">
      &times;
   </a>
  {{Session::get('sucess')}}
</div>
    @endif
     {{ Form::open(array('url' => 'admin/save-gallery','class'=>'form-horizontal bordered-row','files'=>true)) }}
         
         <div class="form-group">
                    <label class="col-sm-3 control-label">Select Category</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="category_id">
                            {{$categorys = Category::all()}}
                           @foreach($categorys as $item)
                           <option value='{{$item->id}}'>{{$item->title}}</option>
                           @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Title</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control popover-button-default" placeholder="Title" data-content="Write your title here!" title="Add Title" data-trigger="focus" data-placement="top" name="title">
                       
                    </div>
                   
                </div>

              


                <div class="form-group">
                    <label class="col-sm-3 control-label"> Image</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>

               

                <div class="form-group">
                    
                     <input type="hidden" value="{{Auth::user()->id}}" name="userid">
                    <input type="submit" class="btn btn-default" value="Save">
                </div>

            </form>
    </div>
<div class="panel">
<div class="panel-body">
<h3 class="title-hero">
   
</h3>
<div class="example-box-wrapper">
 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable-responsive">
    <thead>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th> Category</th>
<th> Image</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
       <?php $count = 1; ?>
        @foreach($product as $item)
    <tr class="odd gradeX">
        <td>{{ $count++ }}</td>
        <td>{{ $item->title}}</td>
        <td>{{ $category = Category::find($item->category_id)->title;}}</td>
<td>{{ HTML::image('/uploads_products_pic/'.$item->image, 'a picture', array('height' => '50','weight' => '70')) }}</td>
        <td>
           <a href="{{URL::to('/editgallery/'.$item->id)}}">
          <button class="btn btn-primary">
                        <i class="glyph-icon icon-edit"></i>
                    </button>
        </a>
           
        <a href="{{URL::to('admin/delete-gallery/'.$item->id)}}" ><button class="btn btn-danger">
                        <i class="glyph-icon icon-ban"></i>
                    </button>
        </a>


        </td>

        
    </tr>
   @endforeach
    </tbody>
    </table>
   </div>
</div>
</div>
   
 @stop


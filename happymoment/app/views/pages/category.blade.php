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
 	 {{ Form::open(array('url' => 'admin/save-category','class'=>'form-horizontal bordered-row')) }}
         
                <div class="form-group">
                    <label class="col-sm-3 control-label">Category Title</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control popover-button-default" placeholder="Title" data-content="Write your category title here!" title="Add Categorys" data-trigger="focus" data-placement="top" name="title">
                        <input type="hidden" value="{{Auth::user()->id}}" name="userid">
                    </div>
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
        
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
       <?php $count = 1; ?>
        @foreach($category as $item)
    <tr class="odd gradeX">
        <td>{{ $count++ }}</td>
        <td>{{ $item->title}}</td>
        <td>
           <a href="{{URL::to('/editcetagory/'.$item->id)}}">
          <button class="btn btn-primary">
                        <i class="glyph-icon icon-edit"></i>
                    </button>
        </a>
           
        <a href="{{URL::to('admin/delete-category/'.$item->id)}}" ><button class="btn btn-danger">
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


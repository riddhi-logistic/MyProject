@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">

<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div style="float:left;">
                <div class="panel-heading">Data Table Demo</div>
                </div>

                <div class="menu-filter" style="float:right;padding:9px 9px;">
                    <button class="active"> Active</button>
                    <button class="inactive">Inactive</button>
                    <button class="all">All</button>
                </div>
                <div style="clear:both;"></div> 

                <div class="panel-body">
                    <table class="table table-hover table-bordered table-striped datatable" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->

@section('footer_scripts')
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
     
<script type="text/javascript">

function doconfirm(rowid)
{
   if(confirm("Are you sure to delete this record.?") == '1')
   {
        //window.location.href = "home/destroy/"+rowid; 
        window.location.href = "{{URL::to('home/destroy')}}"+"/"+rowid;
   } else {
       return false;
   }
}
$(document).ready(function() { 
    
    var table = $('.datatable').DataTable({
               processing: true,
               serverSide: true,
               rowId: 'id',
               ajax: '{{ url('datatable/getposts') }}',
               columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email' },
                        { 
                            data: null,
                            "render": function ( data, type, row, meta ) {
                               
                                //return '<a href="home/destroy/'+row.id+'" onclick="doconfirm()" class="cnfrm"><button  class="btn btn-mini btn-primary pull-right">Delete</button></a>';
                                return '<a onclick="doconfirm('+row.id+')"><button  class="btn btn-mini btn-primary pull-right">Delete</button></a>';
                                
                            },
                        }
                     ]
    });


$(".active").click(function(event){ 
    
    table.ajax.url('{{ route('datatable/getposts','1')}}').load();
/*    $.ajax({
        url: '{{ url('datatable/getposts/1') }}',
        type: 'GET',
        success:function(response){
            //alert(response);
            //table.draw();
         
            //$('.datatable').DataTable().clear().rows.add(response.data).draw(false); 
           
            // table.clear();
            //         table.rows.add(response.data);
            //         table.draw(); 

            table
            .rows()
            .invalidate()
            .draw();       
          
        }
    });  */
   
});     

$(".inactive").click(function(event){
    event.preventDefault();

    table.ajax.url('{{ route('datatable/getposts','0')}}').load();   
});   


$(".all").click(function(event){
    event.preventDefault();

    table.ajax.url('{{ route('datatable/getposts')}}').load();   
});
             
//$("#load-data-table table").DataTable().ajax.url($("#load-data-table table").DataTable().ajax.url()+"&length="+$("select[name='ajax-table_length']").val());

    // table.on( 'draw', function () {
    //     console.log( 'Redraw occurred at: '+new Date().getTime() );
    // }); 
});
</script>

@endsection
 


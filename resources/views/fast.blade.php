<!DOCTYPE html>
<head>
<link
	href="https://cdn.datatables.net/1.10.12/css/dataTables.material.min.css"
	rel="stylesheet">
<link
	href="//cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css"
	rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="wrapper">
<div class="content-wrapper">
<section class="content">
<div class="row">
        <div class="col-xs-12">

          <a href="{{ route('slow') }}" class="btn btn-block btn-primary">Slow Load</a>

        </div>
</div>
<div class="row"  style="margin-top:10px;">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 style='text-align: center;'>Fast Load using AJAX</h3>
            </div><!-- /.box-header -->
            <div class="box-body">

	<table class="datatable mdl-data-table dataTable" cellspacing="0"
		width="100%" role="grid" 
		style="width: 100%;">
		<thead>
			<tr>
				<th>Name</th>
				<th>Car</th>
				<th>Color</th>
				
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>


            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->
      </div><!-- /.content-wrapper -->

	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
	<script
		src="https://cdn.datatables.net/1.10.12/js/dataTables.material.min.js"></script>
	<script>
    $(document).ready(function(){
      $('.datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('serverSide') }}',
            columns: [
            { data: 'name', name: 'name' },
            { data: 'car', name: 'car'},
			{ data: 'color', name: 'color'},
		

        ]
        });
    });
  </script>
</body>
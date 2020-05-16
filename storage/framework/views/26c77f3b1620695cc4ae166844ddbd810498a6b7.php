<?php $__env->startSection('title', 'Welcome'); ?>


<?php $__env->startSection('content-css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>







<div class="container-fluid">
    <div class="row">
    
    <div class="col-md-6">
        <form action="/admin/taxonomy/kingdom" method="POST">
            <button 
               id="cccccccadd" 
               type="button" 
               class="btn btn-primary btn-lg insert-modal" 
               data-toggle="modal" 
               data-target="#myModal" autofocus>
              Add New
            </button>

        </form>
    </div>
    <div class="col-sm-6">
        <form role="search" action="/admin/taxonomy/kingdom" method="POST">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
            <div class="input-group">
                <input type="text" class="form-control" name="dat"
                    placeholder="Search your specimen"> <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </form>
    </div>
    </div>
</div>




<?php if(count ( $data ) <= 0): ?>

           <h1 colspan="7" align="center"> Data not found</h1>  
        
        
 <?php else: ?> 
<table class="table" id="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Code</th>
            <th>Title</th>
            <th>Description</th>
            <th>Mod. Date</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        


        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr id="_<?php echo e($item->kingdom_id); ?>" class="del-class-<?php echo e($item->kingdom_id); ?>">
            <td><?php echo e($item->kingdom_id); ?></td>
            <td><?php echo e($item->code); ?></td>
            <td><?php echo e($item->title); ?></td>
            <td><?php echo e($item->description); ?></td>
            <td><?php echo e($item->upsert_date); ?></td>
            <td data-type="button">
							<button type="button" class="edit-modal btn btn-info"   
								data-info="<?php echo e($item->kingdom_id); ?>,<?php echo e($item->code); ?>,<?php echo e($item->title); ?>,<?php echo e($item->description); ?>">
								<span class="glyphicon glyphicon-edit"></span> Edit
							</button>
						</td>
            <td data-type="button">
							<button type="button" class="delete-modal btn btn-danger"  
								data-info="<?php echo e($item->kingdom_id); ?>,<?php echo e($item->code); ?>,<?php echo e($item->title); ?>,<?php echo e($item->description); ?>">
									<span class="glyphicon glyphicon-trash"></span> Delete
							</button>
						</td>
				</tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
    </tbody>
</table>
        
 <?php endif; ?>
				
    
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content-orphan'); ?>

	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"></h4>

				</div>
				<div class="modal-body">
					<form class="form-horizontal" role="form" >
						<input  type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
						<div class="form-group">
							<label class="control-label col-sm-2" for="id">ID</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="_kingdom_id" disabled>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="_code">Code</label>
							<div class="col-sm-10">
								<input type="name" class="form-control" id="_code">
							</div>
						</div>
						<p class="_code_error error text-center alert alert-danger hidden"></p>
						<div class="form-group">
							<label class="control-label col-sm-2" for="_title">Title:</label>
							<div class="col-sm-10">
								<input type="name" class="form-control" id="_title">
							</div>
						</div>
						<p class="_title_error error text-center alert alert-danger hidden"></p>
						<div class="form-group">
							<label class="control-label col-sm-2" for="_description">Description</label>
							<div class="col-sm-10">
								<input type="_description" class="form-control" id="_description">
							</div>
						</div>
						<p class="_description_error error text-center alert alert-danger hidden"></p>

					</form>
					<div class="deleteContent">
						Are you Sure you want to delete <span class="dname"></span> ? <span
							class="hidden did"></span>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn actionBtn" data-dismiss="modal">
						<span id="footer_action_button" class='glyphicon'> </span>
					</button>
					<button type="button" class="btn btn-warning" data-dismiss="modal">
						<span class='glyphicon glyphicon-remove'></span> Close
					</button>
				</div>

			</div>
		</div>
	</div>

	
	
	
	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-js'); ?>

        <script>
					/*
          $(document).ready(function() {
            $('#table').DataTable();
        } );
				*/
         </script>

	<script type="text/javascript">
    /*$(document).on('click', '.edit-modal', function() {
			$('#test-modal').modal('show');
    });		*/


		
    $(document).on('click', '.edit-modal', function() {
        
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').removeClass('delete');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        var stuff = $(this).data('info').split(',');
				$('#_kingdom_id').val(stuff[0]);
				$('#_code').val(stuff[1]);
				$('#_title').val(stuff[2]);
				$('#_description').val(stuff[3]);

			$('#myModal').modal('show');
    });		



    $('.modal-footer').on('click', '.edit', function() {
        var obj = {
        '_token': $('input[name=_token]').val(),
        '_kingdom_id': $("#_kingdom_id").val(),
        '_code': $('#_code').val(),
        '_title': $('#_title').val(),
        '_description': $('#_description').val()

        };
        $.ajax({
            type: 'post',
            url: '/admin/taxonomy/kingdom/update',
            data: obj,
            success: function(data) {
                if (data.errors){
                    $('#myModal').modal('show');
                    if(data.errors._code) {
                        $('._code_error').removeClass('hidden');
                        $('._code_error').text("Code can't be empty !");
                    }
                    if(data.errors._title) {
                        $('._title_error').removeClass('hidden');
                        $('._title_error').text("Title can't be empty !");
                    }
                    if(data.errors._description) {
                        $('._description_error').removeClass('hidden');
                        $('._description_error').text("Description must be a valid one !");
                    }
                    
                }
                 else {
                     
                     $('.error').addClass('hidden');
                     var arr = Object.keys(obj);
                    var count = 1;
                    $('#table').find('#_'+obj._kingdom_id).each(function(){ 
                        $(this).find('td').each(function(){
                            if($(this).attr('data-type') === 'button'){
                                return;
                            }
                            $(this).html(obj[arr[count]]);
                            count++;

                        });
                        console.log(this.innerHTML);

                    })
                 }
			},
			error:function(a, b, c, d){
				console.log(b);
			}
        });
    });	

//delete item
		$(document).on('click', '.delete-modal', function() {
        $('#footer_action_button').text(" Delete");
        $('#footer_action_button').removeClass('glyphicon-check');
        $('#footer_action_button').addClass('glyphicon-trash');
        $('.actionBtn').removeClass('btn-success');
        $('.actionBtn').addClass('btn-danger');
        $('.actionBtn').addClass('delete');
        $('.modal-title').text('Delete');
        $('.did').text($(this).data('id'));
        $('.deleteContent').show();
        $('.form-horizontal').hide();
        $('.dname').html($(this).data('name'));

        var stuff = $(this).data('info').split(',');
				$('#_kingdom_id').val(stuff[0]);

        $('#myModal').modal('show');
    });
		
	

    $('.modal-footer').on('click', '.delete', function() {
	   $.ajax({
            type: 'post',
            url: '/admin/taxonomy/kingdom/delete',
            data: {
                '_token': $('input[name=_token]').val(),
                '_kingdom_id': $('#_kingdom_id').val()
            },
            success: function(data) {
                $(".del-class-"+$('#_kingdom_id').val()).remove();
            }
        });
    });

//for adding new item

$(document).on('click', '.insert-modal', function() {
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').removeClass('delete');
        $('.actionBtn').addClass('insert');
        $('.actionBtn').text('Insert');
        $('.modal-title').text('Insert');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        /*
        var stuff = $(this).data('info').split(',');
        $('#_kingdom_id').val(stuff[0]);
        $('#_code').val(stuff[1]);
        $('#_title').val(stuff[2]);
        $('#_description').val(stuff[3]);
        */
      $('#myModal').modal('show');
    }); 

$('.modal-footer').on('click', '.insert', function() {
        var obj = {
        '_token': $('input[name=_token]').val(),
        //'_kingdom_id': $("#_kingdom_id").val(),
        '_code': $('#_code').val(),
        '_title': $('#_title').val(),
        '_description': $('#_description').val()

        };

        $.ajax({
            type: 'post',
            url: '/admin/taxonomy/kingdom/insert',
            data: obj,
            success: function(data) {
                if (data.errors){
                    $('#myModal').modal('show');
                    if(data.errors._code) {
                        $('._code_error').removeClass('hidden');
                        $('._code_error').text("Code can't be empty !");
                    }
                    if(data.errors._title) {
                        $('._title_error').removeClass('hidden');
                        $('._title_error').text("Title can't be empty !");
                    }
                    if(data.errors._description) {
                        $('._description_error').removeClass('hidden');
                        $('._description_error').text("Description must be a valid one !");
                    }
                    
                }
                 else {
                  //<?php echo e($item->kingdom_id); ?>,<?php echo e($item->code); ?>,<?php echo e($item->title); ?>,<?php echo e($item->description); ?>

                      var keys= data+','+obj._code+','+obj._title+','+obj._description;
                      var date = new Date();
                      var curDate = date.getFullYear() + "- 0" + date.getMonth() + "-"+ date.getDate();
                      var btn='\
                      <td data-type="button">\
                      <button type="button" class="edit-modal btn btn-info"   \
                        data-info="'+keys+'">\
                        <span class="glyphicon glyphicon-edit"></span> Edit\
                      </button>\
                    </td>\
                    <td data-type="button">\
                      <button type="button" class="delete-modal btn btn-danger"  \
                        data-info="'+keys+'">\
                          <span class="glyphicon glyphicon-trash"></span> Delete\
                      </button>\
                    </td>';
                     $('.error').addClass('hidden');
                     $('#table').append("<tr id= '"+data+"' class='item" + data + "'><td>" + data + "</td><td>" + obj._code + "</td><td>" + obj._title + "</td><td>" + obj._description + "</td><td>" + curDate + "</td>"+ btn +"</tr>");

                 }
      },
      error:function(a, b, c, d){
        console.log(b);
      }
        });
        $('#_kingdom_id').val(''),
        $('#_code').val(''),
        $('#_title').val(''),
        $('#_description').val('');
    }); 
</script>

<?php $__env->stopSection(); ?>
		



    
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('title', 'Welcome'); ?>


<?php $__env->startSection('content-css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>







<p>anything</p>
        
 
				
    
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content-orphan'); ?>

	

	
	
	
	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-js'); ?>

        <!-- <script>
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
</script>-->

<?php $__env->stopSection(); ?>
		



    
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
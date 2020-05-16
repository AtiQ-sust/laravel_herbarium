<?php $__env->startSection('title', 'Editor'); ?>


<?php $__env->startSection('content-css'); ?>

<style>
    
    #exTab1 .tab-content {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
}

#exTab2 h3 {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
}

/* remove border radius for the tab */

#exTab1 .nav-pills > li > a {
  border-radius: 0;
}

/* change border radius for the tab , apply corners on top*/

#exTab3 .nav-pills > li > a {
  border-radius: 4px 4px 0 0 ;
}

#exTab3 .tab-content {
  color : black;
  background-color: #428bca;
  padding : 5px 15px;
}
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>





<div class="container-fluid" style="margin-bottom: 5px;">
                <div id="quicknavig" style="margin-top: -30px;margin-bottom: 25px;">
                    <div style="padding-left:3px; ">&nbsp;</div>

                    <div id="youarehere">
                        <div style="padding-right:10px; ">&nbsp;Route:&nbsp;<a href="index.php">Admin </a> &gt;<img src="" align="absmiddle" hspace="4" border="0"><a href="colldata_hbg.php">Article editor </a> &gt;<img src="" align="absmiddle" hspace="4" border="0"><a href="colldata_hbg.php">Edit &amp; /New</a></div>
                    </div>
                </div>
    <div class="row">
        <div class="col-sm-12">
            <div> 

                

                <legend>Article Editor</legend>

                <!--Add new and search button-->
                <div class="container-fluid">
                    <div class="row">
                
                        <div class="col-md-3">
                            <form action="/admin/article/editor" method="POST">
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
                        <div class="col-sm-3" style="float: right;">
                            <form role="search" action="#" method="POST">
                                
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
                        <!-- Button -->
                        <div class="col-sm-6 form-group" style="text-align: -webkit-right;">

                            <!--<div class="">
                                <button id="save" name="singlebutton" class="btn btn-primary">Save</button>
                                <button id="cancel" name="singlebutton" class="btn btn-primary">Cancel</button>
                                <button id="preview" name="singlebutton" class="btn btn-primary">Preview</button>
                            </div>-->
                        </div>
                    </div>
                </div>

                <form action="/admin/article/editor<?php echo e((!empty($data->article_id)? "/" . $data->article_id: "")); ?>" method="POST">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
                            <div class="">
                                <input type="submit" id="save" name="save" class="btn btn-primary"></input>
                                <button id="cancel" name="singlebutton" class="btn btn-primary">Cancel</button>
                                <button id="preview" name="singlebutton" class="btn btn-primary">Preview</button>
                            </div>    
                    <div id="exTab3" class="container">
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a href="#1b" data-toggle="tab" aria-expanded="true">Article</a>
                            </li>
                            <li class=""><a href="#2b" data-toggle="tab" aria-expanded="false">Taxonomy</a>
                            </li>
                            <li class=""><a href="#3b" data-toggle="tab" aria-expanded="false">Datasheet</a>
                            </li>
                            <li class=""><a href="#4a" data-toggle="tab" aria-expanded="false">Others</a>
                            </li>
                        </ul>

                        <div class="tab-content clearfix">
                            <div class="tab-pane active" id="1b">
                                <div class="col-sm-12 " style="background: aliceblue;">
                                    <!-- Textarea -->
                                    <div class="col-sm-2 form-group">

                                        <label class="input-md" for="article_id">ID</label>
                                        <input id="article_id" name="article_id" type="text" value="<?php echo e((!empty($data->article_id)? $data->article_id: "")); ?>" >

                                    </div>
                                    

                                    <div class="col-sm-4 form-group">
                                        <label class="control-label" for="article_title">Title</label>
                                        <div class="">
                                            <textarea class="form-control" id="article_title" name="article_title"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label class="control-label" for="article_slug">Slug</label>
                                        <div class="">
                                            <textarea class="form-control" id="article_slug" name="article_slug"></textarea>
                                        </div>
                                    </div>
                                    <!-- Textarea -->
                                    <div class="col-sm-12 form-group">
                                        <label class=" control-label" for="desc">Description</label>

                                        <textarea class="form-control" id="desc" name="desc" style="height: -webkit-fill-available;"></textarea>

                                    </div>
                                    <div id="">

                                        <button id="singlebutton" name="singlebutton" class="btn btn-primary" style="float: right;">Next</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="2b">
                                <div class="col-sm-12 " style="background: aliceblue;">

                                    <!-- Textarea -->
                                    <div class="col-sm-2 form-group">
                                        <label class="input-md" for="life">Life</label>

                                        <select name="life" id="life">
                                            <option value="1">Flora</option>
                                            <option value="2">two</option>
                                            <option value="3">three</option>
                                            <option value="other">other, please specify:</option>
                                        </select>

                                    </div>

                                    <!-- Textarea -->
                                    <div class="col-sm-2 form-group">
                                        <label class="input-md" for="domain">Domain</label>
                                        <select name="domain" id="domain">
                                            <option value="1">one</option>
                                            <option value="2">two</option>
                                            <option value="3">three</option>
                                            <option value="other">other, please specify:</option>
                                        </select>

                                    </div>

                                    <!-- Textarea -->
                                    <div class="col-sm-2 form-group">
                                        <label class="input-md" for="kingdom">Kingdom</label>
                                        <select name="kingdom" id="kingdom">
                                            <option value="1">Plantae</option>
                                            <option value="2">two</option>
                                            <option value="3">three</option>
                                            <option value="other">other, please specify:</option>
                                        </select>

                                    </div>

                                    <!-- Textarea -->
                                    <div class="col-sm-2 form-group">
                                        <label class="input-md" for="phylum">Phylum</label>
                                        <select name="phylum" id="phylum">
                                            <option value="1">one</option>
                                            <option value="2">two</option>
                                            <option value="3">three</option>
                                            <option value="other">other, please specify:</option>
                                        </select>


                                    </div>

                                    <!-- Textarea -->
                                    <div class="col-sm-2 form-group">
                                        <label class="input-md" for="order">Order</label>
                                        <select name="order" id="order">
                                            <option value="1">Primates</option>
                                            <option value="2">two</option>
                                            <option value="3">three</option>
                                            <option value="other">other, please specify:</option>
                                        </select>


                                    </div>

                                    <!-- Textarea -->
                                    <div class="col-sm-2 form-group">
                                        <label class="input-md" for="class">Class</label>
                                        <select name="class" id="class">
                                            <option value="1">one</option>
                                            <option value="2">two</option>
                                            <option value="3">three</option>
                                            <option value="other">other, please specify:</option>
                                        </select>

                                    </div>

                                    <!-- Textarea -->
                                    <div class="col-sm-2 form-group">
                                        <label class="input-md" for="family">Family</label>
                                        <select name="family" id="family">
                                            <option value="1">Acanthaceae</option>
                                            <option value="2">Achariaceae</option>
                                            <option value="3">Achatocarpaceae</option>
                                            
                                        </select>

                                    </div>





                                    <!-- Textarea -->
                                    <div class="col-sm-2 form-group">
                                        <label class="input-md" for="genus">Genus</label>
                                        <select name="genus" id="genus">
                                            <option value="1">Aa (Orchidaceae)</option>
                                            <option value="2">Aaronsohnia (Compositae)</option>
                                            <option value="3">Abacopteris (Thelypteridaceae)</option>
                                            <option value="other">Abarema (Leguminosae)</option>
                                        </select>

                                    </div>






                                    <!-- Textarea -->
                                    <div class="col-sm-2 form-group">
                                        <label class="input-md" for="species">Species</label>
                                        <select name="species" id="species">
                                            <option value="1">Almond</option>
                                            <option value="2">two</option>
                                            <option value="3">three</option>
                                            <option value="other">other, please specify:</option>
                                        </select>

                                    </div>
                                    <div class="" style="text-align: -webkit-right;">

                                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Previous</button>
                                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Next</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="3b">
                                <div class="col-sm-12 " style="background: aliceblue;">

                                    <!-- Textarea -->
                                    <div class="col-sm-2 form-group">
                                        <label class="input-md" for="fri_no">FRI No</label>
                                        
                                        <select name="fri_no" id="fri_no">
                                            
                                            <option value="1">one</option>
                                            <option value="2">two</option>
                                            <option value="3">three</option>
                                            <option value="other">other, please specify:</option>
                                        </select>

                                    </div>

                                    <!-- Textarea -->
                                    <div class="col-sm-2 form-group">
                                        <label class="input-md" for="plant_name">Name</label>
                                        <select name="plant_name" id="plant_name">
                                            
                                            <option value="1">one</option>
                                            <option value="2">two</option>
                                            <option value="3">three</option>
                                            <option value="other">other, please specify:</option>
                                        </select>

                                    </div>

                                    <!-- Textarea -->
                                    <div class="col-sm-2 form-group">
                                        <label class="input-md" for="scientific_name">Scientific Name</label>
                                        <select name="scientific_name" id="scientific_namec">
                                            
                                            <option value="1">one</option>
                                            <option value="2">two</option>
                                            <option value="3">three</option>
                                            <option value="other">other, please specify:</option>
                                        </select>

                                    </div>

                                    <!-- Textarea -->
                                    <div class="col-sm-2 form-group">
                                        <label class="input-md" for="local_name">Local Name</label>
                                        <select name="local_name" id="local_name">
                                            
                                            <option value="1">one</option>
                                            <option value="2">two</option>
                                            <option value="3">three</option>
                                            <option value="other">other, please specify:</option>
                                        </select>

                                    </div>

                                    <!-- Textarea -->
                                    <div class="col-sm-2 form-group">
                                        <label class="input-md" for="locality">Locality</label>
                                        <select name="locality" id="locality">
                                            
                                            <option value="dhaka">Dhaka</option>
                                            <option value="chittagong">Chittagong</option>
                                            <option value="sylhet">Sylhet</option>
                                            <option value="rajshahi">Rajshahi</option>
                                        </select>

                                    </div>

                                    <!-- Textarea -->
                                    <div class="col-sm-2 form-group">
                                        <label class="input-md" for="flowers">Flowers</label>
                                        <select name="flowers" id="flowers">
                                            
                                            <option value="1">Sunflower</option>
                                            <option value="2">Rose</option>
                                            <option value="3">Tulip</option>
                                            <option value="other">Cactus</option>
                                        </select>

                                    </div>

                                    <!-- Textarea -->
                                    <div class="col-sm-2 form-group">
                                        <label class="input-md" for="fruit">Fruit</label>
                                        <select name="fruit" id="fruit">
                                            
                                            <option value="mango">Mango</option>
                                            <option value="orange">Organge</option>
                                            <option value="apple">Apple</option>
                                            
                                        </select>

                                    </div>

                                    <!-- Textarea -->
                                    <div class="col-sm-2 form-group">
                                        <label class="input-md" for="collector">Collector</label>
                                        <select name="collector_name" id="collector_name">
                                            
                                            <option value="1">Collector 1</option>
                                            <option value="2">Collector 2</option>
                                            <option value="3">Collector 3</option>
                                            <option value="other">Collector 4</option>
                                        </select>

                                    </div>

                                    
                                    <!-- Button Drop Down -->
                                    <div class="col-sm-2 form-group">
                                        <label class="input-md" for="collection_date">Collection Date</label>
                                        <input id="colleciton_date" name="colleciton_date" type="text">
                                    </div>
                                    <div class="" style="text-align: -webkit-right;">
                                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Save</button>
                                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Draft</button>
                                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Publish</button>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="tab-pane" id="4a">
                                <div class="col-sm-3 form-group">
                                    <label class=" control-label" for="image_button">Insert Image</label>
                                    <input id="image_button" name="image_button" class="input-file" type="file">
                                    <br>
                                    <input id="image_button" name="image_button" class="input-file" type="file">
                                    <br>
                                    <input id="image_button" name="image_button" class="input-file" type="file">
                                    <br>
                                    <input id="image_button" name="image_button" class="input-file" type="file">
                                    <br>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





   
				
    
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content-orphan'); ?>

	

	
	
	
	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-js'); ?>

     <script>
         /*$("#save").click(function() {
 
    $.ajax({
        type: 'post',
        url: '/admin/article/article/insert',
        data: {
            '_token': $('input[name=_token]').val(),
            'article_id': $('input[name=article_id]').val()
        },
        success: function(data) {
            if ((data.errors)) {
                $('.error').removeClass('hidden');
                $('.error').text(data.errors.name);
            } else {
                $('.error').remove();
                $('#table').append("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.name + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
            }
        },
    });
    $('#name').val('');
});*/

     </script>   

<?php $__env->stopSection(); ?>
		



    
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
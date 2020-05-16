<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo $__env->yieldContent('title'); ?> - BFRI Herbarium</title>
        
        <link href="/theme/chiefstrap/css/bootstrap.min.css" rel="stylesheet">
        
        <link href="/theme/chiefstrap/css/herbarium.css" rel="stylesheet">
        <link href="/theme/chiefstrap/skin/chiefskin/css/custom.css" rel="stylesheet">
        <link href="/theme/chiefstrap/skin/chiefskin/css/ext.css" rel="stylesheet">
        <script>
 function change_tab(id)
 {
   document.getElementById("page_content").innerHTML=document.getElementById(id+"_desc").innerHTML;
   document.getElementById("page1").className="notselected";
   document.getElementById("page2").className="notselected";
   document.getElementById("page3").className="notselected";
   document.getElementById(id).className="selected";
 }
</script>
        
    </head>
    <body id="page-top" class="index">
        
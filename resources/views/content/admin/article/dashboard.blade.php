@extends('layout.master')

@section('title', 'Dashboard')


@section('content-css')

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

@endsection

@section('content')



<div class="container-fluid">
    <div class="row">
        <div col-sm-12></div>
    </div>
</div>





   
				
    
@endsection



@section('content-orphan')

	

	
	
	
	
@endsection

@section('content-js')

        

@endsection
		



    
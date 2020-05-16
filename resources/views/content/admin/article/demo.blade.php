@extends('layout.master')

@section('title', 'Editor')


@section('content-css')



@endsection

@section('content')


<div class="container-fluid">
   
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>article_id</th>
                    {{--<th>article_title</th>
                    <th>article_slug</th>
                    <th>description</th>
                    <th>life</th>
                     <th>domain</th>
                    <th>kingdom</th>
                    <th>phylum</th>
                    <th>class</th>
                    <th>order</th>
                    <th>family</th>
                    <th>genus</th>
                    <th>species</th>
                    <th>fri_no</th>
                    <th>plant_name</th>
                    <th>scientific_name</th>
                    <th>local_name</th>
                    <th>locality</th>
                    <th>flowers</th>
                    <th>fruits</th>
                    <th>collector_name</th>
                    <th>collection_date</th>--}}
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{$item->article_id}}</td>
                    
                    
                </tr>
                @endforeach
            </tbody>
        </table>


</div>




   
				
    
@endsection



@section('content-orphan')

	

	
	
	
	
@endsection

@section('content-js')

        

@endsection
		



    
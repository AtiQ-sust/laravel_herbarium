@extends('layout.herbarium.article')

@section('title', 'Herbarium-Azadirachta indica')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2" style="margin-top:95px;">
			@include('content.herbarium.md.' . $data['slug'] . '_toc')
			
		</div><!--col-sm-2-->

		<div class="col-sm-10">
				<div id="content" class="mw-body" role="main">
		    <div id="mw-notification-area" class="mw-notification-area mw-notification-area-layout" style="display: none;">

		    </div>
		    <a id="top"></a>

		    <div id="siteNotice" class="mw-body-content">
		        <div id="centralNotice"></div>
		        <!-- CentralNotice -->
		    </div>
		    <div class="mw-indicators mw-body-content">

		    </div>
		    <h1 id="firstHeading" class="firstHeading" lang="en" style="border-bottom: 1px solid #a2a9b1;">{{$data['title']}}</h1>
		    <div id="bodyContent" class="mw-body-content">
		        <div id="siteSub" class="noprint">From BFRI</div>
		        <div id="contentSub"></div>
		        <div id="jump-to-nav" class="mw-jump">
		            Jump to: <a href="#mw-head">navigation</a>, <a href="#p-search">search</a>
		        </div>
		        <div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr">
		            <div class="mw-parser-output">
					@include('content.herbarium.md.' . $data['slug'] . '_info')
					@include('content.herbarium.md.' . $data['slug'] . '_content')

					
		            </div><!-- mw-parser-output -->
		        </div>
		    </div>
		</div>			

		</div><!--col-sm-10-->		


	</div><!--row-->
</div><!--container-fluid-->
@endsection


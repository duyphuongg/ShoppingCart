@extends('master')
@section('title')
Home | Hi-tech Shop
@endsection
@section('content')
	<div class="rev-slider">
	<div class="fullwidthbanner-container">
		<div class="fullwidthbanner">
			<div class="bannercontainer" >
		    <div class="banner" >
					<ul>
						@foreach($slide as $sl)
						<!-- THE FIRST SLIDE -->
						<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
			            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
										<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/{{$sl->image}}" data-src="source/image/slide/{{$sl->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$sl->image}} '); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
										</div>
									</div>
			        </li>
					@endforeach
					</ul>
				</div>
			</div>

			<div class="tp-bannertimer"></div>
		</div>
	</div>
	<!--slider-->
		</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
					@foreach($loaisp as $lsp)
						<div class="beta-products-list">
							<h4>{{$lsp->name}}</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($lsp->product)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
							<?php
							$data = $lsp->product->take(8);
							?>
							@foreach($data as $new)
								<div class="col-sm-3">
									<div class="single-item">
									@if($new->unit_price!=$new->promotion_price)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									@endif

										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$new->id)}}"><img src="source/image/product/{{$new->image}}" alt="" height="200px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$new->name}}</p>
											<p class="single-item-price">
											@if($new->unit_price==$new->promotion_price)
												<span class="flash-sale" style="font-size: 16px">{{number_format($new->unit_price)}} đ</span>
											@else
												<span class="flash-del" style="font-size: 16px">{{number_format($new->unit_price)}} đ</span>
												<span class="flash-sale" style="font-size: 16px">{{number_format($new->promotion_price)}} đ</span>
											@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang',$new->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitietsanpham',$new->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endforeach
							</div>
						</div> <!-- .beta-products-list -->
					@endforeach
				</div> <!-- end section with sidebar and main content -->
				
			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection
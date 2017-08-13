@extends('master')
@section('title')
{{$loaisp->name}} | Hi-tech Shop
@endsection
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">{{$loaisp->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Home</a> / <span>Loại sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($sp_theoloai)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($sp_theoloai as $theoloai)
								<div class="col-sm-3">
									<div class="single-item">
									@if($theoloai->unit_price!=$theoloai->promotion_price)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									@endif
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$theoloai->id)}}"><img src="source/image/product/{{$theoloai->image}}" alt="" height="200px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$theoloai->name}}</p>
											<p class="single-item-price">
												@if($theoloai->unit_price==$theoloai->promotion_price)
												<span class="flash-sale" style="font-size: 16px">{{number_format($theoloai->unit_price)}} đ</span>
												@else
													<span class="flash-del" style="font-size: 16px">{{number_format($theoloai->unit_price)}} đ</span>
													<span class="flash-sale" style="font-size: 16px">{{number_format($theoloai->promotion_price)}} đ</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang',$theoloai->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitietsanpham',$theoloai->id)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
								
							</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->




			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
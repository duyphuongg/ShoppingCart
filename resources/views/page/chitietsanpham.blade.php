@extends('master')
@section('title')
{{$sanpham->name}} | Hi-tech Shop
@endsection
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">{{$sanpham->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Home</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="source/image/product/{{$sanpham->image}}" alt="" height="240px">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
							@if($sanpham->unit_price!=$sanpham->promotion_price)
								<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
							@endif
								<p class="single-item-title">{{$sanpham->name}}</p>
								<p class="single-item-price">
									@if($sanpham->unit_price==$sanpham->promotion_price)
										<span class="flash-sale" style="font-size: 16px">{{number_format($sanpham->unit_price)}} đ</span>
									@else
										<span class="flash-del" style="font-size: 16px">{{number_format($sanpham->unit_price)}} đ</span>
										<span class="flash-sale" style="font-size: 16px">{{number_format($sanpham->promotion_price)}} đ</span>
									@endif
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								{{$sanpham->description}}
							</div>
							<div class="single-item-options">
								<a class="add-to-cart" href="{{route('themgiohang',$sanpham->id)}}"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
							
							{{--<div class="fb-comments" data-href="https://www.facebook.com/Hi-Tech-Shop-1139085802904585/" data-width="590" data-numposts="5"></div>--}}
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Sản phẩm tương tự</h4>

						<div class="row">
							@foreach($sp_tuongtu as $sp)
							<div class="col-sm-4">
								<div class="single-item">
								@if($sp->unit_price!=$sp->promotion_price)
									<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
								@endif
									<div class="single-item-header">
										<a href="{{route('chitietsanpham',$sp->id)}}"><img src="source/image/product/{{$sp->image}}" alt="" height="180px"></a>
									</div>

									<div class="single-item-body">
										<p class="single-item-title">{{$sp->name}}</p>
										<p class="single-item-price">
											@if($sp->unit_price==$sp->promotion_price)
											<span class="flash-sale" style="font-size: 16px">{{number_format($sp->unit_price)}} đ</span>
											@else
												<span class="flash-del" style="font-size: 16px">{{number_format($sp->unit_price)}} đ</span>
												<span class="flash-sale" style="font-size: 16px">{{number_format($sp->promotion_price)}} đ</span>
											@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="{{route('themgiohang',$sp->id)}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('chitietsanpham',$sp->id)}}">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<div class="row">{{$sp_tuongtu->links()}}</div>
					</div> <!-- .beta-products-list -->
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection
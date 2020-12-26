@extends('layout')
@section('content')
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">Home</a></li>
				  <li class="active">Thanh toán giỏ hàng </li>
				</ol>
			</div>

			
			<div class="register-req">
				<p>Làm ơn đăng ký hoặc đăng nhập để thanh toán giỏ hàng và xem lại lịch sử mua hàng</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-15 clearfix">
						<div class="bill-to">
							<p>Thông tin gửi hàng</p>
							<div class="form-one">
								<form action="{{URL::to('/save-checkout-customer')}}" method="POST">
									{{csrf_field()}}
									<input type="email" name="shipping_email" placeholder="Email" required>
									<input type="text" name="shipping_name" placeholder="Họ và tên " required >
									<input type="text" name="shipping_address" placeholder="Địa chỉ " required >
									<input type="text" name="shipping_phone" placeholder="Phone" required>
									<textarea name="shipping_notes"  placeholder="Ghi chú mong muốn về đơn hàng của bạn" rows="5" required></textarea>
									<input type="submit" value="Xác nhận" name="send_order" class="btn btn-primary btn-sm">
								</form>
							</div>
							
						</div>
					</div>		
				</div>
			</div>
			
		</div>
	</section> <!--/#cart_items-->
@endsection   
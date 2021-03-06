<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Shipping;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Customer;
use App\Models\Coupon;
use App\Models\Product;

use PDF;


class OrderCon extends Controller
{
    public function manage_order()
    {
        $order = Order::orderby('created_at','DESC')->get();
        return view('backend.admin.order.manage_order')->with(compact('order'));
    }

    public function view_order($order_code)
    {
        $order_details = OrderDetails::with('product')->where('order_code',$order_code)->get();
        $order = Order::where('order_code',$order_code)->get();
		

        foreach($order as $key => $ord){
            $customer_id = $ord->customer_id;
            $shipping_id = $ord->shipping_id;
			$order_status = $ord->order_status;
        }

        $customer = Customer::where('customer_id',$customer_id)->first();
        $shipping = Shipping::where('shipping_id',$shipping_id)->first();
		

        $order_details_product = OrderDetails::with('product')->where('order_code', $order_code)->get();

		foreach($order_details_product as $key => $order_d){

			$product_coupon = $order_d->product_coupon;
		}
		if($product_coupon != 'no'){
			$coupon = Coupon::where('coupon_code',$product_coupon)->first();
			$coupon_condition = $coupon->coupon_condition;
			$coupon_number = $coupon->coupon_number;

			
		}else{
			$coupon_condition = 2;
			$coupon_number = 0;
		}
		
		return view('backend.admin.order.view_order')->with(compact('order_details','customer','shipping','coupon_condition','coupon_number','order','order_status'));
       

        
    }

    public function print_order($checkout_code)
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->LoadHTML($this->print_order_convert($checkout_code));

        return $pdf->stream();
    }

    public function print_order_convert($checkout_code)
    {
        $order_details = OrderDetails::where('order_code',$checkout_code)->get();
		$order = Order::where('order_code',$checkout_code)->get();
		foreach($order as $key => $ord){
			$customer_id = $ord->customer_id;
			$shipping_id = $ord->shipping_id;
		}
		$customer = Customer::where('customer_id',$customer_id)->first();
		$shipping = Shipping::where('shipping_id',$shipping_id)->first();

		$order_details_product = OrderDetails::with('product')->where('order_code', $checkout_code)->get();

		foreach($order_details_product as $key => $order_d){

			$product_coupon = $order_d->product_coupon;
		}
		if($product_coupon != 'no'){
			$coupon = Coupon::where('coupon_code',$product_coupon)->first();

			$coupon_condition = $coupon->coupon_condition;
			$coupon_number = $coupon->coupon_number;

			if($coupon_condition==0){
				$coupon_echo = $coupon_number.'%';
			}elseif($coupon_condition==1){
				$coupon_echo = number_format($coupon_number,0,',','.').'??';
			}
		}else{
			$coupon_condition = 2;
			$coupon_number = 0;

			$coupon_echo = '0';

		}

		$output = '';

		$output.='<style>body{
			font-family: DejaVu Sans;
		}
		.table-styling{
			border:1px solid #000;
		}
		.table-styling tbody tr td{
			border:1px solid #000;
		}
		</style>
		<h1><center>C??ng ty TNHH m???t th??nh vi??n ABCD</center></h1>
		<h5>SDT: 0981440013 </h5>
        <h5>Email: ngtrung03021999@gmail.com </h5>
		<h5>?????a Ch???:  </h5>

		<p>Ng?????i ?????t h??ng</p>
		<table class="table-styling">
		<thead>
		<tr>
		<th>T??n kh??ch ?????t</th>
		<th>S??? ??i???n tho???i</th>
		<th>Email</th>
		</tr>
		</thead>
		<tbody>';

		$output.='		
		<tr>
		<td>'.$customer->customer_name.'</td>
		<td>'.$customer->customer_phone.'</td>
		<td>'.$customer->customer_email.'</td>

		</tr>';


		$output.='				
		</tbody>

		</table>

		<p>Ship h??ng t???i</p>
		<table class="table-styling">
		<thead>
		<tr>
		<th>T??n ng?????i nh???n</th>
		<th>?????a ch???</th>
		<th>Sdt</th>
		<th>Email</th>
		<th>Ghi ch??</th>
		</tr>
		</thead>
		<tbody>';

		$output.='		
		<tr>
		<td>'.$shipping->shipping_name.'</td>
		<td>'.$shipping->shipping_address.'</td>
		<td>'.$shipping->shipping_phone.'</td>
		<td>'.$shipping->shipping_email.'</td>
		<td>'.$shipping->shipping_note.'</td>

		</tr>';


		$output.='				
		</tbody>

		</table>

		<p>????n h??ng ?????t</p>
		<table class="table-styling">
		<thead>
		<tr>
		<th>T??n s???n ph???m</th>
		<th>M?? gi???m gi??</th>
		<th>S??? l?????ng</th>
		<th>Gi?? s???n ph???m</th>
		<th>Th??nh ti???n</th>
		</tr>
		</thead>
		<tbody>';

		$total = 0;

		foreach($order_details_product as $key => $product){

			$subtotal = $product->product_price*$product->product_sales_quantity;
			$total+=$subtotal;

			if($product->product_coupon!='no'){
				$product_coupon = $product->product_coupon;
			}else{
				$product_coupon = 'kh??ng m??';
			}		

			$output.='		
			<tr>
			<td>'.$product->product_name.'</td>
			<td>'.$product_coupon.'</td>
			<td>'.$product->product_sales_quantity.'</td>
			<td>'.number_format($product->product_price,0,',','.').'??'.'</td>
			<td>'.number_format($subtotal,0,',','.').'??'.'</td>

			</tr>
            ';
		}
        $output.='
            <td>
            <p>T???ng Ti???n : '.number_format($total,0,',','.').'??'.'</p>
            </td>
        ';
		if($coupon_condition==0){
			$total_after_coupon = ($total*$coupon_number)/100;
			$total_coupon = $total - $total_after_coupon;
            $output.= '<tr>
		<td colspan="2">
        <p>T???ng Gi???m : '.number_format($total_after_coupon,0,',','.').'??'.'</p>
		<p>Thanh to??n : '.number_format($total_coupon,0,',','.').'??'.'</p>
		</td>
		</tr>';
		}else{
			$total_coupon = $total - $coupon_number;
            $output.= '<tr>
		<td colspan="2">
        <p>T???ng Gi???m : '.number_format($coupon_number,0,',','.').'??'.'</p>
		<p>Thanh to??n : '.number_format($total_coupon,0,',','.').'??'.'</p>
		</td>
		</tr>';
		}

		
		$output.='				
		</tbody>

		</table>

		<p>K?? t??n</p>
		<table>
		<thead>
		<tr>
		<th width="200px">Ng?????i l???p phi???u</th>
		<th width="800px">Ng?????i nh???n</th>

		</tr>
		</thead>
		<tbody>';

		$output.='				
		</tbody>

		</table>

		';


		return $output;
    }

	public function update_order_qty(Request $request){

		$data = $request->all();
		$order = Order::find($data['order_id']);
		$order->order_status = $data['order_status'];
		$order->save();

		if($order->order_status==2){
			foreach($data['order_product_id'] as $key => $product_id){
				$product = Product::find($product_id);
				$product_quantity = $product->product_quantity;
				$product_sold = $product->product_sold;

				foreach($data['quantity'] as $key2 => $qty){
					if($key==$key2){
						$pro_remain = $product_quantity - $qty;
						$product->product_quantity = $pro_remain;
						$product->product_sold = $product_sold + $qty;
						$product->save();
				}
			}
		}
	  }elseif($order->order_status != 2 && $order->order_status != 1){
				foreach($data['order_product_id'] as $key => $product_id){
					$product = Product::find($product_id);
					$product_quantity = $product->product_quantity;
					$product_sold = $product->product_sold;

					foreach($data['quantity'] as $key2 => $qty){
						if($key==$key2){
							$pro_remain = $product_quantity + $qty;
							$product->product_quantity = $pro_remain;
							$product->product_sold = $product_sold - $qty;
							$product->save();
					}
				}
			}
	  }

	}

	public function update_qty(Request $request){
		
		$data = $request->all();
		$order_details = OrderDetails::where('product_id',$data['order_product_id'])->where('order_code',$data['order_code'])->first();
		$order_details->product_sales_quantity = $data['order_qty'];
		$order_details->save();


	}
}

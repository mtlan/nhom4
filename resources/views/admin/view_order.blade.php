@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Thông tin khách hàng
        </div>
        
        <div class="table-responsive">
            <?php
            $message = Session::get('message');  // lấy cái message bên admincontroller
            if ($message) {   // nếu tồn tại thì in ra
                //echo $message;
                echo '<span class="text-alert">' . $message . '</span>';
                //echo "<script type='text/javascript'>alert('$message');</script>";
                Session::put('message', null);   // đặt rỗng chỉ hiển thị đúng 1 lần
            }
            ?>
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        
                        <th>Tên khách hàng</th>
                        <th>Số điện thoại</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        
                        <td>{{$order_by_id->customer_name}}</td>
                        <td>{{$order_by_id->customer_phone}}</td>
                        

                        
                    </tr>
                    
                </tbody>
            </table>
        </div>
        <footer class="panel-footer">
            <div class="row">

                <div class="col-sm-5 text-center">
                    <small class="text-muted inline m-t-sm m-b-sm"></small>
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
<br><br>
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Thông tin vận chuyển
        </div>
        
        <div class="table-responsive">
            <?php
            $message = Session::get('message');  // lấy cái message bên admincontroller
            if ($message) {   // nếu tồn tại thì in ra
                //echo $message;
                echo '<span class="text-alert">' . $message . '</span>';
                //echo "<script type='text/javascript'>alert('$message');</script>";
                Session::put('message', null);   // đặt rỗng chỉ hiển thị đúng 1 lần
            }
            ?>
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        
                        <th>Họ tên người vận chuyển</th>
                        <th>Tên người vận chuyển</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        
                        <td>{{$order_by_id->shipping_firstname}}</td>
                        <td>{{$order_by_id->shipping_lastname}}</td>
                        <td>{{$order_by_id->shipping_addressone}}</td>
                        <td>{{$order_by_id->shipping_phone}}</td>
                        
                        

                        
                    </tr>
                    
                </tbody>
            </table>
        </div>
        <footer class="panel-footer">
            <div class="row">

                <div class="col-sm-5 text-center">
                    <small class="text-muted inline m-t-sm m-b-sm"></small>
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
<br><br>
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Liệt kê chi tiết đơn hàng
        </div>
        
        <div class="table-responsive">
            <?php
            $message = Session::get('message');  // lấy cái message bên admincontroller
            if ($message) {   // nếu tồn tại thì in ra
                //echo $message;
                echo '<span class="text-alert">' . $message . '</span>';
                //echo "<script type='text/javascript'>alert('$message');</script>";
                Session::put('message', null);   // đặt rỗng chỉ hiển thị đúng 1 lần
            }
            ?>
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Tổng tiền</th>

                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        
                        <td>{{$order_by_id->product_name}}</td>
                        <td>{{$order_by_id->product_sales_quantity}}</td>
                        <td>{{$order_by_id->product_price}}</td>
                        <td>{{$order_by_id->order_total}}</td>

                        
                    </tr>
                    
                </tbody>
            </table>
        </div>
        <footer class="panel-footer">
            <div class="row">

                <div class="col-sm-5 text-center">
                    <small class="text-muted inline m-t-sm m-b-sm"></small>
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection
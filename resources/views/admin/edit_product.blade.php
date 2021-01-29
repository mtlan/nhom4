@extends('admin_layout')
@section('admin_content')
    <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhật sản phẩm
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                            <?php
                                $message = Session::get('message');  // lấy cái message bên admincontroller
                                if($message) {   // nếu tồn tại thì in ra
                                    //echo $message;
                                    echo '<span class="text-alert">'.$message.'</span>';
                                    //echo "<script type='text/javascript'>alert('$message');</script>";
                                    Session::put('message',null);   // đặt rỗng chỉ hiển thị đúng 1 lần
                                }
                            ?>
                            @foreach($edit_pro as $key => $pro)
                            <form role="form" action="{{URL::to('/update-product/'.$pro->product_id)}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" value="{{$pro->product_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá cũ</label>
                                    <input type="text" name="price_old" class="form-control" id="exampleInputEmail1" value="{{$pro->price_old}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá sản phẩm</label>
                                    <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" value="{{$pro->product_price}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                    <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                                    <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nguồn gốc</label>
                                    <input type="text" name="product_source" class="form-control" id="exampleInputEmail1" value="{{$pro->product_source}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Đặc điểm ngoại hình</label>
                                    <input type="text" name="physical" class="form-control" id="exampleInputEmail1" value="{{$pro->physical}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cân nặng</label>
                                    <input type="text" name="product_weight" class="form-control" id="exampleInputEmail1" value="{{$pro->product_weight}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tuổi thọ</label>
                                    <input type="text" name="product_life" class="form-control" id="exampleInputEmail1" value="{{$pro->product_life}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giới tính</label>
                                    <input type="text" name="product_sex" class="form-control" id="exampleInputEmail1" value="{{$pro->product_sex}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                    <textarea style="resize: none" rows="5" class="form-control" name="product_desc">{{$pro->product_desc}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                                    <textarea style="resize: none" rows="5" class="form-control" name="product_content" id="ckeditor4">{{$pro->product_content}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                                    <select name="product_cate" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $key => $cate)
                                            <!-- tự chọn danh mục thương hiệu của sản phẩm đó khi update -->
                                            @if($cate->category_id==$pro->category_id)
                                            <option selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                            @else
                                            <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>   
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                    <select name="product_status" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển thị</option>
                                    </select>
                                </div>
                                <button type="submit" name="update_product" class="btn btn-info">Cập nhật sản phẩm</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>

            </div>
@endsection
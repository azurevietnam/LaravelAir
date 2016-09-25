@extends('layouts.masterfrontpage')
@section('content')
<div class="area_1 row">
    <div class="col-md-6 col-xs-12 booking">
        <form>
            <div class="col-xs-12">
                <input type="radio" name="typeofway" id="typeofway" value="return" checked>
                Khứ hồi
                <input type="radio" name="typeofway" id="typeofway" value="oneway" >
                Một chiều
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <label for="from">Từ</label>
                    <input type="text" class="form-control" id="from" placeholder="Từ">
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <label for="to_date">Đến</label>
                    <input type="text" class="form-control" id="to" placeholder="Đến">
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <label for="from_date">Ngày khởi hành</label>
                    <input type="date" class="form-control" id="from_date" placeholder="">
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <label for="to_date">Ngày về</label>
                    <input type="date" class="form-control" id="to_date" placeholder="">
                </div>
            </div>
            <div class="col-xs-4">
                <div class="form-group">
                    <label for="to_date">Người lớn(>=12 Tuổi)</label>
                    <input type="text" class="form-control" id="adult" placeholder="Số lượng">
                </div>
            </div>
            <div class="col-xs-4">
                <div class="form-group">
                    <label for="to_date">Trẻ em(2-11 Tuổi)</label>
                    <input type="text" class="form-control" id="children" placeholder="Số lượng">
                </div>
            </div>
            <div class="col-xs-4">
                <div class="form-group">
                    <label for="to_date">Em bé(<2 Tuổi)</label>
                    <input type="text" class="form-control" id="baby" placeholder="Số lượng">
                </div>
            </div>
            <div class="col-xs-12 form-group">
                <button type="submit" class="btn btn-lg btn-block">Tìm chuyến bay</button>
            </div>   
        </form>
    </div>
    <div class="col-md-6 col-xs-12 promotion">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>             
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{ asset('/images/khuyenmai/banner01.jpg') }}" alt="...">   
                </div>
                <div class="item">
                    <img src="{{ asset('/images/khuyenmai/banner02.jpg') }}" alt="...">  
                </div> 
                <div class="item">
                    <img src="{{ asset('/images/khuyenmai/banner03.jpg') }}" alt="...">   
                </div>
                <div class="item">
                    <img src="{{ asset('/images/khuyenmai/banner04.jpg') }}" alt="...">  
                </div>
                <div class="item">
                    <img src="{{ asset('/images/khuyenmai/banner05.jpg') }}" alt="...">   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


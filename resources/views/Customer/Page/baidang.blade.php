@extends('Customer.Layout.master')
@section('precontent')
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(natucam/images/demo/40.jpg);">
        <div class="container_backimage h-300">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                </div>
            </div>
        </div>
    </section>
    <div class="post-area">
        <div class="container_dangbai" style="float: center">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="post-content mb-50 p-30 bg-white box-shadow">
                        <div class="section-heading">
                            <h2>Đăng bài</h2>
                        </div>

                        <div class="post-info mt-30">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="upload-file">Đăng ảnh</label>
                                    <input type="file" class="form-control-file" id="upload-file">
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Tiều đề</label>
                                    <input type="text" class="form-control" name="">
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Nội dung</label>
                                    <textarea name="video-description" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Gía*</label>
                                    <input type="text" class="form-control" name="">
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Liên hệ</label>
                                    <select name="video-catagory" class="form-control">
                                        <option value="">Điện thoại</option>
                                        <option value="">Email</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn mag-btn mt-30"><i class="fa fa-cloud-upload"></i>Đăng bài</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
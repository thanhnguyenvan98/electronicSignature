@extends('master.master')

@section('title','Tổng quan')

@section('content')
	<div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-folder icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Tổng quan
                    </div>
                </div>    
            </div>
        </div>            
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <a href="" style="text-decoration: none;">
                    <div class="card mb-3 widget-content bg-midnight-bloom">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Lịch trình giảng dạy</div>
                                <div class="widget-subheading">tiến độ giảng dạy trong kỳ</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>50%</span></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4">
                <a href="" style="text-decoration: none;">
                    <div class="card mb-3 widget-content bg-arielle-smile">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Tình trạng ký duyệt</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>1</span></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4">
                <a href="" style="text-decoration: none;">
                    <div class="card mb-3 widget-content bg-grow-early">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Thông báo</div>
                                <div class="widget-subheading">thông báo mới</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>4</span></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-premium-dark">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Products Sold</div>
                            <div class="widget-subheading">Revenue streams</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-warning"><span>$14M</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Lịch giảng dạy trong tuần</h5>
                        <button class="mb-2 mr-2 btn-transition btn btn-outline-danger">Tuần trước</button>
                        <button class="mb-2 mr-2 btn-transition btn btn-outline-info">Tuần tiếp theo</button>
                        <table class="mb-0 table">
                            <thead>
                            <tr>
                                <th>Tiết</th>
                                <th>Giờ bắt đầu</th>
                                <th style="background-color: yellow;text-align: center;">1/1/09</th>
                                <th>2/1/09</th>
                                <th>3/1/09</th>
                                <th>4/1/09</th>
                                <th>5/1/09</th>
                                <th>6/1/09</th>
                                <th>7/1/09</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Thứ hai</td>
                                <td>Otto</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Thứ ba</td>
                                <td>Thornton</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Thứ tư</td>
                                <td>the Bird</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Thứ năm</td>
                                <td>the Bird</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Thứ sáu</td>
                                <td>the Bird</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Thứ bảy</td>
                                <td>the Bird</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Chủ nhật</td>
                                <td>the Bird</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Chủ nhật</td>
                                <td>the Bird</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Chủ nhật</td>
                                <td>the Bird</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Chủ nhật</td>
                                <td>the Bird</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td>Chủ nhật</td>
                                <td>the Bird</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td>Chủ nhật</td>
                                <td>the Bird</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">13</th>
                                <td>Chủ nhật</td>
                                <td>the Bird</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">14</th>
                                <td>Chủ nhật</td>
                                <td>the Bird</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">15</th>
                                <td>Chủ nhật</td>
                                <td>the Bird</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">16</th>
                                <td>Chủ nhật</td>
                                <td>the Bird</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection
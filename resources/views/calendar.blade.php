@extends('master.master')

@section('title','Calendar')

@section('content')
	<div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-folder icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Lịch trình giảng dạy môn học
                    </div>

                </div>    
            </div>
        </div>            
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-12 card">
                    <div class="card-body">
                        <h5 class="card-title">Phát triển phần mềm hướng dịch vụ</h5>
                        <div class="collapse" id="collapseExample1">
                            <p>Mã lớp: KTPM2K11</p>

                            <p>Tiến độ: 10%</p>
                            <div class="mb-3 progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;"></div>
                            </div>
                            <p>Bảng tiến trình</p>

                            <table class="mb-0 table">
                            <thead>
                            <tr>
                                <th>Buổi</th>
                                <th>Chương trình</th>
                                <th>Tiến độ</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Thứ hai</td>
                                <td style="color: green"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox1" class="custom-control-input" checked="checked"><label class="custom-control-label" for="exampleCustomCheckbox1"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Thứ ba</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox2"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Thứ tư</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox3" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox3"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Thứ năm</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox4" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox4"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Thứ sáu</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox5" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox5"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Thứ bảy</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox6" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox6"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox7" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox7"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox8" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox8"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox9" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox9"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox10" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox10"></label></div></td>
                               
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox11" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox11"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox12" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox12"></label></div></td>
                              
                            </tr>
                            <tr>
                                <th scope="row">13</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox13" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox13"></label></div></td>
                
                            </tr>
                            <tr>
                                <th scope="row">14</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox14" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox14"></label></div></td>
                               
                            </tr>
                            <tr>
                                <th scope="row">15</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox15" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox15"></label></div></td>
                           
                            </tr>
                            <tr>
                                <th scope="row">16</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox16" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox16"></label></div></td>
                              
                            </tr>
                            </tbody>
                        </table>
                        <center><button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" style="margin-top: 20px">Lưu thay đổi</button></center>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" data-toggle="collapse" href="#collapseExample1" class="btn btn-primary">Chi tiết</button>
                    </div>
                </div>
                <div class="main-card mb-12 card">
                    <div class="card-body">
                        <h5 class="card-title">Lập trình hướng đối tượng</h5>
                        <div class="collapse" id="collapseExample2">
                            <p>Mã lớp: KTPM2K11</p>
                            
                            <p>Tiến độ: 10%</p>
                            <div class="mb-3 progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;"></div>
                            </div>
                            <p>Bảng tiến trình</p>
                            <table class="mb-0 table">
                            <thead>
                            <tr>
                                <th>Buổi</th>
                                <th>Chương trình</th>
                                <th>Tiến độ</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Thứ hai</td>
                                <td style="color: green"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox1" class="custom-control-input" checked="checked"><label class="custom-control-label" for="exampleCustomCheckbox1"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Thứ ba</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox2"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Thứ tư</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox3" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox3"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Thứ năm</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox4" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox4"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Thứ sáu</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox5" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox5"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Thứ bảy</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox6" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox6"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox7" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox7"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox8" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox8"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox9" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox9"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox10" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox10"></label></div></td>
                               
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox11" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox11"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox12" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox12"></label></div></td>
                              
                            </tr>
                            <tr>
                                <th scope="row">13</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox13" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox13"></label></div></td>
                
                            </tr>
                            <tr>
                                <th scope="row">14</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox14" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox14"></label></div></td>
                               
                            </tr>
                            <tr>
                                <th scope="row">15</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox15" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox15"></label></div></td>
                           
                            </tr>
                            <tr>
                                <th scope="row">16</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox16" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox16"></label></div></td>
                              
                            </tr>
                            </tbody>
                        </table>
                        <center><button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" style="margin-top: 20px">Lưu thay đổi</button></center>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" data-toggle="collapse" href="#collapseExample2" class="btn btn-primary">Chi tiết</button>
                    </div>
                </div>
                <div class="main-card mb-12 card">
                    <div class="card-body">
                        <h5 class="card-title">Lập trình Java</h5>
                        <div class="collapse" id="collapseExample3">
                            <p>Mã lớp: KTPM2K11</p>
                            
                            <p>Tiến độ: 10%</p>
                            <div class="mb-3 progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;"></div>
                            </div>
                            <p>Bảng tiến trình</p>
                            <table class="mb-0 table">
                            <thead>
                            <tr>
                                <th>Buổi</th>
                                <th>Chương trình</th>
                                <th>Tiến độ</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Thứ hai</td>
                                <td style="color: green"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox1" class="custom-control-input" checked="checked"><label class="custom-control-label" for="exampleCustomCheckbox1"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Thứ ba</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox2"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Thứ tư</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox3" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox3"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Thứ năm</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox4" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox4"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Thứ sáu</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox5" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox5"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Thứ bảy</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox6" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox6"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox7" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox7"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox8" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox8"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox9" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox9"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox10" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox10"></label></div></td>
                               
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox11" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox11"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox12" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox12"></label></div></td>
                              
                            </tr>
                            <tr>
                                <th scope="row">13</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox13" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox13"></label></div></td>
                
                            </tr>
                            <tr>
                                <th scope="row">14</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox14" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox14"></label></div></td>
                               
                            </tr>
                            <tr>
                                <th scope="row">15</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox15" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox15"></label></div></td>
                           
                            </tr>
                            <tr>
                                <th scope="row">16</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox16" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox16"></label></div></td>
                              
                            </tr>
                            </tbody>
                        </table>
                        <center><button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" style="margin-top: 20px">Lưu thay đổi</button></center>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" data-toggle="collapse" href="#collapseExample3" class="btn btn-primary">Chi tiết</button>
                    </div>
                </div>
                <div class="main-card mb-12 card">
                    <div class="card-body">
                        <h5 class="card-title">Đồ họa máy tính</h5>
                        <div class="collapse" id="collapseExample4">
                            <p>Mã lớp: KTPM2K11</p>
                            
                            <p>Tiến độ: 10%</p>
                            <div class="mb-3 progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;"></div>
                            </div>
                            <p>Bảng tiến trình</p>
                            <table class="mb-0 table">
                            <thead>
                            <tr>
                                <th>Buổi</th>
                                <th>Chương trình</th>
                                <th>Tiến độ</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Thứ hai</td>
                                <td style="color: green"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox1" class="custom-control-input" checked="checked"><label class="custom-control-label" for="exampleCustomCheckbox1"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Thứ ba</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox2"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Thứ tư</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox3" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox3"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Thứ năm</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox4" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox4"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Thứ sáu</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox5" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox5"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Thứ bảy</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox6" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox6"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox7" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox7"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox8" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox8"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox9" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox9"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox10" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox10"></label></div></td>
                               
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox11" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox11"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox12" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox12"></label></div></td>
                              
                            </tr>
                            <tr>
                                <th scope="row">13</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox13" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox13"></label></div></td>
                
                            </tr>
                            <tr>
                                <th scope="row">14</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox14" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox14"></label></div></td>
                               
                            </tr>
                            <tr>
                                <th scope="row">15</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox15" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox15"></label></div></td>
                           
                            </tr>
                            <tr>
                                <th scope="row">16</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox16" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox16"></label></div></td>
                              
                            </tr>
                            </tbody>
                        </table>
                        <center><button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" style="margin-top: 20px">Lưu thay đổi</button></center>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" data-toggle="collapse" href="#collapseExample4" class="btn btn-primary">Chi tiết</button>
                    </div>
                </div>
                <div class="main-card mb-12 card">
                    <div class="card-body">
                        <h5 class="card-title">Cấu trúc dữ liệu và giải thuật</h5>
                        <div class="collapse" id="collapseExample5">
                            <p>Mã lớp: KTPM2K11</p>
                            
                            <p>Tiến độ: 10%</p>
                            <div class="mb-3 progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;"></div>
                            </div>
                            <p>Bảng tiến trình</p>
                            <table class="mb-0 table">
                            <thead>
                            <tr>
                                <th>Buổi</th>
                                <th>Chương trình</th>
                                <th>Tiến độ</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Thứ hai</td>
                                <td style="color: green"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox1" class="custom-control-input" checked="checked"><label class="custom-control-label" for="exampleCustomCheckbox1"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Thứ ba</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox2"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Thứ tư</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox3" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox3"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Thứ năm</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox4" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox4"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Thứ sáu</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox5" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox5"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Thứ bảy</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox6" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox6"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox7" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox7"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox8" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox8"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox9" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox9"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox10" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox10"></label></div></td>
                               
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox11" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox11"></label></div></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox12" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox12"></label></div></td>
                              
                            </tr>
                            <tr>
                                <th scope="row">13</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox13" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox13"></label></div></td>
                
                            </tr>
                            <tr>
                                <th scope="row">14</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox14" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox14"></label></div></td>
                               
                            </tr>
                            <tr>
                                <th scope="row">15</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox15" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox15"></label></div></td>
                           
                            </tr>
                            <tr>
                                <th scope="row">16</th>
                                <td>Chủ nhật</td>
                                <td style="color: red"><div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox16" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox16"></label></div></td>
                              
                            </tr>
                            </tbody>
                        </table>
                        <center><button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" style="margin-top: 20px">Lưu thay đổi</button></center>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" data-toggle="collapse" href="#collapseExample5" class="btn btn-primary">Chi tiết</button>
                    </div>
                </div>
            </div>
                
        </div>
    </div>

@endSection
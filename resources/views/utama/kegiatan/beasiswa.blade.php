@extends('utama.layouts.main2')
@section('sub', 'Tentang')
@section('title', 'Visi & Misi')

@section('content')
<!-- About Us ==== -->
<div class="section-area section-sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg m-b30">
                <h2 class="title-head ">Siswa<br /></h2>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Fixed Header Table</h3>

                                <div class="d-flex flex-row-reverse">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fa fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="height: 300px;">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>User</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Reason</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>183</td>
                                            <td>John Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-success">Approved</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>219</td>
                                            <td>Alexander Pierce</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-warning">Pending</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>657</td>
                                            <td>Bob Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-primary">Approved</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>175</td>
                                            <td>Mike Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-danger">Denied</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>134</td>
                                            <td>Jim Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-success">Approved</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>494</td>
                                            <td>Victoria Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-warning">Pending</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>832</td>
                                            <td>Michael Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-primary">Approved</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>982</td>
                                            <td>Rocky Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-danger">Denied</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-6">
                <div class="row">
                   <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                       <div class="feature-container">
                           <div class="feature-md text-white m-b20">
                               <a href="#" class="icon-cell"><img src="assets/images/icon/icon1.png" alt=""/></a> 
                           </div>
                           <div class="icon-content">
                               <h5 class="ttr-tilte">Our Philosophy</h5>
                               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                       <div class="feature-container">
                           <div class="feature-md text-white m-b20">
                               <a href="#" class="icon-cell"><img src="assets/images/icon/icon2.png" alt=""/></a> 
                           </div>
                           <div class="icon-content">
                               <h5 class="ttr-tilte">Kingster's Principle</h5>
                               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                       <div class="feature-container">
                           <div class="feature-md text-white m-b20">
                               <a href="#" class="icon-cell"><img src="assets/images/icon/icon3.png" alt=""/></a> 
                           </div>
                           <div class="icon-content">
                               <h5 class="ttr-tilte">Key Of Success</h5>
                               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                       <div class="feature-container">
                           <div class="feature-md text-white m-b20">
                               <a href="#" class="icon-cell"><img src="assets/images/icon/icon4.png" alt=""/></a> 
                           </div>
                           <div class="icon-content">
                               <h5 class="ttr-tilte">Our Philosophy</h5>
                               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div> --}}
        </div>
    </div>
</div>
<!-- About Us END ==== -->

@endsection

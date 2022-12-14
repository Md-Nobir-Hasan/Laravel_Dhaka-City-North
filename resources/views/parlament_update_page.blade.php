@extends('layout.master')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="title_page">আসন</h4>
            </div>
           
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">হোম</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">আসন</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    
    @if(session()->has('message'))
    @if(session()->get('message')=='0')
        <div class="alert alert-danger">
            <p>আপনার দেওয়া তথ্য বিদ্যমান আছে</p>

        </div>
    @elseif(session()->get('message')=='4')
        <div class="alert alert-success">
            <p>সফলভাবে ডিলেট হয়েছে</p>

        </div>
    @elseif(session()->get('message')=='1')
        <div class="alert alert-success">
            <p>সফলভাবে যোগ করা হয়েছে</p>

        </div>
    @elseif(session()->get('message')=='5')
        <div class="alert alert-success">
            <p>সফলভাবে আপডেট হয়েছে</p>

        </div>
    @endif
@endif

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>
</div>
@endif
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Add Parlament Informatiom -->
        <!-- ============================================================== -->
        <div class="col-12  w-75 m-auto">
            <div class="card">
                <div class="card-body">
                    <form action='/update_parlament/{{$data->id}}' method="POST" class="form-horizontal form-material mx-2">
                       @csrf 
                       @method('put')
                    <div class="form-group">
                            <!--<label class="col-sm-12">Add Parlament Informatiom</label>-->
                            <div class="col-sm-12">
                                <select name="name" class="form-select shadow-none form-control-line">
                                    <option value="ঢাকা">ঢাকা</option>
                                 </select>
                                <!-- <input name='name' type="text" placeholder="Name" class="form-control form-control-line"> -->
                                <input name='no' type="text" placeholder="আসন" class="form-control form-control-line" value="{{$data->no}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success text-white">যোগ করুন</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Add Parlament Informatiom -->
        <!-- ============================================================== -->






        <!-- ============================================================== -->
        <!-- Ravenue - page-view-bounce rate -->
        <!-- ============================================================== -->
     
        <!-- ============================================================== -->
        <!-- Ravenue - page-view-bounce rate -->
        <!-- ============================================================== -->









    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
     {{-- <footer> --}}
        <footer class="footer text-center">
           <div class="footer_login">
               All Rights Reserved by <br>
               <div id="tooltip">
                   <span id="tooltipText">এখানে ক্লিক করুন</span>
                   <a href="http://www.nazmuljewel.com/" target="_blank" style="color:black; font-size:23px; text-decoration:none;">নাজমুল আলম ভূইয়া জুয়েল </a> <br>
                </div>
               <span class="footer_span">বিজ্ঞান ও প্রযুক্তি বিষয়ক সম্পাদক</span>
               <div id="tooltip">
                    <span id="tooltipText">এখানে ক্লিক করুন</span>
                    <a href="https://www.albd-dcn.org/" target="_blank" style="color:green; font-size:23px; text-decoration:red;">ঢাকা মহানগর উত্তর আওয়ামী লীগ</a> 
                </div>
           </div>
        </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
    
@endsection
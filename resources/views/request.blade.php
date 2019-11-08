@extends('layout.otherPages')

@section('content')

 <!-- start section-form -->
        <div class="section-form">
            <div class="container">
                <h2 class="header-section-form">صفحة الطلب</h2>
                  @if (Session::has('success'))
                   <div class="alert alert-success">
                     <ul>
                      <li>{{ Session::get('success') }}</li>
                     </ul>
                   </div>
                  @endif
              
                <div class="body-section-form">
                    <form method="POST" action="requesr_add">
                        @csrf
                        <div class="row">
                            <div class="col col1"><label class="lbl lbl1">اسم المشروع</label></div>
                            <div class="col"><input class="inpt inpt1" type="text" name="project_name"  required="" /></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col col1"><label class="lbl lbl2">نوع النشاط</label></div>
                            <div class="col"><input class="inpt inpt2" type="text" name="type_activity" required /></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col col1"><label class="lbl lbl3">الفئه المستهدفة</label></div>
                            <div class="col"><input class="inpt inpt3" type="text" name="target_group"  required/></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col col1"><label class="lbl lbl4">وصف الطلب</label></div>
                            <div class="col"><textarea rows="7" class="inpt inpt4" name="description" required></textarea></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="text-center">
                            <input class="btn btn-success" type="submit" value="ارسال الطلب">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end section-form -->

@endsection
@extends('layout.otherPages')

@section('content')

        <!-- start header -->
        <div class="header4">
            <div class="overlay">
                <div class="container">
                    <div class="header-content"> نسعد بخدمتكم طوال الوقت :)</div>
                </div>
            </div>
        </div>
        <!-- end header -->

        <!-- start address -->
        <div class="address text-center">
            <div class="container">
                <div class="row">   
                    <div class="col">
                        <div class="item">
                            <div class="image"><img src="front/images/svg.png" /></div>
                            <div class="text text-uppercase">Design@Tkwim.com.sa</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="image"><img src="front/images/svg.png" /></div>
                            <div class="text text-uppercase">+966 11 222222</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item">
                            <div class="image"><img src="front/images/svg.png" /></div>
                            <div class="text text-uppercase">Riyadh exit 14</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end address -->

        <!-- start map -->
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830872278!2d-73.8395980420402!3d40.69766374873451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2z2YbZitmI2YrZiNix2YPYjCDYp9mE2YjZhNin2YrYp9iqINin2YTZhdiq2K3Yr9ip!5e0!3m2!1sar!2seg!4v1567289563132!5m2!1sar!2seg" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <!-- end map -->

        <!-- start contact -->
        <div class="contact">
            <div class="container">
            	@if (Session::has('success'))
                   <div class="alert alert-success">
                     <ul>
                      <li>{{ Session::get('success') }}</li>
                     </ul>
                   </div>
                  @endif
                <form method="POST" action="message_add">
                	@csrf
                    <h2 class="text-center">اتصل بنا</h2>
                    <div>
                        <label>الاسم</label>
                        <input type="text" class="input" name="name" required="" />
                    </div>
                    <div>
                        <label>البريد الالكتروني</label>
                        <input type="text" class="input" name="email" required />
                    </div>
                    <div>
                        <label>الرسالة</label>
                        <input type="text" class="input" name="message" required />
                    </div>
                    <div>
                        <label for="file">المرفقات <i class="fas fa-cloud-upload-alt"></i></label>
                        <input id="file" type="file" style="display: none" name="file" />
                    </div>
                    <div>
                        <input type="submit" value="ارسال" />
                    </div>
                </form>
            </div>
        </div>
        <!-- end contact -->

        <!-- start chat -->
        <div class="chat">
            <div class="container">
                <div class="chat-content">
                    <div class="close text-left">
                        <i class="far fa-times-circle"></i>
                        <span class="text-uppercase">close</span>
                    </div>
                    <div class="clearfix"></div>
                    <div class="window-title">
                        <div class="row">
                            <div class="col col1">Hi, Can I Help you?</div>
                            <div class="col col2"><i class="fas fa-arrow-circle-right"></i></div>
                            <div class="col col3"><img src="front/images/chat.png" /></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end chat -->


@endsection
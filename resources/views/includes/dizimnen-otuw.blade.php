
<section class="newsletter-section">
    <div class="container">
        <div class="newsletter-sec">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="newsz-ltr-text">
                        <h2>Dizimnen ótiń <br /> hám bizge qosılıń!</h2>
                        {{-- <a href="contacts.html" title="" class="btn-default">Dizimnen ótiw <i class="fa fa-long-arrow-alt-right"></i></a> --}}
                    </div>
                    <!--newsz-ltr-text end-->
                </div>
                <div class="col-lg-8">

                    <form class="newsletter-form" method="post" action="{{route('add_user')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" id="name" name="name" placeholder="Atıńız" required>
                                </div>
                                <!--form-group end-->
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="phone" value="" placeholder="Telefon: +99890 123 45 67" name="phone" maxlength="12" minlength="12"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required >
                                </div>
                                <!--form-group end-->
                            </div>
                            <div class="col-md-4">
                                <div class="form-group select-tg">
                                    <select name="course" id="course">
                                        @foreach ($courses as $course)
                                            <option value="{{$course->id_course}}">{{$course->course_name}}</option>
                                        @endforeach
                                      
                                    </select>
                                </div>
                                <!--form-group end-->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" placeholder="Qosımsha xabar"></textarea>
                                </div>
                                <!--form-group end-->
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <button type="submit" class="btn-default" id="submit">OK<i class="fa fa-long-arrow-alt-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--newsletter-form end-->

                </div>
            </div>
        </div>
        <!--newsletter-sec end-->
    </div>
</section>
 @extends('layout.login')
@section('content')
{{HTML::script('assets/widgets/wow/wow.js') }}

<script type="text/javascript">
    /* WOW animations */

    wow = new WOW({
        animateClass: 'animated',
        offset: 100
    });
    wow.init();
</script>


<img src="assets/image-resources/blurred-bg/blurred-bg-3.jpg" class="login-img wow fadeIn" alt="" />

<div class="center-vertical">
    <div class="center-content">

        <div class="col-md-3 center-margin">

            {{ Form::open(array('url' => 'admin/verify-login')) }}
                <div class="content-box wow bounceInDown modal-content">
                    <h3 class="content-box-header content-box-header-alt bg-default">
                        <span class="icon-separator">
                            <i class="glyph-icon icon-cog"></i>
                        </span>
                        <span class="header-wrapper">
                            Happy Moments
                            <small>Login to your account.</small>
                        </span>
                        <span class="header-buttons">
                            <!-- <a href="#" class="btn btn-sm btn-primary" title="">Sign Up</a> -->
                        </span>
                    </h3>
                    <div class="content-box-wrapper">
                        {{$errors->first('email')}}
                        @if(Session::has('loginError'))
                        {{ Session::get('loginError') }}
                        @endif
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" name="email" class="form-control"  placeholder="Username">
                                <span class="input-group-addon bg-blue">
                                    <i class="glyph-icon icon-envelope-o"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                <span class="input-group-addon bg-blue">
                                    <i class="glyph-icon icon-unlock-alt"></i>
                                </span>
                            </div>
                        </div>
                    

                        {{ Form::submit('Sign In', array('class' => 'btn btn-success btn-block')) }}
                      
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
@stop

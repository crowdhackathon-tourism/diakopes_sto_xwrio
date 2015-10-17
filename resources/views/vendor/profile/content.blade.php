<!-- Content -->
<div id="wrapper">
    @include('vendor.widget.map')
    <div id="content" class="mob-max">
        <div class="singleTop whiteBg">
            <div class="row mb20">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pb20">
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="pc-email"><a href="#" class="btn btn-icon btn-round btn-o btn-magenta btn-sm"><span class="fa fa-envelope-o"></span></a></div>
                        </div>
                        <div class="col-xs-6">
                            <div class="profile-card">
                                <div class="pc-avatar"><img src="images/avatar-1.png" alt="avatar"></div>
                                <div class="pc-name">John Smith</div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="pc-fav"><a href="#" class="btn btn-icon btn-round btn-o btn-red btn-sm"><span class="fa fa-heart-o"></span></a></div>
                        </div>
                    </div>
                    <ul class="pc-stats">
                        <li><span>280</span>Followers</li>
                        <li><span>345</span>Following</li>
                        <li><span>36</span>Posts</li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pb20">
                    <div class="pc-title osLight">Contact info</div>
                    <div class="row pb10">
                        <div class="col-xs-4"><strong>Phone</strong></div>
                        <div class="col-xs-8 align-right">(123) 456 789</div>
                    </div>
                    <div class="row pb10">
                        <div class="col-xs-4"><strong>Mobile</strong></div>
                        <div class="col-xs-8 align-right">888 123 456 789</div>
                    </div>
                    <div class="row pb10">
                        <div class="col-xs-4"><strong>Email</strong></div>
                        <div class="col-xs-8 align-right"><a href="mailto:#" class="text-green isThemeText">john.smith@email.com</a></div>
                    </div>
                    <div class="row pb10">
                        <div class="col-xs-4"><strong>Skype</strong></div>
                        <div class="col-xs-8 align-right">john.smith</div>
                    </div>
                    <div class="pc-social"><a href="#" class="btn btn-icon btn-facebook"><span class="fa fa-facebook"></span></a> <a href="#" class="btn btn-icon btn-twitter"><span class="fa fa-twitter"></span></a> <a href="#" class="btn btn-icon btn-google"><span class="fa fa-google-plus"></span></a> <a href="#" class="btn btn-icon btn-pinterest"><span class="fa fa-pinterest"></span></a></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 pb20">
                    <div class="pc-about osLight">About me</div>
                    <div class="pb20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat.</div>
                    <div class="pc-about osLight">What others said about me</div>
                    <div id="testimonials" class="carousel slide carousel-wb mb20" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                            <li data-target="#testimonials" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/avatar-2.png" class="testim-avatar" alt="avatar">
                                <div class="testim">
                                    <div class="testim-text">Fusce risus metus, placerat in consectetur eu, porttitor a est sed sed dolor lorem cras adipiscing</div>
                                    <div class="testim-name">Jane Smith</div>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/avatar-3.png" class="testim-avatar" alt="avatar">
                                <div class="testim">
                                    <div class="testim-text">Fusce risus metus, placerat in consectetur eu, porttitor a est sed sed dolor lorem cras adipiscing</div>
                                    <div class="testim-name">Rust Cohle</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pc-title osLight">Send me a message</div>
                    <form role="form">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" rows="3" placeholder="Type your message..."></textarea>
                        </div>
                        <a href="#" class="btn btn-green isThemeBtn">Send Message</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="rightContainer">
            <h3>Listed Properties</h3>
            @include('vendor.widget.results')
        </div>
    </div>
    <div class="clearfix"></div>
</div>
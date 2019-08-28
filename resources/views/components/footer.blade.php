<footer class="sq-footer footer-section">
    <!-- Rooms Pic Section Begin-->
   
    <!-- Rooms Pic Section End -->
    <div class="container">
       
        <div class="row p-37">
            <div class="col-lg-4">
                <div class="about-footer">
                    <h5>About Homes</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend tristique venenatis.
                        Maecenas a rutrum tellus nam vel semper nibh.</p>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-blog">
                    <h5>Latest Blog Posts</h5>

                    <div class="single-blog">
                        <div class="lt-side">
                            <img src="img/footer-blog-1.jpg" alt="">
                        </div>
                        <div class="rt-side">
                            <h6>How to find the perfect area for<br> your next house.</h6>
                            <div class="blog-time">
                                <i class="flaticon-clock"></i>
                                <span>5 min</span>
                            </div>
                         
                        </div>
                    </div>
                    <div class="single-blog">
                        <div class="lt-side">
                            <img src="img/footer-blog-2.jpg" alt="">
                        </div>
                        <div class="rt-side">
                            <h6>How to find the perfect area for<br> your next house.</h6>
                            <div class="blog-time">
                                <i class="flaticon-clock"></i>
                                <span>5 min</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-address">
                    <h5>Get In Touch</h5>
                    <ul>
                        <li><i class="flaticon-placeholder"></i><span>132 Liberty Streetelit, Plano, Texas</span>
                        </li>
                        <li><i class="flaticon-envelope"></i><span>hello@home.com</span></li>
                        <li><i class="flaticon-smartphone"></i><span>214-805-4428</span></li>
                    </ul>
                    <p>Monday – Friday: 9 am – 5 pm</p>
                    <p>Saturday: 9 am – 1pm</p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- Js Plugins -->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<script>
    // Code for editing the userInput Page
        $(document).ready(function() {
          $('#btn_edit').click(function(event){
              event.preventDefault()
              $("input.form-control").attr("readonly", false);
              $(this).hide();
              $('#btn_cancel, #btn_submit').show();
          });
          $('#btn_cancel').click(function(event){
              event.preventDefault();
              $("input.form-control").attr("readonly", true);
              $('#btn_cancel, #btn_submit').hide();
  
              $('#btn_edit').show();
          });
    });  
      </script>
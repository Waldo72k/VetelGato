@extends('layout.plantilla')

@section('content')

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Acerca de nosotros</h3>
                <p>En la veterinaria el GATO, sabemos que las mascotas son mucho más que simples animales. Para muchas personas, son miembros de la familia, compañeros inseparables y fuente de amor incondicional. Es por eso que nuestro objetivo es ofrecer el mejor cuidado y atención posible para tus mascotas.</p>
            </div>
        </div>
    </div>
</section>

@endsection



<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xs-12">
                <div class="left-text-content">
                    <p>Copyright &copy; 2020 Breezed Co., Ltd. 
                    
                    - Design: <a rel="nofollow noopener" href="https://templatemo.com">TemplateMo</a></p>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12">
                <div class="right-text-content">
                        <ul class="social-icons">
                            <li><p>Follow Us</p></li>
                            <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                            <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-twitter"></i></a></li>
                            <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-linkedin"></i></a></li>
                            <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery -->
<script src="{{asset('js/jquery-2.1.0.min.js')}}"></script>

<!-- Bootstrap -->
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Plugins -->
<script src="{{asset('js/owl-carousel.js')}}"></script>
<script src="{{asset('js/scrollreveal.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/imgfix.min.js')}}"></script> 
<script src="{{asset('js/slick.js')}}"></script> 
<script src="{{asset('js/lightbox.js')}}"></script> 
<script src="{{asset('js/isotope.js')}}"></script> 

<!-- Global Init -->
<script src="{{asset('js/custom.js')}}"></script>

<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
        setTimeout(function() {
          $("."+selectedClass).fadeIn();
          $("#portfolio").fadeTo(50, 1);
        }, 500);
            
        });
    });

</script>

</body>
</html>
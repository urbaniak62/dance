

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    
    
        
     <video autoplay="" class="l_o_h" loop="" playsinline="" poster="https://ak3.picdn.net/shutterstock/videos/25457273/thumb/1.jpg"
        style="width:100%;background-size:cover;margin:-7% 0 0 0 ;">
        <source src="<?php echo e(asset('video/dance1.mp4')); ?>" type="video/mp4">
    </video>
    <?php if(Route::has('login')): ?>
    
        <?php if(auth()->guard()->check()): ?>
        <a href="<?php echo e(url('/home')); ?>">accueil</a>
        <?php endif; ?>
        
    <?php endif; ?>

    <h1 id="titre" data-text="DECLIC DANCE" >DECLIC DANCE</h1>


</div>
<div class="container">
    <div class="content mot">
        <h1>LE MOT DU PRESIDENT :</h1>
        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae eligendi, quo eos
            rerum iusto laudantium vel accusantium deserunt nemo repudiandae provident quibusdam
            dolores obcaecati nostrum soluta animi quidem cum corrupti? Lorem ipsum dolor sit, amet consectetur
            adipisicing elit.
            Maiores eaque sequi esse maxime repudiandae natus porro culpa totam magnam nemo velit inventore soluta, a
            ullam expedita.
            Ut voluptas esse sed.</h4>
    </div>
    <h2>Ce que l on vous propose :</h2>
</div>
<div class="container programme">
    <div class="box">
        <div class="thumb">
            <img src="<?php echo e(asset('img/tango.jpg')); ?>" alt="">
        </div>
        <div class="detail">
            <div class="content">
                <i class="fas fa-music"></i>
                <h3>Rock</h3>
                <a href="#">En savoir plus</a>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="thumb">
            <img src="<?php echo e(asset('img/salsa.jpg')); ?>" alt="">
        </div>
        <div class="detail">
            <div class="content">
                <i class="fas fa-music"></i>
                <h3>Tango</h3>
                <a href="#">En savoir plus</a>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="thumb">
            <img src="<?php echo e(asset('img/salsa1.jpg')); ?>" alt="">
        </div>
        <div class="detail">
            <div class="content">
                <i class="fas fa-music"></i>
                <h3>chacha</h3>
                <a href="#">En savoir plus</a>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="thumb">
            <img src="<?php echo e(asset('img/Tango.jpg')); ?>" alt="">
        </div>
        <div class="detail">
            <div class="content">
                <i class="fas fa-music"></i>
                <h3>pasodoble</h3>
                <a href="#">En savoir plus</a>
            </div>
        </div>
    </div>

</div>

<footer>
    <div class="content">
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
        <div style='overflow:hidden;height:360px;width:560px;color:black;box-shadow: 0 5px 20px rgba(0, 0, 0, 1);'>

            <div id='gmap_canvas' style='height:360px;width:566px;'></div>
            <div><small><a href="https://embedgooglemaps.com/it/">https://embedgooglemaps.com/it/</a></small></div>
            <div><small><a href="http://botonmegusta.org/">boton me gusta en mi web in ! Read</a></small></div>
            <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
        </div>
        <script type='text/javascript'>
            function init_map() {
                var myOptions = {
                    zoom: 10,
                    center: new google.maps.LatLng(50.4520393, 2.9385531000000356),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                marker = new google.maps.Marker({
                    map: map,
                    position: new google.maps.LatLng(50.4520393, 2.9385531000000356)
                });
                infowindow = new google.maps.InfoWindow({
                    content: '<strong>declic dance</strong><br>centre culturelle  RUE ARISTIDE BRIAND  62710 COURRIERES<br>'
                });
                google.maps.event.addListener(marker, 'click', function () {
                    infowindow.open(map, marker);
                });
                infowindow.open(map, marker);
            }
            google.maps.event.addDomListener(window, 'load', init_map);

        </script>
        <div class="contact">
            <h3>Nos horaires :</h3>
            <div class="horaires">
                <ul class="gp2">
                    <li class="premier">2 em groupe :</li>
                    <li>lundi / jeudi </li>
                    <li>de 19h15 à 20h15.</li>
                </ul>
                <ul class="gp1">
                    <li class="premier">1 er groupe :</li>
                    <li>lundi / jeudi </li>
                    <li>de 20h15 à 21h15.</li>
                </ul>
            </div>
            <div class="rens-contact" style="text-align:left; whidth:50%;">
                <h3>Contact</h3>
                <ul>
                    <li>Mr fsjhfsjd fhsjhfj</li>
                    <li>tel : 0632323232</li>
                </ul>
                <ul>
                    <li>Mme ururururu yyyyuufuf :</li>
                    <li>tel: 0633333333</li>
                </ul>
            </div>
        
    </div>
</footer>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
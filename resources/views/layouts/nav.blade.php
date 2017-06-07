<?php $route = \Route::currentRouteName(); ?>
<div class="main-menu navbar-collapse collapse">
    <ul class="main-nav">
        <li>
            <a href="{{ url('/') }}">Home</a>
        </li>
        <!--   <li>
               <a href="promotion">Promotion</a>
           </li> -->
           <li>
               <a href="{{ url('/menu') }}">Menu</a>
           </li>
           <!-- <li>
                    <a href="reservation">Reservation</a>
                </li>

           <li>
               <a href="blog">Blog</a>
           </li>-->
        <li>
            <a href="{{ url('/gallery') }}">Gallery</a>
        </li>
        <li>
            <a href="{{ url('/contact') }}">Contact</a>
        </li>

    </ul>
</div><!-- /.navbar-collapse -->
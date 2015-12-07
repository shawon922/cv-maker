<!DOCTYPE html>
<html>
    <head>
        <title>
            @yield('title')
            {{ ' | Make your professional cv' }}
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {!! Html::style('css/bootstrap-3.3.5.min.css') !!}
        {!! Html::style('css/bootstrap.min.css') !!}        
        {!! Html::style('css/bootstrap-theme.css') !!}
        {!! Html::style('css/elegant-icons-style.css') !!}
        {!! Html::style('css/font-awesome.min.css') !!}
        {!! Html::style('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') !!}
        {!! Html::style('assets/fullcalendar/fullcalendar/fullcalendar.css') !!}
        {!! Html::style('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') !!}

        {!! Html::style('css/owl.carousel.css') !!}
        {!! Html::style('css/jquery-jvectormap-1.2.2.css') !!}

        {!! Html::style('css/fullcalendar.css') !!}
        {!! Html::style('css/widgets.css') !!}

        {!! Html::style('css/style.css') !!}
        {!! Html::style('css/style-responsive.css') !!}
        {!! Html::style('css/xcharts.min.css') !!}
        {!! Html::style('css/jquery-ui-1.10.4.min.css') !!}


        <style>
            
        </style>
    </head>
    <body>
        <section id="container" class="">

            @include('includes.header')

            @include('includes.left_menu')

            <section id="main-content">
                <section class="wrapper">
                    @yield('content')
                </section>

                <div class="footer">
                    
                </div>
            </section>
        </section>


        {!! Html::script('js/jquery.js') !!}
        {!! Html::script('js/jquery-ui-1.10.4.min.js') !!}
        {!! Html::script('js/jquery-1.8.3.min.js') !!}
        {!! Html::script('js/jquery-ui-1.9.2.custom.min.js') !!}        
        {!! Html::script('js/bootstrap.min.js') !!}
        {!! Html::script('js/jquery.scrollTo.min.js') !!}
        {!! Html::script('js/jquery.nicescroll.js') !!}
        {!! Html::script('assets/jquery-knob/js/jquery.knob.js') !!}
        {!! Html::script('js/jquery.sparkline.js') !!}
        {!! Html::script('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') !!}
        
        {!! Html::script('js/owl.carousel.js') !!}
        {!! Html::script('js/fullcalendar.min.js') !!}
        {!! Html::script('assets/fullcalendar/fullcalendar/fullcalendar.js') !!}
        {!! Html::script('js/calendar-custom.js') !!}
        {!! Html::script('js/jquery.rateit.min.js') !!}
        {!! Html::script('js/jquery.customSelect.min.js') !!}
        {!! Html::script('assets/chart-master/Chart.js') !!}
        {!! Html::script('js/scripts.js') !!}
        {!! Html::script('js/sparkline-chart.js') !!}
        {!! Html::script('js/easy-pie-chart.js') !!}
        {!! Html::script('js/jquery-jvectormap-1.2.2.min.js') !!}
        {!! Html::script('js/jquery-jvectormap-world-mill-en.js') !!}
        {!! Html::script('js/xcharts.min.js') !!}
        {!! Html::script('js/jquery.autosize.min.js') !!}
        {!! Html::script('js/jquery.placeholder.min.js') !!}
        {!! Html::script('js/gdp-data.js') !!}
        
        {!! Html::script('js/morris.min.js') !!}
        {!! Html::script('js/sparklines.js') !!}
        {!! Html::script('js/charts.js') !!}

        {!! Html::script('js/jquery.slimscroll.min.js') !!}
        
  
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
      
      /* ---------- Map ---------- */
    $(function(){
      $('#map').vectorMap({
        map: 'world_mill_en',
        series: {
          regions: [{
            values: gdpData,
            scale: ['#000', '#000'],
            normalizeFunction: 'polynomial'
          }]
        },
        backgroundColor: '#eef3f7',
        onLabelShow: function(e, el, code){
          el.html(el.html()+' (GDP - '+gdpData[code]+')');
        }
      });
    });



  </script>
        

        <script type="text/javascript">
            function check() {
                return confirm('Are you sure ?');
            }
        </script>
    </body>
</html>

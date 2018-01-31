      <aside class="col-md-4 blog-sidebar">

        <div class="p-3">
          <h4 class="font-italic">Archives</h4>
          <ol class="list-unstyled mb-0" style="width:150px">

            @foreach ($posts as $stats)
              <li><a href="#">{{$stats['month'].' '.$stats['year'] }}</a></li>
            @endforeach

          </ol>
        </div>

        <!-- <div class="p-3">
            <img src="/images/sidebar.png", alt="Product image cap" style="width: 369px;">
        </div> -->

        <div class="p-3">
          <h4 class="font-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </aside><!-- /.blog-sidebar -->

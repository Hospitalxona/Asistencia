
          
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ URL::asset('/images/img.jpg') }}" alt="">{{Sentinel::getUser()->first_name.' ' .Sentinel::getUser()->last_name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
            </nav>
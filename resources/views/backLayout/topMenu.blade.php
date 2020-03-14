
          
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
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                   
                    <li><a href="javascript:;">Cerrar Sesión</a></li>
                
      <li><button class="btn btn-primary btn-lg btn-block register-button" type="submit" >Logout</button> </li>
                       {!! Form::close() !!}
                  </ul>
                </li>

               
                      
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
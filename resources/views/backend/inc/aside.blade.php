<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
      <div class="app-brand">
        <a href="{{ route('dashboard') }}">
          <svg
            class="brand-icon"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid"
            width="30"
            height="33"
            viewBox="0 0 30 33"
          >
            <g fill="none" fill-rule="evenodd">
              <path
                class="logo-fill-blue"
                fill="#7DBCFF"
                d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
              />
              <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
            </g>
          </svg>
          <span class="brand-name">admin</span>
        </a>
      </div>
      <!-- begin sidebar scrollbar -->
      <div class="sidebar-scrollbar">

        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">
          

          
            <li  class="has-sub active expand" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">USERS</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="dashboard"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  
                  
                    
                      <li  class="active" >
                        <a class="sidenav-item-link" href="{{ route('dashboard.all_user') }}">
                          <span class="nav-text">ALL USERS</span>
                          
                        </a>
                      </li>
     

                  
                </div>
              </ul>
            </li>
          

          

          
            <li  class="has-sub active" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                aria-expanded="false" aria-controls="ui-elements">
                <i class="mdi mdi-folder-multiple-outline"></i>
                <span class="nav-text">CATEGORY</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="ui-elements"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  

                  <li  class="active" >
                    <a class="sidenav-item-link" href="{{ route('dashboard.all_category') }}">
                      <span class="nav-text">ALL category</span>
                      
                    </a>
                  </li>


                  <li  class="active" >
                    <a class="sidenav-item-link" href="{{ route('dashboard.category.create') }}">
                      <span class="nav-text">ADD category</span>
                      
                    </a>
                  </li>

                  
                </div>
              </ul>
            </li>
          

          

          
            <li  class="has-sub active" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                aria-expanded="false" aria-controls="charts">
                <i class="mdi mdi-chart-pie"></i>
                <span class="nav-text">comments</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="charts"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  
                  
                    
                      <li class="active">
                        <a class="sidenav-item-link" href="{{ route('comments.all_comments') }}">
                          <span class="nav-text">all comments</span>
                          
                        </a>
                      </li>
                    
                  

                  
                </div>
              </ul>
            </li>
          

          

          
            <li  class="has-sub active" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                aria-expanded="false" aria-controls="pages">
                <i class="mdi mdi-image-filter-none"></i>
                <span class="nav-text">CONTACTS</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="pages"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  
                  
                    
                      <li class="active" >
                        <a class="sidenav-item-link" href="{{ route('dashboard.all_contacts') }}">
                          <span class="nav-text">all contacts</span>
                          
                        </a>
                      </li>
                    


                  

                  
                </div>
              </ul>
            </li>
          

          

          
            <li  class="has-sub active" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#documentation"
                aria-expanded="false" aria-controls="documentation">
                <i class="mdi mdi-book-open-page-variant"></i>
                <span class="nav-text">SUB CATEGORY</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="documentation"
                data-parent="#sidebar-menu">
                <div class="sub-menu">


                  
                  
                    
                      <li class="active" >
                        <a class="sidenav-item-link" href="{{ route('dashboard.subCategorys') }}">
                          <span class="nav-text">all sub category</span>
                          
                        </a>
                      </li>

                      <li class="active" >
                        <a class="sidenav-item-link" href="{{ route('dashboard.subCategorys.create') }}">
                          <span class="nav-text">add sub category</span>
                          
                        </a>
                      </li>


                  
                </div>
              </ul>
            </li>
          


            <li  class="has-sub active" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ddocumentation"
                aria-expanded="false" aria-controls="documentation">
                <i class="mdi mdi-package"></i>
                <span class="nav-text">SUB SUB CATEGORY</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="ddocumentation"
                data-parent="#sidebar-menu">
                <div class="sub-menu">


                  
                  
                    
                      <li class="active" >
                        <a class="sidenav-item" href="{{ route('dashboard.subsubCategorys') }}">
                          <span class="nav-text">all  sub sub category</span>
                          
                        </a>
                      </li>

                      <li class="active" >
                        <a class="sidenav-item-link" href="{{ route('dashboard.subsubCategorys.create') }}">
                          <span class="nav-text">add sub sub category</span>
                          
                        </a>
                      </li>


                  
                </div>
              </ul>
            </li>
          
          
            
            <li  class="has-sub active" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#aaaaddocumentation"
                aria-expanded="false" aria-controls="documentation">
                <i class="mdi mdi-alarm-bell"></i>
                <span class="nav-text">SERVICE</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="aaaaddocumentation"
                data-parent="#sidebar-menu">
                <div class="sub-menu">


                  
                  
                    
                      <li class="active" >
                        <a class="sidenav-item" href="{{ route('dashboard.all_service') }}">
                          <span class="nav-text">all service</span>
                          
                        </a>
                      </li>

                      <li class="active" >
                        <a class="sidenav-item-link" href="{{ route('dashboard.all_service.create') }}">
                          <span class="nav-text">add service</span>
                          
                        </a>
                      </li>


                  
                </div>
              </ul>
            </li>



            
            <li  class="has-sub active" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#aaddocumentation"
                aria-expanded="false" aria-controls="documentation">
                <i class="mdi mdi-paw"></i>
                <span class="nav-text">TEAM</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="aaddocumentation"
                data-parent="#sidebar-menu">
                <div class="sub-menu">


                  
                  
                    
                      <li class="active" >
                        <a class="sidenav-item" href="{{ route('dashboard.all_team') }}">
                          <span class="nav-text">all team</span>
                          
                        </a>
                      </li>

                      <li class="active" >
                        <a class="sidenav-item-link" href="{{ route('dashboard.all_team.create') }}">
                          <span class="nav-text">add team</span>
                          
                        </a>
                      </li>


                  
                </div>
              </ul>
            </li>



            
            <li  class="has-sub active" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dssdocumentation"
                aria-expanded="false" aria-controls="documentation">
                <i class="mdi mdi-dolby"></i>
                <span class="nav-text">PROTFOLIO</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="dssdocumentation"
                data-parent="#sidebar-menu">
                <div class="sub-menu">


                  
                  
                    
                      <li class="active" >
                        <a class="sidenav-item" href="{{ route('dashboard.all_protfolie') }}">
                          <span class="nav-text">all protfolie</span>
                          
                        </a>
                      </li>

                      <li class="active" >
                        <a class="sidenav-item-link" href="{{ route('dashboard.all_protfolie.create') }}">
                          <span class="nav-text">add protfolie</span>
                          
                        </a>
                      </li>


                  
                </div>
              </ul>
            </li>




            
            <li  class="has-sub active" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dddocumentation"
                aria-expanded="false" aria-controls="documentation">
                <i class="mdi mdi-page-previous-outline"></i>
                <span class="nav-text">POSTS</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="dddocumentation"
                data-parent="#sidebar-menu">
                <div class="sub-menu">


                  
                  
                    
                      <li class="active" >
                        <a class="sidenav-item" href="{{ route('dashboard.all_posts') }}">
                          <span class="nav-text">all posts</span>
                          
                        </a>
                      </li>

                      <li class="active" >
                        <a class="sidenav-item-link" href="{{ route('dashboard.all_posts.create') }}">
                          <span class="nav-text">add posts</span>
                          
                        </a>
                      </li>


                  
                </div>
              </ul>
            </li>



        </ul>

      </div>

      <hr class="separator" />


    </div>
  </aside>
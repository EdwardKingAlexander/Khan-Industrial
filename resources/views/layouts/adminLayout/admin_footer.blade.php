
      <nav class="navbar fixed-bottom navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="{{url('/admin/dashboard')}}">Khan Industrial Supply</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">

                <li class="nav-item active">
                <a class="nav-link" href="{{url('/logout')}}"> Log Out <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/settings')}}">Settings</a>
                </li>
               
            
            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/customers')}}">Customers</a>
            </li>

        <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/accounting')}}">Accounting</a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/community')}}">Community</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/marketing')}}">Marketing</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="{{url('/admin/investors')}}">Investor Relations</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/legal')}}">Legal</a>
                  </li>
      
              
              </ul>
            </div>
          </nav>
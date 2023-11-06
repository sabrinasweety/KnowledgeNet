
              <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
         
		<li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/')}}">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('unpaid.list')}}">
                  <span data-feather="file"></span>
                  Unpaid-Courses
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('paid.list')}}">
                  <span data-feather="shopping-cart"></span>
                  Paid-Courses
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('teacher.list')}}">
                  <span data-feather="users"></span>
                  Teachers
                  </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('student.list')}}">
                  <span data-feather="bar-chart-2"></span>
                  Students
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('book.list')}}">
                  <span data-feather="layers"></span>
                  Books
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/customer/form">
                  <span data-feather="layers"></span>
                  Customer
                </a>
              </li>
              
            </ul>

            
            
          </div>
        </nav>
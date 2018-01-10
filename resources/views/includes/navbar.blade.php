<img src="{{ asset('/imgs/background.jpg') }}" style="z-index: -1;position: fixed">
<nav class="navbar navbar-inverse navbar-expand-lg" style="background-color: #43ac6a">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <a class="navbar-brand" href="{{ url('/') }}" style="font-size: 2em;letter-spacing: 0.05em;">สวนพฤกษศาสตร์โรงเรียนเตรียมอุดมศึกษา</a>
  </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/know_us') }}" style="font-size: 1.5em;">รู้จักสวนพฤกษศาสตร์</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/plant_list') }}" style="font-size: 1.5em">ข้อมูลพรรณไม้</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/contact_us') }}" style="font-size: 1.5em">ติดต่อเรา</a>
        </li>
      </ul>
    </div>
</nav>

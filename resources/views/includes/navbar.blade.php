<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #eaf9ea;">
  <a class="navbar-brand" href="{{ url('/') }}">หน้าแรก</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/know_us') }}">สวนพฤกษศาสตร์อะไร</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/committee') }}">อาจารย์และบุคลากร</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/plant_list') }}">ข้อมูลพรรณไม้</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/contact_us') }}">ติดต่อเรา</a>
      </li>
    </ul>
  </div>
</nav>
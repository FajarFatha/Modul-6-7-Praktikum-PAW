<section class="navbar">
  <div class="container">
      <nav>
          <h6>Simple Siakad</h6>
          <ul class="menu">
              <li>
                  <a href="/" {{ $title == "Home" ? 'class=active' : "" }}>Data Mahasiswa</a>
              </li>
              <li>
                  <a href="/inputdata" {{ $title == "input" ? 'class=active' : "" }}>Input Data</a>
              </li>
              <li>
                  <a href="/about" {{ $title == "About" ? 'class=active' : "" }}>About Us</a>
              </li>
          </ul>
      </nav>
  </div>
</section>
                <li class="start {{\App\Helper\ViewHelper::activeRoute('dosen/absen')}}">
                    <a href="{{url('/dosen/absen')}}">
                        <i class="fa fa-list"></i>
                        <span class="title">Absensi</span>
                    </a>
                </li>               
                <li class="start {{\App\Helper\ViewHelper::activeRoute('dosen/materi')}}">
                    <a href="{{url('/dosen/materi')}}">
                        <i class="icon-list-1"></i>
                        <span class="title">Materi</span>
                    </a>
                </li>               
                <li class="start {{\App\Helper\ViewHelper::activeRoute('dosen/tugas')}}">
                    <a href="{{url('/dosen/tugas')}}">
                        <i class="icon-check"></i>
                        <span class="title">Tugas</span>
                    </a>
                </li>               
                <li class="start {{\App\Helper\ViewHelper::activeRoute('dosen/nilai')}}">
                    <a href="{{url('/dosen/nilai')}}">
                        <i class="icon-page"></i>
                        <span class="title">Nilai</span>
                    </a>
                </li>
                <li class="start {{\App\Helper\ViewHelper::activeRoute('dosen/mahasiswa')}}">
                    <a href="{{url('/dosen/mahasiswa')}}">
                        <i class="fa fa-user"></i>
                        <span class="title">    Mahasiswa </span>
                    </a>
                </li>
                <li class="start {{\App\Helper\ViewHelper::activeRoute('dosen/setting')}}">
                    <a href="#setting" aria-expanded="false" data-toggle="collapse">
                        <i class="fa fa-cog"></i>
                        <span class="title">Setting</span>
                    </a>
                    <ul id="setting" class="collapse list-unstyled">
                        <li><a href="#">Kartu</a></li>
                        <li><a href="#">Profile</a></li>
                    </ul>
                </li>
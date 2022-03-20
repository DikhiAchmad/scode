{{-- footer --}}
<footer class="bg-navy py-5 mt-5">
    <div class="container py-3">
        <div class="row">
            <div class="col-md-3 me-5">
                <img src="{{ asset('assets/image/Scode-whit.png') }}" alt="">
                <p class="desc-footer my-4">platform edukasi tentang programming dalam bahasa Indonesia. let's work
                    and
                    always be creative.</p>
                <div class="row">
                    <div class="col-2">
                        <a href=""><img src="{{ asset('assets/image/icon/ig.png') }}" alt=""></a>
                    </div>
                    <div class="col-2">
                        <a href=""><img src="{{ asset('assets/image/icon/in.png') }}" alt=""></a>
                    </div>
                    <div class="col-2">
                        <a href=""><img src="{{ asset('assets/image/icon/yt.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h1 class="title-menu">Menu</h1>
                <div class="row menu-section">
                    <div class="col-12 menu">
                        <a href="{{ url('/') }}" class="">Home</a>
                    </div>
                    <div class="col-12 menu">
                        <a href="{{ url('kelas') }}" class="">Kelas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<div class="bg-navy text-center py-4">
    <p class="copyright">Copyright @ {{ date('Y') }} DIkhi Achmad Dani, All right Reserved.</p>
</div>
{{-- end footer --}}

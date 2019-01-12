<div class="sidebar-menu">

    <div class="sidebar-header">
        <div class="logo">
            <a href="#" ><h5>Alat Dokter</h5></a>
        </div>
    </div>

    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="active">
                        <a href="/home" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Produk</span></a>
                            <ul>
                                <li><a href="{{ route('table_barang.index')}}">Barang</a></li>
                                <li><a href="{{ route('kategori.index')}}">Kategori</a></li>
                                <li><a href="{{ route('gambar.index')}}">Gambar</a></li>
                            </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Artikel</span></a>
                            <ul>
                                <li><a href="{{ route('kategoriartikels.index') }}">Kategori Artikel</a></li>
                                <li><a href="{{ route('artikel.index') }}">Artikel</a></li>
                            </ul>
                </ul>
            </nav>
        </div>
    </div>
</div>

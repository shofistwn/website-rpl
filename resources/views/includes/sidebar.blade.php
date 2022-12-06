
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

                    <div class="sidebar ps-lg-4">

                        <div class="sidebar-item search-form">
                            <h3 class="sidebar-title">Search</h3>
                            <form action="{{ route('artikel.search') }}" method="GET" class="mt-3">
                                <input type="text" name="judul" value="{{ old('judul') }}">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <div class="sidebar-item categories">
                            <h3 class="sidebar-title">Categories</h3>
                            <ul class="mt-3">
                                @php
                                    $dataKategori = DB::table('artikel')->select('kategori')->groupBy('kategori')->get();                                    
                                @endphp
                                @forelse ($dataKategori as $kategori)
                                    <li><a href="{{ route('artikel.category', $kategori->kategori) }}">{{ $kategori->kategori }}</a></li>
                                @empty
                                    <li>Tidak ada kategori</li>
                                @endforelse
                            </ul>
                        </div><!-- End sidebar categories-->

                        <div class="sidebar-item recent-posts">
                            <h3 class="sidebar-title">Recent Posts</h3>

                            <div class="mt-3">
                                @php
                                    $dataArtikel = DB::table('artikel')->orderBy('id', 'desc')->limit(5)->get();
                                @endphp

                                @forelse ($dataArtikel as $artikel)
                                <div class="post-item mt-3">
                                    <img src="{{ Storage::url('public/artikel/') . $artikel->foto }}" alt="" class="flex-shrink-0">
                                    <div>
                                        <h4><a href="{{ route('artikel.show', $artikel->slug) }}">{{ $artikel->judul }}</a></h4>
                                        <time datetime="{{ date('Y-m-d', strtotime($artikel->created_at)) }}">{{ date('M d, Y', strtotime($artikel->created_at)) }}</time>
                                    </div>
                                </div><!-- End recent post item-->
                                @empty
                                    
                                @endforelse

                            </div>

                        </div><!-- End sidebar recent posts-->

                    </div><!-- End Blog Sidebar -->

                </div>
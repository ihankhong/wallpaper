<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Wallpaper</title>
    <link href="{{ mix('/css/vendor.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('/js/manifest.js') }}"></script>
    <script src="{{ mix('/js/vendor.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
</head>
<body>
    <article class="container">
        <p class="brandT">品牌介紹</p>
        {{--  banner start  --}}
        <div class="mb-4">
            <a href="#" class="img-link"><img src="{{ asset('images/WD-01.jpg') }}" class="img-fluid image" alt="Banner image"></a>
        </div>
        {{--  banner end  --}}
        {{--  品牌精神 start  --}}
        <div class="card mb-4">
            <a href="#" class="img-link"><img src="{{ asset('images/WD-02.jpg') }}" class="card-img-top image" alt="品牌精神"></a>
            <div class="card-body pt-65">
                <h1 class="card-title text-center"><span class="title fs-35 px-3 py-3">為了更豐富，更舒適的生活</span></h1>
                <p class="card-text fo-c1">在工作空間中，實用性和功能性。專為商店和出色的可維護性而設計。在娛樂和文化的空間，新鮮和復雜。考慮醫療和福利設施的衛生和安全。在日常生活中的所有情況下，室內都需要各種角色。睡覺，放鬆，工作，玩耍，醫治。我想創造一個包含我們所有生活場景的更加豐富的環境。我們Sincol集團追求內飾作為一種生活方式的提高，並為所有的空間提供舒適和愉悅。</p>
            </div>
        </div>
        {{--  品牌精神 end  --}}
        {{--  歷史定位 start  --}}
        <div class="card mb-4">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="p-0 px-md-35 py-md-35 bg">
                        <a href="#" class="img-link"><img src="{{ asset('images/WD-03.jpg') }}" class="card-img image" alt="歷史定位"></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body pt-65">
                        <h2 class="card-title text-center"><span class="title fs-35 px-3 py-3">享受壁紙帶來的裝飾性與功能</span></h2>
                        <p class="card-text fo-c2">為了應對空間設計日益增長的需求，設計出一本豐富的材料變化與優良的品質壁紙書，傳播空間變化的可能性與壁紙使用的多樣化。人們試圖通過各種方式在居住，裝飾和內部的地方尋求舒適和美感。例如，平安時代的古坑房屋壁畫，日本榻榻米和折疊屏風等。這些是人們在生活中創造的日常室內裝飾，今天仍然是一種文化。在任何時代，都有一個以壁紙裝飾著自己的室內空間，得到更好的放鬆，舒適和美麗空間。我們要創造一個包含生命的內部空間，並不斷地為時代和人們的興趣和目的提供各種形式。我們的Sincol集團為實現更加豐富和舒適的生活而廣泛活躍，並將室內創作視為一種生活文化。</p>
                    </div>
                </div>
            </div>
        </div>
        {{--  歷史定位 end  --}}
        {{--  品牌特色 start  --}}
        <div class="card mb-4">
            <div class="p-0 px-md-35 py-md-35">
                <div class="wrapper">
                    <a href="#" class="img-link"><img src="{{ asset('images/WD-04.jpg') }}" class="card-img image" alt="品牌特色"></a>
                    <div class="wrapper-a">
                        <div class="content-box">
                            <div class="flex-row">
                                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 bg-white px-35 py-35 pt-65 px-md-35 py-md-35">
                                    <h5 class="card-title text-center mb-md-0"><span class="title no-bg px-3 py-3">多種功能性壁紙</span></h5>
                                    <p class="card-text fo-c2 mb-0">SINCOL提供像是，防火性能、抑菌性能、防污性能等等不同機能性壁紙，進一步滿足您對壁紙的需求。</p>
                                    <div class="btn-group btn-block mt-3">
                                        <a href="#" class="btn btn-wallpaper btn-img mx-auto" tabindex="-1" role="button">欣賞更多壁紙</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--  品牌特色 end  --}}
        {{--  經典風格 start  --}}
        <div class="card mb-4">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="p-0 px-md-35 py-md-35 bg">
                        <a href="#" class="img-link"><img src="{{ asset('images/WD-05.png') }}" class="card-img image" alt="經典風格"></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body pt-65">
                        <h5 class="card-title text-center"><span class="title px-3 py-3">辦公商用空間壁紙系列</span></h5>
                        <p class="card-text fo-c2 mb-0">木紋適用空間，木紋壁紙辦公室餐廳從夢幻般的花香到粗​​獷的條紋；這個精緻的系列將 Madcap Cottage 的男士們的個性變成現實。</p>
                        <p class="card-text fo-c2 mb-0">木紋適用空間，木紋壁紙辦公室餐廳工業風旅館從夢幻般的花香到粗​​獷的條紋；這個精緻的系列將 Madcap Cottage 的男士們的個性變成現實。</p>
                        <div class="btn-group btn-block mt-3">
                            <a href="#" class="btn btn-wallpaper btn-img mx-auto" tabindex="-1" role="button">欣賞更多壁紙</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--  經典風格 end  --}}
        {{--  案例 start  --}}
        <div class="card mb-4">
            <div class="p-0 px-md-35 py-md-35">
                <div class="wrapper">
                    <a href="#" class="img-link"><img src="{{ asset('images/WD-06.png') }}" class="card-img image" alt="案例"></a>
                    <div class="wrapper-a">
                        <div class="content-box justify-content-end">
                            <div class="flex-row">
                                <div class="col-md-6 offset-md-5 col-lg-6 offset-lg-5 col-xl-7 offset-xl-4 bg-white px-35 py-35 pt-65 px-md-35 py-md-35">
                                    <h5 class="card-title text-center mb-md-0"><span class="title no-bg px-3 py-3">最新流行壁紙</span></h5>
                                    <p class="card-text fo-c2 mb-0">閃閃發光的金屬的活化室內每個區域，宛如現代金屬雕塑品，讓藝術氣息蔓延空間每一角。</p>
                                    <div class="btn-group btn-block mt-3">
                                        <a href="#" class="btn btn-wallpaper btn-img mx-auto" tabindex="-1" role="button">欣賞更多壁紙</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--  案例 end  --}}
        {{--  特殊壁紙 start  --}}
        <div class="card mb-4">
            <div class="card-body pt-65">
                <h5 class="card-title text-center"><span class="title px-3 py-3">童趣居家壁紙系列</span></h5>
                <p class="card-text fo-c1">SINCOL在創造特殊壁紙方面表現出色，其中為住宅和商業市場提供超過15000種特殊壁紙，並將特殊材料和效果融入其設計中。在融合歷史和現代美學的過程中，公司的設計師們有非常充足的設計資料和檔案可以取之不盡，用之不竭。</p>
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-3">
                        <a href="#" class="img-link"><img src="{{ asset('images/WD-07.jpg') }}" class="card-img image" alt="特殊壁紙1"></a>
                        <p class="card-text fo-c1 text-center mb-3 mb-md-0">植絨纖維</p>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3">
                        <a href="#" class="img-link"><img src="{{ asset('images/WD-08.jpg') }}" class="card-img image" alt="特殊壁紙2"></a>
                        <p class="card-text fo-c1 text-center mb-3 mb-md-0">施華洛世奇水晶</p>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3">
                        <a href="#" class="img-link"><img src="{{ asset('images/WD-09.jpg') }}" class="card-img image" alt="特殊壁紙3"></a>
                        <p class="card-text fo-c1 text-center mb-3 mb-md-0">反光材質-雲母，沙子</p>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3">
                        <a href="#" class="img-link"><img src="{{ asset('images/WD-10.jpg') }}" class="card-img image" alt="特殊壁紙4"></a>
                        <p class="card-text fo-c1 text-center mb-3 mb-md-0">金絲線刺繡</p>
                    </div>
                </div>
            </div>
        </div>
        {{--  特殊壁紙 end  --}}
        {{--  未來展望 start  --}}
        <div class="card mb-4">
            <div class="px-0 py-0 px-md-35 py-md-35">
                <div class="bg px-0 pr-md-0 pl-md-4">
                    <div class="row no-gutters">
                        <div class="col-md-7 col-lg-8">
                            <a href="#" class="img-link"><img src="{{ asset('images/WD-11.png') }}" class="card-img image" alt="未來展望"></a>
                        </div>
                        <div class="col-md-5 col-lg-4">
                            <div class="card-body">
                                <h5 class="card-title text-center"><span class="title px-3 py-3">未來展望</span></h5>
                                <p class="card-text fo-c2 mb-0">Sincol集團是一家綜合性內部集團公司，主要從事窗簾，布料，地板，織物，皮革和室內裝飾品的經營。我們廣泛地處理辦公和商業空間以及家庭青年等各種合同使用，並建立了一個供應系統作為“品牌製造商”。</p>
                                <div class="btn-group btn-block mt-3">
                                    <a href="#" class="btn btn-wallpaper btn-img mx-auto" tabindex="-1" role="button">欣賞更多壁紙</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--  未來展望 end  --}}
    </article>
</body>
</html>
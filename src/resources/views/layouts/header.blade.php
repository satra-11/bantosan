<header id="header" class="gHeader fixed-top" area-hidden="false">
  <nav class="navbar navbar-expand-md">

    <div class="navbar__inner">
      <div class="btn-group">
        <button type="button" class="navbar__dropdown" data-toggle="dropdown" aria-expanded="false">
          <img src="{{ asset('/assets/img/common/icon_plus_green_lg.svg') }}" alt="" loading="lazy">
        </button>
        <div class="dropdown-menu dropdown-menu-custom">
          <a href="###" class="dropdown-item">現場</a>
          <a href="###" class="dropdown-item">グループ</a>
        </div>
      </div>

      <a class="navbar-brand" href="#">
        <picture>
          <source media="(min-width:768px" srcset="{{ asset('/assets/img/common/logo_bantosan_g.svg') }}" sizes="">
          <img src="{{ asset('/assets/img/common/logo_bantosan_sp.svg') }}" alt="Bantosan" loading="lazy">
        </picture>

        <!-- ページ名ごと変更 -->
        <span class="page__name">トーク</span>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
        aria-expanded="false" aria-label="ナビゲーションの切替">
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="modSearch">
        <label class="modSearch--label">
          <input class="form-control modSearch--input" type="search" placeholder="" aria-label="">
        </label>
      </div>

      <!-- 基本情報登録画面ヘッダー / create.html -->
      <div class="myBlockTab__sp" area-hidden="true">
        <ul class="myBlockTab">
          <li class="myBlockTab__item active">
            <a href="#basic">基本情報</a>
          </li>
          <li class="myBlockTab__item"><a href="#place">場所情報</a></li>
          <li class="myBlockTab__item"><a href="#client">顧客情報</a></li>
          <li class="myBlockTab__item"><a href="#sche">工程情報</a></li>
          <li class="myBlockTab__item"><a href="#member">メンバー情報</a></li>
        </ul>
      </div>

      <div class="myBlockTab__sp" area-hidden="true">
        <ul class="myBlockNav">
          <li class="myBlockNav__item">
            <label>現場名</label>
            <select name="" id="">
              <option value="" required>現場を選択してください</option>
              <option value="">現場1</option>
              <option value="">現場2</option>
              <option value="">現場3</option>
            </select>
          </li>
          <li class="myBlockNav__item">
            <span>期間</span>
            <div class="modFlex modDataPicker">
              <input class="flatpickr -single" type="text" placeholder="">
            </div>
          </li>
          <li class="myBlockNav__item">
            <button type="button" class="modBtn btn5">前回をコピー</button>
          </li>
        </ul>
      </div>
    </div>

    <div class="collapse navbar-collapse" id="navbar">

      <!-- PC表示 -->
      <div class="collapse__inner ml-auto pcContainer">
        <ul class="navbar-nav -left">
          <li class="nav-item">
            <a class="nav-link -talk" href="talk_genba.html">トーク</a>
          </li>
          <li class="nav-item">
            <a class="nav-link -report" href="report.html">日報</a>
          </li>
          <li class="nav-item">
            <a class="nav-link -album" href="album.html">アルバム</a>
          </li>
          <li class="nav-item">
            <a class="nav-link -schedule" href="schedule.html">予定表</a>
          </li>
          <li class="nav-item">
            <a class="nav-link -ledge" href="costcontrol.html">帳票・台帳</a>
          </li>
          <li class="nav-item">
            <a class="nav-link -member" href="member.html">メンバー</a>
          </li>
          <li class="nav-item">
            <a class="nav-link -master" href="master.html">現場マスタ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link -info" href="info.html">お知らせ</a>
          </li>
        </ul>

        <ul class="navbar-nav -right">
          <li class="nav-item">
            <a class="nav-link" href="#">会社名</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
              <img src="https://placehold.jp/18/cccccc/ffffff/34x34.png?text=img" alt="" loading="lazy"
                class="account__img">
              <span>アカウント名</span>
            </a>
            <div class="dropdown-menu dropdown-menu-md-right">
              <button type="button" class="dropdown-item" data-toggle="modal"
                data-target="#dropdownModal1">会社切り替え</button>
              <a class="dropdown-item" href="#">プロフィール編集</a>
              <a class="dropdown-item" href="#">個人設定</a>
              <a class="dropdown-item" href="#">各種設定</a>
              <a class="dropdown-item" href="#">マニュアル</a>
              <a class="dropdown-item" href="#">ヘルプセンター</a>
              <a class="dropdown-item" href="#">契約内容</a>
              <a class="dropdown-item" href="#" onclick="event.preventDefault();
								 document.getElementById('logout-form').submit();">ログアウト</a>
            </div>
          </li>
        </ul>
      </div>

      <!-- SP表示 -->
      <div class="collapse__inner spContainer">
        <ul class="navbar-nav">
          <li class="navbar-nav-heading">ログインしている会社</li>
          <li class="modFlex">
            <span class="">株式会社〇〇〇〇〇〇</span>
            <button type="button" class="" data-toggle="modal" data-target="#dropdownModal1">切替</button>
          </li>
          <li class="navbar-nav-heading">管理者メニュー</li>
          <li>
            <a href="###" class="">メンバー管理</a>
          </li>
          <li>
            <a href="###" class="">メンバーの日報管理</a>
          </li>
          <li>
            <a href="###" class="">現場マスタ</a>
          </li>
          <li class="navbar-nav-heading">個人メニュー</li>
          <li>
            <a href="###" class="">日報</a>
          </li>
          <li>
            <a href="###" class="">プロフィール編集</a>
          </li>
          <li>
            <a href="###" class="">マニュアル</a>
          </li>
          <li>
            <a href="###" class="">ヘルプセンター</a>
          </li>
          <li>
            <a href="#" class="" onclick="event.preventDefault();
								 document.getElementById('logout-form').submit();">ログアウト</a>
            
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <form id="logout-form" action="{{}}" method="POST" class="d-none">
    @csrf
  </form>
</header>

<!-- 会社切り替えモーダル -->
<div class="modal modModal fade" id="dropdownModal1" tabindex="-1" aria-labelledby="dropdownModalLabel1">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title" id="dropdownModalLabel1">切り替える会社を選択してください。</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <ul class="modList__company">
          <li class="current">
            <span>株式会社〇〇〇〇〇〇〇</span>
            <a href="###" class="modBtn--switch">切替</a>
          </li>
          <li class="">
            <span>株式会社XXXXXX</span>
            <a href="###" class="modBtn--switch">切替</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

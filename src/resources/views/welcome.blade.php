<x-app-layout>
  <x-slot name="body_id">
    index
  </x-slot>


  <section class="modSecBlock">
    <div class="myBlockCooperation">
        <h2 class="modHeading2 sticky-top">報告書</h2>

      <!-- ========== ASIDE ========== -->
      <aside id="asideContainer">
        <div class="myBlockSearch">
          <nav class="myBlockSearch__nav">

            <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
              <!-- 現場とグループで.activeを切り替え -->
              <button class="nav-link -genba active" id="nav-tab__item1" data-toggle="tab" data-target="#nav-tab1"
                                                                                           type="button" role="tab" aria-controls="nav-tab1" aria-selected="true">現場</button>
              <button class="nav-link -member" id="nav-tab__item2" data-toggle="tab" data-target="#nav-tab2" type="button"
                                                                                                             role="tab" aria-controls="nav-tab2" aria-selected="false">個人・グループ</button>
            </div>
          </nav>

          <div class="tab-content" id="nav-tabContent">

            <!-- 現場 -->
            <div class="tab-pane fade active show" id="nav-tab1" role="tabpanel" aria-labelledby="nav-tab__item1">
              <div class="tab-content__header">
                <form>
                  <div class="modSearch">
                    <label class="modSearch--label">
                      <input class="form-control modSearch--input" type="search" placeholder="" aria-label="">
                    </label>
                  </div>
                  <div class="aside__select">
                    <div class="aside__select--item">
                      <select name="" id="" class="aside__select--option">
                        <option value="" selected>全てを表示</option>
                        <option value="契約前">契約前</option>
                        <option value="施工前">施工前</option>
                        <option value="施工中">施工中</option>
                        <option value="完工">完工</option>
                      </select>
                    </div>
                    <div class="aside__select--item">
                      <a href="###" class="aside__select--link">現場登録</a>
                    </div>
                  </div>
                </form>
              </div>

              <div class="tab-content__body">
                <a href="###" class="modFlex group__btn offcanvas__trigger" data-toggle="offcanvas" data-index="0" role="button">
                  <div class="modFlex__item--left">
                    <div class="talk__img">
                      <img src="https://placehold.jp/18/cccccc/ffffff/60x60.png?text=img" alt="" loading="lazy" class="rounded-circle">
                    </div>
                    <p class="talk__name">中央区佐藤太郎様外壁</p>
                  </div>
                  <div class="modFlex__item--right">
                    <time class="talk__time" datetime="2023-12-01T14:00:00">14:46</time>
                  </div>
                </a>
                <a href="###" class="modFlex group__btn" data-index="1" role="button">
                  <div class="modFlex__item--left">
                    <div class="talk__img">
                      <img src="https://placehold.jp/18/cccccc/ffffff/60x60.png?text=img" alt="" loading="lazy" class="rounded-circle">
                    </div>
                    <p class="talk__name">横須賀市山田様リフォーム</p>
                  </div>
                  <div class="modFlex__item--right">
                    <time class="talk__time" datetime="">昨日</time>
                  </div>
                </a>
                <a href="###" class="modFlex group__btn" data-index="2" role="button">
                  <div class="modFlex__item--left">
                    <div class="talk__img">
                      <img src="https://placehold.jp/18/cccccc/ffffff/60x60.png?text=img" alt="" loading="lazy" class="rounded-circle">
                    </div>
                    <p class="talk__name">足立区田中様電気工事</p>
                  </div>
                  <div class="modFlex__item--right">
                    <time class="talk__time" datetime="">昨日</time>
                  </div>
                </a>
                <a href="###" class="modFlex group__btn" data-index="3" role="button">
                  <div class="modFlex__item--left">
                    <div class="talk__img">
                      <img src="https://placehold.jp/18/cccccc/ffffff/60x60.png?text=img" alt="" loading="lazy" class="rounded-circle">
                    </div>
                    <p class="talk__name">荒川区高橋様</p>
                  </div>
                  <div class="modFlex__item--right">
                    <time class="talk__time" datetime="">金曜日</time>
                  </div>
                </a>
                <a href="###" class="modFlex group__btn" data-index="4" role="button">
                  <div class="modFlex__item--left">
                    <div class="talk__img">
                      <img src="https://placehold.jp/18/cccccc/ffffff/60x60.png?text=img" alt="" loading="lazy" class="rounded-circle">
                    </div>
                    <p class="talk__name">現場名</p>
                  </div>
                  <div class="modFlex__item--right">
                    <time class="talk__time" datetime="">1/1</time>
                  </div>
                </a>
                <a href="###" class="modFlex group__btn" data-index="5" role="button">
                  <div class="modFlex__item--left">
                    <div class="talk__img">
                      <img src="https://placehold.jp/18/cccccc/ffffff/60x60.png?text=img" alt="" loading="lazy" class="rounded-circle">
                    </div>
                    <p class="talk__name">現場名</p>
                  </div>
                  <div class="modFlex__item--right">
                    <time class="talk__time" datetime="">12/31</time>
                  </div>
                </a>

              </div>
            </div>

            <!-- 個人・グループ -->
            <div class="tab-pane fade" id="nav-tab2" role="tabpanel" aria-labelledby="nav-tab__item2">
              <div class="tab-content__header">
                <form>
                  <div class="modSearch">
                    <label class="modSearch--label">
                      <input class="form-control modSearch--input" type="search" placeholder="" aria-label="">
                    </label>
                  </div>
                  <div class="aside__select">
                    <div class="aside__select--item">
                      <select name="" id="" class="aside__select--option">
                        <option value="" selected>全てを表示</option>
                        <option value="契約前">グループ</option>
                        <option value="施工前">個人</option>
                      </select>
                    </div>
                    <div class="aside__select--item">
                      <a href="###" class="aside__select--link">グループ登録</a>
                    </div>
                  </div>
                </form>
              </div>

              <div class="tab-content__body">
                <a href="###" class="modFlex group__btn" data-index="0" role="button">
                  <div class="modFlex__item--left">
                    <div class="talk__img">
                      <img src="https://placehold.jp/18/cccccc/ffffff/60x60.png?text=img" alt="" loading="lazy"
                                                                                                 class="rounded-circle">
                    </div>
                    <p class="talk__name">名前が入ります</p>
                  </div>
                  <div class="modFlex__item--right">
                    <time class="talk__time" datetime="2023-12-01T14:00:00">14:46</time>
                  </div>
                </a>
                <a href="###" class="modFlex group__btn" data-index="1" role="button">
                  <div class="modFlex__item--left">
                    <div class="talk__img">
                      <img src="https://placehold.jp/18/cccccc/ffffff/60x60.png?text=img" alt="" loading="lazy"
                                                                                                 class="rounded-circle">
                    </div>
                    <p class="talk__name">名前が入ります名前が入ります</p>
                  </div>
                  <div class="modFlex__item--right">
                    <time class="talk__time" datetime="">昨日</time>
                  </div>
                </a>
                <a href="###" class="modFlex group__btn" data-index="2" role="button">
                  <div class="modFlex__item--left">
                    <div class="talk__img">
                      <img src="https://placehold.jp/18/cccccc/ffffff/60x60.png?text=img" alt="" loading="lazy"
                                                                                                 class="rounded-circle">
                    </div>
                    <p class="talk__name">名前が入ります</p>
                  </div>
                  <div class="modFlex__item--right">
                    <time class="talk__time" datetime="">昨日</time>
                  </div>
                </a>
                <a href="###" class="modFlex group__btn" data-index="3" role="button">
                  <div class="modFlex__item--left">
                    <div class="talk__img">
                      <img src="https://placehold.jp/18/cccccc/ffffff/60x60.png?text=img" alt="" loading="lazy"
                                                                                                 class="rounded-circle">
                    </div>
                    <p class="talk__name">名前が入ります</p>
                  </div>
                  <div class="modFlex__item--right">
                    <time class="talk__time" datetime="">金曜日</time>
                  </div>
                </a>
                <a href="###" class="modFlex group__btn" data-index="4" role="button">
                  <div class="modFlex__item--left">
                    <div class="talk__img">
                      <img src="https://placehold.jp/18/cccccc/ffffff/60x60.png?text=img" alt="" loading="lazy"
                                                                                                 class="rounded-circle">
                    </div>
                    <p class="talk__name">名前が入ります</p>
                  </div>
                  <div class="modFlex__item--right">
                    <time class="talk__time" datetime="">1/1</time>
                  </div>
                </a>
                <a href="###" class="modFlex group__btn" data-index="5" role="button">
                  <div class="modFlex__item--left">
                    <div class="talk__img">
                      <img src="https://placehold.jp/18/cccccc/ffffff/60x60.png?text=img" alt="" loading="lazy"
                                                                                                 class="rounded-circle">
                    </div>
                    <p class="talk__name">名前が入ります名前が入ります</p>
                  </div>
                  <div class="modFlex__item--right">
                    <time class="talk__time" datetime="">12/31</time>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </aside>


      <div id="mainContainer">
        <div class="mainContainer__flex">

          <!-- Left -->
          <div class="mainContainer__flex--left">
            <div class="itemBlock">
              <div class="modItemBlock">
                <h3 class="modHeading3">基本情報</h3>

                <div class="modItemBlock__inner">
                  <p>
                  この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>

                </div>
              </div>
              <div class="modItemBlock">
                <h3 class="modHeading3">基本情報</h3>

                <div class="modItemBlock__inner">
                  <p>
                  この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
                  </p>

                </div>
              </div>
              <div class="modItemBlock">
                <h3 class="modHeading3">基本情報</h3>

                <div class="modItemBlock__inner">
                  <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>

                </div>

              </div>
            </div>

          </div>

          <!-- Right -->
          <div class="mainContainer__flex--right">
            <div class="itemBlock">
              <header class="mainContainer__flex--header box-shadow">
                <div class="modAvatarHeading">
                  <img src="https://placehold.jp/18/cccccc/ffffff/60x60.png?text=img" alt="" loading="lazy"
                                                                                             class="user__avatar -sm rounded-circle">
                  <h2 class="modAvatarHeading__ttl">サイドメニューを選択した際のタイトルが入ります</h2>
                </div>

                <div class="dropdown">
                  <button type="button" class="modBtn--setting" data-toggle="dropdown" aria-expanded="false">
                    <img src="/assets/img/common/icon_vert.svg" alt="設定" loading="lazy">
                  </button>
                  <div class="dropdown-menu">
                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#completedModal">完工処理</button>
                    <a class="dropdown-item" href="#">現場編集</a>
                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#deleteModal_setting">現場削除</button>
                  </div>
                </div>
              </header>

              <div class="timeLine">
                <div class="timeLine__container">
                  <div class="timeLine__card">
                    <div class="timeLine__card--header">
                      <time datetime="2023-09-14">2023年9月14日</time>
                    </div>

                    <div class="timeLine__card--item -left">
                      <figure class="timeLine__card--talk">
                        <div class="user-avatar">
                          <img src="https://placehold.jp/18/cccccc/ffffff/60x60.png?text=img" alt="" loading="lazy"
                                                                                                     class="rounded-circle">
                        </div>

                        <!-- 掲示板固定がクリックされたら.-bbs付与 -->
                        <div class="msg">
                          <!--.-bbsが付与されたら area-hidden="false" -->
                          <span class="pin-badge" area-hidden="true">
                            <img src="/assets/img/common/icon_pushpin_green_md.svg" alt="掲示板から削除" loading="lazy">
                          </span>
                          <span class="js-msg" data-copy>あああああああああ</span>
                        </div>

                        <div class="posting">
                          <div class="dropdown dropright">
                            <button type="button" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                              <img src="/assets/img/common/icon_horizon_gray.svg" alt="" loading="lazy">
                            </button>

                            <div class="dropdown-menu
                                              talk__dropdownMenu">
                              <button type="button" class="dropdown-item js-copyBtn">コピー</button>
                              <a class="dropdown-item" href="#">掲示板へ固定</a>
                              <a class="dropdown-item" href="#">削除</a>
                            </div>
                          </div>
                          <time class="date" datetime="2023-12-31">2023.12.31</time>
                        </div>
                      </figure>
                      <p class="user-name">山田 太郎</p>
                    </div>

                    <div class="timeLine__card--item -right">
                      <figure class="timeLine__card--talk">
                        <div class="msg">
                          <span class="js-msg" data-copy="">いいいいいいいいいいいいい</span>
                        </div>
                        <div class="posting text-right">
                          <div class="dropdown dropleft">
                            <button type="button" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                              <img src="/assets/img/common/icon_horizon_gray.svg" alt="" loading="lazy">
                            </button>

                            <div class="dropdown-menu talk__dropdownMenu">
                              <button type="button" class="dropdown-item js-copyBtn">コピー</button>
                              <a class="dropdown-item" href="#">掲示板へ固定</a>
                              <a class="dropdown-item" href="#">送信取消</a>
                            </div>
                          </div>
                          <time class="date" datetime="2023-12-31">2023.12.31</time>
                        </div>
                      </figure>
                    </div>

                    <div class="timeLine__card--item -right">
                      <figure class="timeLine__card--talk">
                        <div class="msg">
                          <span class="js-msg" data-copy="">いいいいいいいいいいいいい</span>
                        </div>
                        <div class="posting text-right">
                          <div class="dropdown dropleft">
                            <button type="button" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                              <img src="/assets/img/common/icon_horizon_gray.svg" alt="" loading="lazy">
                            </button>

                            <div class="dropdown-menu talk__dropdownMenu">
                              <button type="button" class="dropdown-item js-copyBtn">コピー</button>
                              <a class="dropdown-item" href="#">掲示板へ固定</a>
                              <a class="dropdown-item" href="#">送信取消</a>
                            </div>
                          </div>
                          <time class="date" datetime="2023-12-31">2023.12.31</time>
                        </div>
                      </figure>
                    </div>

                    <div class="timeLine__card--item -right">
                      <figure class="timeLine__card--talk">
                        <div class="msg">
                          <span class="js-msg" data-copy="">いいいいいいいいいいいいい</span>
                        </div>
                        <div class="posting text-right">
                          <div class="dropdown dropleft">
                            <button type="button" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                              <img src="/assets/img/common/icon_horizon_gray.svg" alt="" loading="lazy">
                            </button>

                            <div class="dropdown-menu talk__dropdownMenu">
                              <button type="button" class="dropdown-item js-copyBtn">コピー</button>
                              <a class="dropdown-item" href="#">掲示板へ固定</a>
                              <a class="dropdown-item" href="#">送信取消</a>
                            </div>
                          </div>
                          <time class="date" datetime="2023-12-31">2023.12.31</time>
                        </div>
                      </figure>
                    </div>

                  </div>

                  <div class="timeLine__card">
                    <div class="timeLine__card--header">
                      <time datetime="2023-09-14">2023年9月14日</time>
                    </div>

                    <div class="timeLine__card--item -left">
                      <figure class="timeLine__card--talk">
                        <div class="user-avatar">
                          <img src="https://placehold.jp/18/cccccc/ffffff/60x60.png?text=img" alt="" loading="lazy"
                                                                                                     class="rounded-circle">
                        </div>

                        <!-- 掲示板固定がクリックされたら.-bbs付与 -->
                        <div class="msg">
                          <!--.-bbsが付与されたら area-hidden="false" -->
                          <span class="pin-badge" area-hidden="true">
                            <img src="/assets/img/common/icon_pushpin_green_md.svg" alt="掲示板から削除" loading="lazy">
                          </span>
                          <span class="js-msg" data-copy>あああああああああ</span>
                        </div>

                        <div class="posting">
                          <div class="dropdown dropright">
                            <button type="button" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                              <img src="/assets/img/common/icon_horizon_gray.svg" alt="" loading="lazy">
                            </button>

                            <div class="dropdown-menu talk__dropdownMenu">
                              <button type="button" class="dropdown-item js-copyBtn">コピー</button>
                              <a class="dropdown-item" href="#">掲示板へ固定</a>
                              <a class="dropdown-item" href="#">削除</a>
                            </div>
                          </div>
                          <time class="date" datetime="2023-12-31">2023.12.31</time>
                        </div>
                      </figure>
                      <p class="user-name">山田 太郎</p>
                    </div>

                    <div class="timeLine__card--item -right">
                      <figure class="timeLine__card--talk">
                        <div class="msg">
                          <span class="js-msg" data-copy="">いいいいいいいいいいいいい</span>
                        </div>
                        <div class="posting text-right">
                          <div class="dropdown dropleft">
                            <button type="button" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                              <img src="/assets/img/common/icon_horizon_gray.svg" alt="" loading="lazy">
                            </button>

                            <div class="dropdown-menu talk__dropdownMenu">
                              <button type="button" class="dropdown-item js-copyBtn">コピー</button>
                              <a class="dropdown-item" href="#">掲示板へ固定</a>
                              <a class="dropdown-item" href="#">送信取消</a>
                            </div>
                          </div>
                          <time class="date" datetime="2023-12-31">2023.12.31</time>
                        </div>
                      </figure>
                    </div>

                  </div>
                </div>

                <div class="timeLine__footer">
                  <div class="timeLine__footer--inner">
                    <div class="timeLine__footer-header">
                      <ul class="talkAppli__nav">
                        <li class="talkAppli__nav--item">
                          <button type="submit" class="talkAppli__nav--btn -submit">
                            <img src="/assets/img/common/icon_plus_gray_lg.svg" alt="" loading="lazy">
                          </button>
                        </li>
                        <li class="talkAppli__nav--item">
                          <button type="button" class="talkAppli__nav--btn -stamp">スタンプ</button>
                        </li>
                        <li class="talkAppli__nav--item">
                          <button type="button" class="talkAppli__nav--btn -file">ファイル</button>
                        </li>
                        <li class="talkAppli__nav--item">
                          <button type="button" class="talkAppli__nav--btn -photo">画像</button>
                        </li>
                        <li class="talkAppli__nav--item">
                          <button type="button" class="talkAppli__nav--btn -diary">出面</button>
                        </li>
                        <li class="talkAppli__nav--item">
                          <a href="###" class="talkAppli__nav--btn -album">現場アルバム</a>
                        </li>
                        <li class="talkAppli__nav--item">
                          <a href="###" class="talkAppli__nav--btn -dailyReport">日報</a>
                        </li>
                        <li class="talkAppli__nav--item">
                          <a href="###" class="talkAppli__nav--btn -report">報告書</a>
                        </li>
                      </ul>
                    </div>
                    <div class="timeLine__footer--msg">
                      <textarea class="talkAppli__msg" name="" id="" cols="" rows="" placeholder="メッセージの内容をここへ入力"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    
    </div>
  </section>

</x-app-layout>

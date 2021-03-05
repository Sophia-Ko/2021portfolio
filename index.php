<!DOCTYPE html>
<html lang="zh-TW">
<head>
<?php $title="首頁,個人簡介" ?>
<?php include("includes/meta.php") ?>
</head>
<body>

<?php include("includes/menu.php") ?>
<script>
$(function(){
    $('#menu').find('ul.menu-list').find('li').eq(0).addClass('active');
});
</script>


<!-- ----------------------------------------------- -->

<div class="container">
      <div class="note-wrap">
        <div class="title-wrap">
            <h1 class="title">個人簡介</h1>
        </div>
        <div class="personal edit-block wow animate__fadeInUp">
            <div class="dfc">
                <div class="imgbox"><img src="img/head.jpg" alt="個人頭像"></div>
                <h2 class="tac bold">柯翠茹<span>Sophia Ko</span></h2>
                <div class="tag"><span>待業中</span></div>
                <h5 class="tac bold">網頁設計師/前端工程師</h5>
                <ul class="contact">
                    <li><i class="icon-map"></i>台中市,北屯區,中清路</li>
                    <li><i class="icon-mail"></i><a href="mailto:s88431ss@yahoo.com.tw" target="_blank">s88431ss@yahoo.com.tw</a>
                    <br>
                    <span class="note">(每天收信)</span>
                    </li>
                    <li><i class="icon-tel"></i><a href="tel:+886-928189826">0928-189826</a><br>
                    <span class="note">(8:30a.m~10:00p.m)</span></li>
                </ul>
            </div>
            <div class="fontbox">
                <p>畢業於逢甲大學化工系，一年前開啟轉職之路。原為實驗室化驗員，現職網頁設計師，目標為前端工程師。</p>
                <br>
                <ul class="preset">
                    <li>熱愛學習新知，有獨立作業能力。</li>
                    <li>細心認真，擅長優化流程，增加效率及使用者體驗。</li>
                    <li>一年網頁前端RWD設計切版經驗。</li>
                    <li><span class="bold">希望職稱</span>：前端工程師</li>
                    <li><span class="bold">希望工作地點</span>：台中市（北區、北屯區、西區佳）</li>
                    <li><span class="bold">希望薪資範圍</span>：35000~45000</li>
                </ul>
                <br>
                <ul class="btnlist">
                    <p class="bold">快速連結：</p>
                    <li><a href="portfolio.php" class="btn">網站作品集</a></li>
                    <li><a href="#skill" class="btn anchor">專業技能</a></li>
                    <li><a href="#tool" class="btn anchor">常用輔助工具</a></li>
                    <li><a href="#experience" class="btn anchor">經歷</a></li>
                    <li><a href="note.php" class="btn">學習筆記</a></li>
                </ul>
            </div>
        </div>

        <span id="skill"></span>
        <h2 class="subtitle tac">專業技能</h2>
        <div class="edit-block wow animate__fadeInUp">
            <ul class="skill-list">
                <li>
                    <div class="icon-box">
                        <i class="icon-tool"></i>
                        <h5>開發工具</h5>
                    </div>
                    <ul class="preset">
                        <li>PhotoShop
                          <span class="note">開版設計用</span>
                        </li>
                        <li>Illustrator
                          <span class="note">調整SVG向量檔</span>
                        </li>
                        <li><a href="https://code.visualstudio.com/" target="_blank" title="Visual Studio Code官網">Visual Studio Code</a>
                          <span class="note">平時作業環境，有多種便利的插件幫助增加作業效率</span>
                        </li>
                        <li><a href="https://git-scm.com/" target="_blank" title="Git官網">Git</a>
                          <span class="note">版本控制，目前僅本機操作，未有大型專案合作經驗</span>
                        </li>
                        <li><a href="https://nodejs.org/en/" target="_blank" title="Node.js官網">Node.js</a>
                          <span class="note">僅用來架設環境</span>
                        </li>
                        <li><a href="https://www.npmjs.com/get-npm" target="_blank" title="npm官網解說">npm</a>
                          <span class="note">下載便利套件</span>
                        </li>
                        <li><a href="https://nuxtjs.org/" target="_blank" title="Nuxt官網">Nuxt</a>
                          <span class="note">SSR開發框架(能SEO優化的SPA)。以Vue為基底進行開發，會自動建立好路由，內建webpack打包資源功能。</span>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="icon-box">
                        <i class="icon-code"></i>
                        <h5>程式語言</h5>
                    </div>
                    <ul class="preset">
                        <li>HTML5/CSS3
                          <span class="note">SASS/SCSS均可，平常使用SCSS。<br>
                          會使用$變數、@mixin、@import等方式管理css style。</span>
                        </li>
                        <li>Javascript(ES6)
                          <span class="note">平常多半使用jQuery寫全域js</span>
                        </li>
                        <li><a href="https://vuejs.org/" target="_blank" title="Vue.js官網">Vue.js</a>
                          <span class="note">平常使用的框架</span>
                        </li>
                        <li>JSON
                          <span class="note">理解物件擺放規則，可調用外部資料</span>
                        </li>
                        <li><a href="https://github.com/axios/axios" target="_blank" title="Axios - github">Axios</a>
                          <span class="note">以Vue為基底串接API</span>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="icon-box">
                        <i class="icon-skill"></i>
                        <h5>專業技能</h5>
                    </div>
                    <ul class="preset">
                        <li>網站設計規劃
                          <span class="note">依照合約內容及客戶需求規劃網站內容、設計版面</span>
                        </li>
                        <li>前端互動效果
                          <span class="note">用套件快速建立基本動畫效果，有特殊需求也可自訂樣式</span>
                        </li>
                        <li>RWD網頁切版
                          <span class="note">網站在桌電、平板、手機各解析度都能完美展示</span>
                        </li>
                        <li>UI/UX設計流程優化
                          <span class="note">擅長優化介面及操作流程，讓網站使用上更加直覺</span>
                        </li>
                        <li>瀏覽器、不同客戶端兼容性
                          <span class="note">網站在常見瀏覽器(Chrome、Safari、Firefox、Edge)及常見品牌手機上都能正常運作</span>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <span id="tool"></span>
        <h2 class="subtitle tac">常用輔助工具</h2>
        <div class="edit-block wow animate__fadeInUp">
            <ul class="preset">
                <li><a href="https://animate.style/" target="_blank" title="Animate.css">Animate.css</a>
                  <span class="note">常見網頁CSS動畫，通常搭配wow.js使用</span>
                </li>
                <li><a href="https://wowjs.uk/docs.html" target="_blank" title="wow.js">wow.js</a>
                  <span class="note">網頁滑到指定位置會觸發動畫的js套件，通常搭配animate.css使用，沒有想要的CSS動畫就手刻。</span>
                </li>
                <li><a href="https://swiperjs.com/" target="_blank" title="swiper.js">swiper.js</a>
                  <span class="note">輪播js套件(有RWD)。
                    <br>
                    預設功能就有很多可以操作，可自定義樣式，可每次切換都有分段動畫，像我的這個作品：<a href="http://www.mayawork.com.tw/2020vajra/">Vajra</a> 首頁輪播圖就是分段動畫。</span>
                </li>
                <li><a href="https://icomoon.io/" target="_blank" title="IcoMoon">IcoMoon</a>
                  <span class="note">很方便的網頁Icon font管理工具。
                    <br>
                    除了網站提供的圖示外，也可自行製作SVG檔上傳(需合併圖案，把不必要的path、color清乾淨)。
                    <br>
                    可輸出json格式方便其他使用者修改icon目錄。</span>
                </li>
            </ul>
        </div>

        <span id="experience"></span>
        <h2 class="subtitle tac">經歷</h2>
        <div class="edit-block wow animate__fadeInUp">
            <ul class="skill-list">
                <li>
                    <div class="icon-box">
                        <i class="icon-work"></i>
                        <h5>工作經歷</h5>
                    </div>
                    <ul class="preset">
                        <li><a href="https://www.maya.com.tw/" target="_blank">瑪雅網路設計</a>
                          <span class="note">2020/1 - 2021/2<br>
                            網頁設計師
                          </span>
                        </li>
                        <li><span class="note">不相關的工作經歷暫不列入此頁，有興趣請見人力銀行內履歷資料。</span></li>
                    </ul>
                </li>
                <li>
                    <div class="icon-box">
                        <i class="icon-project"></i>
                        <h5>參與專案</h5>
                    </div>
                    <ul class="preset">
                        <li><a href="http://mayawork.com.tw/2020chumbuddy/" target="_blank">濟稻網站翻新</a>
                          <span class="note">
                            時間：2021年2月<br>
                            負責：介面規劃、網站設計、網頁切版
                          </span>
                        </li>
                        <li><a href="http://www.mayawork.com.tw/2020vajra/" target="_blank">壇城網站設計</a>
                          <span class="note">
                            時間：2021年1月<br>
                            負責：介面規劃、網站設計、網頁切版
                          </span>
                        </li>
                        <li><a href="http://www.mayawork.com.tw/2020radm/" target="_blank">瑞門網站翻新</a>
                          <span class="note">
                            時間：2020年12月<br>
                            負責：介面規劃、網站設計、網頁切版
                          </span>
                        </li>
                        <li><a href="https://www.deanyen.com/" target="_blank">鼎言網站設計</a>
                          <span class="note">
                            時間：2020年11月<br>
                            負責：介面規劃、網站設計、網頁切版
                          </span>
                        </li>
                        <li><a href="https://www.shiangming.com/" target="_blank">祥明診所網站設計</a>
                          <span class="note">
                            時間：2020年7月<br>
                            負責：介面規劃、網站設計、網頁切版
                          </span>
                        </li>
                        <li><a href="https://www.dajun88.com/" target="_blank">大鈞診所,大川診所網站翻新</a>
                          <span class="note">
                            時間：2020年5月<br>
                            負責：介面規劃、網站設計、網頁切版
                          </span>
                        </li>
                    </ul>
                    <br>
                    <p class="tac"><a href="portfolio.php" class="btn">作品集一覽</a></p>
                </li>
                <li>
                    <div class="icon-box">
                        <i class="icon-book"></i>
                        <h5>學歷</h5>
                    </div>
                    <ul class="preset">
                        <li>逢甲大學
                          <span class="note">2011/9 - 2016/06<br>
                            化學工程系
                          </span>
                        </li>
                        <li>豐原高中
                          <span class="note">2008/9 - 2011/6<br>
                            普通科
                          </span>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
      </div>
      
  </div>

<!-- ----------------------------------------------- -->

<?php include("includes/footer.php") ?> 


</body>
</html>
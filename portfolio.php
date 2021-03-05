<!DOCTYPE html>
<html lang="zh-TW">
<head>
<?php $title="網頁作品一覽" ?>
<?php include("includes/meta.php") ?>
</head>
<body>

<?php include("includes/menu.php") ?>

<script>
$(function(){
    $('#menu').find('ul.menu-list').find('li').eq(1).addClass('active');
});
</script>


<!-- ----------------------------------------------- -->


<div class="portfolio-wrap">
      <h1 class="title tac">網頁作品一覽</h1>
      <ul class="portfolio-list">
          <li v-for="item in info" :key="item.name">
              <a href="javascript:void(0);" :title="item.name" @click="item.innerActive = true">
                  <div class="img"><img :src="item.imgurl" :alt="item.name"></div>
                  <div class="font-box">
                      <h3>{{ item.name }}</h3>
                      <h6>{{ item.subtitle }} - {{ item.date }}</h6>
                  </div>
              </a>
              <transition name="fade">
                <div class="pop-wrap" v-if="item.innerActive">
                    <div class="bg" @click="item.innerActive = false"></div>
                    <div class="inner-page">
                        <div class="remove" title="Close" @click="item.innerActive = false"></div>
                        <h2 class="title tac"><a :href="item.url" title="前往官網" target="_blank">{{ item.name }}</a></h2>
                        <div class="overflow">
                            <h6 class="gray tac">{{ item.subtitle }}</h6>
                            <h6 class="gray tac">專案時間：{{ item.date }}</h6>
                            <h6 class="link tac">網站連結：<a :href="item.url" target="_blank" class="btn" :title="item.name">立即前往</a></h6>
                            <div class="img">
                                <img :src="item.imgurl" :alt="item.name">
                                <img :src="item.mobileImg" :alt="item.name">
                            </div>
                            
                            <div class="inner-title">網站連結</div>
                            <p><a :href="item.url" target="_blank" class="btn" :title="item.name">立即前往</a></p>
                            <br><br>
                            <div class="inner-title">說明</div>
                            <p class="inner-font" v-html="item.content"></p>
                            <br><br>
                            <h6 class="tac"><a href="javascript:void(0);" @click="item.innerActive = false" class="btn">關閉分頁</a></h6>
                        </div>
                    </div>
                </div>
              </transition>
          </li>
      </ul>
  </div>

<script>
new Vue({
    el: '.portfolio-wrap',
    data() {
        return { 
            title: '網頁作品一覽',
            info: [
              { 
                imgurl: 'img/chumbuddy.jpg',
                mobileImg: 'img/chumbuddy-m.jpg',
                url: 'http://mayawork.com.tw/2020chumbuddy/',
                name: 'ChumBuddy - 濟稻企業有限公司',
                subtitle: '網頁設計/RWD切版/舊站翻新',
                date: '2021/2',
                innerActive: false,
                content: `目前的最新作品，網站尚未正式上線，僅為展示用，無後端功能。<br>此網站為國際機汽車零件貿易公司的舊站翻新，<br>整體採用黑色底，以活潑的藍綠色作為輔色，並以金屬色與齒輪作為元素點綴，搭配出極具科技風的現代化網站。<br><br>因為主要用戶為歐美的年長使用者，且客戶多使用手機在外跑業務，因此重點加強了RWD的操作流暢度及直覺性。<br>為了使年長者也能迅速找到常用功能按鈕，我將大部分的分頁操作/分類操作/搜尋/篩選等功能都fixed在最上方，<br>並在不影響閱讀、手指能方便觸控的前提下盡可能縮小UI。`,
              },
              { 
                imgurl: 'img/vajra.jpg', 
                mobileImg: 'img/vajra-m.jpg',
                url: 'http://www.mayawork.com.tw/2020vajra/',
                name: 'Vajra - 壇城國際企業社',
                subtitle: '網頁設計/RWD切版/形象購物站',
                date: '2021/1',
                innerActive: false,
                content: `產品形象+基本購物功能的網站，客戶規劃的產品類別不多，因此以精簡的方式切換分類即可。<br><br>此站主要商品為訶子粉，使用者以營養保健為主要目的，因此網站中使用較多綠色元素，讓使用者產生安心感。<br>網站中使用大量引導使用者操作的配色，例如：加入購物車按鈕用亮橘色提醒用戶將產品加入購物車，並用視覺上較安定的淺藍色作為已加入購物車的顯示色。`,
              },
              { 
                imgurl: 'img/radm.jpg', 
                mobileImg: 'img/radm-m.jpg',
                url: 'http://www.mayawork.com.tw/2020radm/',
                name: 'RADM - 瑞門國際企業有限公司',
                subtitle: '網頁設計/RWD切版/舊站翻新',
                date: '2020/12',
                innerActive: false,
                content: `此公司與濟稻Chum-Buddy是關係企業，除了機汽車零件外還有其他營運項目，<br>網站大致結構和Chum-Buddy一樣，不過此站有較特殊的客製化會員系統(Wisdom Laboratory)。<br><br>Wisdom Laboratory簡單來說就是提供會員專案諮詢功能，<br>使用者成為實驗室會員後，瑞門可以給予實驗室會員公司營運上的建議，<br>也可提供一些法務的基本諮詢（他們與鼎言法律事務所也是關係企業），協助實驗室會員釐清自己公司營運上的問題。<br>網站有中英文版本，繁中使用者不用擔心英文看不懂的問題。<br><br>Wisdom Laboratory登入後有專案選擇、佈告欄、專案諮詢、檔案櫃等功能，客戶可在專案諮詢區上傳檔案，方便描述自己遇到的困境。<br><br>(※註：此站尚未正式上線，目前只有英文版前台畫面，還沒有這些功能。)`,
              },
              { 
                imgurl: 'img/deanyen.jpg', 
                mobileImg: 'img/deanyen-m.jpg',
                url: 'https://www.deanyen.com/',
                name: 'Deanyen - 鼎言國際法律事務所',
                subtitle: '網頁設計/RWD切版/形象網站',
                date: '2020/11',
                innerActive: false,
                content: `法律事務所形象網站，已上線網站。<br>沒有任何特別的功能，因此網站採全靜態製作，重點focus在整體形象是否與法律相關、文字資料擺放是否流暢等<br>主要配色採用穩重的咖啡色系，搭配淺灰色塊及形象圖，讓整體視覺端莊而淡雅。`,
              },
              { 
                imgurl: 'img/shiangming.jpg', 
                mobileImg: 'img/shiangming-m.jpg',
                url: 'https://www.shiangming.com/',
                name: '祥明診所',
                subtitle: '網頁設計/RWD切版',
                date: '2020/7',
                innerActive: false,
                content: `結構單純的診所網站，除了首頁以外都是文章編輯器或文章列表，主要著重在網站SEO。<br>因為是功能取向的網站，為了便於使用者一進網站就能直接找到想找的資訊，我把網路掛號、服務電話直接固定在menu上，並把門診時間、最新消息放在首頁最醒目的位置。`,
              },
              { 
                imgurl: 'img/dajun.jpg', 
                mobileImg: 'img/dajun-m.jpg',
                url: 'https://www.dajun88.com/',
                name: '大鈞診所,大川診所',
                subtitle: '網頁設計/RWD切版/舊站翻新',
                date: '2020/5',
                innerActive: false,
                content: `較注重SEO的診所網站，首頁及共通頁面在關鍵字上下了不少心思。<br>需要放各科相關的醫學文章，且文章數量不少，<br>考量到上線後客戶會頻繁上架新文章，因此網站整體規劃得較簡易，方便查找文章，也沒有設計太複雜的結構。`,
              },
            ],
        }
    },
});
</script>



<!-- ----------------------------------------------- -->

<?php include("includes/footer.php") ?> 


</body>
</html>
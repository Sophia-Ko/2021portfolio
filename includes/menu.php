<div id="menu" :class="{ active : burgerActive }">
    <div class="burger" 
        @click="burgerActive = !burgerActive"
        :class="{ active : burgerActive }">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <ul class="menu-list">
        <li v-for="item in list" :key="item.en">
            <a :href="item.url" 
                :title="item.title" 
                :class="{ active: item.isActive }">
                <div class="icon-box dfc"><i :class="item.icon"></i></div>
                <span>{{ item.en }}</span>
            </a>
        </li>
    </ul>
</div>

<script>
var menuVue = new Vue({
    el: '#menu',
    data(){
        return {
            burgerActive: false,
            list: [
                {
                    url: 'index.php', title: '個人介紹',
                    icon: 'icon-home', en: 'HOME',
                },
                {
                    url: 'portfolio.php', title: '作品一覽',
                    icon: 'icon-portfolio', en: 'PROTFOLIO',
                },
                {
                    url: 'note.php', title: '學習筆記',
                    icon: 'icon-note', en: 'NOTE',
                },
            ],
        }
    }
});
</script>
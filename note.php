<!DOCTYPE html>
<html lang="zh-TW">
<head>
<?php $title="GIT學習筆記" ?>
<?php include("includes/meta.php") ?>
</head>
<body>

<?php include("includes/menu.php") ?>

<script>
$(function(){
    $('#menu').find('ul.menu-list').find('li').eq(2).addClass('active');
});
</script>


<!-- ----------------------------------------------- -->

<div class="note-wrap container">
    <div class="title-wrap">
        <h1 class="title tac">Git 練習筆記</h1>
        <div class="links tac">
            <p class="inner-font">近期開始學習用GIT進行版本控制，以下紀錄學習歷程。</p>
            <a
            href="https://gitbook.tw/"
            target="_blank"
            class="btn"
            >
            學習資源
            </a>
        </div>
    </div>
    
    <h2 class="subtitle tac">目錄結構</h2>
    <div class="edit-block">
        <table>
            <thead>
                <tr>
                    <td>指令</td>
                    <td>功能備註</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>pwd</td>
                    <td>目前位置</td>
                </tr>
                <tr>
                    <td>cd ..</td>
                    <td>相對定位，往上層</td>
                </tr>
                <tr>
                    <td>cd /c/xampp</td>
                    <td>絕對定位，往C槽的xampp資料夾</td>
                </tr>
                <tr>
                    <td>cd htdocs/</td>
                    <td>相對定位，往下層的htdocs資料夾</td>
                </tr>
                <tr>
                    <td>ls</td>
                    <td>顯示目前位置所有檔案</td>
                </tr>
                <tr>
                    <td>ls -al</td>
                    <td>顯示目前位置所有檔案狀態</td>
                </tr>
                <tr>
                    <td>mkdir 資料夾名稱</td>
                    <td>新增資料夾</td>
                </tr>
                <tr>
                    <td>touch 檔名</td>
                    <td>新增檔案</td>
                </tr>
                <tr>
                    <td>cp 原檔名 新檔名</td>
                    <td>複製(copy)並建立新檔案</td>
                </tr>
                <tr>
                    <td>mv 原檔名 新檔名</td>
                    <td>更改(move)檔名</td>
                </tr>
                <tr>
                    <td>rm 檔名</td>
                    <td>刪除(remove)檔案</td>
                </tr>
                <tr>
                    <td>clear或Ctrl+L</td>
                    <td>清除所有紀錄</td>
                </tr>
            </thead>
        </table>
    </div>

    <h2 class="subtitle tac">GIT版本控制指令</h2>
    <div class="edit-block">
        <table>
            <thead>
                <tr>
                    <td>指令</td>
                    <td>功能備註</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>git init</td>
                    <td>讓此資料夾初始化，開始進行git版控</td>
                </tr>
                <tr>
                    <td>git status</td>
                    <td>目前資料夾狀態</td>
                </tr>
                <tr>
                    <td>git add 檔案</td>
                    <td>把此檔案加入暫存區(Stagin Area)</td>
                </tr>
                <tr>
                    <td>git add --all(或.)</td>
                    <td>把此資料夾所有檔案加入暫存區</td>
                </tr>
                <tr>
                    <td>git commit -m "此版本更新內容敘述"</td>
                    <td>將暫存區檔案移往儲存庫(Repository)</td>
                </tr>
                <tr>
                    <td>git commit --amend -m "要修改的commit訊息"</td>
                    <td>修改上一次的commit訊息</td>
                </tr>
                <tr>
                    <td>git commit --amend --no-edit</td>
                    <td>追加commit的檔案但不想改變版本（檔案要先add）</td>
                </tr>
            </tbody>
        </table>
        <br>
        <p>※要執行commit指令才算完成整個流程。</p>
        <p>※要查看歷史紀錄或搜尋用Sourcetree（Git圖形輔助工具）比較方便閱讀。</p>
        <p>※有不想放在Git裡的檔案：<a href="https://gitbook.tw/chapters/using-git/ignore.html" target="_blank">見此</a></p>
        <p>※有需要救回的檔案或目錄（git checkout）：<a href="https://gitbook.tw/chapters/using-git/recover-deleted-files.html" target="_blank">見此</a></p>
    </div>

    
</div>

<!-- ----------------------------------------------- -->

<?php include("includes/footer.php") ?> 


</body>
</html>
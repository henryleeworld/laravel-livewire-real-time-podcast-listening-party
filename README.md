# Laravel 12 Livewire 即時 Podcast 聆聽派對

Podcast 最初始的意思是一種數位音訊節目，透過 RSS 動態消息分發和匯集內容，讓使用者可以隨時隨地收聽各種內容，無論是新聞、訪談、娛樂或教育類的節目。它的特色在於便捷性和多樣化的內容選擇，無論是通勤、健身還是休閒時光，Podcast 都成為人們重要的資訊和娛樂來源。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 執行安裝 Vite 和 Laravel 擴充套件引用的依賴項目。
```sh
$ npm install
```
- 執行正式環境版本化資源管道並編譯。
```sh
$ npm run build
```
- 執行 __Artisan__ 指令的 __reverb:start__ 來執行 Reverb 伺服器啟動。
```sh
$ php artisan reverb:start
```
- 執行 __Artisan__ 指令的 __queue:work__ 來執行隊列作業器啟動來處理新任務。
```sh
$ php artisan queue:work
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/register` 來進行註冊。
- 完成註冊後，可以經由 `/login` 來進行登入。

----

## 畫面截圖
![](https://i.imgur.com/8Esdm6J.gif)
> 一起聊聊對於節目的任何想法，可聽到多元角度的聲音

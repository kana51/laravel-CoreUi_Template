## laravel + CoreUiテンプレート

## インストール
### terminal

CoreUi

```diff
npm install --save @coreui/coreui
```

>chalkが無い！と怒られたら、npm install --save chalk


フォント

```diff
npm install @fortawesome/fontawesome-free --save
npm install simple-line-icons --save
```


### resources/js/bootstrap.jsに追加

```diff
try { 
    window。$ = window.jQuery = require（ 'jquery'）; 

    require（ 'bootstrap'）; 
+    require（ '@ coreui / coreui'）; 
} catch（e）{}
```
### resources/sass/app.scss

```diff
// Fonts
@import url('https://fonts.googleapis.com/css?family=Nunito');

// Variables
@import 'variables';

// Bootstrap
@import '~bootstrap/scss/bootstrap';

+// Icons（追加）
+@import '~@fortawesome/fontawesome-free/css/all.min.css';
+@import '~simple-line-icons/css/simple-line-icons.css';

+// Coreui（追加）
+@import '~@coreui/coreui/dist/css/coreui.min.css';

// styles(option)
//@import 'styles.scss';

.navbar-laravel {
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
}
```
>自分用のカスタムCSS(SCSS)を一緒にコンパイルしたい場合はresources/sass/styles.scssを追加し、app.scssに@import 'styles.scss'とすれば合わせてコンパルされます。


## コンパイル
```diff
npm run dev
``` 

> perfect-scrollbarが無い！と怒られたら、npm install --save perfect-scrollbar
> それでもエラーがでる場合は npm install　をしてから再度やってみる



### Login
<img width="1105" alt="2018-12-11 15 14 21" src="https://user-images.githubusercontent.com/29940583/49782011-12d99980-fd58-11e8-8ea4-60707beb08a6.png">

### Register
<img width="995" alt="2018-12-11 15 14 29" src="https://user-images.githubusercontent.com/29940583/49782033-2f75d180-fd58-11e8-8cb3-795894744c99.png">

### Reset Password
<img width="1062" alt="2018-12-11 15 14 35" src="https://user-images.githubusercontent.com/29940583/49782042-3b619380-fd58-11e8-8446-184c30edd038.png">

### Dashboard
<img width="1695" alt="2018-12-11 15 15 03" src="https://user-images.githubusercontent.com/29940583/49782068-5502db00-fd58-11e8-82ef-fed6c4fd6a9f.png">
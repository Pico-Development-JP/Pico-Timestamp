# pico-timestamp
Pico Plugin: ファイルの変更日時を取得するプラグイン

## テンプレートに追加する値
なし
 
##  追加するTwig変数
 * fileupdate:最終更新日を示す値。

### テンプレート内での利用例

```html
  <ul>
    <!-- 別記事の最終更新日を取得する場合 -->
    {% for page in pages %}
      <li>
        <a href="{{page.url}}">
          {{ page.title }}
        </a>
        <span class="lastupdate">
          ({{page.fileupdate|date("m月d日")}}更新)
        </span>
      </li>
    {% endfor %}
  </ul>
  <!-- 現在みている記事の最終更新日を取得する場合 -->
  <p class="lastupdate">この記事の最終更新日：{{current_page.fileupdate|date("Y年m月d日")}}</p>
```

##  コンフィグオプション
なし

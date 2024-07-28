# book-tdd-php82
### テスト駆動開発のテキストを PHP で実装してみる
- URL：https://www.amazon.co.jp/dp/4274217884

### テスト駆動開発のテキストでは各章以下の言語で実装されている
- 第1章：Java
- 第2章：Python

### 第1章：多国通貨の全体ふりかえり
- Javaで書かれているコードをPHPで写経した
- ディレクトリ構造
  ├── README.md
  ├── app
  │   └── money
  │       ├── TODO.md
  │       ├── src
  │       │   ├── Bank.php
  │       │   ├── Expression.php
  │       │   ├── HashMap.php
  │       │   ├── Money.php
  │       │   ├── Pair.php
  │       │   └── Sum.php
  │       └── tests
  │           ├── Money
  │           └── MoneyTest.php
  ├── composer.json
  ├── composer.lock
  ├── phpunit.xml.dist
  └── vendor
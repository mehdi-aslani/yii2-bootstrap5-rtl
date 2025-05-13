# Yii2 Bootstrap 5 RTL Extension

This is a Yii2 AssetBundle that replaces the default Bootstrap 5 CSS file with its **Right-to-Left (RTL)** version.

It is useful for web applications that use **RTL languages** such as Persian, Arabic, Hebrew, etc.

## 📦 Installation

The preferred way to install this extension is through [Composer](https://getcomposer.org/).

Run the following command:

```bash
composer require aslani/yii2-bootstrap5-rtl
```

Or add this line to the `require` section of your `composer.json` file:

```json
"aslani/yii2-bootstrap5-rtl": "*"
```

Then run:

```bash
composer update
```

> ⚠️ Make sure you have installed `bower-asset/bootstrap` via Composer. This package relies on that to load the RTL CSS file.

---

## ⚙️ Usage

In order to use the RTL version of Bootstrap in your Yii2 application, you just need to replace the default `BootstrapAsset` with `BootstrapRtlAsset` in your `AppAsset` (or any other AssetBundle).

### Example:

```php
namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/site.css',
    ];

    public $js = [];

    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset', // Remove or comment this line
        'aslani\bootstrap5\BootstrapRtlAsset', // Use this instead
    ];
}
```

This will make sure the following file is loaded instead of the default Bootstrap CSS:

```
vendor/bower-asset/bootstrap/dist/css/bootstrap.rtl.min.css
```

---

## 🛠️ AssetBundle Details

The class provided by this package:

```php
aslani\bootstrap5\BootstrapRtlAsset
```

Loads the following CSS file:

```text
@bower/bootstrap/dist/css/bootstrap.rtl.min.css
```

If you are using an alternative path or a custom version of Bootstrap RTL, you can override the `$sourcePath` or `$css` property accordingly.

---

## 💡 Tips

- You may need to manually include an RTL-compatible version of Bootstrap 5 if it’s not available by default in your `bower-asset/bootstrap` package.
- If you see an error related to `@bower` alias, add this in your Yii2 config or bootstrap file:

```php
Yii::setAlias('@bower', dirname(__DIR__) . '/vendor/bower-asset');
```

---

## 🪪 License

This project is released under the BSD-3-Clause License.  
See the [LICENSE](LICENSE) file for details.

---

## 🙋 Support

- GitHub: [https://github.com/mehdi-aslani/yii2-bootstrap5-rtl](https://github.com/mehdi-aslani/yii2-bootstrap5-rtl)
- Issues: [Submit Bug Reports](https://github.com/mehdi-aslani/yii2-bootstrap5-rtl/issues)

---

## 🧑 Author

**Mehdi Aslani**  
📧 Email: aslani.mhd@gmail.com  
📦 Packagist: [aslani/yii2-bootstrap5-rtl](https://packagist.org/packages/aslani/yii2-bootstrap5-rtl)

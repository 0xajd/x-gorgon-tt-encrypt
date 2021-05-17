# TikTok X-Gorgon & TTEncrypt in NodeJS, Python & PHP variants

**X-Gorgon/X-Khronos** headers are required for mobile app api requests. The library provides standalone solution without any external or special requirements to do the calculations

**TTEncrypt** is required to do device registrations, applog for valid api requests.

The script can run as library/module on any platform with Python v3.8+, PHP v7+ & NodeJS v12+ without any dependency with Frida/Emulators/ADB of any kind

## X-Gorgon:
- NodeJS
- Python
- PHP

## X Gorgon Versions:
- v03 (NodeJS)
- v0404 (NodeJS/Python/PHP)

## TTEncrypt
TT Encrypt available for device registration and applog with no dependency of any device/emulators
- PHP
- NodeJS
- Python


X-Gorgon Response Object:
```json
{
    "X-Gorgon": "0404d0e400010f39aa7f1704a5760372721ccf34c4f2ad41546b",
    "X-Khronos": 1619330839
}
```

## Usage:
**NodeJS**
```javascript
// X-Gorgon Generation
const gorgon=require('./lib/gorgon');
const params="URL PARAMS STRINGIFIED"; // only GET request parameters
const cookies="TIKTOK COOKIES"; // may be blank if you don't want to use session
const data="DATA JSON STRINGIFIED";
const stub=md5(data);
const xGorgonHeaders=gorgon(params,cookies,data);

// TTEncrypt post data
const ttEncrypt=require('./lib/tt_encrypt');
const tt_encrypt_body=await ttEncrypt("POST_BODY_IN_JSON_FORMAT");
```
**PHP**
```php
// X-Gorgon Generation
$xgorgon= new Gorgon();
$gorgonHeader=$gorgon->calculate("URL_PARAM_STRINGIFIED",$cookies,$data);

// TTEncrypt post data
$encrypt=new Encrypt();
$tt_data=$encrypt->encrypt("POST_BODY_IN_JSON_FORMAT");
```



## Contact
- Telegram: https://t.me/ssovit
- Email: sovit.tamrakar@gmail.com

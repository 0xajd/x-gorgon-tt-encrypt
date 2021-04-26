# TikTok X-Gorgon & X-Khronos Generation

X-Gorgon/X-Khronos headers are required for mobile app api requests. My API provides the standalone solution without any external or special requirements to do the calculations

The script can run as library/module on any platform with Python v3.8+ or NodeJS v12+ without any dependency with Frida/Emulators/ADB of any kind

## Availble in:
- NodeJS
- Python
- PHP (Translation in progress...)

## Versions:
- v03 (Nodejs)
- v0404 (NodeJS/Python)

## TikTok Version: 17.6.3

Sample Response:
```json
{
    "X-Gorgon": "0404d0e400010f39aa7f1704a5760372721ccf34c4f2ad41546b",
    "X-Khronos": 1619330839
}
```

## Usage:
```javascript
const gorgon=require('./lib/gorgon');
const params="URL PARAMS STRINGIFIED"; // only GET request parameters
const cookies="TIKTOK COOKIES"; // may be blank if you don't want to use session
const data="POST DATA STRINGIFIED"; // blank if not using POST request
const stub=md5(data);
const xGorgonHeaders=gorgon(params,cookies,data);
```

**Contact for details:** https://t.me/ssovit

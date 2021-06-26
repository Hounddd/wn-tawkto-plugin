tawk.to Live Chat plugin
============

tawk.to Live Chat plugin for Winter CMS.

You can use default property on all pages or you can specify unique tag for specific pages.  
**You need a [tawk.to](https://www.tawk.to/signup) account to use this plugin, it's free.**  


## Installation

### Backend installation
Search for `Hounddd.Tawkto` from your website backend

### Composer installation
```
composer require hounddd/wn-tawkto-plugin
```

## Configuration
### On this website
Add your direct chat link to the tawk.to plugin configuration page under the 'Misc' section of the System Settings page in the backend.  
Add the tawkto component to your layout and make sure that the `{% component 'tawkto' %}` is added **before** `{% scripts %}` tag as it will use it to inject tawk.to script.

### On tawk.to website
From [tawk.to admin](https://dashboard.tawk.to/#/admin), select the property you wand to add to your site and copy the `Direct chat link` from settings.

### Specific page configuration
If you choose to add the component tag in your page, you can override plugin setting by defining the `tawkto_chat_link` property in the configuration part of your page
```
[tawkTo]
tawkto_chat_link = "https://tawk.to/chat/7693b99e9b484793879558af/d9712c58"
```
or on the component call.
```
{% component 'tawkTo' tawkto_chat_link = 'https://tawk.to/chat/7693b99e9b484793879558af/d9712c58' %}
```
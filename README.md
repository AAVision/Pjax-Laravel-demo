# Pjax LARAVEL DEMO
it is a small demo about the use of pjax in laravel.


# What is pjax?

## pjax = pushState + ajax

pjax is a jQuery plugin that uses ajax and pushState to deliver a fast browsing experience with real permalinks, page titles, and a working back button.

pjax works by fetching HTML from your server via ajax and replacing the content
of a container element on your page with the loaded HTML. It then updates the
current URL in the browser using pushState. This results in faster page
navigation for two reasons:

* No page resources (JS, CSS) get re-executed or re-applied;
* If the server is configured for pjax, it can render only partial page
  contents and thus avoid the potentially costly full layout render.

## Install Project


```
git clone https://github.com/AAVision/Pjax-Laravel-demo.git
```

## Installation


```
 composer install
```

```
 cp .env.example .env
```

```
 php artisan key:generate
```

```
 php artisan serve
```

Head to 127.0.0.1:8000/



## DEMO
![alt text](https://github.com/AAVision/Pjax-Laravel-demo/blob/master/demo.gif?raw=true)


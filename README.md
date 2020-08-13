- :iran: [فارسی](#ختم-قرآن)
- :us: [English](#khatm-Quran)

<div dir="rtl">
  
# ختم قرآن
یک وب اپلیکشن برای مدیریت بسیار ساده ختم های گروهی قرآن کریم

## **فهرست**

1)[مقدمه](#مقدمه)

2)[روش اجرای برنامه](#روش-اجرای-برنامه)
  - [در صورت اجرا در کامپیوتر شخصی (روی هاست محلی)](#1-در-صورت-اجرا-در-کامپیوتر-شخصی-روی-هاست-محلی)
  - [در صورت اجرا روی هاست (یا سرور)](#2-در-صورت-اجرا-روی-هاست-یا-سرور)

## مقدمه
پروژه **ختم قرآن** (هنوز بدون نام مجزا) یک وب اپلیکیشن برای مدیریت بسیار ساده ختم های گروهی قرآن کریم است. این اپلیکیشن با **`php`** ، **`MySQL`** و **`javaScript`** برنامه نویسی و تولید شده است.

## روش اجرای برنامه

> ### 1) در صورت اجرا در کامپیوتر شخصی (روی هاست محلی)
1. یک شبیه ساز وب سرور (مانند `LAMP` در لینوکس ، `XAMPP` و `WAMP` در ویندوز و `MAMP` در مک) در کامپیوترتان نصب کنید
2. پوشه `www` یا `htdocs` (وابسته به شبیه ساز وب سرور) که در محل نصب نرم افزار وب سرورتان است را با ترمینال باز کنید
3. این پروژه را با کد های زیر کلون کنید (اگر بر روی کامپیوترتان `git` را نصب نکرده اید ، آن را نصب کنید)

</div>

```
  #تنظیمات کلی git
  git config --global user.name "{your-github-username}"
  git config --global user.email "{your-github-email}"
  
  #برای کلون کردن پروژه در محل
  git clone https://github.com/msadegh83/khatm-Quran.git
  
  ```

<div dir="rtl">
  
4. کنترل پنل نرم افزار وب سرور را باز کرده و `Apache` و `MySQL` را استارت کنید
5. وارد `phpmyadmin` شوید و فایل `khatm.sql` را import کنید
6. یک user جدید ایجاد کنید و username و password آن را در فایل `config.php` {که کلون کرده اید} تغییر دهید:

</div>

```php
<?php

define("ServerName","localhost");
define("Username", "username");
define("password", "password");
define("DBName", "khatm");

```

<div dir="rtl">
  
**\*usename و password کاربر ایجاد شده را در قسمتی که مقادیر `"username"` و `"password"` قرار دارد جایگزین کنید**

7. آدرس `localhost\khatm-Quran` را در مرورگر خود وارد کنید

8.**تبریک می گوییم! شما موفق به اجرای برنامه شدید**


</div>

# khatm-Quran
a simple web application for make very easy manage group recite of Quran

## ***Contents***

1)[Introduction](#Introduction)

2)[How to run](#How-to-run)
  - [if you want to run with own Computer(on localhost)](#1-if-you-want-to-run-with-own-computeron-localhost)
  - [if you want to run to your host (or server)](#2-if-you-want-to-run-to-your-host-or-server)

## Introduction
**Khatm Quran** project (until doesn't have a unique name) is a web application for make very easy management group recite of Quran. this app made with **`php`** , **`MySQL`**
and **`javaScript`**.

## How to run

> ### 1) if you want to run with own Computer(on localhost)

1. install a Webserver simulator (like `LAMP` on linux ,`XAMPP` & `WAMP` on windows and `MAMP` on Mac os)
2. open `www` or `htdocs` (depends on your Webserver simulator) folder (on terminal)
3. clone this project with following codes (if you don't have `git` on your computer , install it):
  ```
  #git global setup
  git config --global user.name "{your-github-username}"
  git config --global user.email "{your-github-email}"
  
  #clone git project to path
  git clone https://github.com/msadegh83/khatm-Quran.git
  
  ```
4. run your Webserver's control panel and start Apache and MySQL
5. go to `phpmyadmin` and import `khatm.sql` file
6. define a new user in `phpmyadmin` and type new user's username & password in `config.php` file:
```php
<?php

define("ServerName","localhost");
define("Username", "username");
define("password", "password");
define("DBName", "khatm");

```
7. go to `localhost/khatm-Quran` in your browser
8. **congratulation!**
> ### 2) if you want to run to your host (or server):
1. 

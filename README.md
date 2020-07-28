# CodeMan's Hub Version 3.0  [![Conventional Commits](https://img.shields.io/badge/Version-3.2.0-green.svg)](https://conventionalcommits.org)

## About
CodeMan's Hub is a personal portfolio website I created from scratch to showcase my work across college and after. Most of it is standard php with some small additional features sprinkled in to add more dynamic features. This project combines my knowledge of front-end design with back-end processing.

## Technologies

- HTML5
- CSS3
- JavaScript
- PHP 7.2
- Hosting by Hostinger
- Google ReCaptcha

## Setup

Most of the website setup is explanatory. Within the public_html file, upload all of the relevant files. Index.php is the homepage file. Nav.php must also be included to utilize the navbar and allow an easy transition between pages. 

To utilize Google Recaptcha, log in to your google account. From there, go to the Google recaptcha setup. Make sure to specify the domain you wish to add. Then, hit submit. You will be given two keys from Google, a Public and Private Key. 

In the contact.php file, Enter this line where you want the Captcha to appear:

```HTML
<div class="g-recaptcha" data-sitekey="RECAPTCHA_PUBLIC_KEY"></div>
```

In the PHP code in contact.php, there is a variable holding the secret key:

```PHP
$secretKey = 'Secret Key Here';
```

Be sure to add the specified keys in their proper locations. After a page refresh, the server should recognize the keys and the Captcha will be online.

## Website Link
To visit the website in action, follow the link: https://codemanshub.com/

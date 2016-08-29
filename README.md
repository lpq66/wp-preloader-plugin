# wp-preloader-plugin
<p>The simplest preloader plugin for WordPress. Lightweight and effective.</p>
Here is the [demo:](http://codepen.io/lpq66/pen/qaWWVX)
#Installation#
<p>1. Just download zip file and upload it as regular plugin<p>
<p>2. Create a new folder in /wp-content/plugins, name it and create 3 files inside it: main.js, preloader.css and preloaders.php. Then copy all the content and put in your files.</p>

#Usage#
```
#loading{
	background: #f5f5f5;    
	height: 100%;
	width: 100%;
	position: fixed;
	z-index: 999;
	margin-top: 0px;
	top: 0px;
}
```
`background: #f5f5f5;`  - Change your preloader page background here.

`z-index: 999;` - Change this to a bigger value if your menu bar overlapping the preloader. 

Next thing is to find any css preloader or you can use mine:

```
#preloader_3:before{
    width:20px;
    height:20px;
    border-radius:20px;
    background:blue;
    content:'';
    position:absolute;
    background:#9b59b6;
    animation: preloader_3_before 1.5s infinite ease-in-out;
}

#preloader_3:after{
    width:20px;
    height:20px;
    border-radius:20px;
    background:blue;
    content:'';
    position:absolute;
    background:#2ecc71;
    left:22px;
    animation: preloader_3_after 1.5s infinite ease-in-out;
}

@keyframes preloader_3_before {
    0% {transform: translateX(0px) rotate(0deg)}
    50% {transform: translateX(50px) scale(1.2) rotate(260deg); background:#2ecc71;border-radius:0px;}
      100% {transform: translateX(0px) rotate(0deg)}
}
@keyframes preloader_3_after {
    0% {transform: translateX(0px)}
    50% {transform: translateX(-50px) scale(1.2) rotate(-260deg);background:#9b59b6;border-radius:0px;}
    100% {transform: translateX(0px)}
}
```

`background:#9b59b6` - Color of first item

`background:#2ecc71;` - Color of second item

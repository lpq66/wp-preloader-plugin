# wp-preloader-plugin
<p>The simplest preloader plugin for WordPress. Lightweight and effective.</p>
Here is the [demo:](http://codepen.io/lpq66/pen/qaWWVX)
#Installation#
<p>1. Just download zip file and upload it as regular plugin<p>
<p>2. Create a new folder in /wp-content/plugins, name it and create 3 files inside it: main.js, preloader.css and preloaders.php. Then copy all the content and put in your files.</p>

#Usage#
```
#preloader  {
     position: absolute;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     background-color: #f7f7f7;
     z-index: 999;
     height: 100%;
 }

```
`background: #f7f7f7;`  - Change your preloader page background here.

`z-index: 999;` - Change this to a bigger value if your menu bar overlapping the preloader. 

Next thing is to find any css preloader or you can use mine.

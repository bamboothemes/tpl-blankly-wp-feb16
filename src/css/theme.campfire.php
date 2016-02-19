<?php ob_start ("ob_gzhandler");
			    header("Content-type: text/css; charset: UTF-8");
			    header("Cache-Control: must-revalidate");
			    $offset = 60 * 60 ;
			    $ExpStr = "Expires: " .
			    gmdate("D, d M Y H:i:s",
			    time() + $offset) . " GMT";
			    header($ExpStr);?>/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
/*! normalize.css v3.0.1 | MIT License | git.io/normalize */
html {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
  width: 100%;
  box-sizing: border-box;
}
*,
*:before,
*:after {
  box-sizing: inherit;
}
body {
  margin: 0;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section,
summary {
  display: block;
}
audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline;
}
audio:not([controls]) {
  display: none;
  height: 0;
}
[hidden],
template {
  display: none;
}
a {
  background: transparent;
}
a:active,
a:hover {
  outline: 0;
}
abbr[title] {
  border-bottom: 1px dotted;
}
b,
strong {
  font-weight: bold;
}
dfn {
  font-style: italic;
}
h1 {
  font-size: 2em;
  margin: 0.67em 0;
}
mark {
  background: #ff0;
  color: #000;
}
small {
  font-size: 80%;
}
sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}
sup {
  top: -0.5em;
}
sub {
  bottom: -0.25em;
}
img {
  border: 0;
}
svg:not(:root) {
  overflow: hidden;
}
figure {
  margin: 1em 40px;
}
hr {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
}
pre {
  overflow: auto;
}
code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}
button,
input,
optgroup,
select,
textarea {
  color: inherit;
  font: inherit;
  margin: 0;
}
button {
  overflow: visible;
}
button,
select {
  text-transform: none;
}
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer;
}
button[disabled],
html input[disabled] {
  cursor: default;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}
input {
  line-height: normal;
}
input[type="checkbox"],
input[type="radio"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 0;
}
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}
input[type="search"] {
  -webkit-appearance: textfield;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
}
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}
legend {
  border: 0;
  padding: 0;
}
textarea {
  overflow: auto;
}
optgroup {
  font-weight: bold;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
td,
th {
  padding: 0;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
html {
  overflow-x: hidden;
  height: 100%;
}
body {
  height: 100%;
}
.section {
  float: left;
  width: 100%;
}
.article-content {
  clear: both;
}
/* Reset the margin on menu items - Not really sure why this is necessary */
ul,
menu,
dir,
ol {
  padding-left: 0;
  -webkit-margin-before: 0em;
  -webkit-margin-after: 0em;
  -webkit-margin-start: 0px;
  -webkit-margin-end: 0px;
  -webkit-padding-start: 0px;
}
div,
ul,
li {
  -webkit-box-sizing: border-box;
  /* Safari/Chrome, other WebKit */
  -moz-box-sizing: border-box;
  /* Firefox, other Gecko */
  box-sizing: border-box;
}
.span12 {
  margin: 0 !important;
}
.hidden {
  display: none !important;
}
/* Reset DD things in Joomla */
dd {
  padding: 0;
  margin: 0;
}
/* Indent on ul */
ul,
ol {
  margin-left: 16px;
}
fieldset {
  min-width: 0;
}
/* Sidebar margin ul reset */
.items-more ol {
  margin-left: 0;
  padding: 0;
}
/* Dont like Hr styling */
hr {
  border: 0;
}
/* Puts default margin on content items */
article {
  margin: 0;
  padding: 0;
}
input:-webkit-autofill {
  -webkit-box-shadow: 0 0 0px 1000px white inset;
}
input:-webkit-autofill:hover {
  -webkit-box-shadow: 0 0 0px 1000px #fbfbfb inset;
}
.btn-group a {
  margin-right: 8px;
}
.btn-group > .dropdown-toggle,
.btn-group > .btn:first-child,
.btn-group > .btn:last-child {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
}
#system-message {
  margin: 0 !important;
}
legend {
  margin: 0;
}
iframe {
  max-width: 100%;
}
figure {
  margin: 0;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
.muted {
  color: #cccccc;
}
img {
  max-width: 100%;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/* Reusable column setup */
.mixin-col {
  border: 0px solid rgba(0, 0, 0, 0);
  float: left;
  box-sizing: border-box;
  -moz-background-clip: padding-box !important;
  -webkit-background-clip: padding-box !important;
  background-clip: padding-box !important;
}
.zg-col {
  border: 0px solid rgba(0, 0, 0, 0);
  float: left;
  box-sizing: border-box;
  -moz-background-clip: padding-box !important;
  -webkit-background-clip: padding-box !important;
  background-clip: padding-box !important;
  margin-bottom: 15px;
}
.mixin-span_first,
.no-margin {
  margin-left: 0;
}
.zg-col {
  margin-left: 0;
  padding: 0;
  width: 100%;
}
@media screen and (min-width: 787px) {
  /* --- Gridpak variables ---*/
  .zen-row .zg-col:first-child {
    margin-left: 0;
  }
  /*
        Add your semantic classnames in alongside their corresponding spans here. e.g.
        
        */
  .zg-col-1 {
    width: 6.5%;
    border-left-width: 0;
    padding: 0;
    margin-left: 2%;
  }
  .zg-col-2,
  .one-sixth {
    width: 15%;
    border-left-width: 0;
    padding: 0;
    margin-left: 2%;
  }
  .zg-col-3,
  .one-quarter {
    width: 23.5%;
    border-left-width: 0;
    padding: 0;
    margin-left: 2%;
  }
  .zg-col-4,
  .one-third {
    width: 32%;
    border-left-width: 0;
    padding: 0;
    margin-left: 2%;
  }
  .zg-col-5 {
    width: 40.5%;
    border-left-width: 0;
    padding: 0;
    margin-left: 2%;
  }
  .zg-col-6,
  .one-half {
    width: 49%;
    border-left-width: 0;
    padding: 0;
    margin-left: 2%;
  }
  .zg-col-7 {
    width: 57.5%;
    border-left-width: 0;
    padding: 0;
    margin-left: 2%;
  }
  .zg-col-8,
  .two-thirds {
    width: 66%;
    border-left-width: 0;
    padding: 0;
    margin-left: 2%;
  }
  .zg-col-9,
  .three-quarters {
    width: 74.5%;
    border-left-width: 0;
    padding: 0;
    margin-left: 2%;
  }
  .zg-col-10 {
    width: 83%;
    border-left-width: 0;
    padding: 0;
    margin-left: 2%;
  }
  .zg-col-11 {
    width: 91.5%;
    border-left-width: 0;
    padding: 0;
    margin-left: 2%;
  }
  .zg-col-12,
  .one-whole {
    margin-left: 0;
    padding: 0;
    width: 100%;
  }
  .zen-push,
  .zen-pull {
    position: relative;
    z-index: 1;
  }
  .zen-push-11 {
    left: 93.42666667%;
  }
  .zen-push-10 {
    left: 84.93333333%;
  }
  .zen-push-9 {
    left: 76.44%;
  }
  .zen-push-8 {
    left: 67.94666667%;
  }
  .zen-push-7 {
    left: 59.45333333%;
  }
  .zen-push-6 {
    left: 50.96%;
  }
  .zen-push-5 {
    left: 42.46666667%;
  }
  .zen-push-4 {
    left: 33.97333333%;
  }
  .zen-push-3 {
    left: 25.48%;
  }
  .zen-push-2 {
    left: 16.98666667%;
  }
  .zen-push-1 {
    left: 8.49333333%;
  }
  .zen-pull-11 {
    left: -93.42666667%;
  }
  .zen-pull-10 {
    left: -84.93333333%;
  }
  .zen-pull-9 {
    left: -76.44%;
  }
  .zen-pull-8 {
    left: -67.94666667%;
  }
  .zen-pull-7 {
    left: -59.45333333%;
  }
  .zen-pull-6 {
    left: -50.96%;
  }
  .zen-pull-5 {
    left: -42.46666667%;
  }
  .zen-pull-4 {
    left: -33.97333333%;
  }
  .zen-pull-3 {
    left: -25.48%;
  }
  .zen-pull-2 {
    left: -16.98666667%;
  }
  .zen-pull-1 {
    left: -8.49333333%;
  }
  .zen-pad-push-11 {
    padding-left: 93.42666667%;
  }
  .zen-pad-push-10 {
    padding-left: 84.93333333%;
  }
  .zen-pad-push-9 {
    padding-left: 76.44%;
  }
  .zen-pad-push-8 {
    padding-left: 67.94666667%;
  }
  .zen-pad-push-7 {
    padding-left: 59.45333333%;
  }
  .zen-pad-push-6 {
    padding-left: 50.96%;
  }
  .zen-pad-push-5 {
    padding-left: 42.46666667%;
  }
  .zen-pad-push-4 {
    padding-left: 33.97333333%;
  }
  .zen-pad-push-3 {
    padding-left: 25.48%;
  }
  .zen-pad-push-2 {
    padding-left: 16.98666667%;
  }
  .zen-pad-push-1 {
    padding-left: 8.49333333%;
  }
  .zen-pad-pull-11 {
    padding-right: 93.42666667%;
  }
  .zen-pad-pull-10 {
    padding-right: 84.93333333%;
  }
  .zen-pad-pull-9 {
    padding-right: 76.44%;
  }
  .zen-pad-pull-8 {
    padding-right: 67.94666667%;
  }
  .zen-pad-pull-7 {
    padding-right: 59.45333333%;
  }
  .zen-pad-pull-6 {
    padding-right: 50.96%;
  }
  .zen-pad-pull-5 {
    padding-right: 42.46666667%;
  }
  .zen-pad-pull-4 {
    padding-right: 33.97333333%;
  }
  .zen-pad-pull-3 {
    padding-right: 25.48%;
  }
  .zen-pad-pull-2 {
    padding-right: 16.98666667%;
  }
  .zen-pad-pull-1 {
    padding-right: 8.49333333%;
  }
}
@media screen and (max-width: 700px) {
  .responsive-enabled .stack-tablets .zg-col {
    margin-left: 0;
    padding: 0;
    width: 100%;
  }
}
@media screen and (max-width: 620px) {
  .responsive-enabled .stack-phones .zg-col {
    margin-left: 0;
    padding: 0;
    width: 100%;
  }
}
.responsive-disabled,
.no-change-phones,
.no-change-tablets {
  /* --- Gridpak variables ---*/
  /*
	           Add your semantic classnames in alongside their corresponding spans here. e.g.
	           
	           */
}
.responsive-disabled .zg-col,
.no-change-phones .zg-col,
.no-change-tablets .zg-col {
  margin-left: 0;
}
.responsive-disabled .zen-row .zg-col:first-child,
.no-change-phones .zen-row .zg-col:first-child,
.no-change-tablets .zen-row .zg-col:first-child {
  margin-left: 0;
}
.responsive-disabled .zg-col-1,
.no-change-phones .zg-col-1,
.no-change-tablets .zg-col-1 {
  width: 6.5%;
  border-left-width: 0;
  padding: 0;
  margin-left: 2%;
}
.responsive-disabled .zg-col-2,
.no-change-phones .zg-col-2,
.no-change-tablets .zg-col-2,
.responsive-disabled .one-sixth,
.no-change-phones .one-sixth,
.no-change-tablets .one-sixth {
  width: 15%;
  border-left-width: 0;
  padding: 0;
  margin-left: 2%;
}
.responsive-disabled .zg-col-3,
.no-change-phones .zg-col-3,
.no-change-tablets .zg-col-3,
.responsive-disabled .one-quarter,
.no-change-phones .one-quarter,
.no-change-tablets .one-quarter {
  width: 23.5%;
  border-left-width: 0;
  padding: 0;
  margin-left: 2%;
}
.responsive-disabled .zg-col-4,
.no-change-phones .zg-col-4,
.no-change-tablets .zg-col-4,
.responsive-disabled .one-third,
.no-change-phones .one-third,
.no-change-tablets .one-third {
  width: 32%;
  border-left-width: 0;
  padding: 0;
  margin-left: 2%;
}
.responsive-disabled .zg-col-5,
.no-change-phones .zg-col-5,
.no-change-tablets .zg-col-5 {
  width: 40.5%;
  border-left-width: 0;
  padding: 0;
  margin-left: 2%;
}
.responsive-disabled .zg-col-6,
.no-change-phones .zg-col-6,
.no-change-tablets .zg-col-6,
.responsive-disabled .one-half,
.no-change-phones .one-half,
.no-change-tablets .one-half {
  width: 49%;
  border-left-width: 0;
  padding: 0;
  margin-left: 2%;
}
.responsive-disabled .zg-col-7,
.no-change-phones .zg-col-7,
.no-change-tablets .zg-col-7 {
  width: 57.5%;
  border-left-width: 0;
  padding: 0;
  margin-left: 2%;
}
.responsive-disabled .zg-col-8,
.no-change-phones .zg-col-8,
.no-change-tablets .zg-col-8,
.responsive-disabled .two-thirds,
.no-change-phones .two-thirds,
.no-change-tablets .two-thirds {
  width: 66%;
  border-left-width: 0;
  padding: 0;
  margin-left: 2%;
}
.responsive-disabled .zg-col-9,
.no-change-phones .zg-col-9,
.no-change-tablets .zg-col-9,
.responsive-disabled .three-quarters,
.no-change-phones .three-quarters,
.no-change-tablets .three-quarters {
  width: 74.5%;
  border-left-width: 0;
  padding: 0;
  margin-left: 2%;
}
.responsive-disabled .zg-col-10,
.no-change-phones .zg-col-10,
.no-change-tablets .zg-col-10 {
  width: 83%;
  border-left-width: 0;
  padding: 0;
  margin-left: 2%;
}
.responsive-disabled .zg-col-11,
.no-change-phones .zg-col-11,
.no-change-tablets .zg-col-11 {
  width: 91.5%;
  border-left-width: 0;
  padding: 0;
  margin-left: 2%;
}
.responsive-disabled .zg-col-12,
.no-change-phones .zg-col-12,
.no-change-tablets .zg-col-12,
.responsive-disabled .one-whole,
.no-change-phones .one-whole,
.no-change-tablets .one-whole {
  margin-left: 0;
  padding: 0;
  width: 100%;
}
.responsive-disabled .zen-push,
.no-change-phones .zen-push,
.no-change-tablets .zen-push,
.responsive-disabled .zen-pull,
.no-change-phones .zen-pull,
.no-change-tablets .zen-pull {
  position: relative;
  z-index: 1;
}
@media screen and (min-width: 620px) and (max-width: 700px) {
  .no-change-tablets .zen-push-11 {
    left: 93.42666667%;
  }
  .no-change-tablets .zen-push-10 {
    left: 84.93333333%;
  }
  .no-change-tablets .zen-push-9 {
    left: 76.44%;
  }
  .no-change-tablets .zen-push-8 {
    left: 67.94666667%;
  }
  .no-change-tablets .zen-push-7 {
    left: 59.45333333%;
  }
  .no-change-tablets .zen-push-6 {
    left: 50.96%;
  }
  .no-change-tablets .zen-push-5 {
    left: 42.46666667%;
  }
  .no-change-tablets .zen-push-4 {
    left: 33.97333333%;
  }
  .no-change-tablets .zen-push-3 {
    left: 25.48%;
  }
  .no-change-tablets .zen-push-2 {
    left: 16.98666667%;
  }
  .no-change-tablets .zen-push-1 {
    left: 8.49333333%;
  }
  .no-change-tablets .zen-pull-11 {
    left: -93.42666667%;
  }
  .no-change-tablets .zen-pull-10 {
    left: -84.93333333%;
  }
  .no-change-tablets .zen-pull-9 {
    left: -76.44%;
  }
  .no-change-tablets .zen-pull-8 {
    left: -67.94666667%;
  }
  .no-change-tablets .zen-pull-7 {
    left: -59.45333333%;
  }
  .no-change-tablets .zen-pull-6 {
    left: -50.96%;
  }
  .no-change-tablets .zen-pull-5 {
    left: -42.46666667%;
  }
  .no-change-tablets .zen-pull-4 {
    left: -33.97333333%;
  }
  .no-change-tablets .zen-pull-3 {
    left: -25.48%;
  }
  .no-change-tablets .zen-pull-2 {
    left: -16.98666667%;
  }
  .no-change-tablets .zen-pull-1 {
    left: -8.49333333%;
  }
}
@media screen and (max-width: 620px) {
  .no-change-phones .zen-push-11 {
    left: 93.42666667%;
  }
  .no-change-phones .zen-push-10 {
    left: 84.93333333%;
  }
  .no-change-phones .zen-push-9 {
    left: 76.44%;
  }
  .no-change-phones .zen-push-8 {
    left: 67.94666667%;
  }
  .no-change-phones .zen-push-7 {
    left: 59.45333333%;
  }
  .no-change-phones .zen-push-6 {
    left: 50.96%;
  }
  .no-change-phones .zen-push-5 {
    left: 42.46666667%;
  }
  .no-change-phones .zen-push-4 {
    left: 33.97333333%;
  }
  .no-change-phones .zen-push-3 {
    left: 25.48%;
  }
  .no-change-phones .zen-push-2 {
    left: 16.98666667%;
  }
  .no-change-phones .zen-push-1 {
    left: 8.49333333%;
  }
  .no-change-phones .zen-pull-11 {
    left: -93.42666667%;
  }
  .no-change-phones .zen-pull-10 {
    left: -84.93333333%;
  }
  .no-change-phones .zen-pull-9 {
    left: -76.44%;
  }
  .no-change-phones .zen-pull-8 {
    left: -67.94666667%;
  }
  .no-change-phones .zen-pull-7 {
    left: -59.45333333%;
  }
  .no-change-phones .zen-pull-6 {
    left: -50.96%;
  }
  .no-change-phones .zen-pull-5 {
    left: -42.46666667%;
  }
  .no-change-phones .zen-pull-4 {
    left: -33.97333333%;
  }
  .no-change-phones .zen-pull-3 {
    left: -25.48%;
  }
  .no-change-phones .zen-pull-2 {
    left: -16.98666667%;
  }
  .no-change-phones .zen-pull-1 {
    left: -8.49333333%;
  }
}
.zen-marginless-grid .zg-col {
  margin-left: 0;
}
.zen-marginless-grid .zg-col-1 {
  width: 8.3%;
}
.zen-marginless-grid .zg-col-2 {
  width: 16.6%;
}
.zen-marginless-grid .zg-col-3 {
  width: 25%;
}
.zen-marginless-grid .zg-col-4 {
  width: 33.3333%;
}
.zen-marginless-grid .zg-col-5 {
  width: 41.5%;
}
.zen-marginless-grid .zg-col-6 {
  width: 49.8%;
}
.zen-marginless-grid .zg-col-7 {
  width: 58.1%;
}
.zen-marginless-grid .zg-col-8 {
  width: 66.6666%;
}
.zen-marginless-grid .zg-col-9 {
  width: 74.7%;
}
.zen-marginless-grid .zg-col-10 {
  width: 83%;
}
.zen-marginless-grid .zg-col-11 {
  width: 91.3%;
}
.zen-marginless-grid .zg-col-12 {
  width: 99.6%;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
html,
body,
#zen-wrap {
  background: #f9f9f9;
}
#zen-wrap {
  position: relative;
  z-index: 1;
}
/** 
 *------------------------------------------------------------------------------
 * @package       blank.ly | ZGF v4 v2.0
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, December 17 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	December 17 2015
 *------------------------------------------------------------------------------
 */
.zen-row {
  margin: 0;
}
.zen-row:after {
  content: "";
  clear: both;
  display: block;
}
.zen-spotlight {
  float: left;
  width: 100%;
}
.zen-container {
  width: 85%;
  max-width: 720px;
  margin: 0 auto 30px;
  padding: 0;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
.sidebar .moduletable {
  margin-bottom: 30px;
}
.sidebar .moduletable ul,
.sidebar .moduletable ul.unstyled {
  margin: 0 0 30px;
  margin-top: 10px;
}
.sidebar .moduletable ul li,
.sidebar .moduletable ul.unstyled li {
  list-style-type: none;
  padding: 4px 0;
}
.sidebar .moduletable ul ol,
.sidebar .moduletable ul.unstyled ol {
  list-style-type: decimal;
}
.sidebar .moduletable ul li,
.sidebar .moduletable ul.unstyled li {
  padding: 4px 0;
}
.sidebar .moduletable ul li a:hover,
.sidebar .moduletable ul.unstyled li a:hover {
  background: none;
}
.sidebar .moduletable ul ul,
.sidebar .moduletable ul.unstyled ul {
  margin-bottom: 0;
  margin-left: 16px !important;
  margin-top: 4px;
}
.sidebar .moduletable ul ul li,
.sidebar .moduletable ul.unstyled ul li {
  list-style-type: disc;
  padding: 4px 0;
}
.sidebar .zen-menu-caption {
  display: block;
  font-style: italic;
  font-size: 90%;
  color: #cccccc;
  line-height: 1.2em;
}
.sidebar .nav-header,
.sidebar .zen-menu-heading {
  display: block !important;
  padding: 4px 0 !important;
  font-size: 100% !important;
  font-weight: inherit !important;
  line-height: 1em !important;
  color: #374140;
  text-shadow: none !important;
  text-transform: none !important;
}
.sidebar .nav > li > a {
  padding-left: 0;
}
.sidebar ul.menu {
  margin-bottom: 30px;
}
.sidebar ul.menu ul {
  margin-left: 16px;
}
.sidebar li.divider {
  border: 0;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, November 16 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	November 16 2015
 *------------------------------------------------------------------------------
 */
/*------------------------------------*\
	FORMS
\*------------------------------------*/
fieldset {
  margin: 0;
  max-width: 100%;
  border: 0;
  padding: 0;
}
fieldset legend {
  font-weight: bold;
  font-size: 1.2em;
  width: 100%;
  padding-bottom: 8px;
  border-bottom: 1px solid #eeeeee;
}
label {
  display: block;
  cursor: pointer;
  font-weight: normal;
  margin-bottom: 4px;
}
input,
textarea {
  font-family: inherit;
  font-size: 1em;
  line-height: 2em;
  padding: 6px 12px;
  background: #ffffff;
  color: #374140;
  border: 1px solid #eeeeee;
  max-width: 100%;
  margin-bottom: 15px;
}
input:hover,
textarea:hover {
  background: #fbfbfb;
}
input[type="checkbox"],
input[type="radio"],
input[type="submit"] {
  min-height: 0;
  height: auto;
  width: auto;
  margin-right: 4px;
}
textarea {
  border-radius: 2px !important;
}
.input-group-addon {
  text-align: center;
  display: inline-block;
  padding: 0 10px;
  height: 42px;
}
input.button {
  width: auto;
  -webkit-appearance: none;
}
input,
select {
  border-radius: 2px;
  border: 1px solid #eeeeee;
  box-shadow: none;
  margin-bottom: 15px;
  height: 42px;
}
form {
  margin-bottom: 30px;
}
.form-control {
  height: auto;
}
.form-group,
.form-inline .form-group {
  margin-bottom: 10px;
}
.contact-form legend {
  margin-bottom: 30px;
}
.contact-form label {
  display: block;
}
.contact-form input,
.contact-form textarea {
  width: 100%;
}
.contact-form input[type="radio"],
.contact-form input[type="checkbox"] {
  width: auto;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/*------------------------------------*\
	Pagination
\*------------------------------------*/
.pagination,
.pagenav {
  margin: 0;
  float: left;
  width: 100%;
  padding: 20px 0;
}
.pagination li,
.pagenav li {
  list-style-type: none;
  float: left;
  margin-right: 10px;
}
.pagination ul,
.pagenav ul {
  margin-left: 0;
}
.pagination li,
.pagenav li {
  line-height: 3em;
  margin-right: 4px;
  font-size: 90%;
}
.pagination li a,
.pagenav li a,
.pagination li span,
.pagenav li span {
  color: #ffffff;
  background: #8c4646;
  border: 1px solid #6a3535;
  border-radius: 2px;
  box-shadow: none;
  text-shadow: none;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  color: #374140;
  background: none;
  border: 1px solid #eeeeee;
  padding: 10px;
  margin: 0 10px 10px 0;
  display: inline-block;
  padding: 0 10px;
  background: transparent;
  border: 1px solid #999999;
  color: #999999;
  min-height: 42px;
  line-height: 42px;
  margin-right: 0;
}
.pagination li a:hover,
.pagenav li a:hover,
.pagination li span:hover,
.pagenav li span:hover {
  color: #ffffff;
  background: #8c4646;
  border: 1px solid #8c4646;
  text-decoration: none;
}
.pagination li a:hover,
.pagenav li a:hover,
.pagination li span:hover,
.pagenav li span:hover {
  color: #ffffff;
  background: #8c4646;
  border: 1px solid #8c4646;
  text-decoration: none;
}
.pagination li a span,
.pagenav li a span,
.pagination li span span,
.pagenav li span span {
  color: #ffffff;
}
.pagination li.active a,
.pagenav li.active a {
  background: #d96459;
  border: 1px solid #d96459;
  color: #ffffff;
}
.pagination li.active a:hover,
.pagenav li.active a:hover {
  background: #d96459;
  border: 1px solid #d96459;
  color: #ffffff;
}
.pagination li.next,
.pagenav li.next {
  float: right;
  margin-right: 0;
}
.pagination li.disabled a,
.pagenav li.disabled a,
.pagination li span,
.pagenav li span {
  border-color: #c2c2c2;
  background: #cccccc;
  color: #374140;
}
.pagination li.disabled a:hover,
.pagenav li.disabled a:hover,
.pagination li span:hover,
.pagenav li span:hover {
  background: #cccccc;
  border-color: #c2c2c2;
  color: #374140;
}
.pagination-wrap .counter {
  font-size: 85%;
  color: #cccccc;
}
.pagenav li a span {
  display: none;
}
.article-index h3,
.mainwrap .article-index h3 {
  display: none;
}
.article-index .nav-tabs li a.active,
.mainwrap .article-index .nav-tabs li a.active {
  background: none !important;
  color: #588c7e !important;
}
.article-index.pull-right,
.mainwrap .article-index.pull-right {
  width: 100%;
}
.pagenavcounter {
  color: #cccccc;
  font-size: 90%;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, November 16 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	November 16 2015
 *------------------------------------------------------------------------------
 */
ul {
  margin-bottom: 30px;
}
ul ul,
ul ol {
  margin-bottom: 0;
}
.simple,
.striped {
  margin: 0 0 30px;
}
.simple li,
.striped li {
  list-style-type: none;
  padding: 4px 0;
}
.simple ol,
.striped ol {
  list-style-type: decimal;
}
.flat-list {
  margin: 0;
  margin-bottom: 30px;
}
.flat-list li {
  list-style-type: none;
  float: left;
  margin-right: 10px;
}
.striped li {
  padding: 10px 20px !important;
}
.striped li:nth-child(2n + 1) {
  background: #f1f1f1;
}
dl {
  clear: both;
  margin: 30px 0;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
.breadcrumbs,
#breadcrumbs {
  margin-bottom: 30px;
  font-size: 85%;
}
.breadcrumbs li,
#breadcrumbs li {
  display: inline;
  list-style-type: none;
  color: #cccccc;
}
.breadcrumbs i,
#breadcrumbs i {
  margin: 0 8px;
}
.breadcrumbs i,
#breadcrumbs i {
  color: #cccccc;
}
.breadcrumbs li:after,
#breadcrumbs li:after {
  content: '/';
  margin: 0px;
  color: #cccccc;
}
.breadcrumbs li:last-child:after,
#breadcrumbs li:last-child:after {
  content: '';
  margin-right: 0;
}
/* -----------------------------------
 * Slidebars
 * Version 0..10
 * http://plugins.adchsm.me/slidebars/
 *
 * Written by Adam Smith
 * http://www.adchsm.me/
 *
 * Released under MIT License
 * http://plugins.adchsm.me/slidebars/license.txt
 *
 * -------------------
 * Slidebars CSS Index
 *
 * 001 - Box Model, Html & Body
 * 002 - Site
 * 003 - Slidebars
 * 004 - Animation
 * 005 - Helper Classes
 *




/* ----------
 * 002 - Site
 */
.off-canvas-trigger {
  cursor: pointer;
}
.off-canvas-inner {
  padding-top: 0;
}
#zen-wrap {
  /* You may now use class .sb-site-container instead of #sb-site and use your own id. However please make sure you don't set any of the following styles any differently on your id. */
  width: 100%;
  position: relative;
  z-index: 1;
  /* Site sits above Slidebars */
  background-color: #f9f9f9;
  /* Default background colour, overwrite this with your own css. I suggest moving your html or body background styling here. Making this transparent will allow the Slidebars beneath to be visible. */
}
/* ---------------
 * 003 - Slidebars
 */
.sb-slidebar {
  height: 100%;
  overflow-y: auto;
  /* Enable vertical scrolling on Slidebars when needed. */
  position: fixed;
  top: 0;
  z-index: 0;
  /* Slidebars sit behind sb-site. */
  display: none;
  /* Initially hide the Slidebars. Changed from visibility to display to allow -webkit-overflow-scrolling. */
  background-color: #d96459;
  /* Default Slidebars background colour, overwrite this with your own css. */
  -webkit-transform: translate(0px);
  /* Fixes issues with translated and z-indexed elements on iOS 7. */
}
.off-canvas-left {
  left: 0;
  /* Set Slidebar to the left. */
}
.off-canvas-right {
  right: 0;
  /* Set Slidebar to the right. */
}
html.sb-static .sb-slidebar,
.sb-slidebar.sb-static {
  position: absolute;
  /* Makes Slidebars scroll naturally with the site, and unfixes them for Android Browser < 3 and iOS < 5. */
}
.sb-slidebar.sb-active {
  display: block;
  /* Makes Slidebars visibile when open. Changed from visibility to display to allow -webkit-overflow-scrolling. */
}
.sb-style-overlay {
  z-index: 9999;
  /* Set z-index high to ensure it overlays any other site elements. */
}
.sb-momentum-scrolling {
  -webkit-overflow-scrolling: touch;
  /* Adds native momentum scrolling for iOS & Android devices. */
}
/* Slidebar widths for browsers/devices that don't support media queries. */
.sb-slidebar {
  width: 35%;
}
.sb-width-thin {
  width: 25%;
}
.sb-width-wide {
  width: 45%;
}
@media (max-width: 480px) {
  /* Slidebar widths on extra small screens. */
  .sb-slidebar {
    width: 45%;
  }
  .sb-width-thin {
    width: 45%;
  }
  .sb-width-wide {
    width: 55%;
  }
}
@media (min-width: 481px) {
  /* Slidebar widths on small screens. */
  .sb-slidebar {
    width: 45%;
  }
  .sb-width-thin {
    width: 35%;
  }
  .sb-width-wide {
    width: 65%;
  }
}
@media (min-width: 768px) {
  /* Slidebar widths on medium screens. */
  .sb-slidebar {
    width: 45%;
  }
  .sb-width-thin {
    width: 35%;
  }
  .sb-width-wide {
    width: 65%;
  }
}
@media (min-width: 992px) {
  /* Slidebar widths on large screens. */
  .sb-slidebar {
    width: 35%;
  }
  .sb-width-thin {
    width: 25%;
  }
  .sb-width-wide {
    width: 45%;
  }
}
@media (min-width: 1200px) {
  /* Slidebar widths on extra large screens. */
  .sb-slidebar {
    width: 35%;
  }
  .sb-width-thin {
    width: 25%;
  }
  .sb-width-wide {
    width: 45%;
  }
}
/* ---------------
 * 004 - Animation
 */
.sb-slide,
#zen-wrap,
.sb-site-container,
.sb-slidebar {
  -webkit-transition: -webkit-transform 400ms ease;
  -moz-transition: -moz-transform 400ms ease;
  -o-transition: -o-transform 400ms ease;
  transition: transform 400ms ease;
  -webkit-transition-property: -webkit-transform, left, right;
  /* Add left/right for Android < 4.4. */
}
/* --------------------
 * 005 - Helper Classes
 */
.sb-hide {
  display: none;
  /* Optionally applied to control classes when Slidebars is disabled over a certain width. */
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
.sb-slidebar {
  background: #d96459;
  color: #eeeeee;
}
.sb-slidebar p {
  color: #eeeeee;
}
.sb-slidebar .zen-nav.zen-nav-stacked li a,
.sb-slidebar .zen-nav.zen-nav-stacked li span {
  color: #ffffff;
}
.sb-slidebar .zen-nav.zen-nav-stacked li a:hover,
.sb-slidebar .zen-nav.zen-nav-stacked li span:hover {
  color: #666666;
}
.sb-slidebar .zen-nav ul {
  font-size: 90%;
}
.sb-slidebar h1,
.sb-slidebar h2,
.sb-slidebar h3,
.sb-slidebar h4,
.sb-slidebar h5,
.sb-slidebar h6 {
  color: #eeeeee;
}
.sb-slidebar h1 a,
.sb-slidebar h2 a,
.sb-slidebar h3 a,
.sb-slidebar h4 a,
.sb-slidebar h5 a,
.sb-slidebar h6 a {
  color: #eeeeee;
}
.sb-slidebar h1 a:hover,
.sb-slidebar h2 a:hover,
.sb-slidebar h3 a:hover,
.sb-slidebar h4 a:hover,
.sb-slidebar h5 a:hover,
.sb-slidebar h6 a:hover {
  color: #666666;
}
.sb-slidebar .zen-nav.zen-nav-stacked li.active > a,
.sb-slidebar .zen-nav.zen-nav-stacked li.active > span {
  color: #333333;
}
.off-canvas-trigger {
  margin-bottom: 0;
}
.sb-close span {
  cursor: pointer;
  top: 20px;
  right: 20px;
  position: absolute;
  z-imdex: 1;
  color: #eeeeee;
}
.sb-close span:hover {
  color: #666666;
}
.off-canvas-inner {
  padding: 30px;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
.floatleft {
  float: left;
  margin: 0 3% 30px 0;
}
.floatright {
  float: right;
  margin: 0 0 30px 3%;
}
.float-right,
.zenright,
.zen-right {
  float: right;
}
.float-left,
.zenleft {
  float: left;
}
.float-none {
  float: none;
}
.zen-center {
  float: none;
  text-align: center;
}
.full-width {
  width: 100%;
}
.highlight {
  background: rgba(255, 220, 0, 0.3);
}
.zen-visible {
  display: block;
}
.zen-hidden {
  display: none;
}
.zen-fixed {
  position: fixed;
  bottom: 0;
  right: 0;
  z-index: 10;
}
.zen-padding {
  padding: 30px;
}
.zen-padding-sml {
  padding: 15px;
}
.zen-above {
  margin-bottom: 30px;
}
.zen-below {
  margin-top: 30px;
}
.zen-rounded {
  border-radius: 2px;
}
.zen-rounded img {
  border-radius: 2px;
}
.zen-round {
  border-radius: 100px;
}
.zen-round img {
  border-radius: 100px;
}
.divider {
  clear: both;
}
.divider:before,
.divider:after {
  content: " ";
  display: table;
}
.divider:after {
  clear: both;
}
.divider:before,
.divider:after {
  content: " ";
  display: table;
}
.divider:after {
  clear: both;
}
.clear {
  clear: both;
  display: block;
}
.clear:before,
.clear:after {
  content: " ";
  display: table;
}
.clear:after {
  clear: both;
}
.clear:before,
.clear:after {
  content: " ";
  display: table;
}
.clear:after {
  clear: both;
}
.clearfix {
  clear: both;
}
.clearfix:before,
.clearfix:after {
  content: " ";
  display: table;
}
.clearfix:after {
  clear: both;
}
.hide {
  display: none !important;
}
.hide.in {
  display: block !important;
}
.zen-reset-list {
  margin: 0;
  padding: 0;
}
.zen-reset-list li,
.zen-reset-list span {
  display: inline-block;
  list-style-type: none;
  padding: 0 4px;
}
.padding {
  padding: 30px 2%;
}
.zen-no-margins {
  margin: 0;
}
.zen-no-margins .zg-col {
  margin-bottom: 0;
}
.element-invisible {
  position: absolute;
  padding: 0;
  margin: 0;
  border: 0;
  height: 1px;
  width: 1px;
  overflow: hidden;
}
.top25 {
  margin-top: 25px;
}
.top50 {
  margin-top: 50px;
}
.top75 {
  margin-top: 75px;
}
.top100 {
  margin-top: 100px;
}
.top125 {
  margin-top: 125px;
}
.top150 {
  margin-top: 150px;
}
.top175 {
  margin-top: 175px;
}
.top200 {
  margin-top: 200px;
}
.top225 {
  margin-top: 225px;
}
.top250 {
  margin-top: 250px;
}
.top275 {
  margin-top: 275px;
}
.top300 {
  margin-top: 300px;
}
.top325 {
  margin-top: 325px;
}
.top350 {
  margin-top: 350px;
}
.top375 {
  margin-top: 375px;
}
.top400 {
  margin-top: 400px;
}
.top425 {
  margin-top: 425px;
}
.top450 {
  margin-top: 450px;
}
.top475 {
  margin-top: 475px;
}
.top500 {
  margin-top: 500px;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
h2 {
  border-top: 1px solid #eeeeee;
  padding-top: 10px;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  font-weight: 300;
  color: #606c76;
  text-rendering: optimizeLegibility;
}
h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a {
  font-weight: 300;
  color: #606c76;
  text-rendering: optimizeLegibility;
}
h1 {
  font-size: 36px;
  line-height: 32px;
}
h2 {
  font-size: 30px;
  line-height: 32px;
}
h3 {
  font-size: 21px;
  line-height: 1.4em;
}
h4 {
  font-size: 15px;
  line-height: 1.4em;
}
h5 {
  font-size: 12px;
  line-height: 1.4em;
}
h6 {
  font-size: 11px;
  line-height: 1.4em;
  text-transform: uppercase;
}
/* =Quote
-----------------------------------------------------------------------------*/
blockquote {
  font-style: italic;
  font-size: 36px;
  line-height: 28px;
  padding-left: 24px;
  border-left: 1px solid rgba(0, 0, 0, 0.2);
}
blockquote cite {
  font-size: 86%;
  font-weight: normal;
  line-height: 20px;
}
cite {
  color: rgba(0, 0, 0, 0.5);
  font-style: italic;
}
pre,
code,
kbd,
samp,
var,
output {
  font-size: 85%;
  font-style: normal;
  font-family: Menlo, Monaco, Consolas, Courier, monospace;
  max-height: 300px;
}
pre {
  font-size: 90%;
  line-height: 24px;
  color: rgba(0, 0, 0, 0.9);
  overflow: auto;
  background: rgba(0, 0, 0, 0.07);
  padding: 30px;
  word-wrap: normal;
  max-height: 300px;
  margin-bottom: 30px;
}
td pre {
  white-space: pre-wrap;
  white-space: -moz-pre-wrap;
  white-space: -pre-wrap;
  white-space: -o-pre-wrap;
  word-wrap: break-word;
}
mark,
code,
samp,
kbd {
  padding: 30px;
  display: inline-block;
  line-height: 1;
  border-radius: 2px;
  font-size: 85%;
}
code {
  background: rgba(0, 0, 0, 0.07);
  color: #777777;
  border: 1px solid 1px solid rgba(0, 0, 0, 0.07);
}
pre code {
  font-size: 85%;
  padding: 0;
  background: none;
  line-height: 24px;
}
var {
  color: rgba(0, 0, 0, 0.5);
}
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
p.black,
span.black,
div.black {
  color: #000000;
}
p.white,
span.white,
div.white {
  color: #ffffff;
}
p.blue,
span.blue,
div.blue {
  color: #0074d9;
}
p.green,
span.green,
div.green {
  color: #2ecc40;
}
p.cyan,
span.cyan,
div.cyan {
  color: #7fdbff;
}
p.red,
span.red,
div.red {
  color: #ff4136;
}
p.yellow,
span.yellow,
div.yellow {
  color: rgba(255, 220, 0, 0.3);
}
p.orange,
span.orange,
div.orange {
  color: #ff851b;
}
p.pink,
span.pink,
div.pink {
  color: #f012be;
}
p.purple,
span.purple,
div.purple {
  color: #b10dc9;
}
p.navy,
span.navy,
div.navy {
  color: #001f3f;
}
p.aqua,
span.aqua,
div.aqua {
  color: #7fdbff;
}
p.teal,
span.teal,
div.teal {
  color: #39cccc;
}
p.olive,
span.olive,
div.olive {
  color: #3d9970;
}
p.lime,
span.lime,
div.lime {
  color: #01ff70;
}
p.maroon,
span.maroon,
div.maroon {
  color: #85144b;
}
p.fuchsia,
span.fuchsia,
div.fuchsia {
  color: #f012be;
}
p.purple,
span.purple,
div.purple {
  color: #b10dc9;
}
p.primary-bg,
span.primary-bg,
div.primary-bg {
  background: #d96459;
  color: #ffffff;
}
p.primary2-bg,
span.primary2-bg,
div.primary2-bg {
  background: #d03d30;
  color: #ffffff;
}
p.primary3-bg,
span.primary3-bg,
div.primary3-bg {
  background: #e38b83;
  color: #ffffff;
}
p.secondary-bg,
span.secondary-bg,
div.secondary-bg {
  background: #8c4646;
  color: #ffffff;
}
p.secondary2-bg,
span.secondary2-bg,
div.secondary2-bg {
  background: #6a3535;
  color: #ffffff;
}
p.secondary3-bg,
span.secondary3-bg,
div.secondary3-bg {
  background: #ac5959;
  color: #ffffff;
}
p.black-bg,
span.black-bg,
div.black-bg {
  background: #000000;
  color: #ffffff;
}
p.white-bg,
span.white-bg,
div.white-bg {
  background: #ffffff;
}
p.blue-bg,
span.blue-bg,
div.blue-bg {
  background: #0074d9;
  color: #ffffff;
}
p.green-bg,
span.green-bg,
div.green-bg {
  background: #2ecc40;
  color: #ffffff;
}
p.cyan-bg,
span.cyan-bg,
div.cyan-bg {
  background: #7fdbff;
  color: #ffffff;
}
p.red-bg,
span.red-bg,
div.red-bg {
  background: #ff4136;
  color: #ffffff;
}
p.yellow-bg,
span.yellow-bg,
div.yellow-bg {
  background: rgba(255, 220, 0, 0.3);
}
p.orange-bg,
span.orange-bg,
div.orange-bg {
  background: #ff851b;
  color: #ffffff;
}
p.pink-bg,
span.pink-bg,
div.pink-bg {
  background: #f012be;
}
p.purple-bg,
span.purple-bg,
div.purple-bg {
  background: #b10dc9;
  color: #ffffff;
}
p.navy-bg,
span.navy-bg,
div.navy-bg {
  background: #001f3f;
  color: #ffffff;
}
p.aqua-bg,
span.aqua-bg,
div.aqua-bg {
  background: #7fdbff;
  color: #ffffff;
}
p.teal-bg,
span.teal-bg,
div.teal-bg {
  background: #39cccc;
  color: #ffffff;
}
p.olive-bg,
span.olive-bg,
div.olive-bg {
  background: #3d9970;
  color: #ffffff;
}
p.lime-bg,
span.lime-bg,
div.lime-bg {
  background: #01ff70;
}
p.maroon-bg,
span.maroon-bg,
div.maroon-bg {
  background: #85144b;
  color: #ffffff;
}
p.fuchsia-bg,
span.fuchsia-bg,
div.fuchsia-bg {
  background: #f012be;
}
p.purple-bg,
span.purple-bg,
div.purple-bg {
  background: #b10dc9;
  color: #ffffff;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
.primary1 {
  background: #d96459;
}
.primary2 {
  background: #d03d30;
}
.primary3 {
  background: #e38b83;
}
.secondary1 {
  background: #8c4646;
}
.secondary2 {
  background: #6a3535;
}
.secondary3 {
  background: #ac5959;
}
.tertiary1 {
  background: #dc3522;
}
.tertiary2 {
  background: #dc3522;
}
.tertiary3 {
  background: #dc3522;
}
.block {
  padding: 30px;
  margin-bottom: 30px;
  background: #cccccc;
}
.block.primary,
.block.primary1 {
  background: #d96459;
  color: #ffffff;
}
.block.primary *,
.block.primary1 * {
  color: #ffffff;
}
.block.primary a,
.block.primary1 a {
  color: #eeeeee;
}
.block.primary a:hover,
.block.primary1 a:hover {
  color: #c8c8c8;
}
.block.primary2 {
  background: #d03d30;
  color: #ffffff;
}
.block.primary2 * {
  color: #ffffff;
}
.block.primary2 a {
  color: #eeeeee;
}
.block.primary2 a:hover {
  color: #c8c8c8;
}
.block.primary3 {
  background: #e38b83;
  color: #ffffff;
}
.block.primary3 * {
  color: #ffffff;
}
.block.primary3 a {
  color: #eeeeee;
}
.block.primary3 a:hover {
  color: #c8c8c8;
}
.block.secondary,
.block.secondary1 {
  background: #8c4646;
  color: #ffffff;
}
.block.secondary *,
.block.secondary1 * {
  color: #ffffff;
}
.block.secondary a,
.block.secondary1 a {
  color: #eeeeee;
}
.block.secondary a:hover,
.block.secondary1 a:hover {
  color: #c8c8c8;
}
.block.secondary2 {
  background: #6a3535;
  color: #ffffff;
}
.block.secondary2 * {
  color: #ffffff;
}
.block.secondary2 a {
  color: #eeeeee;
}
.block.secondary2 a:hover {
  color: #c8c8c8;
}
.block.secondary3 {
  background: #ac5959;
  color: #ffffff;
}
.block.secondary3 * {
  color: #ffffff;
}
.block.secondary3 a {
  color: #eeeeee;
}
.block.secondary3 a:hover {
  color: #c8c8c8;
}
.block.tertiary,
.block.tertiary1 {
  background: #dc3522;
  color: #ffffff;
}
.block.tertiary *,
.block.tertiary1 * {
  color: #ffffff;
}
.block.tertiary a,
.block.tertiary1 a {
  color: #eeeeee;
}
.block.tertiary a:hover,
.block.tertiary1 a:hover {
  color: #c8c8c8;
}
.block.tertiary2 {
  background: #b02a1b;
  color: #ffffff;
}
.block.tertiary2 * {
  color: #ffffff;
}
.block.tertiary2 a {
  color: #eeeeee;
}
.block.tertiary2 a:hover {
  color: #c8c8c8;
}
.block.tertiary3 {
  background: #e45d4d;
  color: #ffffff;
}
.block.tertiary3 * {
  color: #ffffff;
}
.block.tertiary3 a {
  color: #eeeeee;
}
.block.tertiary3 a:hover {
  color: #c8c8c8;
}
.rounded {
  border-radius: 2px;
}
.shadow {
  -webkit-box-shadow: 4px 4px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 4px 4px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 4px 4px 0px rgba(0, 0, 0, 0.1);
  background: #f9f9f9;
}
.shadow2 {
  -webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  background: #f9f9f9;
}
/* Anvil
-----------------------------------------------------------------------------*/
.anvil {
  position: relative;
  width: 80px;
  height: 80px;
  display: inline-block;
  text-align: right;
  font: 30px/100px Arial, sans-serif;
  color: white;
  border: 0;
  padding-right: 10px;
  margin: 0 10px 10px 0;
}
.anvil::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  border-width: 0 0 80px 80px;
  border-style: solid;
  border-color: transparent #f9f9f9;
}
/* Large Rounded numbers
-----------------------------------------------------------------------------*/
.rounded-big {
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 100px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  padding: 10px;
  font-size: 2em;
  display: inline-block;
  width: 80px;
  text-align: center;
  line-height: 60px;
  color: #fff;
  margin: 0 10px 10px 0;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
div.border {
  padding: 30px;
  margin-bottom: 30px;
  border: 1px solid #eeeeee;
  background: none;
}
div.border.primary,
div.border.primary1 {
  border-color: #d96459;
}
div.border.primary2 {
  border-color: #d03d30;
}
div.border.primary3 {
  border-color: #e38b83;
}
div.border.secondary,
div.border.secondary1 {
  border-color: #8c4646;
}
div.border.secondary2 {
  border-color: #6a3535;
}
div.border.secondary3 {
  border-color: #ac5959;
}
div.border.tertiary,
div.border.tertiary1 {
  border-color: #dc3522;
}
div.border.tertiary2 {
  border-color: #b02a1b;
}
div.border.tertiary3 {
  border-color: #e45d4d;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework Xero - 1.3.1 | ZGF v4 1.3.2
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, May 19 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	May 19 2015
 *------------------------------------------------------------------------------
 */
.alert {
  padding: 30px;
  margin-bottom: 12px;
  border: 1px solid transparent;
  border-radius: 2px;
  position: relative;
  z-index: 1;
}
.alert h4 {
  margin-top: 0;
  color: inherit;
  position: absolute;
  z-index: 2;
  top: 20px;
}
.alert .alert-link {
  font-weight: bold;
}
.alert > p,
.alert > ul {
  margin-bottom: 0;
}
.alert > p + p {
  margin-top: 5px;
}
.alert .close {
  position: absolute;
  z-index: 2;
  top: 10px;
  right: 10px;
  background: none;
  border: 0;
  padding: 4px;
  color: #5bb1dc;
}
.alert-dismissable,
.alert-dismissible {
  padding-right: 35px;
}
.alert-dismissable .close,
.alert-dismissible .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.alert-success {
  background-color: #dff0d8;
  border-color: #d6e9c6;
  color: #468847;
  margin-bottom: 30px;
}
.alert-success hr {
  border-top-color: #c9e2b3;
}
.alert-success .alert-link {
  color: #356635;
}
.alert-success .close {
  color: #529138;
}
.alert-info,
.alert-block,
.alert-message {
  background-color: #d9edf7;
  border-color: #bce8f1;
  color: #3a87ad;
  margin-bottom: 30px;
}
.alert-info hr,
.alert-block hr,
.alert-message hr {
  border-top-color: #a6e1ec;
}
.alert-info .alert-link,
.alert-block .alert-link,
.alert-message .alert-link {
  color: #2d6987;
}
.alert-info .close,
.alert-block .close,
.alert-message .close {
  color: #247fad;
}
.alert-warning,
.alert-notice {
  background-color: #fcf8e3;
  border-color: #faebcc;
  color: #c09853;
  margin-bottom: 30px;
}
.alert-warning hr,
.alert-notice hr {
  border-top-color: #f7e1b5;
}
.alert-warning .alert-link,
.alert-notice .alert-link {
  color: #a47e3c;
}
.alert-warning .close,
.alert-notice .close {
  color: #caad16;
}
.alert-danger,
.alert-error {
  background-color: #f2dede;
  border-color: #ebccd1;
  color: #b94a48;
  margin-bottom: 30px;
}
.alert-danger hr,
.alert-error hr {
  border-top-color: #e4b9c0;
}
.alert-danger .alert-link,
.alert-error .alert-link {
  color: #953b39;
}
.alert-danger .close,
.alert-error .close {
  color: #963b3b;
}
.alert-note {
  background-color: rgba(255, 220, 0, 0.3);
  border-color: rgba(219, 153, 0, 0.3);
  color: #333333;
  margin-bottom: 30px;
}
.alert-note hr {
  border-top-color: rgba(194, 135, 0, 0.3);
}
.alert-note .alert-link {
  color: #1a1a1a;
}
.alert-note .close {
  color: rgba(0, 0, 0, 0.3);
}
/** 
 *------------------------------------------------------------------------------
 * @package       blank.ly | ZGF v4 v2.0
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, December 17 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	December 17 2015
 *------------------------------------------------------------------------------
 */
/* =Tables
-----------------------------------------------------------------------------*/
table {
  max-width: 100%;
  width: 100%;
  empty-cells: show;
}
table caption {
  text-transform: uppercase;
  padding: 0;
  color: #000;
  font-size: 11px;
  font-weight: bold;
}
table th,
table td {
  border-bottom: 1px solid rgba(0, 0, 0, 0.04);
  padding: 16px;
  padding-bottom: 15px;
}
table th:first-child,
table td:first-child {
  padding-left: 0;
}
table th:last-child,
table td:last-child {
  padding-right: 0;
}
table tfoot th,
table tfoot td {
  color: rgba(0, 0, 0, 0.5);
}
table.table-bordered {
  margin-top: -1px;
  border: 1px solid #eeeeee;
}
table.table-bordered td,
table.table-bordered th {
  border: 1px solid rgba(0, 0, 0, 0.03);
}
table.table-bordered caption {
  padding-left: 16px;
}
.table-striped tr {
  padding: 10px 20px !important;
}
.table-striped tr:nth-child(2n + 1) {
  background: #f1f1f1;
}
.table-striped th {
  padding: 10px 20px !important;
  background: #fdfdfd;
}
.table-striped td {
  padding: 10px 20px !important;
}
.table-hover tr:hover,
.table-hover tr:nth-child(2n + 1):hover {
  background: #e6e6e6;
}
.table-bordered th,
.table-bordered .table-bordered td {
  border: 0;
}
table.table-bordered td:first-child,
table.table-striped td:first-child,
table.table-bordered th:first-child,
table.table-striped th:first-child {
  padding-left: 16px;
}
table.table-bordered td:last-child,
table.table-striped td:last-child,
table.table-bordered th:last-child,
table.table-striped th:last-child {
  padding-right: 16px;
}
table.table-simple td,
table.table-simple th,
table.table-simple caption {
  border: none;
  padding-left: 0;
}
table.table-simple td,
table.table-simple th {
  padding-bottom: 16px;
}
table.table-flat td,
table.table-flat th,
table.table-flat caption {
  border: none;
  padding: 0;
}
table.table-stroked td,
table.table-stroked th {
  border-bottom: 1px solid rgba(0, 0, 0, 0.03);
}
table.table-stripped tbody tr:nth-child(odd) td {
  background: #cccccc;
}
@media (max-width: 787px) {
  table.table-responsive {
    border: 0;
  }
  table.table-responsive thead {
    display: none;
  }
  table.table-responsive tr {
    display: block;
    border-bottom: 2px solid rgba(0, 0, 0, 0.1);
  }
  table.table-responsive td,
  table.table-responsive td:last-child,
  table.table-responsive td:first-child {
    display: block;
    text-align: left;
    padding: 10px;
  }
  table.table-responsive.table-flat td {
    padding: 0;
  }
  table.table-responsive.table-bordered td:last-child,
  table.table-responsive td:last-child {
    border-bottom: 0;
  }
  table.table-responsive td:before {
    content: attr(data-label);
    float: left;
    text-transform: uppercase;
    font-size: 86%;
    font-weight: bold;
    line-height: 2;
  }
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
.label,
.badge,
label {
  border-radius: 2px;
  font-size: 90%;
  margin: 0 10px 10px 0;
  display: inline-block;
  padding: 4px 8px;
}
.badge {
  padding: 10px;
}
.label-default,
.badge-default {
  background: #cccccc;
  color: #000000;
}
.label-default[outline],
.badge-default[outline] {
  background: none;
  color: #cccccc;
  border-color: #cccccc;
}
.label-default a,
.badge-default a {
  color: #000000;
  text-decoration: none;
}
.label-default a:hover,
.badge-default a:hover {
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  color: rgba(0, 0, 0, 0.6);
}
.label-black,
.badge-black {
  background: #000000;
  color: #ffffff;
}
.label-black[outline],
.badge-black[outline] {
  background: none;
  color: #000000;
  border-color: #000000;
}
.label-black a,
.badge-black a {
  color: #ffffff;
  text-decoration: none;
}
.label-black a:hover,
.badge-black a:hover {
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  color: rgba(255, 255, 255, 0.6);
}
.label-primary,
.badge-primary {
  background: #d96459;
  color: #ffffff;
}
.label-primary[outline],
.badge-primary[outline] {
  background: none;
  color: #d96459;
  border-color: #d96459;
}
.label-primary a,
.badge-primary a {
  color: #ffffff;
  text-decoration: none;
}
.label-primary a:hover,
.badge-primary a:hover {
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  color: rgba(255, 255, 255, 0.6);
}
.label-secondary,
.badge-secondary {
  background: #000000;
  color: #ffffff;
}
.label-secondary[outline],
.badge-secondary[outline] {
  background: none;
  color: #000000;
  border-color: #000000;
}
.label-secondary a,
.badge-secondary a {
  color: #ffffff;
  text-decoration: none;
}
.label-secondary a:hover,
.badge-secondary a:hover {
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  color: rgba(255, 255, 255, 0.6);
}
.label-error,
.badge-error {
  background: #ff4136;
  color: #ffffff;
}
.label-error[outline],
.badge-error[outline] {
  background: none;
  color: #ff4136;
  border-color: #ff4136;
}
.label-error a,
.badge-error a {
  color: #ffffff;
  text-decoration: none;
}
.label-error a:hover,
.badge-error a:hover {
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  color: rgba(255, 255, 255, 0.6);
}
.label-success,
.badge-success {
  background: #2ecc40;
  color: #ffffff;
}
.label-success[outline],
.badge-success[outline] {
  background: none;
  color: #2ecc40;
  border-color: #2ecc40;
}
.label-success a,
.badge-success a {
  color: #ffffff;
  text-decoration: none;
}
.label-success a:hover,
.badge-success a:hover {
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  color: rgba(255, 255, 255, 0.6);
}
.label-warning,
.badge-warning {
  background: #ff851b;
  color: #ffffff;
}
.label-warning[outline],
.badge-warning[outline] {
  background: none;
  color: #ff851b;
  border-color: #ff851b;
}
.label-warning a,
.badge-warning a {
  color: #ffffff;
  text-decoration: none;
}
.label-warning a:hover,
.badge-warning a:hover {
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  color: rgba(255, 255, 255, 0.6);
}
.label-danger,
.badge-danger {
  background: #ff4136;
  color: #ffffff;
}
.label-danger[outline],
.badge-danger[outline] {
  background: none;
  color: #ff4136;
  border-color: #ff4136;
}
.label-danger a,
.badge-danger a {
  color: #ffffff;
  text-decoration: none;
}
.label-danger a:hover,
.badge-danger a:hover {
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  color: rgba(255, 255, 255, 0.6);
}
.label-white,
.badge-white {
  background: #ffffff;
  color: #000000;
}
.label-white[outline],
.badge-white[outline] {
  background: none;
  color: #ffffff;
  border-color: #ffffff;
}
.label-white a,
.badge-white a {
  color: #000000;
  text-decoration: none;
}
.label-white a:hover,
.badge-white a:hover {
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  color: rgba(0, 0, 0, 0.6);
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
.zen-nav {
  list-style-type: none;
  margin: 0 0 30px;
  float: left;
  width: 100%;
}
.zen-nav li {
  display: inline-block;
}
.zen-nav.zen-nav-pills li a,
.zen-nav.zen-nav-pills li span {
  color: #374140;
  background: #cccccc;
  padding: 10px;
}
.zen-nav.zen-nav-pills li a:hover,
.zen-nav.zen-nav-pills li span:hover {
  color: #ffffff;
  background: #8c4646;
}
.zen-nav.zen-nav-pills li.active a,
.zen-nav.zen-nav-pills li.active span {
  color: #ffffff;
  background: #588c7e;
}
.zen-nav.zen-nav-pills.zen-nav-empty li a,
.zen-nav.zen-nav-pills.zen-nav-empty li span {
  background: none;
  border: 1px solid #eeeeee;
}
.zen-nav.zen-nav-pills.zen-nav-empty li a:hover,
.zen-nav.zen-nav-pills.zen-nav-empty li span:hover {
  border: 1px solid #8c4646;
  color: #8c4646;
}
.zen-nav.zen-nav-pills.zen-nav-empty li.active a,
.zen-nav.zen-nav-pills.zen-nav-empty li.active span {
  background: none;
  color: #d96459;
  border: 1px solid #d96459;
}
.zen-nav.zen-nav-tabs li a,
.zen-nav.zen-nav-tabs li span {
  color: #374140;
  padding: 10px;
}
.zen-nav.zen-nav-tabs li a:hover,
.zen-nav.zen-nav-tabs li span:hover {
  color: #8c4646;
}
.zen-nav.zen-nav-tabs li.active a,
.zen-nav.zen-nav-tabs li.active span {
  color: #588c7e;
  border: 1px solid #eeeeee;
  border-width: 1px 1px 0 1px;
  background: #f9f9f9;
}
.zen-nav.zen-nav-tabs:after {
  content: "";
  border-bottom: 1px solid #eeeeee;
  float: left;
  width: 100%;
  margin-top: 9px;
}
.zen-nav.zen-nav-tabs.zen-nav-tab-pills li a,
.zen-nav.zen-nav-tabs.zen-nav-tab-pills li span {
  color: #374140;
  background: #cccccc;
  padding: 10px;
}
.zen-nav.zen-nav-tabs.zen-nav-tab-pills li a:hover,
.zen-nav.zen-nav-tabs.zen-nav-tab-pills li span:hover {
  color: #ffffff;
  background: #8c4646;
}
.zen-nav.zen-nav-tabs.zen-nav-tab-pills li.active a,
.zen-nav.zen-nav-tabs.zen-nav-tab-pills li.active span {
  color: #ffffff;
  background: #588c7e;
}
.zen-nav.zen-nav-tabs.zen-nav-tab-pills:after {
  content: "";
  border-bottom: 0;
}
.zen-nav.zen-nav-divider li span {
  padding: 10px 10px 10px 0;
}
.zen-nav.zen-nav-divider li a,
.zen-nav.zen-nav-divider li span {
  color: #374140;
}
.zen-nav.zen-nav-divider li a:hover,
.zen-nav.zen-nav-divider li span:hover {
  color: #8c4646;
}
.zen-nav.zen-nav-divider li:after {
  content: "/";
  color: #cccccc;
  margin-right: 10px;
}
.zen-nav.zen-nav-divider li:last-child:after {
  content: "";
  margin: 0;
}
.zen-nav.zen-nav-divider li.active a,
.zen-nav.zen-nav-divider li.active span {
  color: #588c7e;
}
.zen-nav.zen-nav-divider li.active a:hover,
.zen-nav.zen-nav-divider li.active span:hover {
  color: #8c4646;
}
.zen-nav.zen-nav-stacked li {
  display: block;
  padding: 10px 0;
}
.zen-nav.zen-nav-stacked li a,
.zen-nav.zen-nav-stacked li span {
  padding: 10px 0;
  color: #374140;
}
.zen-nav.zen-nav-stacked li a:hover {
  color: #8c4646;
}
.zen-nav.zen-nav-stacked > li.active > a,
.zen-nav.zen-nav-stacked > li.active > span {
  color: #588c7e;
}
.zen-nav.zen-nav-stacked ul {
  margin-left: 16px;
}
.zen-nav.zen-nav-stacked.zen-lines > li {
  border-bottom: 1px solid #eeeeee;
}
.zen-nav.zen-nav-stacked.zen-lines ul {
  margin-top: 10px;
}
.zen-nav.zen-nav-stacked.zen-lines ul li {
  padding: 4px 0;
}
.zen-nav.zen-right {
  text-align: right;
  float: right !important;
}
.zen-nav.zen-right li {
  display: inline-table;
  float: none !important;
}
.zen-nav.zen-right li li {
  display: block;
  float: left !important;
  text-align: left;
  width: 100%;
  text-indent: 0 !important;
}
.zen-nav.zen-center {
  text-align: center;
  float: none !important;
  width: 100%;
}
.zen-nav.zen-center li {
  display: inline-table;
  float: none !important;
}
.zen-nav.zen-center li li {
  display: block;
  float: left !important;
  text-align: left;
  width: 100%;
  text-indent: 0 !important;
}
.zen-nav.zen-center li li a {
  width: 100%;
  text-align: left;
}
/** 
 *------------------------------------------------------------------------------
 * @package       blank.ly | ZGF v4 v2.0
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, December 17 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	December 17 2015
 *------------------------------------------------------------------------------
 */
.zen-tab-pane {
  display: none;
}
.zen-tab-pane.active {
  display: block;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
.zen-accordion ul {
  display: none;
}
.zen-accordion li.parent span:not(.zen-icon) {
  display: block;
}
.zen-accordion li.parent span {
  cursor: pointer;
}
.zen-accordion li.parent span:hover {
  color: #8c4646;
}
.zen-accordion li.parent span:before {
  float: right;
  width: 25px;
  height: 25px;
  line-height: 25px;
  text-align: center;
  font-size: 1.3em;
  margin-top: -4px;
}
.zen-accordion li.parent.open span {
  color: #8c4646;
}
.zen-accordion.zen-rounded li.parent span:before,
.zen-accordion.zen-flat li.parent span:before,
.zen-accordion.zen-round li.parent span:before {
  background: #d96459;
  color: #fff;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.zen-accordion.zen-rounded li.parent:hover span:before,
.zen-accordion.zen-flat li.parent:hover span:before,
.zen-accordion.zen-round li.parent:hover span:before,
.zen-accordion.zen-rounded li.parent.open span:before,
.zen-accordion.zen-flat li.parent.open span:before,
.zen-accordion.zen-round li.parent.open span:before {
  background: #8c4646;
}
.zen-accordion.zen-rounded li.parent span:before {
  border-radius: 2px;
}
.zen-accordion.zen-round li.parent span:before {
  border-radius: 100px;
  width: 25px;
  height: 25px;
  line-height: 25px;
}
/** 
 *------------------------------------------------------------------------------
 * @package       blank.ly | ZGF v4 v2.0
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, December 17 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	December 17 2015
 *------------------------------------------------------------------------------
 */
.zen-slide-trigger {
  cursor: pointer;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.zen-slide-trigger.block {
  margin-bottom: 0;
}
.zen-slide-trigger.block.primary:hover,
.zen-slide-trigger.block.primary2:hover,
.zen-slide-trigger.block.primary3:hover,
.zen-slide-trigger.block.tertiary:hover,
.zen-slide-trigger.block.tertiary2:hover,
.zen-slide-trigger.block.tertiary3:hover {
  background: #8c4646;
}
.zen-slide-trigger.block.secondary:hover,
.zen-slide-trigger.block.secondary2:hover,
.zen-slide-trigger.block.secondary3:hover {
  background: #d96459;
}
.zen-slide-content {
  display: none;
}
/** 
 *------------------------------------------------------------------------------
 * @package       blank.ly | ZGF v4 v2.0
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, December 17 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	December 17 2015
 *------------------------------------------------------------------------------
 */
.zen-modal {
  display: none;
  z-index: 101;
  width: 600px;
  max-width: 90%;
  max-height: 90%;
  height: 800px;
  background: #ffffff;
  padding: 30px;
  color: #333333;
  margin: auto;
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  overflow: auto;
  border-radius: 4px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.zen-modal-trigger {
  cursor: pointer;
}
.zen-modal-content {
  padding: 0;
}
.zen-modal-overlay {
  background: rgba(0, 0, 0, 0.8);
  position: fixed;
  left: 0;
  top: 0;
  z-index: 99;
  height: 100%;
  width: 100%;
  display: none;
  cursor: pointer;
}
.zen-modal-close {
  cursor: pointer;
  position: absolute;
  right: 20px;
  top: 20px;
}
/** 
 *------------------------------------------------------------------------------
 * @package       blank.ly | ZGF v4 v2.0
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, December 17 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	December 17 2015
 *------------------------------------------------------------------------------
 */
.zen-scroll-top,
.zen-scroll-bottom {
  cursor: pointer;
}
.zen-scroll-fade {
  display: none;
}
.zen-fixed {
  position: fixed;
  bottom: 0;
  right: 0;
  z-index: 10;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, November 16 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	November 16 2015
 *------------------------------------------------------------------------------
 */
.zen-image-grid img {
  width: 100%;
  float: left;
}
.zen-image-grid a {
  float: left;
}
.zen-image-grid.margin-gutter a {
  margin: 0 30px 30px 0;
}
.zen-image-grid.margin-gutter-sml a {
  margin: 0 15px 15px 0;
}
.zen-image-grid.margin-none a {
  margin: 0;
}
.zen-image-grid.zg-cols-1 a {
  width: 100%;
}
.zen-image-grid.zg-cols-2 a {
  width: 50%;
}
.zen-image-grid.zg-cols-3 a {
  width: 33.33333333%;
}
.zen-image-grid.zg-cols-4 a {
  width: 25%;
}
.zen-image-grid.zg-cols-5 a {
  width: 20%;
}
.zen-image-grid.zg-cols-6 a {
  width: 16.66666667%;
}
.zen-image-grid.zg-cols-7 a {
  width: 14.28571429%;
}
.zen-image-grid.zg-cols-8 a {
  width: 12.5%;
}
.zen-image-grid.zg-cols-9 a {
  width: 11.11111111%;
}
.zen-image-grid.zg-cols-10 a {
  width: 10%;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
.zen-menu ul {
  margin: 0;
}
.zen-menu ul *,
.zen-menu ul *:before,
.zen-menu ul *:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}
.zen-menu ul span.zen-menu-heading {
  cursor: default !important;
}
.zen-menu ul li {
  list-style-type: none;
  margin: 0;
}
.zen-menu ul li a,
.zen-menu ul li .zen-menu-heading {
  color: #606c76;
  cursor: pointer;
}
.zen-menu ul li a:hover,
.zen-menu ul li .zen-menu-heading:hover {
  text-decoration: none;
  color: #d96459;
}
.zen-menu ul li.active > a,
.zen-menu ul li.current-menu-item > a,
.zen-menu ul li.active .zen-menu-heading,
.zen-menu ul li.current-menu-item .zen-menu-heading {
  color: #d96459;
}
.zen-menu ul li.parent > a:before,
.zen-menu ul li.parent > .zen-menu-heading:before {
  width: 0;
  height: 0;
  float: left;
  content: "";
  margin-top: 30px;
  margin-right: 8px;
  border-style: solid;
  border-width: 4px 4px 0 4px;
  border-color: #606c76 transparent transparent transparent;
}
.zen-menu ul li.parent.active > a:before,
.zen-menu ul li.parent.active > .zen-menu-heading:before {
  border-color: #d96459 transparent transparent transparent;
}
.zen-menu ul li ul li.parent > a:before,
.zen-menu ul li ul li.parent > .zen-menu-heading:before {
  float: right;
  content: "";
  width: 0;
  height: 0;
  margin-top: 10px;
  border-style: solid;
  border-width: 4px 0 4px 4px;
  border-color: transparent transparent transparent #999;
}
.zen-menu ul ul {
  margin: 0 0 0 16px;
}
.zen-menu ul ul li {
  list-style-type: disc;
}
.zen-menu ul .zen-menu-caption {
  display: block;
  font-size: 90%;
  padding: 4px 0;
}
#navwrap,
#sticky-fill {
  float: left;
  width: 100%;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/* menus in the middle */
.zen-menu-center ul {
  text-align: center;
  float: none !important;
  width: 100%;
}
.zen-menu-center ul li {
  display: inline-table;
  float: none !important;
}
.zen-menu-center ul li li {
  display: block;
  float: left !important;
  text-align: left;
  width: 100%;
  text-indent: 0 !important;
}
.zen-menu-center ul li li a {
  width: 100%;
  text-align: left;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
/* menus in the middle */
.zen-menu-right {
  text-align: right;
  float: right !important;
}
.zen-menu-right li {
  display: inline-table;
  float: none !important;
}
.zen-menu-right li li {
  display: block;
  float: left !important;
  text-align: left;
  width: 100%;
  text-indent: 0 !important;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
.zen-menu ul .zen-group ul {
  opacity: 1;
  visibility: visible;
  position: relative;
  left: 0;
  margin: 0;
  height: auto;
  box-shadow: none;
  margin-top: 30px;
  border: 1px solid #e6e6e6;
  margin-bottom: 30px;
  display: block !important;
  margin-left: 0 !important;
}
.zen-menu ul .zen-group ul ul {
  border: 0;
  margin-bottom: 0;
  font-size: 90%;
  overflow: visible !important;
}
.zen-menu ul .zen-group ul ul li {
  list-style-type: disc !important;
}
.zen-menu ul .zen-group.parent > a:before,
.zen-menu ul .zen-group.parent > .zen-menu-heading:before,
.zen-menu ul .zen-group li.parent > a:before,
.zen-menu ul .zen-group li.parent > .zen-menu-heading:before {
  border: 0;
  display: none;
}
.zen-menu ul .zen-group ul {
  padding: 10px;
}
.zen-menu ul .zen-group ul ul {
  padding: 0;
  margin-left: 20px !important;
  padding-bottom: 0 !important;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework Xero - 1.3.2 | ZGF v4 1.4.0
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 08 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 08 2015
 *------------------------------------------------------------------------------
 */
.zen-menu-horizontal.zen-menu-no-animation ul ul {
  -webkit-transition: all 0s;
  -moz-transition: all 0s;
  transition: all 0s;
  display: none;
}
.zen-menu-horizontal.zen-menu-no-animation li:hover > ul {
  display: block;
}
.zen-menu-horizontal .zen-menu-offscreen ul {
  margin-left: -100%;
  left: -100%;
}
.zen-menu-horizontal .zen-menu-offscreen ul ul {
  margin-left: -20px;
  left: 100%;
}
.zen-menu-horizontal.zen-menu-fading .zen-menu-offscreen ul:not(.justify) {
  left: 0;
}
.zen-menu-horizontal .zen-menu-offscreen ul .zen-group ul {
  left: 0;
}
.zen-menu-horizontal .parent:hover {
  z-index: 1010;
}
.zen-menu-horizontal li:hover ul {
  z-index: 98;
}
.zen-menu-horizontal ul {
  width: 100%;
  position: relative;
  float: left;
  margin: 0;
  padding: 0;
  min-height: 60px;
}
.zen-menu-horizontal ul:before,
.zen-menu-horizontal ul:after {
  content: "";
  display: table;
  clear: both;
}
.zen-menu-horizontal ul .zen-icon {
  margin-right: 4px;
}
.zen-menu-horizontal ul li {
  position: relative;
  z-index: 10;
  float: left;
  margin: 0;
  padding: 0;
  display: inline-block;
  list-style-type: none;
  line-height: 60px;
}
.zen-menu-horizontal ul a,
.zen-menu-horizontal ul .zen-menu-heading {
  display: block;
  color: #606c76;
  float: left;
  text-decoration: none;
  font-weight: 700;
  padding: 0 15px;
}
.zen-menu-horizontal ul ul {
  position: absolute;
  top: 100%;
  left: -20px;
  margin-top: -10px;
  background: #ffffff;
  padding: 10px;
  min-width: 300px;
}
.zen-menu-horizontal ul ul li {
  width: 100%;
  line-height: 2em;
}
.zen-menu-horizontal ul ul li a,
.zen-menu-horizontal ul ul li .zen-menu-heading {
  color: #606c76;
  cursor: pointer;
  display: block;
}
.zen-menu-horizontal ul ul li a:hover,
.zen-menu-horizontal ul ul li .zen-menu-heading:hover {
  text-decoration: none;
  color: #d96459;
}
.zen-menu-horizontal ul ul li.active > a,
.zen-menu-horizontal ul ul li.current-menu-item > a,
.zen-menu-horizontal ul ul li.active .zen-menu-heading,
.zen-menu-horizontal ul ul li.current-menu-item .zen-menu-heading {
  color: #d96459;
}
.zen-menu-horizontal ul ul ul {
  top: 0;
  left: 100%;
}
.zen-menu-horizontal ul .moduletable {
  margin-bottom: 0;
}
.zen-menu-horizontal ul .moduletable ul {
  height: auto;
  opacity: 1;
  overflow: visible;
  display: block;
  position: inherit;
  left: auto;
  top: auto;
  padding: 0;
  margin-bottom: 0;
  clear: both;
}
.zen-menu-horizontal ul .moduletable ul li {
  padding: 0;
  line-height: 1em;
}
.zen-menu-horizontal ul .justify {
  position: static;
}
.zen-menu-horizontal ul .justify ul {
  min-width: 0;
  margin-top: -7px;
}
.zen-menu-horizontal ul .justify ul ul {
  margin-top: 0;
}
.zen-menu-horizontal ul li:hover > ul {
  top: 100%;
  overflow: visible;
}
.zen-menu-horizontal ul li:hover > ul ul {
  top: 0;
}
.zen-menu-horizontal ul li:hover > ul .moduletable ul {
  visibility: visible;
}
.zen-menu-horizontal ul li:hover > ul .zen-group ul {
  overflow: visible;
  height: auto;
}
.fixed #menu ul ul {
  height: 0;
}
.fixed #menu li:hover ul {
  height: auto;
}
/** 
 *------------------------------------------------------------------------------
 * @package       blank.ly | ZGF v4 v2.0
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, November 26 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	November 26 2015
 *------------------------------------------------------------------------------
 */
.zen-menu-above ul ul {
  top: -40px;
}
/** 
 *------------------------------------------------------------------------------
 * @package       blank.ly | ZGF v4 v2.0
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, November 26 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	November 26 2015
 *------------------------------------------------------------------------------
 */
.zen-menu-below ul ul {
  margin: 100px 0 0 0 !important;
  -webkit-transition: all 0.4s ease-in-out;
  -moz-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
  opacity: 0;
  overflow: hidden;
  visibility: hidden;
  height: 0;
}
.zen-menu-below ul li:hover > ul {
  margin: 0 !important;
  height: auto;
  opacity: 1;
  visibility: visible;
}
.zen-menu-below ul .zen-group ul {
  margin-top: 0 !important;
}
.zen-menu-below ul .justify ul {
  margin: 100px 0 0 0 !important;
}
.zen-menu-below ul .justify:hover ul {
  margin: -7px 0 0 0 !important;
}
.zen-menu-below ul .justify:hover ul ul {
  margin: 0 !important;
}
/** 
 *------------------------------------------------------------------------------
 * @package       blank.ly | ZGF v4 v2.0
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, November 26 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	November 26 2015
 *------------------------------------------------------------------------------
 */
.zen-menu-fading ul ul {
  display: none;
}
/** 
 *------------------------------------------------------------------------------
 * @package       blank.ly | ZGF v4 v2.0
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, November 26 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	November 26 2015
 *------------------------------------------------------------------------------
 */
.zen-menu-zoom li > ul {
  -webkit-transform: scale(0.4);
  -moz-transform: scale(0.4);
  transform: scale(0.4);
  -webkit-transition: all 0.4s ease-in-out;
  -moz-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
  opacity: 0;
  overflow: hidden;
  visibility: hidden;
  height: 0;
}
.zen-menu-zoom li > ul .zen-menu-child {
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  transform: scale(1);
}
.zen-menu-zoom li:hover > ul {
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  transform: scale(1);
  height: auto;
  opacity: 1;
  visibility: visible;
}
.zen-menu-zoom ul ul {
  margin: 100px 0 0 0;
}
.zen-menu-zoom ul li:hover ul {
  margin: 0;
}
.zen-menu-zoom ul .justify ul {
  margin: 100px 0 0 0;
}
.zen-menu-zoom ul .justify:hover ul {
  margin: -7px 0 0 0;
}
.zen-menu-zoom ul .justify:hover ul ul {
  margin: 0;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
.zen-menu-tabs {
  float: left;
  width: 100%;
}
.zen-menu-tabs:after {
  position: absolute;
  content: "";
  width: 100%;
  bottom: 0;
  left: 0;
  border-bottom: 1px solid #eee;
  z-index: 1;
}
.zen-menu-tabs li {
  margin: 0;
  z-index: 2;
}
.zen-menu-tabs li > a,
.zen-menu-tabs li > .zen-menu-heading {
  padding: 10px 30px;
  border-bottom: 0;
  border-left: 0;
}
.zen-menu-tabs li.active > a,
.zen-menu-tabs li.active > .zen-menu-heading {
  border: 1px solid #eee;
  border-bottom-color: #fff;
  border-radius: 4px 4px 0 0;
}
.zen-menu-tabs li li > a,
.zen-menu-tabs li li > .zen-menu-heading {
  border: 0;
  padding: 0;
}
.zen-menu-tabs li li.active > a,
.zen-menu-tabs li li.active > .zen-menu-heading {
  border: 0;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
.zen-menu-navbar {
  border: 1px solid #eeeeee;
  border-width: 1px 0;
  width: 100%;
}
.zen-menu-navbar li {
  margin: 0;
}
.zen-menu-navbar li > a,
.zen-menu-navbar li > .zen-menu-heading {
  border-right: 1px solid #eeeeee;
  padding: 10px 20px;
}
.zen-menu-navbar li:last-child a,
.zen-menu-navbar li:last-child .zen-menu-heading {
  border-right: 0;
}
.zen-menu-navbar li ul a,
.zen-menu-navbar li ul .zen-menu-heading {
  border: 0;
  box-shadow: none;
  background-image: none;
  background: none;
  padding: 0;
  margin: 0;
  margin: 0 !important;
  padding: 0 !important;
  list-style-type: none !important;
}
.zen-menu-navbar li .zen-menu-caption {
  padding: 0;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
.zen-menu-vertical {
  margin: 0 0 30px;
}
.zen-menu-vertical li {
  list-style-type: none;
  padding: 4px 0;
}
.zen-menu-vertical ol {
  list-style-type: decimal;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
.zen-menu .zen-menu-module {
  padding: 10px 0 20px;
}
.zen-menu .zen-menu-module h3 {
  margin: 0;
}
.zen-menu .zen-menu-module #modlgn-remember {
  margin-left: 0 !important;
}
.zen-menu .zen-menu-module .input-group-addon {
  float: left;
  width: 8%;
  line-height: 42px;
}
.zen-menu .zen-menu-module input {
  text-indent: 12px;
  width: 90%;
}
.zen-menu .zen-menu-module input[type="checkbox"],
.zen-menu .zen-menu-module input[type="radio"] {
  width: auto;
}
.zen-menu .zen-menu-module .moduletable {
  width: 100%;
  float: left;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
.zen-menu-pills li > a,
.zen-menu-pills li > .zen-menu-heading {
  padding: 10px 20px 0;
  border-radius: 4px;
}
.zen-menu-pills li > a:hover,
.zen-menu-pills li > .zen-menu-heading:hover {
  color: #fff;
  background: #999;
}
.zen-menu-pills li.active > a,
.zen-menu-pills li.active > .zen-menu-heading {
  background: #999;
  color: #fff;
  padding: 10px 20px 0;
  border-radius: 4px;
}
.zen-menu-pills li.active ul li > a,
.zen-menu-pills li.active ul li > .zen-menu-heading {
  border: 0;
  box-shadow: none;
  background-image: none;
  background: none;
  padding: 0;
  margin: 0;
  margin: 0 !important;
  padding: 0 !important;
  list-style-type: none !important;
}
.zen-menu-pills li ul a,
.zen-menu-pills li ul .zen-menu-heading {
  border: 0;
  box-shadow: none;
  background-image: none;
  background: none;
  padding: 0;
  margin: 0;
  margin: 0 !important;
  padding: 0 !important;
  list-style-type: none !important;
}
.zen-menu-pills li ul li a:hover,
.zen-menu-pills li ul li .zen-menu-heading:hover {
  color: #999;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
@media (min-width: 787px) {
  .zen-menu-toggle {
    display: none;
  }
  .zen-menu-toggle li {
    display: block;
    float: none;
  }
  .zen-menu-toggle li ul {
    opacity: 1;
    visibility: visible;
    position: relative;
    left: 0;
    margin: 0;
    height: auto;
    margin-left: 0;
    float: left;
    width: 100%;
  }
  .zen-menu-toggle li:hover > ul {
    margin-left: 0px;
  }
  .zen-menu-toggle li:hover > ul ul {
    margin-left: 20px;
  }
  .zen-menu-toggle .zen-group ul {
    margin-left: 0px !important;
  }
  .zen-menu-toggle .zen-group:hover > ul {
    margin-left: 0px;
  }
  .zen-menu-toggle .zen-group:hover > ul ul {
    margin-left: 0;
  }
}
@media (min-width: 787px) {
  .zen-menu {
    clear: both;
  }
}
@media (max-width: 787px) {
  .zen-menu-btn {
    display: block;
  }
}
@media (min-width: 787px) {
  .zen-menu-btn {
    display: none;
  }
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
.responsive_menu select {
  display: block;
  width: 100%;
  height: 36px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857;
  color: #555555;
  vertical-align: middle;
  background-color: #ffffff;
  background-image: none;
  border-color: 1px solid #eeeeee;
}
/* hide the link until viewport size is reached */
a.meanmenu-reveal {
  display: none;
}
/* when under viewport size, .mean-container is added to body */
.mean-container .mean-bar {
  float: left;
  width: 100%;
  position: relative;
  background: transparent;
  padding: 4px 0 0;
  min-height: 42px;
  margin-bottom: 10px;
  z-index: 99;
}
.mean-container li.parent .zen-icon-plus,
.mean-container li.parent .zen-icon-minus {
  float: right;
  color: #374140;
}
.mean-container a.meanmenu-reveal {
  width: 22px;
  height: 22px;
  padding: 13px 13px 11px 13px;
  position: absolute;
  top: 0;
  right: 0;
  cursor: pointer;
  color: #606c76;
  text-decoration: none;
  font-size: 16px;
  text-indent: -9999em;
  line-height: 22px;
  font-size: 1px;
  display: block;
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 700;
}
.mean-container a.meanmenu-reveal:hover {
  color: #d96459;
}
.mean-container a.meanmenu-reveal span {
  display: block;
  background: #606c76;
  height: 3px;
  margin-top: 3px;
}
.mean-container a.meanmenu-reveal span:hover {
  color: #d96459;
}
.mean-container .mean-nav {
  float: left;
  width: 100%;
  margin-top: 44px;
}
.mean-container .mean-nav ul {
  padding: 0;
  margin: 0;
  width: 100%;
  list-style-type: none;
}
.mean-container .mean-nav ul li {
  position: relative;
  float: left;
  width: 100%;
  padding: 0;
}
.mean-container .mean-nav ul li a,
.mean-container .mean-nav ul li span.zen-menu-heading {
  display: block;
  float: left;
  width: 90%;
  padding: 1em 5%;
  margin: 0;
  text-align: left;
  cursor: pointer;
  color: #374140;
  border-top: 1px solid #383838;
  border-top: 1px solid rgba(255, 255, 255, 0.05);
  text-decoration: none;
  text-transform: uppercase;
}
.mean-container .mean-nav ul li a:hover,
.mean-container .mean-nav ul li span.zen-menu-heading:hover {
  color: #8c4646;
}
.mean-container .mean-nav ul li li a,
.mean-container .mean-nav ul li li span.zen-menu-heading {
  width: 80%;
  padding: 0.9em 10%;
  border-top: 1px solid #f1f1f1;
  border-top: 1px solid rgba(255, 255, 255, 0.05);
  opacity: 0.75;
  filter: alpha(opacity=75);
  text-shadow: none !important;
  visibility: visible;
}
.mean-container .mean-nav ul li.mean-last a,
.mean-container .mean-nav ul li.mean-last span.zen-menu-heading {
  border-bottom: none;
  margin-bottom: 0;
}
.mean-container .mean-nav ul li li li a,
.mean-container .mean-nav ul li li li span.zen-menu-heading {
  width: 70%;
  padding: 1em 15%;
}
.mean-container .mean-nav ul li li li li a,
.mean-container .mean-nav ul li li li li span.zen-menu-heading {
  width: 60%;
  padding: 1em 20%;
}
.mean-container .mean-nav ul li li li li li a,
.mean-container .mean-nav ul li li li li li span.zen-menu-heading {
  width: 50%;
  padding: 1em 25%;
}
.mean-container .mean-nav ul li a:hover {
  background: #252525;
  background: rgba(255, 255, 255, 0.05);
}
.mean-container .mean-nav ul li a.mean-expand {
  margin-top: 1px;
  width: 20px;
  height: 20px;
  padding: 12px !important;
  text-align: center;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 2;
  font-weight: 700;
  font-size: 1.4em !important;
  border: none !important;
}
.mean-container .mean-nav ul li a.mean-expand:hover {
  color: #8c4646;
}
.mean-container .mean-push {
  float: left;
  width: 100%;
  padding: 0;
  margin: 0;
  clear: both;
}
.mean-nav .wrapper {
  width: 100%;
  padding: 0;
  margin: 0;
}
/* Fix for box sizing on Foundation Framework etc. */
.mean-container .mean-bar,
.mean-container .mean-bar * {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
.mean-remove {
  display: none !important;
}
.mean-container .zen-menu-caption {
  font-size: 11px;
  font-style: italic;
  color: #999;
  margin-left: 10px;
}
.mean-nav .moduletable {
  box-sizing: border-box;
  padding: 20px;
}
.mean-nav .moduletable #login-form ul {
  margin-bottom: 10px;
}
.mean-nav .moduletable .form-group {
  margin-bottom: 0;
}
.mean-nav .moduletable input {
  width: 100%;
  box-sizing: border-box;
}
.mean-nav .moduletable input[type="checkbox"],
.mean-nav .moduletable input[type="radio"] {
  width: auto;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
.zen-nav-fixed {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background: rgba(255, 255, 255, 0.8);
}
.zen-nav-fixed ul.zen-menu a,
.zen-nav-fixed ul.zen-menu span {
  color: #606c76;
}
.zen-nav-fixed ul.zen-menu a:hover,
.zen-nav-fixed ul.zen-menu span:hover {
  color: #d96459;
}
.zen-nav-fixed ul.zen-menu li.active a,
.zen-nav-fixed ul.zen-menu li.active span {
  color: #d96459;
}
.zen-nav-fixed .zg-col {
  margin: 0;
}
.zen-nav-fixed #menu {
  margin: 0;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework ##version##
 *------------------------------------------------------------------------------
 * @copyright   ##copyright##
 * @license     ##license## 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	##updated##
 *------------------------------------------------------------------------------
 */
.responsive-enabled {
  width: 100% !important;
}
@media screen and (min-width: 700px) {
  .responsive-enabled .hidden-desktop {
    position: absolute;
    overflow: hidden;
    clip: rect(0 0 0 0);
    height: 1px;
    width: 1px;
    margin: -1px;
    padding: 0;
    border: 0;
  }
  .responsive-enabled .visible-desktop,
  .responsive-enabled .min-width-tablet,
  .responsive-enabled .min-width-phone {
    display: block !important;
    visibility: visible;
  }
  .responsive-enabled .visible-tablets,
  .responsive-enabled .visible-tablet {
    position: absolute;
    overflow: hidden;
    clip: rect(0 0 0 0);
    height: 1px;
    width: 1px;
    margin: -1px;
    padding: 0;
    border: 0;
  }
  .responsive-enabled .visible-phones,
  .responsive-enabled .visible-phone {
    position: absolute;
    overflow: hidden;
    clip: rect(0 0 0 0);
    height: 1px;
    width: 1px;
    margin: -1px;
    padding: 0;
    border: 0;
  }
}
@media screen and (min-width: 620px) and (max-width: 700px) {
  .responsive-enabled .stack-tablets .zg-col {
    width: 100% !important;
    margin-left: 0;
  }
  .responsive-enabled .hidden-tablets,
  .responsive-enabled .hidden-tablet,
  .responsive-enabled .min-width-desktop {
    position: absolute;
    overflow: hidden;
    clip: rect(0 0 0 0);
    height: 1px;
    width: 1px;
    margin: -1px;
    padding: 0;
    border: 0;
  }
  .responsive-enabled .visible-tablets,
  .responsive-enabled .visible-tablet {
    display: block !important;
    visibility: visible;
  }
  .responsive-enabled .visible-phones,
  .responsive-enabled .visible-phone {
    position: absolute;
    overflow: hidden;
    clip: rect(0 0 0 0);
    height: 1px;
    width: 1px;
    margin: -1px;
    padding: 0;
    border: 0;
  }
}
@media screen and (max-width: 620px) {
  .responsive-enabled .stack-phones .zg-col {
    width: 100%;
  }
  .responsive-enabled .hidden-phones,
  .responsive-enabled .hidden-phone,
  .responsive-enabled .min-width-tablet,
  .responsive-enabled .min-width-desktop {
    position: absolute;
    overflow: hidden;
    clip: rect(0 0 0 0);
    height: 1px;
    width: 1px;
    margin: -1px;
    padding: 0;
    border: 0;
  }
  .responsive-enabled .visible-phone,
  .responsive-enabled .visible-phones,
  .responsive-enabled .min-width-phone {
    display: block !important;
    visibility: visible;
  }
  .responsive-enabled .zen-container {
    width: 60%;
  }
}
@media screen and (min-width: 787px) {
  .responsive-enabled .visible-navcollapse,
  .responsive-enabled #off-canvas-menu .simple-list {
    position: absolute;
    overflow: hidden;
    clip: rect(0 0 0 0);
    height: 1px;
    width: 1px;
    margin: -1px;
    padding: 0;
    border: 0;
  }
}
@media screen and (max-width: 787px) {
  .responsive-enabled .visible-navcollapse {
    display: block !important;
    visibility: visible;
  }
  .responsive-enabled .hidden-navcollapse {
    position: absolute;
    overflow: hidden;
    clip: rect(0 0 0 0);
    height: 1px;
    width: 1px;
    margin: -1px;
    padding: 0;
    border: 0;
  }
  .responsive-enabled #menu ul {
    display: none;
  }
  .responsive-enabled.default-menu #menu ul,
  .responsive-enabled.stacked-menu #menu ul {
    display: block;
  }
  .responsive-enabled.default-menu #menu ul ul,
  .responsive-enabled.stacked-menu #menu ul ul {
    display: none;
  }
  .responsive-enabled.default-menu #navwrap.fixed,
  .responsive-enabled.stacked-menu #navwrap.fixed {
    position: relative;
  }
  .responsive-enabled.stacked-menu #menu ul li {
    width: 100%;
  }
  .responsive-enabled .fixed .off-canvas-trigger {
    display: none !important;
  }
}
@media screen and (min-width: 787px) {
  .responsive-enabled .visible-gridcollapse {
    position: absolute;
    overflow: hidden;
    clip: rect(0 0 0 0);
    height: 1px;
    width: 1px;
    margin: -1px;
    padding: 0;
    border: 0;
  }
}
@media screen and (max-width: 787px) {
  .responsive-enabled .visible-gridcollapse {
    display: block !important;
    visibility: visible;
  }
  .responsive-enabled .hidden-gridcollapse {
    position: absolute;
    overflow: hidden;
    clip: rect(0 0 0 0);
    height: 1px;
    width: 1px;
    margin: -1px;
    padding: 0;
    border: 0;
  }
}
@media screen and (min-width: 700px) {
  .responsive-enabled .zen-container {
    width: 85%;
  }
}
@media screen and (max-width: 700px) {
  .responsive-enabled .zen-container {
    width: 80%;
  }
}
@media screen and (max-width: 620px) {
  .responsive-enabled .zen-container {
    width: 85%;
  }
}
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
/* =WordPress Core
-------------------------------------------------------------- */
.alignnone {
  margin: 5px 20px 20px 0;
}
.aligncenter,
div.aligncenter {
  display: block;
  margin: 5px auto 5px auto;
}
.alignright {
  float: right;
  margin: 5px 0 20px 20px;
}
.alignleft {
  float: left;
  margin: 5px 20px 20px 0;
}
a img.alignright {
  float: right;
  margin: 5px 0 20px 20px;
}
a img.alignnone {
  margin: 5px 20px 20px 0;
}
a img.alignleft {
  float: left;
  margin: 5px 20px 20px 0;
}
a img.aligncenter {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.wp-caption,
.gallery-caption {
  background: #fff;
  border: 1px solid #f0f0f0;
  max-width: 96%;
  /* Image does not overflow the content area */
  padding: 5px 3px 10px;
  text-align: center;
}
.wp-caption.alignnone {
  margin: 5px 20px 20px 0;
}
.wp-caption.alignleft {
  margin: 5px 20px 20px 0;
}
.wp-caption.alignright {
  margin: 5px 0 20px 20px;
}
.wp-caption img {
  border: 0 none;
  height: auto;
  margin: 0;
  max-width: 98.5%;
  padding: 0;
  width: auto;
}
.wp-caption p.wp-caption-text {
  font-size: 11px;
  line-height: 17px;
  margin: 0;
  padding: 0 4px 5px;
}
/* Text meant only for screen readers. */
.screen-reader-text {
  clip: rect(1px, 1px, 1px, 1px);
  position: absolute !important;
  height: 1px;
  width: 1px;
  overflow: hidden;
}
.screen-reader-text:focus {
  background-color: #f1f1f1;
  border-radius: 3px;
  box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
  clip: auto !important;
  color: #21759b;
  display: block;
  font-size: 14px;
  font-size: 0.875rem;
  font-weight: bold;
  height: auto;
  left: 5px;
  line-height: normal;
  padding: 15px 23px 14px;
  text-decoration: none;
  top: 5px;
  width: auto;
  z-index: 100000;
  /* Above WP toolbar. */
}
.bypostauthor {
  color: #cccccc;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
* {
  font-weight: 300;
  color: #374140;
}
a {
  text-decoration: none;
  color: #588c7e;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
a:hover {
  color: #8c4646;
}
img.border {
  padding: 4px;
  border: 1px solid #eeeeee;
}
h2 {
  border-top: 1px solid #eeeeee;
  padding-top: 10px;
}
/* =Quote
 -----------------------------------------------------------------------------*/
.simple li {
  border-bottom: 1px solid #eeeeee;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
/*------------------------------------*\
	Buttons
\*------------------------------------*/
.btn,
input.btn {
  color: #ffffff;
  background: #8c4646;
  border: 1px solid #6a3535;
  padding: 10px;
  border-radius: 2px;
  box-shadow: none;
  text-shadow: none;
  margin: 0 10px 10px 0;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.btn:hover,
input.btn:hover {
  color: #ffffff;
  background: #8c4646;
  border: 1px solid #8c4646;
  text-decoration: none;
}
.btn span,
input.btn span {
  color: #ffffff;
}
.btn-empty {
  background: none;
  border: 1px solid #eeeeee;
  padding: 10px;
  margin: 0 10px 10px 0;
}
button {
  background: #eeeeee;
  border: 1px solid #eeeeee;
}
.disabled a.btn,
a.disabled {
  background: #cccccc;
}
.btn-primary,
input.btn-primary {
  color: #ffffff;
  background-color: #d96459;
  border-color: #d03d30;
  padding: 10px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.btn-primary:hover,
input.btn-primary:hover,
.btn-primary:focus,
input.btn-primary:focus,
.btn-primary:active,
input.btn-primary:active,
.btn-primary.active,
input.btn-primary.active,
.open .dropdown-toggle.btn-primary,
.open .dropdown-toggleinput.btn-primary {
  background-color: #d14538;
  border-color: #9e2f24;
  color: #ffffff;
}
.btn-primary:active,
input.btn-primary:active,
.btn-primary.active,
input.btn-primary.active,
.open .dropdown-toggle.btn-primary,
.open .dropdown-toggleinput.btn-primary {
  background-image: none;
}
.btn-primary.disabled,
input.btn-primary.disabled,
.btn-primary[disabled],
input.btn-primary[disabled],
fieldset[disabled] .btn-primary,
fieldset[disabled] input.btn-primary,
.btn-primary.disabled:hover,
input.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
input.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
fieldset[disabled] input.btn-primary:hover,
.btn-primary.disabled:focus,
input.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
input.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
fieldset[disabled] input.btn-primary:focus,
.btn-primary.disabled:active,
input.btn-primary.disabled:active,
.btn-primary[disabled]:active,
input.btn-primary[disabled]:active,
fieldset[disabled] .btn-primary:active,
fieldset[disabled] input.btn-primary:active,
.btn-primary.disabled.active,
input.btn-primary.disabled.active,
.btn-primary[disabled].active,
input.btn-primary[disabled].active,
fieldset[disabled] .btn-primary.active,
fieldset[disabled] input.btn-primary.active {
  background-color: #d96459;
  border-color: #d03d30;
}
.btn-primary .badge,
input.btn-primary .badge {
  color: #d96459;
  background-color: #ffffff;
}
.btn-primary.btn-empty,
input.btn-primary.btn-empty {
  background: none;
  color: #d03d30;
  border: 1px solid #d03d30;
}
.btn-primary.btn-empty:hover,
input.btn-primary.btn-empty:hover {
  background: #d96459;
  color: #ffffff;
}
.btn-success {
  color: #ffffff;
  background-color: #2ecc40;
  border-color: #29b739;
  padding: 10px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active,
.open .dropdown-toggle.btn-success {
  background-color: #26ab36;
  border-color: #1e852a;
  color: #ffffff;
}
.btn-success:active,
.btn-success.active,
.open .dropdown-toggle.btn-success {
  background-image: none;
}
.btn-success.disabled,
.btn-success[disabled],
fieldset[disabled] .btn-success,
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled:active,
.btn-success[disabled]:active,
fieldset[disabled] .btn-success:active,
.btn-success.disabled.active,
.btn-success[disabled].active,
fieldset[disabled] .btn-success.active {
  background-color: #2ecc40;
  border-color: #29b739;
}
.btn-success .badge {
  color: #2ecc40;
  background-color: #ffffff;
}
.btn-success.btn-empty {
  background: none;
  color: #29b739;
  border: 1px solid #29b739;
}
.btn-success.btn-empty:hover {
  background: #2ecc40;
  color: #ffffff;
}
.btn-info {
  color: #ffffff;
  background-color: #7fdbff;
  border-color: #65d4ff;
  padding: 10px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.btn-info:hover,
.btn-info:focus,
.btn-info:active,
.btn-info.active,
.open .dropdown-toggle.btn-info {
  background-color: #56d0ff;
  border-color: #28c3ff;
  color: #ffffff;
}
.btn-info:active,
.btn-info.active,
.open .dropdown-toggle.btn-info {
  background-image: none;
}
.btn-info.disabled,
.btn-info[disabled],
fieldset[disabled] .btn-info,
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled:active,
.btn-info[disabled]:active,
fieldset[disabled] .btn-info:active,
.btn-info.disabled.active,
.btn-info[disabled].active,
fieldset[disabled] .btn-info.active {
  background-color: #7fdbff;
  border-color: #65d4ff;
}
.btn-info .badge {
  color: #7fdbff;
  background-color: #ffffff;
}
.btn-info.btn-empty {
  background: none;
  color: #65d4ff;
  border: 1px solid #65d4ff;
}
.btn-info.btn-empty:hover {
  background: #7fdbff;
  color: #ffffff;
}
.btn-warning {
  color: #ffffff;
  background-color: #ff851b;
  border-color: #ff7701;
  padding: 10px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.btn-warning:hover,
.btn-warning:focus,
.btn-warning:active,
.btn-warning.active,
.open .dropdown-toggle.btn-warning {
  background-color: #f17000;
  border-color: #c35b00;
  color: #ffffff;
}
.btn-warning:active,
.btn-warning.active,
.open .dropdown-toggle.btn-warning {
  background-image: none;
}
.btn-warning.disabled,
.btn-warning[disabled],
fieldset[disabled] .btn-warning,
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled:active,
.btn-warning[disabled]:active,
fieldset[disabled] .btn-warning:active,
.btn-warning.disabled.active,
.btn-warning[disabled].active,
fieldset[disabled] .btn-warning.active {
  background-color: #ff851b;
  border-color: #ff7701;
}
.btn-warning .badge {
  color: #ff851b;
  background-color: #ffffff;
}
.btn-warning.btn-empty {
  background: none;
  color: #ff7701;
  border: 1px solid #ff7701;
}
.btn-warning.btn-empty:hover {
  background: #ff851b;
  color: #ffffff;
}
.btn-danger {
  color: #ffffff;
  background-color: #ff4136;
  border-color: #ff291c;
  padding: 10px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.btn-danger:hover,
.btn-danger:focus,
.btn-danger:active,
.btn-danger.active,
.open .dropdown-toggle.btn-danger {
  background-color: #ff1a0d;
  border-color: #de0c00;
  color: #ffffff;
}
.btn-danger:active,
.btn-danger.active,
.open .dropdown-toggle.btn-danger {
  background-image: none;
}
.btn-danger.disabled,
.btn-danger[disabled],
fieldset[disabled] .btn-danger,
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled:active,
.btn-danger[disabled]:active,
fieldset[disabled] .btn-danger:active,
.btn-danger.disabled.active,
.btn-danger[disabled].active,
fieldset[disabled] .btn-danger.active {
  background-color: #ff4136;
  border-color: #ff291c;
}
.btn-danger .badge {
  color: #ff4136;
  background-color: #ffffff;
}
.btn-danger.btn-empty {
  background: none;
  color: #ff291c;
  border: 1px solid #ff291c;
}
.btn-danger.btn-empty:hover {
  background: #ff4136;
  color: #ffffff;
}
.btn-secondary {
  color: #ffffff;
  background-color: #8c4646;
  border-color: #8c4646;
  padding: 10px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.btn-secondary:hover,
.btn-secondary:focus,
.btn-secondary:active,
.btn-secondary.active,
.open .dropdown-toggle.btn-secondary {
  background-color: #713838;
  border-color: #633232;
  color: #ffffff;
}
.btn-secondary:active,
.btn-secondary.active,
.open .dropdown-toggle.btn-secondary {
  background-image: none;
}
.btn-secondary.disabled,
.btn-secondary[disabled],
fieldset[disabled] .btn-secondary,
.btn-secondary.disabled:hover,
.btn-secondary[disabled]:hover,
fieldset[disabled] .btn-secondary:hover,
.btn-secondary.disabled:focus,
.btn-secondary[disabled]:focus,
fieldset[disabled] .btn-secondary:focus,
.btn-secondary.disabled:active,
.btn-secondary[disabled]:active,
fieldset[disabled] .btn-secondary:active,
.btn-secondary.disabled.active,
.btn-secondary[disabled].active,
fieldset[disabled] .btn-secondary.active {
  background-color: #8c4646;
  border-color: #8c4646;
}
.btn-secondary .badge {
  color: #8c4646;
  background-color: #ffffff;
}
.btn-secondary.btn-empty {
  background: none;
  color: #8c4646;
  border: 1px solid #8c4646;
}
.btn-secondary.btn-empty:hover {
  background: #8c4646;
  color: #ffffff;
}
.btn-success {
  color: #ffffff;
  background-color: #2ecc40;
  border-color: #29b739;
  padding: 10px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active,
.open .dropdown-toggle.btn-success {
  background-color: #26ab36;
  border-color: #1e852a;
  color: #ffffff;
}
.btn-success:active,
.btn-success.active,
.open .dropdown-toggle.btn-success {
  background-image: none;
}
.btn-success.disabled,
.btn-success[disabled],
fieldset[disabled] .btn-success,
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled:active,
.btn-success[disabled]:active,
fieldset[disabled] .btn-success:active,
.btn-success.disabled.active,
.btn-success[disabled].active,
fieldset[disabled] .btn-success.active {
  background-color: #2ecc40;
  border-color: #29b739;
}
.btn-success .badge {
  color: #2ecc40;
  background-color: #ffffff;
}
.btn-success.btn-empty {
  background: none;
  color: #29b739;
  border: 1px solid #29b739;
}
.btn-success.btn-empty:hover {
  background: #2ecc40;
  color: #ffffff;
}
.btn-info {
  color: #ffffff;
  background-color: #7fdbff;
  border-color: #65d4ff;
  padding: 10px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.btn-info:hover,
.btn-info:focus,
.btn-info:active,
.btn-info.active,
.open .dropdown-toggle.btn-info {
  background-color: #56d0ff;
  border-color: #28c3ff;
  color: #ffffff;
}
.btn-info:active,
.btn-info.active,
.open .dropdown-toggle.btn-info {
  background-image: none;
}
.btn-info.disabled,
.btn-info[disabled],
fieldset[disabled] .btn-info,
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled:active,
.btn-info[disabled]:active,
fieldset[disabled] .btn-info:active,
.btn-info.disabled.active,
.btn-info[disabled].active,
fieldset[disabled] .btn-info.active {
  background-color: #7fdbff;
  border-color: #65d4ff;
}
.btn-info .badge {
  color: #7fdbff;
  background-color: #ffffff;
}
.btn-info.btn-empty {
  background: none;
  color: #65d4ff;
  border: 1px solid #65d4ff;
}
.btn-info.btn-empty:hover {
  background: #7fdbff;
  color: #ffffff;
}
.btn-warning {
  color: #ffffff;
  background-color: #ff851b;
  border-color: #ff7701;
  padding: 10px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.btn-warning:hover,
.btn-warning:focus,
.btn-warning:active,
.btn-warning.active,
.open .dropdown-toggle.btn-warning {
  background-color: #f17000;
  border-color: #c35b00;
  color: #ffffff;
}
.btn-warning:active,
.btn-warning.active,
.open .dropdown-toggle.btn-warning {
  background-image: none;
}
.btn-warning.disabled,
.btn-warning[disabled],
fieldset[disabled] .btn-warning,
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled:active,
.btn-warning[disabled]:active,
fieldset[disabled] .btn-warning:active,
.btn-warning.disabled.active,
.btn-warning[disabled].active,
fieldset[disabled] .btn-warning.active {
  background-color: #ff851b;
  border-color: #ff7701;
}
.btn-warning .badge {
  color: #ff851b;
  background-color: #ffffff;
}
.btn-warning.btn-empty {
  background: none;
  color: #ff7701;
  border: 1px solid #ff7701;
}
.btn-warning.btn-empty:hover {
  background: #ff851b;
  color: #ffffff;
}
.btn-danger {
  color: #ffffff;
  background-color: #ff4136;
  border-color: #ff291c;
  padding: 10px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.btn-danger:hover,
.btn-danger:focus,
.btn-danger:active,
.btn-danger.active,
.open .dropdown-toggle.btn-danger {
  background-color: #ff1a0d;
  border-color: #de0c00;
  color: #ffffff;
}
.btn-danger:active,
.btn-danger.active,
.open .dropdown-toggle.btn-danger {
  background-image: none;
}
.btn-danger.disabled,
.btn-danger[disabled],
fieldset[disabled] .btn-danger,
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled:active,
.btn-danger[disabled]:active,
fieldset[disabled] .btn-danger:active,
.btn-danger.disabled.active,
.btn-danger[disabled].active,
fieldset[disabled] .btn-danger.active {
  background-color: #ff4136;
  border-color: #ff291c;
}
.btn-danger .badge {
  color: #ff4136;
  background-color: #ffffff;
}
.btn-danger.btn-empty {
  background: none;
  color: #ff291c;
  border: 1px solid #ff291c;
}
.btn-danger.btn-empty:hover {
  background: #ff4136;
  color: #ffffff;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
/* Blog View
-----------------------------------------------------------------------------*/
.blog-item {
  clear: both;
}
/* Article Title
-----------------------------------------------------------------------------*/
.article-title {
  border: 1px solid #eeeeee;
  border-width: 0 0  1px 0;
  padding: 0 0 15px 0;
}
h2.article-title {
  margin-bottom: 15px;
  margin-top: 0;
}
/* Article Info
-----------------------------------------------------------------------------*/
.article-info {
  font-size: 85%;
  padding-bottom: 15px;
}
.article-info .article-date {
  color: #cccccc;
  margin-right: 10px;
}
.article-info ul {
  margin: 0;
}
.article-info .comments-link {
  margin-right: 10px;
}
.article-info .comments-link :before {
  margin-right: 10px;
}
.article-info .edit-link {
  float: right;
}
.article-info .edit-link :before {
  margin-right: 10px;
}
/* Read More
 -----------------------------------------------------------------------------*/
.readon {
  float: right;
  margin-bottom: 30px;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
#banner {
  background: #d96459;
  border: 1px solid #d03d30;
  padding: 15px;
  border-radius: 4px;
}
#banner p,
#banner h1,
#banner h2,
#banner h3,
#banner h4,
#banner h5,
#banner h6 {
  color: #ffffff;
}
#banner a {
  color: #ffffff;
}
@media screen and (max-width: 787px) {
  #banner h2 {
    font-size: 240%;
  }
}
@media screen and (max-width: 620px) {
  #banner h2 {
    font-size: 180%;
  }
}
@media screen and (max-width: 787px) {
  #bannerwrap .zen-spotlight {
    padding-top: 0;
  }
}
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
@media screen and (max-width: 787px) {
  .off-canvas-trigger {
    width: 100%;
  }
}
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
#topwrap {
  padding-top: 2px;
}
#topwrap ul {
  margin: 0;
}
#topwrap ul li {
  list-style-type: none;
  float: left;
  margin-right: 10px;
}
@media screen and (min-width: 787px) {
  #topwrap #top4 ul {
    float: right;
  }
}
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
/* Blog View
-----------------------------------------------------------------------------*/
.sidebar h3 {
  margin-top: 0;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
#logo {
  margin: 30px 0 0;
}
#logo h1,
#logo h2,
#logo h3,
#logo h4,
#logo h5,
#logo h6 {
  font-weight: 300;
  font-size: 4em;
  line-height: 1.2em;
  color: #606c76;
  margin: 0;
  border-top: 0;
  padding-top: 0;
}
#logo h1 a,
#logo h2 a,
#logo h3 a,
#logo h4 a,
#logo h5 a,
#logo h6 a {
  color: #606c76;
  font-weight: 300;
}
#logo h1 a:hover,
#logo h2 a:hover,
#logo h3 a:hover,
#logo h4 a:hover,
#logo h5 a:hover,
#logo h6 a:hover {
  color: #8c4646;
}
#logo h1 img,
#logo h2 img,
#logo h3 img,
#logo h4 img,
#logo h5 img,
#logo h6 img {
  margin-right: 10px;
}
#logo p {
  margin-bottom: 0;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
#sidebar {
  border-left: 1px solid #eeeeee;
  padding-left: 2%;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
#menu {
  margin: 15px 0;
  float: left;
  width: 100%;
  border-style: solid;
  border-color: #eeeeee;
  border-width: 1px 0;
  padding: 15px 0;
  background: transparent;
}
#menu ul {
  margin-left: 0;
}
#menu ul ul {
  border: 1px solid #eeeeee;
}
.zen-nav-fixed #menu {
  margin-top: 0;
  border-top: 0;
  border-bottom: 0;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Blankly v1.0 - ZGFv4 Universal
 *------------------------------------------------------------------------------
 * @copyright   Copyright (C) Joomlabamboo, October 07 2015
 * @license     http://www.gnu.org/licenses/gpl.html GNU General Public License version 2 or later; 
 * @Link:       http://www.joomlabamboo.com
 * @packaged: 	October 07 2015
 *------------------------------------------------------------------------------
 */
#footerwrap {
  font-size: 85%;
  margin-bottom: 30px;
}
#footerwrap .zen-container {
  border-top: 1px solid #eeeeee;
  padding-top: 15px;
}
#footerwrap p {
  color: #cccccc;
}
#footerwrap .zen-copyright {
  text-align: right;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework 
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2006-2014 Joomlabamboo.com. All Rights Reserved.
 * @license       GNU General Public License version 2 or later; 
 * @Link:         http://www.joomlabamboo.com
 *------------------------------------------------------------------------------
 */
/* Social Icons
-----------------------------------------------------------------------------*/
#socialicons {
  padding: 0;
}
#socialicons span {
  padding: 0px 4px 0 0;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
#socialicons li,
#socialicons a {
  padding: 0 !important;
}
#socialicons li a:hover {
  text-decoration: none;
}
#socialicons li a:hover span {
  color: #8c4646 !important;
}
#socialicons.zenleft ul {
  margin: 20px 0 20px -10px !important;
}
#socialicons.zencenter ul li {
  border: 0 !important;
  margin: 10px 0;
}
#socialicons.zencenter ul li a:hover,
#socialicons.zencenter ul li span:hover {
  color: #8c4646;
}
.sb-active .social-wrap.fixed {
  display: none;
}
@media screen and (max-width: 787px) {
  .fixed .social-wrap.fixed {
    display: none;
  }
}
.social-wrap {
  float: right;
  padding: 0 0 20px 20px;
  position: fixed;
  z-index: 99;
  right: 0;
  top: 170px;
  width: 44px;
}
.social-wrap span {
  padding: 10px 6px;
  display: block;
  clear: both;
  float: right;
  width: 44px;
  height: auto;
  line-height: 30px;
  font-size: 1.3em;
  margin-right: -17px;
  transition: all 0.2s;
  color: #fff;
}
.social-wrap span.primary {
  background: #d96459;
}
.social-wrap span.secondary {
  background: #8c4646;
}
.social-wrap span:hover {
  margin-right: -10px;
  color: #fff;
}
@media screen and (max-width: 787px) {
  .social-wrap span:hover {
    margin-right: 0 !important;
    color: #d96459;
  }
}
.social-wrap .zen-icon-facebook,
.social-wrap .fa-facebook {
  background: #3b5998;
  color: #fff;
}
.social-wrap .zen-icon-pinterest,
.social-wrap .fa-pinterest {
  background: #cb2027;
  color: #fff;
}
.social-wrap .zen-icon-twitter,
.social-wrap .fa-twitter {
  background: #00aced;
  color: #fff;
}
.social-wrap .zen-icon-google-plus,
.social-wrap .fa-google-plus {
  background: #d34836;
  color: #fff;
}
@media screen and (max-width: 787px) {
  .responsive-enabled .social-wrap {
    top: 0;
    left: 0;
    width: 50%;
    padding: 0 0 0 10px;
  }
  .responsive-enabled .social-wrap span {
    float: left;
    margin: 0;
    clear: none;
    background: none !important;
    padding: 10px;
    width: 30px;
  }
}
.animated,
.zen-animate {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}
.animated-slower {
  -webkit-animation-duration: 1.3s;
  animation-duration: 1.3s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}
.animated-faster {
  -webkit-animation-duration: 0.7s;
  animation-duration: 0.7s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}
@-webkit-keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
  }
  80% {
    -webkit-transform: translateY(-10px);
  }
  100% {
    -webkit-transform: translateY(0);
  }
}
@-moz-keyframes bounceInDown {
  0% {
    opacity: 0;
    -moz-transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -moz-transform: translateY(30px);
  }
  80% {
    -moz-transform: translateY(-10px);
  }
  100% {
    -moz-transform: translateY(0);
  }
}
@-o-keyframes bounceInDown {
  0% {
    opacity: 0;
    -o-transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -o-transform: translateY(30px);
  }
  80% {
    -o-transform: translateY(-10px);
  }
  100% {
    -o-transform: translateY(0);
  }
}
@keyframes bounceInDown {
  0% {
    opacity: 0;
    transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    transform: translateY(30px);
  }
  80% {
    transform: translateY(-10px);
  }
  100% {
    transform: translateY(0);
  }
}
.bounceInDown {
  -webkit-animation-name: bounceInDown;
  -moz-animation-name: bounceInDown;
  -o-animation-name: bounceInDown;
  animation-name: bounceInDown;
}
/* FONT PATH
 * -------------------------- */
@font-face {
  font-family: 'FontAwesome';
  src: url('../zengrid/libs/zengrid/fonts/fontawesome-webfont.eot?v=4.4.0');
  src: url('../zengrid/libs/zengrid/fonts/fontawesome-webfont.eot?#iefix&v=4.4.0') format('embedded-opentype'), url('../zengrid/libs/zengrid/fonts/fontawesome-webfont.woff2?v=4.4.0') format('woff2'), url('../zengrid/libs/zengrid/fonts/fontawesome-webfont.woff?v=4.4.0') format('woff'), url('../zengrid/libs/zengrid/fonts/fontawesome-webfont.ttf?v=4.4.0') format('truetype'), url('../zengrid/libs/zengrid/fonts/fontawesome-webfont.svg?v=4.4.0#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
}
.zen-icon:before,
.icon-envelope:before,
.icon-print:before,
.icon-calendar:before,
.icon-remove:before,
.icon-edit:before,
.icon-folder-2:before,
.icon-search:before,
.icon-search,
.icon-chevron-left,
.icon-chevron-right {
  display: inline-block;
  font: normal normal normal 14px/1em FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
/* makes the font 33% larger relative to the icon container */
.zen-icon-lg {
  font-size: 1.33333333em;
  line-height: 0.75em;
  vertical-align: -15%;
}
.zen-icon-2x {
  font-size: 2em;
}
.zen-icon-3x {
  font-size: 3em;
}
.zen-icon-4x {
  font-size: 4em;
}
.zen-icon-5x {
  font-size: 5em;
}
.zen-icon-fw {
  width: 1.28571429em;
  text-align: center;
}
.zen-icon-ul {
  padding-left: 0;
  margin-left: 2.14285714em;
  list-style-type: none;
}
.zen-icon-ul > li {
  position: relative;
}
.zen-icon-li {
  position: absolute;
  left: -2.14285714em;
  width: 2.14285714em;
  top: 0.14285714em;
  text-align: center;
}
.zen-icon-li.zen-icon-lg {
  left: -1.85714286em;
}
.zen-icon-border {
  padding: .2em .25em .15em;
  border: solid 0.08em #eeeeee;
  border-radius: .1em;
}
.zen-icon-pull-left {
  float: left;
}
.zen-icon-pull-right {
  float: right;
}
.zen-icon.zen-icon-pull-left {
  margin-right: .3em;
}
.zen-icon.zen-icon-pull-right {
  margin-left: .3em;
}
/* Deprecated as of 4.4.0 */
.pull-right {
  float: right;
}
.pull-left {
  float: left;
}
.zen-icon.pull-left {
  margin-right: .3em;
}
.zen-icon.pull-right {
  margin-left: .3em;
}
.zen-icon-spin {
  -webkit-animation: fa-spin 2s infinite linear;
  animation: fa-spin 2s infinite linear;
}
@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
.zen-icon-rotate-90 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=1);
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
}
.zen-icon-rotate-180 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.zen-icon-rotate-270 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
  -webkit-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  transform: rotate(270deg);
}
.zen-icon-flip-horizontal {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);
  -webkit-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  transform: scale(-1, 1);
}
.zen-icon-flip-vertical {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1);
  -webkit-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  transform: scale(1, -1);
}
:root .zen-icon-rotate-90,
:root .zen-icon-rotate-180,
:root .zen-icon-rotate-270,
:root .zen-icon-flip-horizontal,
:root .zen-icon-flip-vertical {
  filter: none;
}
.zen-icon-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}
.zen-icon-stack-1x,
.zen-icon-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}
.zen-icon-stack-1x {
  line-height: inherit;
}
.zen-icon-stack-2x {
  font-size: 2em;
}
.zen-icon-inverse {
  color: #ffffff;
}
/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
.zen-icon-glass:before {
  content: "\f000";
}
.zen-icon-music:before {
  content: "\f001";
}
.zen-icon-search:before,
.icon-search {
  content: "\f002";
}
.zen-icon-envelope-o:before {
  content: "\f003";
}
.zen-icon-heart:before {
  content: "\f004";
}
.zen-icon-star:before {
  content: "\f005";
}
.zen-icon-star-o:before {
  content: "\f006";
}
.zen-icon-user:before {
  content: "\f007";
}
.zen-icon-film:before {
  content: "\f008";
}
.zen-icon-th-large:before {
  content: "\f009";
}
.zen-icon-th:before {
  content: "\f00a";
}
.zen-icon-th-list:before {
  content: "\f00b";
}
.zen-icon-check:before {
  content: "\f00c";
}
.zen-icon-remove:before,
.zen-icon-close:before,
.zen-icon-times:before,
.icon-remove:before {
  content: "\f00d";
}
.zen-icon-search-plus:before {
  content: "\f00e";
}
.zen-icon-search-minus:before {
  content: "\f010";
}
.zen-icon-power-off:before {
  content: "\f011";
}
.zen-icon-signal:before {
  content: "\f012";
}
.zen-icon-gear:before,
.zen-icon-cog:before {
  content: "\f013";
}
.zen-icon-trash-o:before {
  content: "\f014";
}
.zen-icon-home:before {
  content: "\f015";
}
.zen-icon-file-o:before {
  content: "\f016";
}
.zen-icon-clock-o:before {
  content: "\f017";
}
.zen-icon-road:before {
  content: "\f018";
}
.zen-icon-download:before {
  content: "\f019";
}
.zen-icon-arrow-circle-o-down:before {
  content: "\f01a";
}
.zen-icon-arrow-circle-o-up:before {
  content: "\f01b";
}
.zen-icon-inbox:before {
  content: "\f01c";
}
.zen-icon-play-circle-o:before {
  content: "\f01d";
}
.zen-icon-rotate-right:before,
.zen-icon-repeat:before {
  content: "\f01e";
}
.zen-icon-refresh:before {
  content: "\f021";
}
.zen-icon-list-alt:before {
  content: "\f022";
}
.zen-icon-lock:before {
  content: "\f023";
}
.zen-icon-flag:before {
  content: "\f024";
}
.zen-icon-headphones:before {
  content: "\f025";
}
.zen-icon-volume-off:before {
  content: "\f026";
}
.zen-icon-volume-down:before {
  content: "\f027";
}
.zen-icon-volume-up:before {
  content: "\f028";
}
.zen-icon-qrcode:before {
  content: "\f029";
}
.zen-icon-barcode:before {
  content: "\f02a";
}
.zen-icon-tag:before {
  content: "\f02b";
}
.zen-icon-tags:before {
  content: "\f02c";
}
.zen-icon-book:before {
  content: "\f02d";
}
.zen-icon-bookmark:before {
  content: "\f02e";
}
.zen-icon-print:before {
  content: "\f02f";
}
.zen-icon-print:before,
.icon-print:before {
  content: "\f02f";
}
.zen-icon-mail:before,
.icon-envelope:before {
  content: "\f0e0";
}
.zen-icon-camera:before {
  content: "\f030";
}
.zen-icon-font:before {
  content: "\f031";
}
.zen-icon-bold:before {
  content: "\f032";
}
.zen-icon-italic:before {
  content: "\f033";
}
.zen-icon-text-height:before {
  content: "\f034";
}
.zen-icon-text-width:before {
  content: "\f035";
}
.zen-icon-align-left:before {
  content: "\f036";
}
.zen-icon-align-center:before {
  content: "\f037";
}
.zen-icon-align-right:before {
  content: "\f038";
}
.zen-icon-align-justify:before {
  content: "\f039";
}
.zen-icon-list:before {
  content: "\f03a";
}
.zen-icon-dedent:before,
.zen-icon-outdent:before {
  content: "\f03b";
}
.zen-icon-indent:before {
  content: "\f03c";
}
.zen-icon-video-camera:before {
  content: "\f03d";
}
.zen-icon-photo:before,
.zen-icon-image:before,
.zen-icon-picture-o:before {
  content: "\f03e";
}
.zen-icon-pencil:before,
.icon-edit:before {
  content: "\f040";
}
.zen-icon-map-marker:before {
  content: "\f041";
}
.zen-icon-adjust:before {
  content: "\f042";
}
.zen-icon-tint:before {
  content: "\f043";
}
.zen-icon-edit:before,
.jmodedit .icon-edit:before,
.zen-icon-pencil-square-o:before {
  content: "\f044";
}
.zen-icon-share-square-o:before {
  content: "\f045";
}
.zen-icon-check-square-o:before {
  content: "\f046";
}
.zen-icon-arrows:before {
  content: "\f047";
}
.zen-icon-step-backward:before {
  content: "\f048";
}
.zen-icon-fast-backward:before {
  content: "\f049";
}
.zen-icon-backward:before {
  content: "\f04a";
}
.zen-icon-play:before {
  content: "\f04b";
}
.zen-icon-pause:before {
  content: "\f04c";
}
.zen-icon-stop:before {
  content: "\f04d";
}
.zen-icon-forward:before {
  content: "\f04e";
}
.zen-icon-fast-forward:before {
  content: "\f050";
}
.zen-icon-step-forward:before {
  content: "\f051";
}
.zen-icon-eject:before {
  content: "\f052";
}
.zen-icon-chevron-left:before,
.icon-chevron-left:before {
  content: "\f053";
}
.zen-icon-chevron-right:before,
.icon-chevron-right:before {
  content: "\f054";
}
.zen-icon-plus-circle:before {
  content: "\f055";
}
.zen-icon-minus-circle:before {
  content: "\f056";
}
.zen-icon-times-circle:before {
  content: "\f057";
}
.zen-icon-check-circle:before {
  content: "\f058";
}
.zen-icon-question-circle:before {
  content: "\f059";
}
.zen-icon-info-circle:before {
  content: "\f05a";
}
.zen-icon-crosshairs:before {
  content: "\f05b";
}
.zen-icon-times-circle-o:before {
  content: "\f05c";
}
.zen-icon-check-circle-o:before {
  content: "\f05d";
}
.zen-icon-ban:before {
  content: "\f05e";
}
.zen-icon-arrow-left:before {
  content: "\f060";
}
.zen-icon-arrow-right:before {
  content: "\f061";
}
.zen-icon-arrow-up:before {
  content: "\f062";
}
.zen-icon-arrow-down:before {
  content: "\f063";
}
.zen-icon-mail-forward:before,
.zen-icon-share:before {
  content: "\f064";
}
.zen-icon-expand:before {
  content: "\f065";
}
.zen-icon-compress:before {
  content: "\f066";
}
.zen-icon-plus:before {
  content: "\f067";
}
.zen-icon-minus:before {
  content: "\f068";
}
.zen-icon-asterisk:before {
  content: "\f069";
}
.zen-icon-exclamation-circle:before {
  content: "\f06a";
}
.zen-icon-gift:before {
  content: "\f06b";
}
.zen-icon-leaf:before {
  content: "\f06c";
}
.zen-icon-fire:before {
  content: "\f06d";
}
.zen-icon-eye:before {
  content: "\f06e";
}
.zen-icon-eye-slash:before {
  content: "\f070";
}
.zen-icon-warning:before,
.zen-icon-exclamation-triangle:before {
  content: "\f071";
}
.zen-icon-plane:before {
  content: "\f072";
}
.zen-icon-calendar:before,
.icon-calendar:before {
  content: "\f073";
}
.zen-icon-random:before {
  content: "\f074";
}
.zen-icon-comment:before {
  content: "\f075";
}
.zen-icon-magnet:before {
  content: "\f076";
}
.zen-icon-chevron-up:before {
  content: "\f077";
}
.zen-icon-chevron-down:before {
  content: "\f078";
}
.zen-icon-retweet:before {
  content: "\f079";
}
.zen-icon-shopping-cart:before {
  content: "\f07a";
}
.zen-icon-folder:before,
.icon-folder-2:before {
  content: "\f07b";
}
.zen-icon-folder-open:before {
  content: "\f07c";
}
.zen-icon-arrows-v:before {
  content: "\f07d";
}
.zen-icon-arrows-h:before {
  content: "\f07e";
}
.zen-icon-bar-chart-o:before,
.zen-icon-bar-chart:before {
  content: "\f080";
}
.zen-icon-twitter-square:before {
  content: "\f081";
}
.zen-icon-facebook-square:before {
  content: "\f082";
}
.zen-icon-camera-retro:before {
  content: "\f083";
}
.zen-icon-key:before {
  content: "\f084";
}
.zen-icon-gears:before,
.zen-icon-cogs:before {
  content: "\f085";
}
.zen-icon-comments:before {
  content: "\f086";
}
.zen-icon-thumbs-o-up:before {
  content: "\f087";
}
.zen-icon-thumbs-o-down:before {
  content: "\f088";
}
.zen-icon-star-half:before {
  content: "\f089";
}
.zen-icon-heart-o:before {
  content: "\f08a";
}
.zen-icon-sign-out:before {
  content: "\f08b";
}
.zen-icon-linkedin-square:before {
  content: "\f08c";
}
.zen-icon-thumb-tack:before {
  content: "\f08d";
}
.zen-icon-external-link:before {
  content: "\f08e";
}
.zen-icon-sign-in:before {
  content: "\f090";
}
.zen-icon-trophy:before {
  content: "\f091";
}
.zen-icon-github-square:before {
  content: "\f092";
}
.zen-icon-upload:before {
  content: "\f093";
}
.zen-icon-lemon-o:before {
  content: "\f094";
}
.zen-icon-phone:before {
  content: "\f095";
}
.zen-icon-square-o:before {
  content: "\f096";
}
.zen-icon-bookmark-o:before {
  content: "\f097";
}
.zen-icon-phone-square:before {
  content: "\f098";
}
.zen-icon-twitter:before {
  content: "\f099";
}
.zen-icon-facebook-f:before,
.zen-icon-facebook:before {
  content: "\f09a";
}
.zen-icon-github:before {
  content: "\f09b";
}
.zen-icon-unlock:before {
  content: "\f09c";
}
.zen-icon-credit-card:before {
  content: "\f09d";
}
.zen-icon-feed:before,
.zen-icon-rss:before {
  content: "\f09e";
}
.zen-icon-hdd-o:before {
  content: "\f0a0";
}
.zen-icon-bullhorn:before {
  content: "\f0a1";
}
.zen-icon-bell:before {
  content: "\f0f3";
}
.zen-icon-certificate:before {
  content: "\f0a3";
}
.zen-icon-hand-o-right:before {
  content: "\f0a4";
}
.zen-icon-hand-o-left:before {
  content: "\f0a5";
}
.zen-icon-hand-o-up:before {
  content: "\f0a6";
}
.zen-icon-hand-o-down:before {
  content: "\f0a7";
}
.zen-icon-arrow-circle-left:before {
  content: "\f0a8";
}
.zen-icon-arrow-circle-right:before {
  content: "\f0a9";
}
.zen-icon-arrow-circle-up:before {
  content: "\f0aa";
}
.zen-icon-arrow-circle-down:before {
  content: "\f0ab";
}
.zen-icon-globe:before {
  content: "\f0ac";
}
.zen-icon-wrench:before {
  content: "\f0ad";
}
.zen-icon-tasks:before {
  content: "\f0ae";
}
.zen-icon-filter:before {
  content: "\f0b0";
}
.zen-icon-briefcase:before {
  content: "\f0b1";
}
.zen-icon-arrows-alt:before {
  content: "\f0b2";
}
.zen-icon-group:before,
.zen-icon-users:before {
  content: "\f0c0";
}
.zen-icon-chain:before,
.zen-icon-link:before {
  content: "\f0c1";
}
.zen-icon-cloud:before {
  content: "\f0c2";
}
.zen-icon-flask:before {
  content: "\f0c3";
}
.zen-icon-cut:before,
.zen-icon-scissors:before {
  content: "\f0c4";
}
.zen-icon-copy:before,
.zen-icon-files-o:before {
  content: "\f0c5";
}
.zen-icon-paperclip:before {
  content: "\f0c6";
}
.zen-icon-save:before,
.zen-icon-floppy-o:before {
  content: "\f0c7";
}
.zen-icon-square:before {
  content: "\f0c8";
}
.zen-icon-navicon:before,
.zen-icon-reorder:before,
.zen-icon-bars:before {
  content: "\f0c9";
}
.zen-icon-list-ul:before {
  content: "\f0ca";
}
.zen-icon-list-ol:before {
  content: "\f0cb";
}
.zen-icon-strikethrough:before {
  content: "\f0cc";
}
.zen-icon-underline:before {
  content: "\f0cd";
}
.zen-icon-table:before {
  content: "\f0ce";
}
.zen-icon-magic:before {
  content: "\f0d0";
}
.zen-icon-truck:before {
  content: "\f0d1";
}
.zen-icon-pinterest:before {
  content: "\f0d2";
}
.zen-icon-pinterest-square:before {
  content: "\f0d3";
}
.zen-icon-google-plus-square:before {
  content: "\f0d4";
}
.zen-icon-google-plus:before {
  content: "\f0d5";
}
.zen-icon-money:before {
  content: "\f0d6";
}
.zen-icon-caret-down:before {
  content: "\f0d7";
}
.zen-icon-caret-up:before {
  content: "\f0d8";
}
.zen-icon-caret-left:before {
  content: "\f0d9";
}
.zen-icon-caret-right:before {
  content: "\f0da";
}
.zen-icon-columns:before {
  content: "\f0db";
}
.zen-icon-unsorted:before,
.zen-icon-sort:before {
  content: "\f0dc";
}
.zen-icon-sort-down:before,
.zen-icon-sort-desc:before {
  content: "\f0dd";
}
.zen-icon-sort-up:before,
.zen-icon-sort-asc:before {
  content: "\f0de";
}
.zen-icon-envelope:before {
  content: "\f0e0";
}
.zen-icon-linkedin:before {
  content: "\f0e1";
}
.zen-icon-rotate-left:before,
.zen-icon-undo:before {
  content: "\f0e2";
}
.zen-icon-legal:before,
.zen-icon-gavel:before {
  content: "\f0e3";
}
.zen-icon-dashboard:before,
.zen-icon-tachometer:before {
  content: "\f0e4";
}
.zen-icon-comment-o:before {
  content: "\f0e5";
}
.zen-icon-comments-o:before {
  content: "\f0e6";
}
.zen-icon-flash:before,
.zen-icon-bolt:before {
  content: "\f0e7";
}
.zen-icon-sitemap:before {
  content: "\f0e8";
}
.zen-icon-umbrella:before {
  content: "\f0e9";
}
.zen-icon-paste:before,
.zen-icon-clipboard:before {
  content: "\f0ea";
}
.zen-icon-lightbulb-o:before {
  content: "\f0eb";
}
.zen-icon-exchange:before {
  content: "\f0ec";
}
.zen-icon-cloud-download:before {
  content: "\f0ed";
}
.zen-icon-cloud-upload:before {
  content: "\f0ee";
}
.zen-icon-user-md:before {
  content: "\f0f0";
}
.zen-icon-stethoscope:before {
  content: "\f0f1";
}
.zen-icon-suitcase:before {
  content: "\f0f2";
}
.zen-icon-bell-o:before {
  content: "\f0a2";
}
.zen-icon-coffee:before {
  content: "\f0f4";
}
.zen-icon-cutlery:before {
  content: "\f0f5";
}
.zen-icon-file-text-o:before {
  content: "\f0f6";
}
.zen-icon-building-o:before {
  content: "\f0f7";
}
.zen-icon-hospital-o:before {
  content: "\f0f8";
}
.zen-icon-ambulance:before {
  content: "\f0f9";
}
.zen-icon-medkit:before {
  content: "\f0fa";
}
.zen-icon-fighter-jet:before {
  content: "\f0fb";
}
.zen-icon-beer:before {
  content: "\f0fc";
}
.zen-icon-h-square:before {
  content: "\f0fd";
}
.zen-icon-plus-square:before {
  content: "\f0fe";
}
.zen-icon-angle-double-left:before {
  content: "\f100";
}
.zen-icon-angle-double-right:before {
  content: "\f101";
}
.zen-icon-angle-double-up:before {
  content: "\f102";
}
.zen-icon-angle-double-down:before {
  content: "\f103";
}
.zen-icon-angle-left:before {
  content: "\f104";
}
.zen-icon-angle-right:before {
  content: "\f105";
}
.zen-icon-angle-up:before {
  content: "\f106";
}
.zen-icon-angle-down:before {
  content: "\f107";
}
.zen-icon-desktop:before {
  content: "\f108";
}
.zen-icon-laptop:before {
  content: "\f109";
}
.zen-icon-tablet:before {
  content: "\f10a";
}
.zen-icon-mobile-phone:before,
.zen-icon-mobile:before {
  content: "\f10b";
}
.zen-icon-circle-o:before {
  content: "\f10c";
}
.zen-icon-quote-left:before {
  content: "\f10d";
}
.zen-icon-quote-right:before {
  content: "\f10e";
}
.zen-icon-spinner:before {
  content: "\f110";
}
.zen-icon-circle:before {
  content: "\f111";
}
.zen-icon-mail-reply:before,
.zen-icon-reply:before {
  content: "\f112";
}
.zen-icon-github-alt:before {
  content: "\f113";
}
.zen-icon-folder-o:before {
  content: "\f114";
}
.zen-icon-folder-open-o:before {
  content: "\f115";
}
.zen-icon-smile-o:before {
  content: "\f118";
}
.zen-icon-frown-o:before {
  content: "\f119";
}
.zen-icon-meh-o:before {
  content: "\f11a";
}
.zen-icon-gamepad:before {
  content: "\f11b";
}
.zen-icon-keyboard-o:before {
  content: "\f11c";
}
.zen-icon-flag-o:before {
  content: "\f11d";
}
.zen-icon-flag-checkered:before {
  content: "\f11e";
}
.zen-icon-terminal:before {
  content: "\f120";
}
.zen-icon-code:before {
  content: "\f121";
}
.zen-icon-mail-reply-all:before,
.zen-icon-reply-all:before {
  content: "\f122";
}
.zen-icon-star-half-empty:before,
.zen-icon-star-half-full:before,
.zen-icon-star-half-o:before {
  content: "\f123";
}
.zen-icon-location-arrow:before {
  content: "\f124";
}
.zen-icon-crop:before {
  content: "\f125";
}
.zen-icon-code-fork:before {
  content: "\f126";
}
.zen-icon-unlink:before,
.zen-icon-chain-broken:before {
  content: "\f127";
}
.zen-icon-question:before {
  content: "\f128";
}
.zen-icon-info:before {
  content: "\f129";
}
.zen-icon-exclamation:before {
  content: "\f12a";
}
.zen-icon-superscript:before {
  content: "\f12b";
}
.zen-icon-subscript:before {
  content: "\f12c";
}
.zen-icon-eraser:before {
  content: "\f12d";
}
.zen-icon-puzzle-piece:before {
  content: "\f12e";
}
.zen-icon-microphone:before {
  content: "\f130";
}
.zen-icon-microphone-slash:before {
  content: "\f131";
}
.zen-icon-shield:before {
  content: "\f132";
}
.zen-icon-calendar-o:before {
  content: "\f133";
}
.zen-icon-fire-extinguisher:before {
  content: "\f134";
}
.zen-icon-rocket:before {
  content: "\f135";
}
.zen-icon-maxcdn:before {
  content: "\f136";
}
.zen-icon-chevron-circle-left:before {
  content: "\f137";
}
.zen-icon-chevron-circle-right:before {
  content: "\f138";
}
.zen-icon-chevron-circle-up:before {
  content: "\f139";
}
.zen-icon-chevron-circle-down:before {
  content: "\f13a";
}
.zen-icon-html5:before {
  content: "\f13b";
}
.zen-icon-css3:before {
  content: "\f13c";
}
.zen-icon-anchor:before {
  content: "\f13d";
}
.zen-icon-unlock-alt:before {
  content: "\f13e";
}
.zen-icon-bullseye:before {
  content: "\f140";
}
.zen-icon-ellipsis-h:before {
  content: "\f141";
}
.zen-icon-ellipsis-v:before {
  content: "\f142";
}
.zen-icon-rss-square:before {
  content: "\f143";
}
.zen-icon-play-circle:before {
  content: "\f144";
}
.zen-icon-ticket:before {
  content: "\f145";
}
.zen-icon-minus-square:before {
  content: "\f146";
}
.zen-icon-minus-square-o:before {
  content: "\f147";
}
.zen-icon-level-up:before {
  content: "\f148";
}
.zen-icon-level-down:before {
  content: "\f149";
}
.zen-icon-check-square:before {
  content: "\f14a";
}
.zen-icon-pencil-square:before {
  content: "\f14b";
}
.zen-icon-external-link-square:before {
  content: "\f14c";
}
.zen-icon-share-square:before {
  content: "\f14d";
}
.zen-icon-compass:before {
  content: "\f14e";
}
.zen-icon-toggle-down:before,
.zen-icon-caret-square-o-down:before {
  content: "\f150";
}
.zen-icon-toggle-up:before,
.zen-icon-caret-square-o-up:before {
  content: "\f151";
}
.zen-icon-toggle-right:before,
.zen-icon-caret-square-o-right:before {
  content: "\f152";
}
.zen-icon-euro:before,
.zen-icon-eur:before {
  content: "\f153";
}
.zen-icon-gbp:before {
  content: "\f154";
}
.zen-icon-dollar:before,
.zen-icon-usd:before {
  content: "\f155";
}
.zen-icon-rupee:before,
.zen-icon-inr:before {
  content: "\f156";
}
.zen-icon-cny:before,
.zen-icon-rmb:before,
.zen-icon-yen:before,
.zen-icon-jpy:before {
  content: "\f157";
}
.zen-icon-ruble:before,
.zen-icon-rouble:before,
.zen-icon-rub:before {
  content: "\f158";
}
.zen-icon-won:before,
.zen-icon-krw:before {
  content: "\f159";
}
.zen-icon-bitcoin:before,
.zen-icon-btc:before {
  content: "\f15a";
}
.zen-icon-file:before {
  content: "\f15b";
}
.zen-icon-file-text:before {
  content: "\f15c";
}
.zen-icon-sort-alpha-asc:before {
  content: "\f15d";
}
.zen-icon-sort-alpha-desc:before {
  content: "\f15e";
}
.zen-icon-sort-amount-asc:before {
  content: "\f160";
}
.zen-icon-sort-amount-desc:before {
  content: "\f161";
}
.zen-icon-sort-numeric-asc:before {
  content: "\f162";
}
.zen-icon-sort-numeric-desc:before {
  content: "\f163";
}
.zen-icon-thumbs-up:before {
  content: "\f164";
}
.zen-icon-thumbs-down:before {
  content: "\f165";
}
.zen-icon-youtube-square:before {
  content: "\f166";
}
.zen-icon-youtube:before {
  content: "\f167";
}
.zen-icon-xing:before {
  content: "\f168";
}
.zen-icon-xing-square:before {
  content: "\f169";
}
.zen-icon-youtube-play:before {
  content: "\f16a";
}
.zen-icon-dropbox:before {
  content: "\f16b";
}
.zen-icon-stack-overflow:before {
  content: "\f16c";
}
.zen-icon-instagram:before {
  content: "\f16d";
}
.zen-icon-flickr:before {
  content: "\f16e";
}
.zen-icon-adn:before {
  content: "\f170";
}
.zen-icon-bitbucket:before {
  content: "\f171";
}
.zen-icon-bitbucket-square:before {
  content: "\f172";
}
.zen-icon-tumblr:before {
  content: "\f173";
}
.zen-icon-tumblr-square:before {
  content: "\f174";
}
.zen-icon-long-arrow-down:before {
  content: "\f175";
}
.zen-icon-long-arrow-up:before {
  content: "\f176";
}
.zen-icon-long-arrow-left:before {
  content: "\f177";
}
.zen-icon-long-arrow-right:before {
  content: "\f178";
}
.zen-icon-apple:before {
  content: "\f179";
}
.zen-icon-windows:before {
  content: "\f17a";
}
.zen-icon-android:before {
  content: "\f17b";
}
.zen-icon-linux:before {
  content: "\f17c";
}
.zen-icon-dribbble:before {
  content: "\f17d";
}
.zen-icon-skype:before {
  content: "\f17e";
}
.zen-icon-foursquare:before {
  content: "\f180";
}
.zen-icon-trello:before {
  content: "\f181";
}
.zen-icon-female:before {
  content: "\f182";
}
.zen-icon-male:before {
  content: "\f183";
}
.zen-icon-gittip:before,
.zen-icon-gratipay:before {
  content: "\f184";
}
.zen-icon-sun-o:before {
  content: "\f185";
}
.zen-icon-moon-o:before {
  content: "\f186";
}
.zen-icon-archive:before {
  content: "\f187";
}
.zen-icon-bug:before {
  content: "\f188";
}
.zen-icon-vk:before {
  content: "\f189";
}
.zen-icon-weibo:before {
  content: "\f18a";
}
.zen-icon-renren:before {
  content: "\f18b";
}
.zen-icon-pagelines:before {
  content: "\f18c";
}
.zen-icon-stack-exchange:before {
  content: "\f18d";
}
.zen-icon-arrow-circle-o-right:before {
  content: "\f18e";
}
.zen-icon-arrow-circle-o-left:before {
  content: "\f190";
}
.zen-icon-toggle-left:before,
.zen-icon-caret-square-o-left:before {
  content: "\f191";
}
.zen-icon-dot-circle-o:before {
  content: "\f192";
}
.zen-icon-wheelchair:before {
  content: "\f193";
}
.zen-icon-vimeo-square:before {
  content: "\f194";
}
.zen-icon-turkish-lira:before,
.zen-icon-try:before {
  content: "\f195";
}
.zen-icon-plus-square-o:before {
  content: "\f196";
}
.zen-icon-space-shuttle:before {
  content: "\f197";
}
.zen-icon-slack:before {
  content: "\f198";
}
.zen-icon-envelope-square:before {
  content: "\f199";
}
.zen-icon-wordpress:before {
  content: "\f19a";
}
.zen-icon-openid:before {
  content: "\f19b";
}
.zen-icon-institution:before,
.zen-icon-bank:before,
.zen-icon-university:before {
  content: "\f19c";
}
.zen-icon-mortar-board:before,
.zen-icon-graduation-cap:before {
  content: "\f19d";
}
.zen-icon-yahoo:before {
  content: "\f19e";
}
.zen-icon-google:before {
  content: "\f1a0";
}
.zen-icon-reddit:before {
  content: "\f1a1";
}
.zen-icon-reddit-square:before {
  content: "\f1a2";
}
.zen-icon-stumbleupon-circle:before {
  content: "\f1a3";
}
.zen-icon-stumbleupon:before {
  content: "\f1a4";
}
.zen-icon-delicious:before {
  content: "\f1a5";
}
.zen-icon-digg:before {
  content: "\f1a6";
}
.zen-icon-pied-piper:before {
  content: "\f1a7";
}
.zen-icon-pied-piper-alt:before {
  content: "\f1a8";
}
.zen-icon-drupal:before {
  content: "\f1a9";
}
.zen-icon-joomla:before {
  content: "\f1aa";
}
.zen-icon-language:before {
  content: "\f1ab";
}
.zen-icon-fax:before {
  content: "\f1ac";
}
.zen-icon-building:before {
  content: "\f1ad";
}
.zen-icon-child:before {
  content: "\f1ae";
}
.zen-icon-paw:before {
  content: "\f1b0";
}
.zen-icon-spoon:before {
  content: "\f1b1";
}
.zen-icon-cube:before {
  content: "\f1b2";
}
.zen-icon-cubes:before {
  content: "\f1b3";
}
.zen-icon-behance:before {
  content: "\f1b4";
}
.zen-icon-behance-square:before {
  content: "\f1b5";
}
.zen-icon-steam:before {
  content: "\f1b6";
}
.zen-icon-steam-square:before {
  content: "\f1b7";
}
.zen-icon-recycle:before {
  content: "\f1b8";
}
.zen-icon-automobile:before,
.zen-icon-car:before {
  content: "\f1b9";
}
.zen-icon-cab:before,
.zen-icon-taxi:before {
  content: "\f1ba";
}
.zen-icon-tree:before {
  content: "\f1bb";
}
.zen-icon-spotify:before {
  content: "\f1bc";
}
.zen-icon-deviantart:before {
  content: "\f1bd";
}
.zen-icon-soundcloud:before {
  content: "\f1be";
}
.zen-icon-database:before {
  content: "\f1c0";
}
.zen-icon-file-pdf-o:before {
  content: "\f1c1";
}
.zen-icon-file-word-o:before {
  content: "\f1c2";
}
.zen-icon-file-excel-o:before {
  content: "\f1c3";
}
.zen-icon-file-powerpoint-o:before {
  content: "\f1c4";
}
.zen-icon-file-photo-o:before,
.zen-icon-file-picture-o:before,
.zen-icon-file-image-o:before {
  content: "\f1c5";
}
.zen-icon-file-zip-o:before,
.zen-icon-file-archive-o:before {
  content: "\f1c6";
}
.zen-icon-file-sound-o:before,
.zen-icon-file-audio-o:before {
  content: "\f1c7";
}
.zen-icon-file-movie-o:before,
.zen-icon-file-video-o:before {
  content: "\f1c8";
}
.zen-icon-file-code-o:before {
  content: "\f1c9";
}
.zen-icon-vine:before {
  content: "\f1ca";
}
.zen-icon-codepen:before {
  content: "\f1cb";
}
.zen-icon-jsfiddle:before {
  content: "\f1cc";
}
.zen-icon-life-bouy:before,
.zen-icon-life-buoy:before,
.zen-icon-life-saver:before,
.zen-icon-support:before,
.zen-icon-life-ring:before {
  content: "\f1cd";
}
.zen-icon-circle-o-notch:before {
  content: "\f1ce";
}
.zen-icon-ra:before,
.zen-icon-rebel:before {
  content: "\f1d0";
}
.zen-icon-ge:before,
.zen-icon-empire:before {
  content: "\f1d1";
}
.zen-icon-git-square:before {
  content: "\f1d2";
}
.zen-icon-git:before {
  content: "\f1d3";
}
.zen-icon-y-combinator-square:before,
.zen-icon-yc-square:before,
.zen-icon-hacker-news:before {
  content: "\f1d4";
}
.zen-icon-tencent-weibo:before {
  content: "\f1d5";
}
.zen-icon-qq:before {
  content: "\f1d6";
}
.zen-icon-wechat:before,
.zen-icon-weixin:before {
  content: "\f1d7";
}
.zen-icon-send:before,
.zen-icon-paper-plane:before {
  content: "\f1d8";
}
.zen-icon-send-o:before,
.zen-icon-paper-plane-o:before {
  content: "\f1d9";
}
.zen-icon-history:before {
  content: "\f1da";
}
.zen-icon-circle-thin:before {
  content: "\f1db";
}
.zen-icon-header:before {
  content: "\f1dc";
}
.zen-icon-paragraph:before {
  content: "\f1dd";
}
.zen-icon-sliders:before {
  content: "\f1de";
}
.zen-icon-share-alt:before {
  content: "\f1e0";
}
.zen-icon-share-alt-square:before {
  content: "\f1e1";
}
.zen-icon-bomb:before {
  content: "\f1e2";
}
.zen-icon-soccer-ball-o:before,
.zen-icon-futbol-o:before {
  content: "\f1e3";
}
.zen-icon-tty:before {
  content: "\f1e4";
}
.zen-icon-binoculars:before {
  content: "\f1e5";
}
.zen-icon-plug:before {
  content: "\f1e6";
}
.zen-icon-slideshare:before {
  content: "\f1e7";
}
.zen-icon-twitch:before {
  content: "\f1e8";
}
.zen-icon-yelp:before {
  content: "\f1e9";
}
.zen-icon-newspaper-o:before {
  content: "\f1ea";
}
.zen-icon-wifi:before {
  content: "\f1eb";
}
.zen-icon-calculator:before {
  content: "\f1ec";
}
.zen-icon-paypal:before {
  content: "\f1ed";
}
.zen-icon-google-wallet:before {
  content: "\f1ee";
}
.zen-icon-cc-visa:before {
  content: "\f1f0";
}
.zen-icon-cc-mastercard:before {
  content: "\f1f1";
}
.zen-icon-cc-discover:before {
  content: "\f1f2";
}
.zen-icon-cc-amex:before {
  content: "\f1f3";
}
.zen-icon-cc-paypal:before {
  content: "\f1f4";
}
.zen-icon-cc-stripe:before {
  content: "\f1f5";
}
.zen-icon-bell-slash:before {
  content: "\f1f6";
}
.zen-icon-bell-slash-o:before {
  content: "\f1f7";
}
.zen-icon-trash:before {
  content: "\f1f8";
}
.zen-icon-copyright:before {
  content: "\f1f9";
}
.zen-icon-at:before {
  content: "\f1fa";
}
.zen-icon-eyedropper:before {
  content: "\f1fb";
}
.zen-icon-paint-brush:before {
  content: "\f1fc";
}
.zen-icon-birthday-cake:before {
  content: "\f1fd";
}
.zen-icon-area-chart:before {
  content: "\f1fe";
}
.zen-icon-pie-chart:before {
  content: "\f200";
}
.zen-icon-line-chart:before {
  content: "\f201";
}
.zen-icon-lastfm:before {
  content: "\f202";
}
.zen-icon-lastfm-square:before {
  content: "\f203";
}
.zen-icon-toggle-off:before {
  content: "\f204";
}
.zen-icon-toggle-on:before {
  content: "\f205";
}
.zen-icon-bicycle:before {
  content: "\f206";
}
.zen-icon-bus:before {
  content: "\f207";
}
.zen-icon-ioxhost:before {
  content: "\f208";
}
.zen-icon-angellist:before {
  content: "\f209";
}
.zen-icon-cc:before {
  content: "\f20a";
}
.zen-icon-shekel:before,
.zen-icon-sheqel:before,
.zen-icon-ils:before {
  content: "\f20b";
}
.zen-icon-meanpath:before {
  content: "\f20c";
}
.zen-icon-buysellads:before {
  content: "\f20d";
}
.zen-icon-connectdevelop:before {
  content: "\f20e";
}
.zen-icon-dashcube:before {
  content: "\f210";
}
.zen-icon-forumbee:before {
  content: "\f211";
}
.zen-icon-leanpub:before {
  content: "\f212";
}
.zen-icon-sellsy:before {
  content: "\f213";
}
.zen-icon-shirtsinbulk:before {
  content: "\f214";
}
.zen-icon-simplybuilt:before {
  content: "\f215";
}
.zen-icon-skyatlas:before {
  content: "\f216";
}
.zen-icon-cart-plus:before {
  content: "\f217";
}
.zen-icon-cart-arrow-down:before {
  content: "\f218";
}
.zen-icon-diamond:before {
  content: "\f219";
}
.zen-icon-ship:before {
  content: "\f21a";
}
.zen-icon-user-secret:before {
  content: "\f21b";
}
.zen-icon-motorcycle:before {
  content: "\f21c";
}
.zen-icon-street-view:before {
  content: "\f21d";
}
.zen-icon-heartbeat:before {
  content: "\f21e";
}
.zen-icon-venus:before {
  content: "\f221";
}
.zen-icon-mars:before {
  content: "\f222";
}
.zen-icon-mercury:before {
  content: "\f223";
}
.zen-icon-intersex:before,
.zen-icon-transgender:before {
  content: "\f224";
}
.zen-icon-transgender-alt:before {
  content: "\f225";
}
.zen-icon-venus-double:before {
  content: "\f226";
}
.zen-icon-mars-double:before {
  content: "\f227";
}
.zen-icon-venus-mars:before {
  content: "\f228";
}
.zen-icon-mars-stroke:before {
  content: "\f229";
}
.zen-icon-mars-stroke-v:before {
  content: "\f22a";
}
.zen-icon-mars-stroke-h:before {
  content: "\f22b";
}
.zen-icon-neuter:before {
  content: "\f22c";
}
.zen-icon-genderless:before {
  content: "\f22d";
}
.zen-icon-facebook-official:before {
  content: "\f230";
}
.zen-icon-pinterest-p:before {
  content: "\f231";
}
.zen-icon-whatsapp:before {
  content: "\f232";
}
.zen-icon-server:before {
  content: "\f233";
}
.zen-icon-user-plus:before {
  content: "\f234";
}
.zen-icon-user-times:before {
  content: "\f235";
}
.zen-icon-hotel:before,
.zen-icon-bed:before {
  content: "\f236";
}
.zen-icon-viacoin:before {
  content: "\f237";
}
.zen-icon-train:before {
  content: "\f238";
}
.zen-icon-subway:before {
  content: "\f239";
}
.zen-icon-medium:before {
  content: "\f23a";
}
.zen-icon-yc:before,
.zen-icon-y-combinator:before {
  content: "\f23b";
}
.zen-icon-optin-monster:before {
  content: "\f23c";
}
.zen-icon-opencart:before {
  content: "\f23d";
}
.zen-icon-expeditedssl:before {
  content: "\f23e";
}
.zen-icon-battery-4:before,
.zen-icon-battery-full:before {
  content: "\f240";
}
.zen-icon-battery-3:before,
.zen-icon-battery-three-quarters:before {
  content: "\f241";
}
.zen-icon-battery-2:before,
.zen-icon-battery-half:before {
  content: "\f242";
}
.zen-icon-battery-1:before,
.zen-icon-battery-quarter:before {
  content: "\f243";
}
.zen-icon-battery-0:before,
.zen-icon-battery-empty:before {
  content: "\f244";
}
.zen-icon-mouse-pointer:before {
  content: "\f245";
}
.zen-icon-i-cursor:before {
  content: "\f246";
}
.zen-icon-object-group:before {
  content: "\f247";
}
.zen-icon-object-ungroup:before {
  content: "\f248";
}
.zen-icon-sticky-note:before {
  content: "\f249";
}
.zen-icon-sticky-note-o:before {
  content: "\f24a";
}
.zen-icon-cc-jcb:before {
  content: "\f24b";
}
.zen-icon-cc-diners-club:before {
  content: "\f24c";
}
.zen-icon-clone:before {
  content: "\f24d";
}
.zen-icon-balance-scale:before {
  content: "\f24e";
}
.zen-icon-hourglass-o:before {
  content: "\f250";
}
.zen-icon-hourglass-1:before,
.zen-icon-hourglass-start:before {
  content: "\f251";
}
.zen-icon-hourglass-2:before,
.zen-icon-hourglass-half:before {
  content: "\f252";
}
.zen-icon-hourglass-3:before,
.zen-icon-hourglass-end:before {
  content: "\f253";
}
.zen-icon-hourglass:before {
  content: "\f254";
}
.zen-icon-hand-grab-o:before,
.zen-icon-hand-rock-o:before {
  content: "\f255";
}
.zen-icon-hand-stop-o:before,
.zen-icon-hand-paper-o:before {
  content: "\f256";
}
.zen-icon-hand-scissors-o:before {
  content: "\f257";
}
.zen-icon-hand-lizard-o:before {
  content: "\f258";
}
.zen-icon-hand-spock-o:before {
  content: "\f259";
}
.zen-icon-hand-pointer-o:before {
  content: "\f25a";
}
.zen-icon-hand-peace-o:before {
  content: "\f25b";
}
.zen-icon-trademark:before {
  content: "\f25c";
}
.zen-icon-registered:before {
  content: "\f25d";
}
.zen-icon-creative-commons:before {
  content: "\f25e";
}
.zen-icon-gg:before {
  content: "\f260";
}
.zen-icon-gg-circle:before {
  content: "\f261";
}
.zen-icon-tripadvisor:before {
  content: "\f262";
}
.zen-icon-odnoklassniki:before {
  content: "\f263";
}
.zen-icon-odnoklassniki-square:before {
  content: "\f264";
}
.zen-icon-get-pocket:before {
  content: "\f265";
}
.zen-icon-wikipedia-w:before {
  content: "\f266";
}
.zen-icon-safari:before {
  content: "\f267";
}
.zen-icon-chrome:before {
  content: "\f268";
}
.zen-icon-firefox:before {
  content: "\f269";
}
.zen-icon-opera:before {
  content: "\f26a";
}
.zen-icon-internet-explorer:before {
  content: "\f26b";
}
.zen-icon-tv:before,
.zen-icon-television:before {
  content: "\f26c";
}
.zen-icon-contao:before {
  content: "\f26d";
}
.zen-icon-500px:before {
  content: "\f26e";
}
.zen-icon-amazon:before {
  content: "\f270";
}
.zen-icon-calendar-plus-o:before {
  content: "\f271";
}
.zen-icon-calendar-minus-o:before {
  content: "\f272";
}
.zen-icon-calendar-times-o:before {
  content: "\f273";
}
.zen-icon-calendar-check-o:before {
  content: "\f274";
}
.zen-icon-industry:before {
  content: "\f275";
}
.zen-icon-map-pin:before {
  content: "\f276";
}
.zen-icon-map-signs:before {
  content: "\f277";
}
.zen-icon-map-o:before {
  content: "\f278";
}
.zen-icon-map:before {
  content: "\f279";
}
.zen-icon-commenting:before {
  content: "\f27a";
}
.zen-icon-commenting-o:before {
  content: "\f27b";
}
.zen-icon-houzz:before {
  content: "\f27c";
}
.zen-icon-vimeo:before {
  content: "\f27d";
}
.zen-icon-black-tie:before {
  content: "\f27e";
}
.zen-icon-fonticons:before {
  content: "\f280";
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework 
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2006-2014 Joomlabamboo.com. All Rights Reserved.
 * @license       GNU General Public License version 2 or later; 
 * @Link:         http://www.joomlabamboo.com
 *------------------------------------------------------------------------------
 */
.primary-row {
  background: #d96459;
  color: #ffffff;
}
.primary-row h1,
.primary-row h2,
.primary-row h3,
.primary-row h4,
.primary-row h5,
.primary-row h6,
.primary-row p,
.primary-row li,
.primary-row span {
  color: #ffffff;
}
.primary-row a {
  color: #eeeeee;
}
.primary-row li {
  border-bottom: 1px solid #e38b83;
}
.primary-row li a {
  color: #eeeeee;
}
.primary-row .zen-spotlight {
  border: 0;
}
/** 
 *------------------------------------------------------------------------------
 * @package       Zen Grid Framework 
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2006-2014 Joomlabamboo.com. All Rights Reserved.
 * @license       GNU General Public License version 2 or later; 
 * @Link:         http://www.joomlabamboo.com
 *------------------------------------------------------------------------------
 */
.primary3-row {
  background: #e38b83;
  color: #ffffff;
}
.primary3-row h1,
.primary3-row h2,
.primary3-row h3,
.primary3-row h4,
.primary3-row h5,
.primary3-row h6,
.primary3-row p,
.primary3-row li,
.primary3-row span {
  color: #ffffff;
}
.primary3-row a {
  color: #eeeeee;
}
.primary3-row li {
  border-bottom: 1px solid #ecb2ac;
}
.primary3-row li a {
  color: #eeeeee;
}
.primary3-row .zen-spotlight {
  border: 0;
}
/*# sourceMappingURL=wp-content/themes/blankly/css/theme.campfire.map */
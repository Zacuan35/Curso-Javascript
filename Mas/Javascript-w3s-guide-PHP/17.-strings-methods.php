<!DOCTYPE html>
<!--====================================================================================
                   /// START DOC.HTML ///
=====================================================================================-->
<html lang="en">
<!--====================================================================================
                                /// START HEAD ///
=====================================================================================-->
<head>
  <!-- Metadata -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Document title -->
  <title>JS - 17.Métodos de cadenas</title>
  <!-- Favicon -->
  <link rel="shorcut icon" href="assets/img/favicon.ico"/>
  <!-- Stylesheets -->
  <link href="assets/css/custom-style.css" rel="stylesheet">
  <link href="assets/css/grid.css" rel="stylesheet">
</head>
<!--=======
END HEAD
========-->
<!--====================================================================================
                                /// START BODY ///
=====================================================================================-->
<body>
  <?php 
  include('includes/nav.php');
  ?>
<!-- Main -->
<div class="main">
  <h1>Métodos de cadenas</h1><hr>
  <p>String methods help you to work with strings.</p>
  <p>String Methods and Properties</p>
  <p>Primitive values, like "John Doe", cannot have properties or methods (because they are not objects).</p>
  <p>But with JavaScript, methods and properties are also available to primitive values, because JavaScript treats primitive values as objects when executing methods and properties.</p>
  <p>JavaScript String Length</p>
  <p>The length property returns the length of a string:</p>
  <p>Example</p>
  <p>
    let txt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";<br>
    let length = txt.length;
  </p>

<!-- Example -->
<h2>JavaScript String Properties</h2>
<p>The length property returns the length of a string:</p>
<p id="demo-one"></p>
<script>
let text = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
document.getElementById("demo-one").innerHTML = text.length;
</script>

  <p>Extracting String Parts</p>
  <p>There are 3 methods for extracting a part of a string:</p>
  <ul>
    <li>slice(start, end)</li>
    <li>substring(start, end)</li>
    <li>substr(start, length)</li>
  </ul>
  <p>JavaScript String slice()</p>
  <p>slice() extracts a part of a string and returns the extracted part in a new string.<br>
  The method takes 2 parameters: the start position, and the end position (end not included).<br>
  This example slices out a portion of a string from position 7 to position 12 (13-1):</p>
  <p>
    let str = "Apple, Banana, Kiwi";<br>
    let part = str.slice(7, 13);
  </p>
<!-- Example -->
<h2>JavaScript String Methods</h2>
<p>The slice() method extract a part of a string
and returns the extracted parts in a new string:</p>
<p id="demo-two"></p>
<script>
let str = "Apple, Banana, Kiwi";
document.getElementById("demo-two").innerHTML = str.slice(7,13); 
</script>

<h2>Note</h2>
<p>JavaScript counts positions from zero.<br>
  First position is 0.<br>
Second position is 1.</p>

<p>If a parameter is negative, the position is counted from the end of the string.<br>
This example slices out a portion of a string from position -12 to position -6:</p>

<h2>Example</h2>
  <p>let str = "Apple, Banana, Kiwi";<br>
let part = str.slice(-12, -6);</p>
  
<!-- Example -->
<h2>JavaScript String Methods</h2>
<p>The slice() method extract a part of a string
and returns the extracted parts in a new string:</p>
<p id="demo-three"></p>
<script>
let str = "Apple, Banana, Kiwi";
document.getElementById("demo-three").innerHTML = str.slice(-12,-6);
</script>

<p>If you omit the second parameter, the method will slice out the rest of the string:</p>
<h2>Example</h2>
  <p>let part = str.slice(7);</p>


<!-- Example -->
<h2>JavaScript String Methods</h2>
<p>The slice() method extract a part of a string
and returns the extracted parts in a new string:</p>
<p id="demo-four"></p>
<script>
let str = "Apple, Banana, Kiwi";
document.getElementById("demo-four").innerHTML = str.slice(7);
</script>

<p>or, counting from the end:</p>
<h2>Example</h2>
<p>let part = str.slice(-12);</p>

<!-- Example -->
<h2>JavaScript String Methods</h2>
<p>The slice() method extract a part of a string
and returns the extracted parts in a new string:</p>
<p id="demo-five"></p>
<script>
let str = "Apple, Banana, Kiwi";
document.getElementById("demo-five").innerHTML = str.slice(-12);
</script>

<h1>JavaScript String substring()</h1>

<p>substring() is similar to slice().<br>
The difference is that substring() cannot accept negative indexes.</p>

<p>Example</p>
<p>let str = "Apple, Banana, Kiwi";<br>
let part = str.substring(7, 13);</p>

<!-- Example -->
<h2>JavaScript String Methods</h2>
<p>The substring() method extract a part of a string and returns the extracted parts in a new string:</p>
<p id="demo-six"></p>
<script>
let str = "Apple, Banana, Kiwi";
document.getElementById("demo-six").innerHTML = str.substring(7,13);
</script>

<p>If you omit the second parameter, substring() will slice out the rest of the string.</p>
<h2>JavaScript String substr()</h2>
<p>substr() is similar to slice().<br>
The difference is that the second parameter specifies the length of the extracted part.</p>

<h2>Example</h2>
<p>let str = "Apple, Banana, Kiwi";<br>
let part = str.substr(7, 6);</p>

<!-- Example -->
<h2>JavaScript String Methods</h2>
<p>The substr() method extract a part of a string
and returns the extracted parts in a new string:</p>
<p id="demo-seven"></p>
<script>
let str = "Apple, Banana, Kiwi";
document.getElementById("demo-seven").innerHTML = str.substr(7,6);
</script>

<p>If you omit the second parameter, substr() will slice out the rest of the string.</p>
<h2>Example</h2>
<p>
  let str = "Apple, Banana, Kiwi";<br>
let part = str.substr(7);
</p>

<!-- Example -->
<h2>JavaScript String Methods</h2>
<p>The substr() method extract a part of a string
and returns the extracted parts in a new string:</p>
<p id="demo-eight"></p>
<script>
let str = "Apple, Banana, Kiwi";
document.getElementById("demo-eight").innerHTML = str.substr(7);
</script>

<p>If the first parameter is negative, the position counts from the end of the string.</p>

<h2>Example</h2>
<p>let str = "Apple, Banana, Kiwi";<br>
let part = str.substr(-4);</p>

<!-- Example -->
<h2>JavaScript String Methods</h2>
<p>The substr() method extract a part of a string
and returns the extracted parts in a new string:</p>
<p id="demo-nine"></p>
<script>
let str = "Apple, Banana, Kiwi";
document.getElementById("demo-nine").innerHTML = str.substr(-4);
</script>


<h1>Replacing String Content</h1>


<p>The replace() method replaces a specified value with another value in a string:</p>
<h3>Example</h3>
<p>let text = "Please visit Microsoft!";<br>
let newText = text.replace("Microsoft", "W3Schools");</p>

<h2>JavaScript String Methods</h2>
<p>Replace "Microsoft" with "W3Schools" in the paragraph below:</p>
<button onclick="myFunction()">Try it</button>
<p id="demo-ten">Please visit Microsoft!</p>
<script>
function myFunction() {
  let text = document.getElementById("demo-ten").innerHTML;
  document.getElementById("demo-ten").innerHTML =
  text.replace("Microsoft","W3Schools");
}
</script>

<h3>Note</h3>
<p>The replace() method does not change the string it is called on.<br>
The replace() method returns a new string.<br>
The replace() method replaces only the first match<br>
If you want to replace all matches, use a regular expression with the /g flag set. See examples below.</p>

<p>By default, the replace() method replaces only the first match:</p>
<h3>Example</h3>
<p>let text = "Please visit Microsoft and Microsoft!";<br>
let newText = text.replace("Microsoft", "W3Schools");</p>

<h2>JavaScript String Methods</h2>
<p>Replace "Microsoft" with "W3Schools" in the paragraph below:</p>
<button onclick="myFunction()">Try it</button>
<p id="demo-eleven">Please visit Microsoft and Microsoft!</p>
<script>
function myFunction() {
  let text = document.getElementById("demo-eleven").innerHTML; 
  document.getElementById("demo-eleven").innerHTML =
  text.replace("Microsoft","W3Schools");
}
</script>

<p>By default, the replace() method is case sensitive. Writing MICROSOFT (with upper-case) will not work:</p>
<h4>Example</h4>
<p>let text = "Please visit Microsoft!";<br>
let newText = text.replace("MICROSOFT", "W3Schools");</p>

<h2>JavaScript String Methods</h2>
<p>Try to replace "Microsoft" with "W3Schools" in the paragraph below:</p>
<button onclick="myFunction()">Try it</button>
<p id="demo-twelve">Please visit Microsoft!</p>
<script>
function myFunction() {
  let text = document.getElementById("demo-twelve").innerHTML; 
  document.getElementById("demo-twelve").innerHTML =
  text.replace("MICROSOFT","W3Schools");
}
</script>
<p>The replace() method is case sensitive. MICROSOFT (with upper-case) will not be replaced.</p>

<p>To replace case insensitive, use a regular expression with an /i flag (insensitive):</p>
<h3>Example</h3>
<p>let text = "Please visit Microsoft!";<br>
let newText = text.replace(/MICROSOFT/i, "W3Schools");</p>

<h2>JavaScript String Methods</h2>
<p>Replace "Microsoft" with "W3Schools" in the paragraph below:</p>
<button onclick="myFunction()">Try it</button>
<p id="demo-thirtheen">Please visit Microsoft!</p>
<script>
function myFunction() {
  let text = document.getElementById("demo-thirtheen").innerHTML; 
  document.getElementById("demo-thirtheen").innerHTML =
  text.replace(/MICROSOFT/i,"W3Schools");
}
</script>

<h3>Note</h3>
<p>Regular expressions are written without quotes.</p>

<p>To replace all matches, use a regular expression with a /g flag (global match):</p>
<h3>Example</h3>
<p>let text = "Please visit Microsoft and Microsoft!";<br>
let newText = text.replace(/Microsoft/g, "W3Schools");</p>

<h2>JavaScript String Methods</h2>
<p>Replace all occurrences of "Microsoft" with "W3Schools" in the paragraph below:</p>
<button onclick="myFunction()">Try it</button>
<p id="demo-fourteen">Please visit Microsoft and Microsoft!</p>
<script>
function myFunction() {
  let text = document.getElementById("demo-fourteen").innerHTML; 
  document.getElementById("demo-fourteen").innerHTML =
  text.replace(/Microsoft/g,"W3Schools");
}
</script>

<h3>Note</h3>
<p>You will learn a lot more about regular expressions in the chapter JavaScript Regular Expressions.</p>

<h3>Converting to Upper and Lower Case</h3>
<p>
A string is converted to upper case with toUpperCase():<br>
A string is converted to lower case with toLowerCase():
</p>

<h3>JavaScript String toUpperCase()</h3>

<h3>Example</h3>
<p>
let text1 = "Hello World!";<br>
let text2 = text1.toUpperCase();
</p>

<h2>JavaScript String Methods</h2>
<p>Convert string to upper case:</p>
<button onclick="myFunction()">Try it</button>
<p id="demo-fifteen">Hello World!</p>
<script>
function myFunction() {
  let text = document.getElementById("demo-fifteen").innerHTML;
  document.getElementById("demo-fifteen").innerHTML =
  text.toUpperCase();
}
</script>

<h3>JavaScript String toLowerCase()</h3>
<h3>Example</h3>
<p>let text1 = "Hello World!";       // String<br>
let text2 = text1.toLowerCase();  // text2 is text1 converted to lower</p>

<p>
<h2>JavaScript String Methods</h2>
<p>Convert string to lower case:</p>
<button onclick="myFunction()">Try it</button>
<p id="demo-sixteen">Hello World!</p>
<script>
function myFunction() {
  let text = document.getElementById("demo-sixteen").innerHTML;
  document.getElementById("demo-sixteen").innerHTML =
  text.toLowerCase();
}
</script>
</p>

<h3>JavaScript String concat()</h3>
<p>concat() joins two or more strings:</p>

<h3>Example</h3>
<p>let text1 = "Hello";<br>
let text2 = "World";<br>
let text3 = text1.concat(" ", text2);</p>

<h2>JavaScript String Methods</h2>
<p>The concat() method joins two or more strings:</p>
<p id="demo-seventeen"></p>
<script>
let text1 = "Hello";
let text2 = "World!";
let text3 = text1.concat(" ",text2);
document.getElementById("demo-seventeen").innerHTML = text3;
</script>

<p>The concat() method can be used instead of the plus operator. These two lines do the same:</p>
<h3>Example</h3>
<p>text = "Hello" + " " + "World!";<br>
text = "Hello".concat(" ", "World!");</p>

<h4>Note</h4>
<p>
All string methods return a new string. They don't modify the original string.<br>
Formally said:<br>
Strings are immutable: Strings cannot be changed, only replaced.</p>

<h4>JavaScript String trim()</h4>
<p>The trim() method removes whitespace from both sides of a string:</p>
<h4>Example</h4>
<p>let text1 = "      Hello World!      ";<br>
let text2 = text1.trim();</p>

<h1>JavaScript Strings</h1>
<h2>The trim() Method</h2>
<p id="demo-eighteen"></p>
<script>
let text1 = "     Hello World!     ";
let text2 = text1.trim();
document.getElementById("demo-eighteen").innerHTML =
"Length text1=" + text1.length + "<br>Length2 text2=" + text2.length;
</script>

<h4>JavaScript String Padding</h4>
<p>ECMAScript 2017 added two String methods: padStart and padEnd to support padding at the beginning and at the end of a string</p>

<h4>JavaScript String padStart()</h4>
<h4>Example</h4>
<p>let text = "5";<br>
let padded = text.padStart(4,0);</p>

<h2>JavaScript String Methods</h2>
<p>The padStart() method pads a string with another string:</p>
<p id="demo-nineteen"></p>
<script>
let text = "5";
document.getElementById("demo-nineteen").innerHTML = text.padStart(4,0);
</script>

<h4>Browser Support</h4>
<p>padStart() is an ECMAScript 2017 feature.<br>
It is supported in all modern browsers:</p>

<p>
  Chrome<br>
  Edge<br>
  Firefox<br>
  Safari<br>
  Opera
</p>

<p>padStart() is not supported in Internet Explorer.</p>

<h4>JavaScript String padEnd()</h4>
<h4>Example</h4>
<p>let text = "5";<br>
let padded = text.padEnd(4,0);</p>

<h2>JavaScript String Methods</h2>
<p>The padEnd() method pads a string with another string:</p>
<p id="demo-twenty"></p>
<script>
let text = "5";
document.getElementById("demo-twenty").innerHTML = text.padEnd(4,0);
</script>


<h4>Browser Support</h4>
<p>padEnd() is an ECMAScript 2017 feature.<br>
It is supported in all modern browsers:</p>

<p>
  Chrome<br>
  Edge<br>
  Firefox<br>
  Safari<br>
  Opera
</p>

<p>padEnd() is not supported in Internet Explorer.</p>
<h4>Extracting String Characters</h4>
<p>There are 3 methods for extracting string characters:</p>

<ul>
  <li>charAt(position)</li>
  <li>charCodeAt(position)</li>
  <li>Property access [ ]</li>
</ul>

<h4>JavaScript String charAt()</h4>
<p>The charAt() method returns the character at a specified index (position) in a string:</p>

<h4>Example</h4>
<p>let text = "HELLO WORLD";<br>
let char = text.charAt(0);</p>

<h2>JavaScript String Methods</h2>
<p>The charAt() method returns the character at a given position in a string:</p>
<p id="demo-twenty-one"></p>
<script>
var text = "HELLO WORLD";
document.getElementById("demo-twenty-one").innerHTML = text.charAt(0);
</script>

<h4>JavaScript String charCodeAt()</h4>
<p>The charCodeAt() method returns the unicode of the character at a specified index in a string:<br>
The method returns a UTF-16 code (an integer between 0 and 65535).</p>


<h4>Example</h4>
<p>let text = "HELLO WORLD";<br>
let char = text.charCodeAt(0);</p>
<h2>JavaScript String Methods</h2>
<p>The charCodeAt() method returns the unicode of the character at a given position in a string:</p>
<p id="demo-twenty-two"></p>
<script>
let text = "HELLO WORLD";
document.getElementById("demo-twenty-two").innerHTML = text.charCodeAt(0);
</script>


<h4>Property Access</h4>
<p>ECMAScript 5 (2009) allows property access [ ] on strings:</p>
<h4>Example</h4>
<p>let text = "HELLO WORLD";<br>
let char = text[0];</p>

<h2>JavaScript String Methods</h2>
<p>ECMAScript 5 allows property access on strings:</p>
<p id="demo-twenty-three"></p>
<script>
var str = "HELLO WORLD";
document.getElementById("demo-twenty-three").innerHTML = str[0];
</script>

<h3>Note</h3>
<p>Property access might be a little unpredictable:<br>
It makes strings look like arrays (but they are not)<br>
If no character is found, [ ] returns undefined, while charAt() returns an empty string.<br>
It is read only. str[0] = "A" gives no error (but does not work!)</p>

<h4>Example</h4>
<p>let text = "HELLO WORLD";<br>
text[0] = "A";    // Gives no error, but does not work</p>

<h2>JavaScript String Methods</h2>
<p>ES5 (2009) allows property acces on strings. But read only:</p>
<p id="demo-twenty-four"></p>
<script>
let text = "HELLO WORLD";
text[0] = "A";  // Does not work
document.getElementById("demo-twenty-four").innerHTML = text;
</script>

<h4>Converting a String to an Array</h4>
<p>If you want to work with a string as an array, you can convert it to an array.</p>

<h4>JavaScript String split()</h4>
<p>A string can be converted to an array with the split() method:</p>

<h4>Example</h4>
<p>text.split(",")    // Split on commas<br>
text.split(" ")    // Split on spaces<br>
text.split("|")    // Split on pipe<br>
</p>

<h2>JavaScript String Methods</h2>
<p>Display the first array element, after a string split:</p>
<p id="demo-twenty-five"></p>
<script>
let text = "a,b,c,d,e,f";
const myArray = text.split(",");
document.getElementById("demo-twenty-five").innerHTML = myArray[0];
</script>

<p>If the separator is omitted, the returned array will contain the whole string in index [0].<br>
If the separator is "", the returned array will be an array of single characters:</p>

<h4>Example</h4>
<p>text.split("")</p>


<h2>JavaScript String Methods</h2>
<p>Using String.split():</p>
<p id="demo-twenty-six"></p>
<script>
let text = "Hello";
const myArr = text.split("");
text = "";
for (let i = 0; i < myArr.length; i++) {
  text += myArr[i] + "<br>"
}
document.getElementById("demo-twenty-six").innerHTML = text;
</script>

<h4>Complete String Reference</h4>
<p>For a complete String reference, go to our:<br>
Complete JavaScript String Reference.<br>
The reference contains descriptions and examples of all string properties and methods.
</p>

<p>Me quedé en JavaScript String Search</p>

</div>
</body>
</html>

<!DOCTYPE html>
<!-- Starts the HTML document and may set its language. -->
<html lang="en">
 <!-- Starts the page's metadata and linked resources. -->
 <head>
  <!-- Defines an HTML element or attribute; check its tag name and values. -->
  <meta charset="utf-8"/>
  <!-- Defines an HTML element or attribute; check its tag name and values. -->
  <title>
   Who am I?
  <!-- Closes the matching HTML element. -->
  </title>
 <!-- Closes the matching HTML element. -->
 </head>
 <!-- Starts the visible page content. -->
 <body>
  <?php require "task05.php"; if (form_is_submitted()) { ?>
  // Displays a heading or paragraph of text.
  <p>
   <?php whoami(); ?>
  // Closes the matching HTML element.
  </p>
  <?php } else { ?>
  // Creates a form for collecting and submitting user input.
  <form method="post">
   // Defines an HTML element or attribute; check its tag name and values.
   <label>
    // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
    Name
    // Creates an input field; its attributes control its type, name, and behavior.
    <input name="name"/>
   // Closes the matching HTML element.
   </label>
   // Defines an HTML element or attribute; check its tag name and values.
   <label>
    // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
    Age
    // Creates an input field; its attributes control its type, name, and behavior.
    <input min="0" name="age" type="number"/>
   // Closes the matching HTML element.
   </label>
   // Defines an HTML element or attribute; check its tag name and values.
   <label>
    // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
    Curriculum
    // Defines an HTML element or attribute; check its tag name and values.
    <select name="curriculum">
     // Defines an HTML element or attribute; check its tag name and values.
     <option value="">
      // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
      Choose
     // Closes the matching HTML element.
     </option>
     // Defines an HTML element or attribute; check its tag name and values.
     <option value="pge">
      // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
      PGE
     // Closes the matching HTML element.
     </option>
     // Defines an HTML element or attribute; check its tag name and values.
     <option value="bachelor">
      // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
      Bachelor
     // Closes the matching HTML element.
     </option>
     // Defines an HTML element or attribute; check its tag name and values.
     <option value="msc">
      // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
      MSc Pro
     // Closes the matching HTML element.
     </option>
     // Defines an HTML element or attribute; check its tag name and values.
     <option value="coding">
      // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
      Coding Academy
     // Closes the matching HTML element.
     </option>
     // Defines an HTML element or attribute; check its tag name and values.
     <option value="wac">
      // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
      Web@cademie
     // Closes the matching HTML element.
     </option>
    // Closes the matching HTML element.
    </select>
   // Closes the matching HTML element.
   </label>
   // Creates a clickable button.
   <button>
    // This line provides a value, expression, markup detail, or part of the surrounding operation; explain it together with the lines immediately above and below.
    Send
   // Closes the matching HTML element.
   </button>
  // Closes the matching HTML element.
  </form>
  <?php } ?>
 // Closes the matching HTML element.
 </body>
// Closes the HTML document.
</html>

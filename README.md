Exceed Static
=============

Static front end for Exceed which is responsive, uses Bootstrap from the ground up and has alot cleaner and D.R.Y markup. Rigorously tested in modern browsers, IE8 and on the iPad.


View separate elements
---------------------
This prototype uses php include, so if you browse /raw/single-views/table.php you will see an include of raw-table.php (just markup) with CSS applied. This is to make it easier to work focused on single elements.

### Modals
To view different modals, just comment / uncomment inside index.php

### KeyMedia dark scale view
Append the class "dark" to the "eze-stack-content" section


Stack animations
---------------------
Set the class "move-in" / "move out" on the last list item in the stack-list to animate. The stack-content will animate itself on load, when going back it should get the class "move-out" and it will animate out.


Includes
---------------------
* New toolbar
    * with icon groups
    * with slide-in quick actions

* Small modals
    * Layout
    * Activity
    * Create content
    * Publish

* Big modal w. stack
    * Attributes edit
    * Sidebar
    * KeyMedia Browse
    * KeyMedia Scale
    * Sitemap
    * Data table

* On page pencils


To-do
---------------------
* Stack autosave indicator and go-back interaction
* User settings modal
* Devices modal
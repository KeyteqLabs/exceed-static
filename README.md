Exceed Static
=============

Static front end for Exceed which uses Bootstrap from the ground up, and has alot cleaner and D.R.Y markup.


View separate elements
---------------------
This prototype uses php include, so if you browse /raw/table.php you will see an include of raw-table.php (just markup) with CSS applied. This is to make it easier to work focused on single elements.


Stack animations
---------------------
Set the class "move-in" / "move out" on the last list item in the stack-list to animate. The stack-content will animate itself on load, when going back it should get the class "move-out" and it will animate out.
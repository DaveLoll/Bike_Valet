# Development Notes
## New Files
When creating a new source file, include a block quote at the top of the document, with the following info:
  - Filename:      filename.php
  - Creator:       Your Name
  - Create Date:   Day of creation in YYYYYMMDD format (e.g., 20170131)
  - Purpose:       Briefly describe what the file does.
  - Log:           Beneath this, enter brief comments descibing what changes have been made to the document, e.g.
                   20171010:     Initial file creation.//ABC (where ABC are your initials).
                   
### For Example
```php
<?php
   /*
      Filename:     index.php
      Creator:      Bobby Dooley
      Create Date:  20171010
      Purpose:      The application's initial page.
      Log:
                    20171010:     Initial file creation.//BD
   */
?>
```
                   
## General Notes
When editing files created by another student **do not** delete code -- if you have to rewrite code, use block comments to disable the old code.

## General Comments
Comment your code. Here's a good reference for commenting code if you need one: https://en.wikipedia.org/wiki/PHPDoc

## Git Commits
Make sure to add meaningful comments to all your Git commits!

## Coding Conventions
The class decided on the following coding conventions, which should be followed by all team members:

  - Class names **and** Controller Names are UpperCamelCase, example: UserControllerClass
  - Method names are lowerCamelCase, example: userControllerMethod()
  - Variable names are lowerCamelCase, example: $userControllerVariable
  - Page names are hypenated, example: user-controller-view-page.blade.php
  - Commit statements will have a small description of what functionality you were working on.
  - Pages will have an added comment at the top of the file when editing those pages as per your suggestion in class Friday.
  - Curly Braces will be on newlines, not cuddled.
  - Constants should be all uppercase, spaces should be underscores - example $_TAX_RATE
  
## Branch Names

   - Please reference Wilson's blog post for guidance on branch names: http://confluence.mccinfo.net/pages/viewrecentblogposts.action?key=OBVA

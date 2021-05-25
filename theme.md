### Theme

#### Features:

- Black and white yearly galleries
  - Galleries can be displayed by selecting FooGallery
  - Gallery settings can be changed at the bottom of the selected gallery 

- Galleries selectable with a dropdown list
  - Code for the dropdown list and gallery display decisions are available when selecting XYZ PHP Code
  - Click the pencil to display code and edit
  
#### Program Page Features

##### Program Page Sidebar
- The program page features a custom sidebar so that it may work separately from the default sidebar if implemented.

###### Customising the Program Page Sidebar
- An additional sidebar is registered in "functions.php" under the "cp3402_2021_team14_theme_widgets_init()" function. The ID for this sidebar is "sidebar-2".
- A secondary sidebar php file allows this sidebar to be called by the page and targeted by CSS. This is titled "sidebar-program.php".
  - The sidebar can be targeted for CSS styling using it's aside ID "program-secondary", or it's unique class "sidebar-program".
  - The current styling for this sidebar can be found in the "_posts-and-pages.scss" file under "site/primary". This styling is what allows it to sit beside the content.
  - On a browser screen less than 720px wide, the sidebar will appear at the top of the page.
- This sidebar is called on the "index.php" page in the "wp-content" directory. As the Index page actually refers to the posts page, this has become the Program page instead of the main page.
  - The sidebar is called at the top of the page using the "get_sidebar()" function. This a default function that will look for what is appended after "sidebar" in the "sidebar-program.php" file name. Thus, the only argument required in this function is "program"
  
#######Index page
- Since the Program page is the posts page, it utilises "index.php" to build the page. 
- An additional class ("site-main-program") has been provided to control the size of the content to allow space for the sidebar. 
  - This allows for page wide styling without affecting the other pages, as they use the default "site-page" class.

##### Festivals Page
- The festivals page uses a shortcode block to action a function titled "festivalPosts".
- The function is programmed to display the most recent post under the "Festival" category.

###### Altering the Festivals Post Function
- The function is found in "functions.php" titled "festivalPost()".
- To alter the number of posts it displays, the "posts_per_page" argument can be changed. It is currently 1.
- The "category_name" argument determines which category the function will look for (currently "festival"). This can be changed if the category name for festival posts in WordPress is changed. 
- If implementing this function for a different page, then copy the existing function and change the "posts_per_page" and "category_name" arguments as appropriate, as well as the function name according to the type of posts it is for. 
- After collecting these two arguments, the function then calls the post template and displays the post as if it were a regular single post.

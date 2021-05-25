## Site Documentation

#### 1. How to change Home page header image

1. Choose a suitable image and make it 4000px wide
2. Appearance/Customize/Header Image and "Add new Image"
3. Upload image and crop height to suitable size then publish
4. Test

---

#### 2. How to remove or add images to current yearly galleries in Our Jazz Club page

1. Log in and open FooGallery/Galleries
2. Select the gallery
   1. Hover over image, select x to remove
   2. Click Add Media button and select or upload preferred image/s and click Add Media again.
   3. The order of images can be changed
3. Click update when gallery is done
4. Test page is correct

---

#### 3a. How to add a new yearly gallery in Our Jazz Club page

1. Log in and open FooGallery/Add New Gallery
2. Give the Gallery a title
3. Settings - General
   1. width 100 height 100
4. Settings - Appearance
   1. Rounded Corners: Small
5. Settings - Hover Effects
   1. Color Effect: Colorize
   2. Icon: None
6. Add images with "Add from Media Library"
7. When finished adding pictures, Publish gallery.
8. Below the Publish button there is a Gallery Shortcode that needs to be placed in the php Shortcode.

#### 3b.How to add Gallery ShortCode to php ShortCode

1. Open XYZ PHP Code/PHPCode Snippets and find link-gallery-to-years Tracking name and click on the pencil icon to edit

2. Copy one of the ''<option value= '' lines of code and insert it at either the top or bottom of the "<option value=" list depending on the year and replace the year value with your year. This will add your year to the drop-down list.

3. If your year is earlier than 2018, you will need to insert an "else if" statement above the "else" statement eg.

   else if($_POST['yearSelect'] == '2017') {

   ```
       echo do_shortcode('[foogallery id="  "]');
   ```

   }

4. The ShortCode id number for your new gallery needs to be added to the above echo command.
5. If your year is later than 2021, you need to put your gallery ShortCode in 2 places
6. Firstly, the 2021 "if" command becomes an "else if" command and the new "if" command will contain your gallery ShortCode
7. Secondly, the "else" command must also contain your gallery ShortCode so the latest gallery opens when page is first accessed
8. Update to save code. This should update the Shortcode in Our Jazz Club page. Test the site.

---

#### 4. Creating a Post

The posts can be found on the 'Program' page and are designed to provide updates and display all past and upcoming events. 

1. In the 'Add New Post' editor, there is the option for re-usable blocks for the following post formats:
	a. Concert advertising post containing an image.
	b. Concert advertising post without an image.
2. Categories for posts include:
	a. Concert advertising post.
	b. Festival advertising post.
	c. Band/s involved in the event.
   
---
   
#### 5. Altering the Custom Sidebar

The custom sidebar on the 'Program' page is designed to sit to the side of the page and feature buttons. It currently features a menu widget displaying a secondary navigation element.

To change the buttons:
1. In the WordPress Admin Panel, go to Appearance > Menus.
2. Select the "Program Sidebar" menu from the drop down list.
3. Any site pages on this list will appear in the sidebar and in the order provided in this menu. 

As this is a standard WordPress Widget sidebar, other widgets can also be added:
1. Ensure you are logged into the Admin panel, and navigate to the Program page to customise it.
2. Open Widgets > Program Sidebar and add any additional widgets. 
   a. Note that on smaller windows this sidebar will appear at the top of the page, so it's best not to make it too long.
			     
---			     
			     
#### 6. Adding a new band to the Bands Landing page

All the bands can be found on the Bands page that is designed to display the bands participating in the Jazz Club.
	
	1. In the 'Page' editor, click on the Bands page and select edit. The Page is divided into two columns (30/70).
		Left column is for Upcoming Events, Right column is for the bands.
	2. Upcoming events column is automatically updated when new posts about events are added on the Programs page.
	3. In the right column, each band is created in a block. Click on "Add block" button, select "Heading" to add the a new band name.
	4. Click on 'Link' on the toolbar to link the heading to the specific band page (if page is already created).
	5. Click on 'Add bblock' again and select 'Paragraph' and list the band members.
	6. Select 'Add block' again to insert an image of the band.		     
	7. Lastly, 'Add block' again, Browse all in the toolbar and select Button to create a button. Type See More in the 
		button and select 'Link' to link the button to the specific band page.	
	8. Update to save changes and refresh site to see changes.		     
	


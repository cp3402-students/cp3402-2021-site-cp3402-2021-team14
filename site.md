## Site Documentation



#### How to change Home page header image

1. Choose a suitable image and make it 4000px wide
2. Appearance/Customize/Header Image and "Add new Image"
3. Upload image and crop to suitable size then publish
4. Test

------

#### How to remove or add images to current yearly galleries in Our Jazz Club page

1. Log in and open FooGallery/Galleries
2. Select the gallery
   1. Hover over image, select x to remove
   2. Click Add Media button and select or upload preferred image/s and click Add Media again.
   3. The order of images can be changed
3. Click update when gallery is done
4. Test page is correct

------

#### How to add a new yearly gallery in Our Jazz Club page

1. Log in and open FooGallery/Add New Gallery
2. Give the Gallery a title
3. Settings - General
   1. width 100  height 100
4. Settings - Appearance
   1. Rounded Corners: Small
5. Settings - Hover Effects
   1. Color Effect: Colorize
   2. Icon: None
6. Add images with "Add from Media Library"
7. When finished adding pictures, Publish gallery.
8. Below the Publish button there is a Gallery Shortcode that needs to be placed in the php Shortcode.

#### How to add Gallery ShortCode to php ShortCode

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
6. Firstly, the 2021"if" command becomes an "else if" command and the new "if" command will contain your gallery ShortCode
7. Secondly, the "else" command must also contain your gallery ShortCode so the latest gallery opens when page is first accessed
8. Update to save code. This should update the Shortcode in Our Jazz Club page. Test the site.

------


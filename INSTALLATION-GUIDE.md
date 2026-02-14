# Casa De La Paz WordPress Theme - Installation & Setup Guide

## 📦 What's Included

Your downloadable WordPress theme package includes:

- **Complete WordPress Theme** with all necessary template files
- **Homepage Design** - Exact replica of your original index.html
- **Custom Page Templates**:
  - About Page
  - Services Page
  - Contact Page
  - Gallery Page
- **Blog Functionality**:
  - Blog Archive (Post listings)
  - Single Post Template
- **All Assets**: CSS, JavaScript, and images
- **Responsive Design** - Works perfectly on mobile, tablet, and desktop
- **Accessibility Features** - WCAG 2.1 compliant

## 🚀 Installation Instructions

### Step 1: Upload the Theme

1. Download the `casadelapaz-theme.zip` file
2. Log in to your WordPress admin panel (usually at yourdomain.com/wp-admin)
3. Navigate to **Appearance → Themes**
4. Click **Add New** at the top
5. Click **Upload Theme**
6. Click **Choose File** and select `casadelapaz-theme.zip`
7. Click **Install Now**
8. Once installed, click **Activate**

### Step 2: Create Required Pages

Create the following pages with their respective templates:

#### 2.1 Create About Page
1. Go to **Pages → Add New**
2. Title: "About" (or "About Us")
3. Add your content in the editor
4. In the right sidebar, under **Page Attributes**, select **Template: About Page**
5. Click **Publish**

#### 2.2 Create Services Page
1. Go to **Pages → Add New**
2. Title: "Services" (or "Our Services")
3. Add any additional service information in the editor (optional)
4. In the right sidebar, select **Template: Services Page**
5. Click **Publish**

#### 2.3 Create Contact Page
1. Go to **Pages → Add New**
2. Title: "Contact" (or "Contact Us")
3. Add any additional information in the editor (optional)
4. In the right sidebar, select **Template: Contact Page**
5. Click **Publish**

#### 2.4 Create Gallery Page
1. Go to **Pages → Add New**
2. Title: "Gallery"
3. To add images, click the **+** icon and add a **Gallery** block
4. Upload and select your images
5. In the right sidebar, select **Template: Gallery Page**
6. Click **Publish**

### Step 3: Set Up Your Homepage

1. Go to **Settings → Reading**
2. Under "Your homepage displays", select **A static page**
3. For "Homepage", select **Home** (or create a new page titled "Home")
4. For "Posts page", create a new page titled "Blog" and select it
5. Click **Save Changes**

> **Note**: The homepage will automatically use the `front-page.php` template which displays the exact design from your original index.html

### Step 4: Configure Navigation Menu

1. Go to **Appearance → Menus**
2. Click **Create a new menu**
3. Name it "Main Menu" and click **Create Menu**
4. On the left side, check the pages you created:
   - Home
   - Services
   - About
   - Gallery
   - Blog
   - Contact
5. Click **Add to Menu**
6. Drag and drop to reorder menu items as desired
7. Under **Menu Settings**, check **Primary Menu**
8. Click **Save Menu**

### Step 5: Upload Your Logo

1. Go to **Appearance → Customize**
2. Click **Site Identity**
3. Click **Select Logo**
4. Upload your logo image (PNG format recommended)
5. Adjust the logo size if needed
6. Click **Publish**

### Step 6: Configure Contact Information

1. Go to **Appearance → Customize**
2. Click **Contact Information**
3. Update the following:
   - Phone Number: (813) 726-4626
   - Email Address: cdpliving@outlook.com
   - Office Hours: Monday - Friday, 9:00 AM - 5:00 PM
4. Click **Publish**

## 📝 Adding Blog Posts

1. Go to **Posts → Add New**
2. Enter your post title
3. Write your content
4. Add a **Featured Image** (this will show in the blog grid and at the top of the post)
5. Select **Categories** and add **Tags** if desired
6. Click **Publish**

Your blog posts will automatically appear on:
- The blog page (archive)
- Category/tag archives
- Individual post pages with beautiful formatting

## 🖼️ Managing the Gallery

### Option 1: Using WordPress Gallery (Recommended)
1. Edit your Gallery page
2. Click the **+** icon to add a block
3. Search for and add a **Gallery** block
4. Click **Upload** or **Media Library** to add images
5. Select multiple images
6. Configure gallery settings (columns, spacing, etc.)
7. Click **Update**

### Option 2: Using Media Library
- Simply upload images to your Media Library
- The gallery page will automatically display them in a grid layout

## 🎨 Customization Options

### Colors
The theme uses a carefully designed color palette. To customize:
1. Go to **Appearance → Customize → Additional CSS**
2. Override CSS variables:
```css
:root {
    --peaceful-blue: #4A90A4;
    --warm-taupe: #8B7E74;
    /* Add more overrides as needed */
}
```

### Fonts
The theme uses:
- **Libre Baskerville** - Headings
- **Open Sans** - Body text
- **Lora** - Accent text

These are loaded from Google Fonts and can be customized in the theme settings.

## 🔌 Recommended Plugins

### Essential Plugins
1. **Contact Form 7** - For the contact form
   - Install from Plugins → Add New
   - After installation, the contact page will work seamlessly

2. **Yoast SEO** - For search engine optimization
   - Helps improve your site's visibility on Google

### Optional Plugins
- **Akismet Anti-Spam** - Spam protection for comments
- **Wordfence Security** - Website security
- **UpdraftPlus** - Backup solution
- **Smush** - Image optimization

## 📱 Widget Areas

The theme includes widget areas in:
- **Sidebar** - For blog posts
- **Footer 1, 2, 3** - Three footer columns

To add widgets:
1. Go to **Appearance → Widgets**
2. Drag widgets to the desired area
3. Configure and save

## 🔧 Troubleshooting

### Homepage not showing correctly?
- Make sure you've set a static page as your homepage (Settings → Reading)
- The front page should use the "Default Template" or no specific template

### Menu not appearing?
- Create a menu and assign it to "Primary Menu" location (Appearance → Menus)

### Images not displaying?
- Check that image files exist in the theme's /assets/img/ folder
- Clear your browser cache

### Contact form not working?
- Install and activate Contact Form 7 plugin
- The theme is pre-configured to work with it

### Styling looks broken?
- Make sure you activated the theme (not just installed it)
- Clear your browser cache and reload
- Check that all theme files were uploaded correctly

## 📞 Support & Updates

For theme support:
- **Email**: cdpliving@outlook.com
- **Phone**: (813) 726-4626
- **Office Hours**: Monday - Friday, 9:00 AM - 5:00 PM

## 🎯 Theme Structure

```
casadelapaz-theme/
├── style.css                 # Theme identification
├── functions.php             # Theme functions and features
├── header.php                # Site header
├── footer.php                # Site footer
├── front-page.php            # Homepage template
├── index.php                 # Blog/archive fallback
├── archive.php               # Blog archive
├── single.php                # Single post template
├── page-about.php            # About page template
├── page-services.php         # Services page template
├── page-contact.php          # Contact page template
├── page-gallery.php          # Gallery page template
├── screenshot.jpg            # Theme preview
├── README.txt                # WordPress theme info
└── assets/
    ├── css/
    │   └── style.css         # Main stylesheet
    ├── js/
    │   └── script.js         # JavaScript functionality
    └── img/
        ├── CasaDeLaPaz.png   # Logo
        ├── casa1.jpeg        # House photo
        └── care.jpeg         # Background image
```

## ✅ Checklist After Installation

- [ ] Theme activated
- [ ] Logo uploaded
- [ ] All pages created (About, Services, Contact, Gallery)
- [ ] Page templates assigned correctly
- [ ] Static homepage set (Settings → Reading)
- [ ] Navigation menu created and assigned
- [ ] Contact information updated (Appearance → Customize)
- [ ] Test all page links
- [ ] Add at least one blog post
- [ ] Upload gallery images
- [ ] Install Contact Form 7 plugin
- [ ] Test contact form
- [ ] Check mobile responsiveness
- [ ] Test on different browsers

## 🌟 Tips for Success

1. **Use High-Quality Images** - Upload images at least 1200px wide for best results
2. **Write Good Content** - Fill in your About and Services pages with compelling content
3. **Regular Updates** - Post blog updates regularly to keep your site fresh
4. **Backup Regularly** - Use a backup plugin to protect your content
5. **Mobile Testing** - Always check how your site looks on mobile devices
6. **SEO Optimization** - Install Yoast SEO and optimize your pages

## 📄 License

This theme is released under the GPL v2 or later license.
You are free to use, modify, and distribute this theme.

---

**Congratulations!** Your Casa De La Paz WordPress theme is ready to go. If you have any questions or need assistance, don't hesitate to reach out to the support contacts listed above.

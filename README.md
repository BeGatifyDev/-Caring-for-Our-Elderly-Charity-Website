# 🤝 Caring for Our Elderly – Charity Website

This repository contains the **custom WordPress theme** for a non-profit **Charity Website**  
designed to support the elderly by showcasing programs, encouraging donations, and engaging the community.

---

## 🌟 Project Overview
The **Caring for Our Elderly** website is a modern, responsive, and user-friendly platform  
created to raise awareness and provide information about charitable activities.  
It highlights key programs, offers easy navigation for donors and volunteers,  
and presents the organization’s mission with professionalism and clarity.

---

## ✨ Key Features
- **Custom WordPress Theme** – Built from scratch for speed and flexibility (no page builders).
- **Responsive Layout** – Seamless experience across desktops, tablets, and mobile devices.
- **Hero Section** – Eye-catching introduction with a call-to-action.
- **Programs Section** – Showcases the charity’s initiatives in an organized grid.
- **About Us & Contact Pages** – Dedicated pages for mission statements and communication.
- **Social Media Integration** – Links to Facebook, Instagram, and Twitter.
- **SEO-Friendly** – Clean code structure for improved search engine visibility.

---

## 🛠️ Tech Stack
- **WordPress (PHP)** – Content Management System (CMS).
- **Twig** – Template engine for clean and reusable markup.
- **SCSS/CSS3** – Modern styling with maintainable code.
- **JavaScript (ES6)** – Interactive features and UI enhancements.
- **Git/GitHub** – Version control and collaborative development

- 
## ⚡ Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/BeGatifyDev/charity-website.git
Upload the theme folder to:

bash
Copy code
/wp-content/themes/
Activate the theme in the WordPress Dashboard → Appearance → Themes.

Create required pages:

Home

About Us

Programs

Contact Us

Assign these pages to the theme’s custom templates where applicable.

🌱 Development
Navigate to the theme folder:

bash
Copy code
cd wp-content/themes/charity-theme
If using SCSS, run your preferred build/watch tool to compile SCSS into CSS:

bash
Copy code
npm run watch   # Example if using npm
Commit and push changes using Git:

bash
Copy code
git add .
git commit -m "Initial theme setup"
git push origin main
🔧 Customization
Update functions.php to modify menus, widgets, and custom features.

Replace placeholder text/images inside the assets/images/ directory.

Edit home.twig, about.twig, and other template files to match new content.

🔒 Important Notes
Do not push WordPress core files or sensitive database details to GitHub.

Add a .gitignore to exclude:

bash
Copy code
/wp-content/uploads/
/node_modules/
/vendor/
wp-config.php
Backup your database regularly when working in production.



👨‍💻 Author
Oluwafemi Oluwatobi Best
GitHub: @BeGatifyDev
Business/Organization: Caring for Our Elderly

💡 Deployment Tips
Push only the theme folder, not the entire WordPress installation.

Use GitHub Actions or FTP for deploying to live servers.

Keep a staging environment for testing before live updates.

# Deployment and Development Workflow for Baizonn

## Local Development Environment
1. **Clone the Repository**:  
- Clone the theme repository from GitHub by clicking the code button and copying the web URL.
- Paste this URL into Terminal:
-  git clone https://github.com/your-repository.git

2. **Set Up WordPress Locally**:  
- Download and install a local development environment such as XAMPP or Local by Flywheel. Set up WordPress on your local server, ensuring the theme directory points to your local theme.

3. **Install Plugins**:  
- Ensure the 'Contact Form 7' plugin is installed for the website's functionality to be activated.

4. **Development**:  
Develop locally by editing the theme files. All changes made in the theme directory should be committed using Git.  
a) git add .  
b) git commit -m "Describe the change/s"  
c) git push origin backup-branch  

NOTE: If there is no 'backup-branch', create one by 'git branch backup-branch'

## Testing and Staging
1. **Push to Staging**:  
After committing changes locally, push the updates to the staging branch of the GitHub repository.

2. **Test Changes**:  
Test all theme functionalities in the staging environment (e.g., links, contact forms, media).

## Production Deployment
1. **Deploy to Production**:  
Once testing is complete and the outcome is expected, deploy the site to the live environment. Ensure that all assets are optimised and the site performs well on all devices.

2. **Database Updates**:  
If changes require updating database content (such as adding new pages or posts), make sure those are updated in both staging and production sites.

## Automation and Version Control
- Version control is managed using Git, with commits made for each feature added or bug fixed.
- The CI/CD pipeline can be set up to automatically deploy changes from the staging to production environments, ensuring smooth updates.

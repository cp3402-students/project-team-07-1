# Deployment - Team 7 (Semester 1, 2023)

# Project Management

We used a popular Project Management tool called "Trello" to delegate tasks and organize what tasks were undone, had to be done next, being worked on, and completed.
Once a task is moved to the "Next actions" tab, it's then assigned to each user, and then additional details that were relevant to the assigned task will be appended on.

Our method of communication is Discord, where we'd organize meetings, discuss our work, and any other need to communicate between members.

# Version Control

For all version control, we used Git for coordinated work among our team, and used the remote git server software, GitHub.
For local management of the Git Repository, we use GitHub desktop to assist with automating repository management, and for comparing your repository to the online repository.
Any initial changes will be pushed to the "Local" branch, before being tested, and then merging into the "Main" branch.

## Initial Setup

If you're setting up the repository locally for the first time, and you're not using GitHub Desktop, follow these steps:
 1. Assign your directory for where you'll be working on Wordpress locally via `cd <folder-location>`
 2. To pull the Local repository enter `git clone https://github.com/cp3402-students/project-team-07.git --branch <branch> `.
   - Replace <branch> with 'local' if you're working on the local branch, and with 'main' if you're working on the main branch.

## Pulling from Repository

To pull from the repository, you can easily use GitHub Desktop's GUI to simplify the process. If you want to use GIT, follow these steps:
 1. Enter `git log` to check the latests commits to the repository.
 2. If your local environment isn't up-to-date, enter `git fetch` then `git pull` to update your local files

## Pushing to Repository

To push to the repository, you can easily use GitHub Desktop's GUI to simplify the process. If you want to use GIT, follow these steps:
 1. To commit your work, enter `git commit -m "ENTER COMMIT MESSAGE HERE"`.
 2. Now you need to push it to the repository. Enter in `git push <branch>`
   - Replace <branch> with 'local' if you're working on the local branch, and with 'main' if you're working on the main branch.

# Testing

For testing any changes, our workflow follows this guideline:
 - Local Testing
   - Ensure your Local Environment is up-to-date with the repository before working.
   - Make any developments on the Local Environment.
   - Test any changes you've made via opening your browser to LocalHost.
   - Once you're satisfied with your developments, push to the "Local" branch of the GitHub Repository.

 - Staging Testing
   - When you've made any changes to the Local Branch, it must then be tested on an online site, but not a publically-available site.
   - Navigate to Hostinger's backend, then to the Git tab under "Advanced" and deploy the updates from your "Local" branch repository into its file server.
   - Once the deployment is complete, you'll have to manually copy the files from your downloaded repository to the Wordpress folder, over-writing files with the updated files.
   - Assess the changes that you've made from the local environment, and compare to see if there's any fault.
   - If there's any issue, or if there's any changes you want to make, start over from the top of the guideline.
   - Once testing is complete, and you are satisfied, you can merge all changes into the "Main" branch.

 - Production Site
   - The process of deploying the repository to the production site is identical to the staging site, with the only difference being that it deploys from the 'main' branch instead of 'local'.

